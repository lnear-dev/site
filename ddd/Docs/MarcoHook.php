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

namespace Docs;

use Lame\Marco\Data\Manager as Marco;

class MarcoHook
{
    public function __invoke(string $content)
    {
        return self::replacePlaceholderWithColors(
            self::replacePlaceholderWithPatterns(
                str_replace('[[toc]]', '', $content),
            ),
        );
    }

    private static function replacePlaceholderWithColors(string $content)
    {
        $replacement = '';
        foreach (Marco::expectedColors() as $key => $color) {
            $replacement .= "<div style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;\">
            <h4>{$key}</h4>
            <div style=\"background-color: {$color}; width: 100px; height: 50px;\"></div>
            </div>\n";
        }
        return str_replace('{!!colors!!}', $replacement, $content);
    }

    private static function replacePlaceholderWithPatterns(string $content)
    {
        $replacement = '';
        foreach (Marco::expectedPatterns() as $key => $pattern) {
            $replacement .= "#### `{$key}`\n```css\n{$pattern}\n```\n";
        }
        return str_replace('{!!patterns!!}', $replacement, $content);
    }
}
