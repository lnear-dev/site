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

namespace Docs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $connection = 'docs';

    protected $guarded = [];

    public function versions()
    {
        return $this->hasMany(PackageVersion::class)->orderBy('version', 'desc');
    }

    public function docs()
    {
        return $this->hasManyThrough(Doc::class, PackageVersion::class);
    }

    public function languageIs(string $language)
    {
        return strtolower($this->language) === strtolower($language);
    }

    public function latestVersion(): ?PackageVersion
    {
        return $this->versions->first();
    }

    public function versionOrLatest($version)
    {
        return $this->versions->where('version', $version)->first() ?? $this->latestVersion();
    }

    public function latestDocs()
    {
        return $this->docs()->where('package_versions.version', $this->latestVersion()->version);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function getViewPathParts(?PackageVersion $version = null)
    {
        return [
            'docs',
            strtolower($this->language),
            $this->name,
            $version ? $version->escape() : $this->latestVersion()->escape(),
        ];
    }

    public function getViewName(?PackageVersion $version = null)
    {
        return implode('.', $this->getViewPathParts($version));
    }

    public function getLatestDocsPath()
    {
        return implode('/', $this->getViewPathParts());
    }

    public function getLatestDocsUrl()
    {
        return url($this->getLatestDocsPath());
    }

    public function getLatestDocsFilePath()
    {
        return storage_path("app/public/{$this->getLatestDocsPath()}.md");
    }
}
