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

namespace App\Services\Sync;

use Docs\Data\Package as PackageData;
use Docs\Models\Package;

class Packages
{
    public function __construct(
        private string $destFile = '',
    ) {
        if (empty($this->destFile)) {
            $this->destFile = resource_path('ts/data/packages.json');
        }
    }

    public function __invoke(): void
    {
        // file_put_contents(resource_path('ts/data/packages.json'), Package::with('versions')->get()->toJson(JSON_PRETTY_PRINT));
        $packages = Package::with('versions')->get();
        $packagesData = PackageData::collect(Package::with('versions')->get());
    }
}
