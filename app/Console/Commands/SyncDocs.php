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

use Illuminate\Console\Command;

class SyncDocs extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'docs:sync';

    /**
     * The console command description.
     */
    protected $description = 'Sync generate html and pulled markdowns for the docs site.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->call('db:seed', ['--class' => 'Docs\Seeders\Packages\NPMSeeder']);
        $this->call('db:seed', ['--class' => 'Docs\Seeders\Packages\PackagistSeeder']);
        $this->info('Docs pulled.');
    }
}
