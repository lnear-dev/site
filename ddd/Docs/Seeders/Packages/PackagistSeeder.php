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

namespace Docs\Seeders\Packages;

use Docs\Models\Package;
use Docs\Models\PackageVersion;
use Docs\Services\Packages\PackagistService;
use Illuminate\Support\Facades\Http;
use Str;

class PackagistSeeder extends Seeder
{
    public function run(PackagistService $packagistService): void
    {
        foreach ($packagistService->getPackages() as $package) {
            [$packageName, $packageDescription, $packageRepository] = [$package['name'], $package['description'], $package['repository']];
            if (Package::where('url', $url = $packagistService->getPackageUrl($packageName))->exists()) {
                dump("{$packageName} already exists, skipping...");
                continue;
            }
            dump("Processing {$packageName}...");
            $packageDetails = $packagistService->getPackageDetails($packageName);
            $name = str_replace('lnear/', '', $packageDetails['name']);
            $language = 'PHP';
            $package = Package::create([
                'name' => $name,
                'language' => $language,
                'slug' => Str::slug("{$language} {$name}"),
                'url' => $url,
                'github_url' => $packageRepository,
                'description' => $packageDescription,
            ]);
            $r = Http::get(str_replace('github.com', 'raw.githubusercontent.com', $packageDetails['repository']) . '/master/README.md')->body();
            foreach ($packageDetails['versions'] as $version => $details) {
                \Docs\Domain::writeDocs($package, $version, $r, $details);
                PackageVersion::create([
                    'package_id' => $package->id,
                    'version' => $version,
                    'download_url' => $details['dist']['url'],
                ]);
            }
        }
    }
}
