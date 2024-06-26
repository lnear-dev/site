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
declare(strict_types=1);
/*
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
use App\Services\Markdown\MarkdownRenderer;
use App\UI\Menu;
use App\Util\Icons;
use Docs\Data\Package as PackageData;
use Docs\Models\Package;
use html\RenderResult;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Lame\JSONFile;

use function html\a;
use function html\article;
use function html\div;
use function html\element;
use function html\fieldset;
use function html\footer;
use function html\h1;
use function html\h2;
use function html\header;
use function html\legend;
use function html\li;
use function html\nav;
use function html\p;
use function html\ul;

abstract class Domain
{
    final public const kLogo = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000">
    <defs><style>.cls-1{fill:#00b8ff}</style></defs>
    <path d="M460 1110.49c0-48.38 32.68-82.38 78.44-82.38s77.15 34 77.15 82.38-30.07 82.37-78.45 82.37c-45.77 0-77.14-35.31-77.14-82.37M1277.16 807.14v78.45h-575.3v-78.45zM1384.41 1110.49c0-48.38 32.68-82.38 78.44-82.38s77.15 34 77.15 82.38-30.07 82.37-78.45 82.37c-45.77 0-77.14-35.31-77.14-82.37" class="cls-1"/>
    </svg>';

    // public const kBasePath = 'ddd';
    final public const kBasePath = __DIR__;

    public const kDir = __DIR__;

    public const kName = 'www';

    protected static ?JSONFile $store = null;

    protected static array $subDomains = [];

    protected static array $subDirs = [];

    private static ?Collection $subClasses = null;

    final public static function registeredDomains()
    {
        return collect(static::$subDomains)->sort()->filter(fn ($item) => $item !== 'www');
    }

    final public static function registeredDirectories()
    {
        return collect(static::$subDirs)->sort()->filter(fn ($item) => $item !== static::kBasePath);
    }

    final public static function registeredDomainsToDirectories()
    {
        return static::registeredDomains()->combine(static::registeredDirectories());
    }

    final public static function registeredroutes()
    {
        return collect(\Route::getRoutes()->getRoutesByName())->filter(fn ($item, $key) => ! str_starts_with($key, 'ignition'))->map(fn ($item) => [
            'name' => $item->getName(),
            'domain' => $item->domain(),
            'uri' => $item->uri,
            'url' => self::joinPaths($item->domain(), $item->uri),
            'methods' => $item->methods,
            'action' => $item->getActionName(),
            'rest' => $item,
        ]);
    }

    public static function header(): RenderResult
    {
        return header(
            nav(
                [
                    a(
                        RenderResult::encoded(static::kLogo),
                        href: route('www.landing'),
                    ), ul(
                        static::registeredDomains()
                            ->map(
                                fn ($item) => li(
                                    a(
                                        "{$item}.",
                                        href: route("{$item}.landing"),
                                        class: $item === static::kName ? 'active' : '',
                                    ),
                                ),
                            )->toArray(),
                    )],
            ),
        );
    }

    public static function footer()
    {
        return footer(
            article(
                [
                    a(RenderResult::encoded(Icons::LINKEDIN), href: 'https://www.linkedin.com/company/op-dev/'),
                    ul(array_map(fn ($item) => li(a($item['link'], $item['title'])), Menu::FOOTER)),
                ]
            ),
        )->collect();
    }

    public static function subclasses()
    {
        return static::$subClasses ?: static::$subClasses = (collect((new \Symfony\Component\Finder\Finder())->directories()->in(static::kBasePath)->depth('== 0'))
        ->map(fn ($dir) => '\\' . $dir->getRelativePathname() . '\\Domain')
        ->filter(fn ($item) => is_subclass_of($item, self::class))
        ->mapWithKeys(fn ($item) => [$item::kName => $item]));
    }

    public static function db()
    {
        return \DB::connection(static::kName);
    }

    public static function dbConfig()
    {
        return static::subclasses()->mapWithKeys(fn ($item, $key) => [
            $key => [
                'driver' => 'pgsql',
                'url' => env('DB_URL'),
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', '5432'),
                'database' => env('DB_DATABASE', 'laravel'),
                'username' => env('DB_USERNAME', 'root'),
                'password' => env('DB_PASSWORD', ''),
                'charset' => env('DB_CHARSET', 'utf8'),
                'prefix' => "{$key}_",
                'prefix_indexes' => true,
                'search_path' => 'public',
                'sslmode' => 'prefer',
            ],
        ]);
    }

    public static function pageTemplate(RenderResult $contents)
    {
        $header = static::header();
        $footer = static::footer();
        $contents = $contents->collect();
        return Blade::render(<<<BLADE
                @extends('layouts.main')    
                @section('head')
                @vite('resources/css/app.css')
                @vite('resources/ts/app.ts')
                @yield('head-slot')
                @endsection
                @section('content')
                {$header}
                <main class="container" id="main">
                    {$contents}
                </main>
                {$footer}
                @endsection
            BLADE);
    }

    public static function landingView(string $title, string $description = '', string $cards = '')
    {
        return static::pageTemplate(
            div(
                [
                    h1($title),
                    $description ? p($description) : '',
                    $cards ? element('span', $cards) : '',
                ],
                class: 'card-list',
            ),
        );
    }

    public static function welcome()
    {
        $header = static::header();
        $footer = static::footer();
        $stackCard = fieldset(
            [
                legend(h2('my stack')),
                ...array_map(fn ($entry) => RenderResult::encoded($entry), Icons::PROGRAMMING),
            ],
            id: 'stack-card',
        );

        $packagesCard = div(
            [
                h1('packages'),
                fieldset(
                    collect(PackageData::collect(Package::with('versions')->get()))->map(
                        fn ($entry) => a(
                            div([h2($entry->name), RenderResult::encoded($entry->icon)]),
                            href: $entry->docs,
                            class: 'package-card',
                            target: '_blank',
                        ),
                    )->toArray(),
                ), 
            ],
            id: 'packages-card',
        );

        $blogCard = element(
            'span',
            Blog\Domain::postCards(),
            id: 'blog-card',
        );

        return Blade::render(<<<BLADE
                    @extends('layouts.main')
                    @section('head')
                    @vite('resources/css/landing.css')
                    @vite('resources/ts/app.ts')
                    @endsection
                    @section('content')
                    {$header}
                    <main class="container">
                        <section>
                            <span>
                                <span>
                                    <div>
                                        <h1>Hi, my name is Lanre.</h1>
                                        <p>
                                            Software has been an integral part of my
                                            professional journey for over a decade, during
                                            which I've honed my skills through self-teaching
                                            and dedicated practice. I am excited about the
                                            opportunity to contribute to the ecosystem of
                                            your company.
                                        </p>
                                    </div>
                                </span>
                                {$stackCard}
                            </span>
                            {$packagesCard}
                            {$blogCard}
                        </section>
                    </main>
                    {$footer}
                    @endsection
            BLADE);
    }

    public static function routes()
    {
        return self::router(
            // fn() => view('landing.index'),
            fn () => self::welcome(),
            [
                '/contact' => fn () => view('welcome'),
            ],
        );
    }

    public static function currentUrl()
    {
        return explode('.', parse_url(url()->current(), PHP_URL_HOST))[0];
    }

    final public static function basePath(string $path = '', string ...$paths)
    {
        return static::joinPaths(static::kBasePath, $path, ...$paths);
    }

    final protected static function router(callable $landing, array $routes = [])
    {
        $root = app()->isLocal() ? 'lnear.test' : 'lnear.dev';
        $domain = (static::kName === 'www') ? $root : static::kName . ".{$root}";
        static::$subDomains[] = static::kName;
        static::$subDirs[] = static::kDir;
        return Route::domain(
            $domain,
        )->name(static::kName . '.')->group(function () use ($routes, $landing): void {
            Route::get('/', $landing)->name('landing');
            collect($routes)->map(function ($route, $uri): void {
                if (! is_array($route)) {
                    $route = [$route, basename($uri)];
                }
                [$route, $name] = $route;
                Route::get($uri, $route)->name($name);
            });
        });
    }

    protected static function joinPaths($basePath, ...$paths)
    {
        return
            rtrim($basePath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . join(
                DIRECTORY_SEPARATOR,
                array_map(
                    fn ($path) => ltrim($path, DIRECTORY_SEPARATOR),
                    array_filter(
                        $paths,
                        fn ($path) => $path !== null && $path !== ''
                    ),
                ),
            );
    }

    protected static function path(string $path = '', string ...$paths)
    {
        return base_path(static::joinPaths('ddd', static::kName, $path, ...$paths));
    }

    protected static function initializeStore(JSONFile $store): JSONFile
    {
        return $store;
    }

    protected static function store()
    {
        return static::$store ?? (static::initializeStore(new JSONFile(static::fs()->path('store.json'))));
    }

    protected static function fs()
    {
        return Storage::build([
            'driver' => 'local',
            'root' => 'domains/' . static::kName,
        ]);
    }

    protected static function wrapBlade(string $contents)
    {
        return "@extends('layouts.".static::kName."')\n@section('doc')\n{$contents}\n@endsection";
    }

    protected static function writeBlade(string $file, string $contents): void
    {
        if (! file_exists($file)) {
            $dir = dirname($file);
            if (! is_dir($dir)) {
                mkdir($dir, 0o755, true);
            }
        }
        file_put_contents(
            $file,
            static::wrapBlade((new MarkdownRenderer())($contents)),
        );
    }
}
