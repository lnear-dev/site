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

namespace App\UI;

class Menu
{
    public const DOMAINS = [
        'ascii',
        'blog',
        'docs',
        // "gists",
        // "links",
        'shuffle',
    ];

    public const FOOTER = [
        [
            'title' => 'Contact',
            'link' => '/contact',
        ],
        [
            'title' => 'Privacy Policy',
            'link' => '/privacy-policy',
        ],
        [
            'title' => 'Terms of Service',
            'link' => '/terms-of-service',
        ],
    ];

    public const kData = [
        'header' => self::HEADER,
        'footer' => self::FOOTER,
    ];

    private function __construct(
    ) {}

    public static function toJson(): string
    {
        return json_encode(self::kData, JSON_PRETTY_PRINT);
    }
}
