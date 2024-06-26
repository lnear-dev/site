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
 * @see     https://lnear.dev
 * @contact  hi@lnear.dev
 */

namespace App\Console\Commands;

use Docs\Data\Package as PackageData;
use Docs\Models\Package;
use Illuminate\Console\Command;

class SyncPackages extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'packages:sync';

    /**
     * The console command description.
     */
    protected $description = 'Sync packages from the docs site.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        file_put_contents(resource_path('ts/data/packages.json'), PackageData::collect(Package::with('versions')->get())->toJson(JSON_PRETTY_PRINT));
        $this->info('Packages synced.');
    }
}
