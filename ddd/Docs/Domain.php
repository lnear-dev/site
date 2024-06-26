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

namespace Docs;

use App\Util\Icons;
use Docs\Models\Package as PackageModel;
use Exception;

class Domain extends \Domain
{
    public const kName = 'docs';

    public const kDir = __DIR__;

    public static function routes()
    {
        return static::router(
            fn () => self::landingView(
                'Lnear Docs',
                'Here you can find all the information related to all my packages.',
                self::allCards(),
            ),
            [
                '/{language}/{package}/{version?}' => [self::viewOr404(...), 'package'],
            ],
        );
    }

    public static function all()
    {
        return PackageModel::all();
    }

    public static function exists($package)
    {
        return PackageModel::where('name', $package)->exists();
    }

    public static function viewOr404(
        string $language,
        string $current,
        string $version = 'latest',
    ) {
        // dump("viewOr404 {$language} {$current} {$version}");
        $m = PackageModel::where([
            ['name', '=', $current],
            ['language', '=', $language],
        ])->firstOrFail();
        $packages = self::all()->pluck('name')->toArray();
        array_unshift($packages, '..');
        return view(
            $m->getViewName($m->versionOrLatest($version)),
            compact('packages', 'current', 'version'),
        );
    }

    public static function format(
        PackageModel $package,
        string $version,
        string $content,
    ) {
        dump("formatting {$package->name} version {$version}");
        return match ($package->name) {
            'marco' => (new MarcoHook())($content),
            default => $content,
        };
    }

    public static function writeDocs(PackageModel $package, string $version, string $content, array $details): void
    {
        $path = implode('/', [
            'docs',
            $package->language,
            $package->name,
            str_replace('.', '_', $version),
        ]);
        self::writeBlade(
            file: resource_path("views/{$path}.blade.php"),
            contents: self::writeMarkdown(
                $package,
                $version,
                self::format($package, $version, $content),
                "{$path}.md",
            ),
        );
    }

    public static function card(PackageModel $package)
    {
        return \html\a(
            [
                h2(ucfirst($package->name) . Icons::get($package->language)),
                \html\p($package->description ?: 'No description provided.' . Icons::get('github')),
                \html\p("Version: {$package->latestVersion()}"),
            ],
            // href: "/{$package->name}",
            href: route('docs.package', ['language' => $package->language, 'package' => $package->name]),
            class: 'card',
        );
    }

    public static function allCards()
    {
        return self::all()->map(fn ($p) => self::card($p))->join('');
    }

    public static function cardsForLanguage($language)
    {
        return self::all()->filter(fn ($p) => $p->language === $language)->map(fn ($p) => self::card($p))->join('');
    }

    public static function contents($package)
    {
        if (! self::exists($package)) {
            throw new Exception("Package {$package} does not exist.");
        }
        return
            explode(
                '@endsection',
                explode(
                    "@section('doc')",
                    file_get_contents(resource_path("views/docs/{$package}.blade.php")),
                )[1],
            )[0];
    }

    private static function writeMarkdown(PackageModel $package, string $version, string $content, string $path)
    {
        $name = "{$package->name} {$version} docs";
        if (! self::fs()->exists($path)) {
            self::fs()->put($path, $content);
            return $content;
        }
        return self::fs()->get($path);
    }
}
