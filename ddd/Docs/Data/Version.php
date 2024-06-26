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

use Docs\Models\PackageVersion;
use Spatie\LaravelData\Data;

// semver version object/helper
final class Version extends Data
{
    private readonly int $major;

    private readonly int $minor;

    private readonly int $patch;

    private bool $isSemver = true;

    public function __construct(
        public string $string,
    ) {
        $plode = explode('.', $string);
        if (count($plode) !== 3) {
            $this->isSemver = false;
        } else {
            [$major, $minor, $patch] = $plode;
            [$this->major, $this->minor, $this->patch] = [(int) $major, (int) $minor, (int) $patch];
            if ($this->major < 0 || $this->minor < 0 || $this->patch < 0) {
                $this->isSemver = false;
            } else {
                $this->string = "{$this->major}.{$this->minor}.{$this->patch}";
            }
        }
    }

    public function __toString()
    {
        return $this->string;
    }

    public static function fromString(string $versionString)
    {
        return new self($versionString);
    }

    public static function fromModel(PackageVersion $packageVersion)
    {
        return new self($packageVersion->version);
    }
}
