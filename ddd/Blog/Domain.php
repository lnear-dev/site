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

namespace Blog;

use App\Services\Markdown\MarkdownRenderer;
use Blog\Data\Post;
use Blog\Data\Series;
use Blog\Models\Post as PostModel;
use Blog\Models\Series as SeriesModel;
use Lame\JSONFile;
use Str;

use function html\a;

final class Domain extends \Domain
{
    public const kName = 'blog';

    public const kDir = __DIR__;

    public static function routes()
    {
        return self::router(
            fn () => self::landingView(
                'Blog',
                cards: self::allCards(),
            ),
            [
                '/store' => fn () => self::store(),
                '/{series}/{post}' => [fn ($series, $post) => self::seriesPost($series, $post), 'series.post'],
                '/{post}' => [fn ($post) => self::post($post), 'post'],
            ]
        );
    }

    public static function allPosts()
    {
        return Post::collect(self::store()->get('posts', []));
    }

    public static function allSeries()
    {
        return Series::collect(self::store()->get('series'));
    }

    public static function all()
    {
        return collect([
            'posts' => self::allPosts(),
            'series' => self::allSeries(),
        ]);
    }

    public static function post(string $slug)
    {
        [$posts, $series_] = [
            collect(self::store()->get('posts', [])),
            collect(self::store()->get('series', [])),
        ];
        if (! $posts->has($slug) && ! $series_->has($slug)) 
            abort(404);

        if ($post = $posts[$slug] ?? null) 
            return view("blog.post.{$slug}", compact('post'));
        if ($series = $series_[$slug] ?? null) {
            $series = Series::from($series);
            return self::landingView($series->title, '', $series->posts->map(fn ($p) => self::postCard($p, route('blog.post', ['post' => $p->slug])))->join(''));
        }
        abort(404);
    }

    public static function seriesPost(string $series, string $post)
    {
        $series = Series::from(self::store()->get("series.{$series}"));
        $post = $series->posts->first(fn ($p) => $p->slug === $post);
        if (! $post) {
            abort(404);
        }
        return view("blog.post.{$post->slug}", compact('post'));
    }

    public static function writePost(Post $item, string $version, string $content, array $details): void
    {
        $path = join('/', [
            'blog',
            (fn ($i) => $i instanceof Post ? $i->slug : $i->slug)($item),
            str_replace('.', '_', $version),
        ]);
        self::writeBlade(
            file: resource_path("views/{$path}.blade.php"),
            contents: $content,
        );
    }

    public static function postCard(Post $post, string $href)
    {
        return a(self::postInfo($post), href: route('blog.post', ['post' => $post->slug]), class: 'card');
    }

    public static function postInfo(Post $post)
    {
        return join('', [
            "<h2>{$post->title}</h2>",
            "<span>{$post->date}</span>",
            "<p>{$post->description}</p>",
        ]);
    }

    public static function seriesCard(Series $series)
    {
        return join('', [
            "<h2>{$series->title}</h2>",
            '<div class="card-grid">',
            $series->posts->map(
                fn ($p) => a(self::postInfo($p), href: route('blog.series.post', ['series' => $series->slug, 'post' => $p->slug]), class: 'card')
            )->join(''),
            '</div>',
        ]);
    }

    public static function postCards()
    {
        return collect(self::allPosts())->map(fn ($p) => self::postCard($p, route('blog.post', ['post' => $p->slug])))->join('');
    }

    public static function seriesCards()
    {
        return collect(self::allSeries())->map(fn ($s) => self::seriesCard($s))->join('');
    }

    public static function allCards()
    {
        return join('', [
            self::postCards(),
            self::seriesCards(),
        ]);
    }

    protected static function initializeStore(JSONFile $store): JSONFile
    {
        if (count($store) !== 0) {
            return $store;
        }

        return $store
            ->put(
                'posts',
                self::posts('')
                    ->map(fn ($post, $p) => self::extractPostMeta(self::path($post . '.md')))
                    ->sortByDesc('date')
                    ->mapWithKeys(fn ($post, $p) => [$post['slug'] => $post]),
            )->put(
                'series',
                self::series()
                    ->map(function ($s) {
                        [$title, $slug] = static::extractSeriesMeta($s);
                        $posts = static::posts(basename($s))->map(fn ($post, $key) => static::extractPostMeta($s . '/' . $post . '.md'));
                        return compact('title', 'slug', 'posts');
                    })
                    ->mapWithKeys(fn ($series, $s) => [$series['slug'] => $series]),
                // ->sortByDesc('date')
            );
    }

    protected static function wrapBlade(string $contents)
    {
        return "@extends('layouts.docs')\n@section('doc')\n{$contents}\n@endsection";
    }

    private static function extractPostMeta(string $filename)
    {
        $markdownContent = file_get_contents($filename);
        [$content, $o] = (new MarkdownRenderer())->withMatter($markdownContent);
        $o['date'] ??= date('Y-m-d');
        return $o;
    }

    private static function extractSeriesMeta(string $dir)
    {
        $title = Str::title(str_replace(['-', '_'], ' ', basename($dir)));
        $slug = Str::slug($title);
        return [$title, $slug];
    }

    private static function posts(string $series)
    {
        return collect(glob(self::path($series, '*.md')))->map(fn ($p) => basename($p, '.md'));
    }

    private static function series()
    {
        return collect(glob(self::path('*'), GLOB_ONLYDIR));
    }
}
