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

final readonly class TsGenericTypeInjection implements Injection
{
    use IsInjection;

    public function getPattern(): string
    {
        // Pattern to match generics in TypeScript, such as <T> or <T, U>
        return '(?<match><[\w\s,]+>)';
    }

    public function parseContent(string $content, Highlighter $highlighter): string
    {
        $theme = $highlighter->getTheme();

        // Match generic type parameters within angle brackets
        preg_match_all('/<(?<match>[\w\s,]+)>/', $content, $genericMatches);

        foreach ($genericMatches['match'] as $genericMatch) {
            $types = explode(',', $genericMatch);
            foreach ($types as $type) {
                $trimmedType = trim($type);
                $content = preg_replace(
                    '/\b' . preg_quote($trimmedType, '/') . '\b/',
                    implode('', [
                        Escape::tokens($theme->before(TokenTypeEnum::GENERIC)),
                        $trimmedType,
                        Escape::tokens($theme->after(TokenTypeEnum::GENERIC)),
                    ]),
                    $content,
                );
            }
        }

        return $content;
    }
}
