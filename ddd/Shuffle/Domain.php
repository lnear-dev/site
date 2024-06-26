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

namespace Shuffle;

use Aerni\Spotify\Facades\SpotifyFacade as Spotify;

class Domain extends \Domain
{
    public const kName = 'shuffle';

    public const kDir = __DIR__;

    public const kSpotifyID = '3yaGwKrJt9TEVE9iFZ5jJ6';

    public static function spotifyUrl()
    {
        return 'https://open.spotify.com/artist/' . self::kSpotifyID;
    }

    public static function spotifyProfile()
    {
        return Spotify::artist(self::kSpotifyID)->get();
    }

    public static function spotifyAlbums()
    {
        return Spotify::artistAlbums(self::kSpotifyID)->get();
    }

    public static function spotifyTopTracks()
    {
        return Spotify::artistTopTracks(self::kSpotifyID)->get();
    }

    public static function routes()
    {
        return self::router(
            // fn() => dump(self::spotifyProfile())
            // fn() => dd(static::registeredroutes())
            fn () => dd(static::dbConfig())
        );
    }
}
