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

use Illuminate\Support\Str;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use League\CommonMark\Util\HtmlElement;

class AnchorHeadingRenderer implements NodeRendererInterface
{
    public function __construct(
        protected bool $renderAnchorsAsLinks = false,
    ) {}

    public function render(Node $node, ChildNodeRendererInterface $childRenderer)
    {
        $element = $this->createElement($node, $childRenderer);
        $id = Str::slug($element->getContents());
        if (! $this->renderAnchorsAsLinks) {
            $element->setAttribute('id', $id);
            return $element;
        }
        return new HtmlElement(
            'a',
            ['href' => "#{$id}"],
            "<h{$node->getLevel()} id='{$id}'>{$element->getContents()}</h{$node->getLevel()}>",
        );
    }

    protected function createElement(Node $node, ChildNodeRendererInterface $childRenderer): HtmlElement
    {
        $tagName = "h{$node->getLevel()}";

        $attrs = $node->data->get('attributes', []);

        return new HtmlElement($tagName, $attrs, $childRenderer->renderNodes($node->children()));
    }
}
