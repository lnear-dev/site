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

class NPMService implements Service
{
    public function getPackages(): array
    {
        // return self::get('-/v1/search?text=scope:lnear')['objects'];
        // return self::get('search?q=scope:lnear')->collect('objects')->merge(self::get('search?q=scope:laravel'))->toArray();
        return collect([
            '?text=scope:lnear',
            '?text=author:lnearwaju',
        ])->map(fn ($query) => self::get("-/v1/search{$query}")->json()['objects'])->flatten(1)->filter(fn ($package) => $package['package']['name'] !== 'lnear.dev')->toArray();
    }

    public function getPackageUrl(string $packageName): string
    {
        return "https://www.npmjs.com/package/{$packageName}";
    }

    public function getPackageDetails(string $packageName): array
    {
        return self::get($packageName)->json();
    }

    private static function get(string $path)
    {
        return Http::get("https://registry.npmjs.org/{$path}");
    }
}
