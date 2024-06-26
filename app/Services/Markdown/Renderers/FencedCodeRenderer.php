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

namespace App\Services\Markdown\Renderers;

use App\Services\Markdown\ShikiHighlighter;
use League\CommonMark\Extension\CommonMark\Node\Block\FencedCode;
use League\CommonMark\Extension\CommonMark\Renderer\Block\FencedCodeRenderer as BaseFencedCodeRenderer;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use League\CommonMark\Util\Xml;

class FencedCodeRenderer implements NodeRendererInterface
{
    public function __construct(
        protected ShikiHighlighter $highlighter,
        protected BaseFencedCodeRenderer $baseRenderer = new BaseFencedCodeRenderer(),
    ) {}

    public function render(
        Node $node,
        ChildNodeRendererInterface $childRenderer,
    ): string {
        /** @var FencedCode $n */
        $n = $node;
        $element = $this->baseRenderer->render(
            $n,
            $childRenderer,
        );

        $element->setContents(
            $this->highlighter->highlight(
                $element->getContents(),
                $this->getSpecifiedLanguage($n),
            ),
        );

        return $element->getContents();
    }

    protected function getSpecifiedLanguage(FencedCode $block): ?string
    {
        $infoWords = $block->getInfoWords();
        if (empty($infoWords) || empty($infoWords[0])) {
            return null;
        }
        return Xml::escape($infoWords[0]);
    }
}
