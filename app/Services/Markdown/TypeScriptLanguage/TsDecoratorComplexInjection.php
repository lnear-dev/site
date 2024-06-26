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

namespace App\Services\Markdown\TypeScriptLanguage;

use Tempest\Highlight\Escape;
use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Injection;
use Tempest\Highlight\IsInjection;
use Tempest\Highlight\Tokens\TokenTypeEnum;

final readonly class TsDecoratorComplexInjection implements Injection
{
    use IsInjection;

    public function getPattern(): string
    {
        return '(?<match>@[\w]+\((.|\n)*?\))';
    }

    public function parseContent(string $content, Highlighter $highlighter): string
    {
        $theme = $highlighter->getTheme();

        $parsed = '@' . $highlighter->parse(str_replace(['@', ')'], '', $content), 'ts') . ')';

        return Escape::injection(
            Escape::tokens($theme->before(TokenTypeEnum::ATTRIBUTE))
            . $parsed
            . Escape::tokens($theme->after(TokenTypeEnum::ATTRIBUTE))
        );
    }
}
