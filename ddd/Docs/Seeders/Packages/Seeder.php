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
use Illuminate\Support\Facades\Storage;

abstract class Seeder extends \Illuminate\Database\Seeder
{
    protected function createDocs(
        Package $package,
        string $version,
        string $content,
        array $_details,
    ): void {
        $fs = Storage::disk('public');
        $v = str_replace('.', '_', $version);
        $path = "docs/{$package->language}/{$package->name}/{$v}.md";
        $name = "{$package->name} {$version} docs";
        if ($fs->exists($path)) {
            dump("{$name} already exist, skipping...");
            return;
        }
        $fs->put($path, $content);
        dump("{$name} created successfully");
    }
}
