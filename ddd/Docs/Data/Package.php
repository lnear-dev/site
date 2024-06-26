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

namespace Docs\Data;

use App\Util\Icons;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class Package extends Data
{
    public string $icon;

    public string $docs;

    public function __construct(
        public Language $language,
        public string $url,
        public string $name,
        /**
         * @var Collection<int, Version>
         */
        public Collection $versions,
    ) {
        $this->icon = Icons::get($language->name);
        $this->docs = route('docs.package', ['language' => "{$this->language}", 'package' => $this->name]);
    }
}
