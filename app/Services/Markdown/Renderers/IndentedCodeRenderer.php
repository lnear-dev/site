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
use League\CommonMark\Extension\CommonMark\Renderer\Block\IndentedCodeRenderer as BaseIndentedCodeRenderer;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;

class IndentedCodeRenderer implements NodeRendererInterface
{
    public function __construct(
        protected ShikiHighlighter $highlighter,
        protected BaseIndentedCodeRenderer $baseRenderer = new BaseIndentedCodeRenderer(),
    ) {}

    public function render(
        Node $node,
        ChildNodeRendererInterface $childRenderer,
    ): string {
        $element = $this->baseRenderer->render($node, $childRenderer);
        $element->setContents(
            $this->highlighter->highlight($element->getContents()),
        );
        return $element->getContents();
    }
}
