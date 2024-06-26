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

namespace ASCII;

class Domain extends \Domain
{
    public const kName = 'ascii';

    public const kDir = __DIR__;

    public static function all()
    {
        $a = require_once __DIR__ . '/all.php';
        return $a;
    }

    public static function random()
    {
        $all = self::all();
        return $all[array_rand($all)];
    }

    public static function card(string $art)
    {
        return div(
            pre(
                code($art),
                style: 'width: 50%;',
            ),
            class: 'card',
        );
    }

    public static function allCards()
    {
        return collect(self::all())->map(
            fn ($art) => self::card($art),
        )->join('');
    }

    public static function routes()
    {
        return self::router(
            fn () => self::landingView(
                'ASCII',
                'Welcome to my blog. Here you can find all my articles.',
                self::allCards(),
            ),
            [
                '/random' => fn () => self::random(),
            ],
        );
    }
}
