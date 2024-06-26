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

namespace Docs\Services\Packages;

use Illuminate\Support\Facades\Http;

class PackagistService implements Service
{
    public function getPackages(): array
    {
        return self::get('users/lnear/packages.json', 'packages');
    }

    public function getPackageDetails(string $packageName): array
    {
        return self::get("packages/{$packageName}.json", 'package');
    }

    public function getPackageUrl(string $packageName): string
    {
        return "https://packagist.org/packages/{$packageName}";
    }

    private static function get(string $path, string $key): mixed
    {
        return Http::get("https://packagist.org/{$path}")->json($key);
    }
}
