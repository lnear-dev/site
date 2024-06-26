<?php
/**
 * This file is part lnear.dev.
 *
 * (c) 2024 Lanre Ajao(lnear)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * .........<-..(`-')_..(`-').._(`-').._....(`-').
 * ...<-.......\(.OO).).(.OO).-/(OO.).-/.<-.(OO.).
 * .,--..)..,--./.,--/.(,------./.,---...,------,)
 * .|..(`-')|...\.|..|..|...---'|.\./`.\.|.../`..'
 * .|..|OO.)|....'|..|)(|..'--..'-'|_.'.||..|_.'.|
 * (|..'__.||..|\....|..|...--'(|...-...||.......'
 * .|.....|'|..|.\...|..|..`---.|..|.|..||..|\..\.
 * .`-----'.`--'..`--'..`------'`--'.`--'`--'.'--'
 * @link     https://lnear.dev
 * @contact  hi@lnear.dev
 */

namespace App\Services\Markdown;

use League\CommonMark\Environment\Environment;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\Autolink\AutolinkExtension;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Extension\FrontMatter\FrontMatterExtension;
use League\CommonMark\Extension\FrontMatter\Output\RenderedContentWithFrontMatter;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
use League\CommonMark\Extension\Strikethrough\StrikethroughExtension;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\Extension\TableOfContents\TableOfContentsExtension;
use League\CommonMark\Extension\TaskList\TaskListExtension;
use League\CommonMark\MarkdownConverter;
use League\CommonMark\Renderer\NodeRendererInterface;
use Tempest\Highlight\CommonMark\HighlightExtension;
use Tempest\Highlight\Highlighter;

class MarkdownRenderer
{
    public array $frontMatter = [];

    public function __construct(
        protected array $commonmarkOptions = [
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
            'table_of_contents' => [
                'html_class' => 'table-of-contents',
                'position' => 'top',
                'style' => 'bullet',
                'min_heading_level' => 1,
                'max_heading_level' => 6,
                'normalize' => 'relative',
                'placeholder' => null,
            ],
        ],
        protected bool $highlightCode = true,
        protected string $highlightTheme = 'github-light',
        protected null|bool|string $cacheStoreName = null,
        protected bool $renderAnchors = true,
        protected bool $renderAnchorsAsLinks = false,
        protected array $extensions = [],
        protected array $blockRenderers = [],
        protected array $inlineRenderers = [],
        protected array $inlineParsers = [],
        protected null|int $cacheDuration = null,
    ) {}

    public function __invoke(string $markdown): string
    {
        return $this->toHtml($markdown);
    }

    public function addExtension(ExtensionInterface $extension): self
    {
        $this->extensions[] = $extension;
        return $this;
    }

    public function addBlockRenderer(string $blockClass, NodeRendererInterface $blockRenderer, ?int $priority = 0): self
    {
        $this->blockRenderers[] = ['class' => $blockClass, 'renderer' => $blockRenderer, 'priority' => $priority];

        return $this;
    }

    public function addInlineRenderer(string $inlineClass, NodeRendererInterface $inlineRenderer, ?int $priority = 0): self
    {
        $this->inlineRenderers[] = ['class' => $inlineClass, 'renderer' => $inlineRenderer, 'priority' => $priority];

        return $this;
    }

    public function toHtml(string $markdown): string
    {
        if ($this->cacheStoreName === false) {
            return $this->convertMarkdownToHtml($markdown);
        }

        $cacheKey = $this->getCacheKey($markdown);
        if ($this->cacheDuration === null) {
            return cache()
                ->store($this->cacheStoreName)
                ->rememberForever($cacheKey, function () use ($markdown) {
                    return $this->convertMarkdownToHtml($markdown);
                });
        }
        return cache()
            ->store($this->cacheStoreName)
            ->remember($cacheKey, $this->cacheDuration, function () use ($markdown) {
                return $this->convertMarkdownToHtml($markdown);
            });
    }

    public function withMatter(string $markdown): array
    {
        $out = $this->convertMarkdown($markdown);
        return [$out, $this->frontMatter];
    }

    protected function getCacheKey(string $markdown): string
    {
        $options = json_encode([
            'theme' => $this->highlightTheme,
            'render_anchors' => $this->renderAnchors,
            'commonmark_options' => $this->commonmarkOptions,
        ]);

        return md5("markdown{$markdown}{$options}");
    }

    protected function convertMarkdown(string $markdown)
    {
        $result = $this->getMarkdownConverter()->convert($markdown);
        if ($result instanceof RenderedContentWithFrontMatter) {
            $this->frontMatter = $result->getFrontMatter();
        }
        return $result;
    }

    protected function convertMarkdownToHtml(string $markdown): string
    {
        return $this->convertMarkdown($markdown)->getContent();
    }

    protected function getClassInstance($class)
    {
        return (is_string($class) && class_exists($class)) ? new $class() : $class;
    }

    protected function configureCommonMarkEnvironment(EnvironmentBuilderInterface $environment): EnvironmentBuilderInterface
    {
        $environment->addExtension(new CommonMarkCoreExtension())
            ->addExtension(new FrontMatterExtension())
            ->addExtension(new AutolinkExtension())
            ->addExtension(new StrikethroughExtension())
            ->addExtension(new TableExtension())
            ->addExtension(new TaskListExtension())
            ->addExtension(new HeadingPermalinkExtension())
            ->addExtension(
                new HighlightExtension((new Highlighter())->addLanguage(new TypeScriptLanguage())),
            )
            ->addExtension(new TableOfContentsExtension());
        foreach ($this->extensions as $extension) {
            $environment->addExtension($this->getClassInstance($extension));
        }

        foreach ([...$this->blockRenderers, ...$this->inlineRenderers] as $r) {
            $environment->addRenderer($r['class'], $this->getClassInstance($r['renderer']), $r['priority'] ?? 0);
        }

        foreach ($this->inlineParsers as $p) {
            $environment->addInlineParser($this->getClassInstance($p['parser']), $p['priority'] ?? 0);
        }

        return $environment;
    }

    private function getMarkdownConverter(): MarkdownConverter
    {
        $commonmarkOptions = $this->commonmarkOptions;

        if (isset($commonmarkOptions['embed'])) {
            $commonmarkOptions['embed']['adapter'] = $this->getClassInstance($commonmarkOptions['embed']['adapter']);
        }

        foreach ($commonmarkOptions['embeds'] ?? [] as $i => $embed) {
            $commonmarkOptions['embeds'][$i] = $this->getClassInstance($embed);
        }

        return new MarkdownConverter(
            environment: $this->configureCommonMarkEnvironment(new Environment($commonmarkOptions)),
        );
    }
}
