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
use Docs\Services\Packages\NPMService;
use Str;

class NPMSeeder extends Seeder
{
    public function run(NPMService $npmService): void
    {
        foreach ($npmService->getPackages() as $package) {
            $packageName = $package['package']['name'];
            // if (Package::where('name', str_replace('@lnear/', '', $packageName))->exists()) {
            if (Package::where('url', $url = $npmService->getPackageUrl($packageName))->exists()) {
                dump("{$packageName} already exists, skipping...");
                continue;
            }
            dump("Processing {$packageName}...");
            $packageDetails = $npmService->getPackageDetails($packageName);
            $name = str_replace('@lnear/', '', $packageDetails['name']);
            $language = 'TypeScript';
            $package = Package::create([
                'name' => $name,
                'language' => $language,
                'slug' => Str::slug("{$language} {$name}"),
                'url' => $url,
                'github_url' => $packageDetails['repository']['url'] ?? null,
                'description' => $packageDetails['description'] ?? null,
            ]);
            $r = $packageDetails['readme'];
            foreach ($packageDetails['versions'] as $version => $details) {
                \Docs\Domain::writeDocs($package, $version, $r, $details);
                PackageVersion::create([
                    'package_id' => $package->id,
                    'version' => $version,
                    'download_url' => $details['dist']['tarball'],
                ]);
            }
        }
    }
}
