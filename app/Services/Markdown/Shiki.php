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

namespace App\Services\Markdown;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

class Shiki
{
    private static ?string $customWorkingDirPath = null;

    public function __construct(protected string $defaultTheme = 'nord') {}

    public static function setCustomWorkingDirPath(?string $path): void
    {
        static::$customWorkingDirPath = $path;
    }

    public static function highlight(
        string $code,
        string $language = 'php',
        string $theme = 'nord',
        array $highlightLines = [],
        array $addLines = [],
        array $deleteLines = [],
        array $focusLines = [],
    ): string {
        return (new static())->highlightCode(
            $code,
            $language,
            $theme,
            compact('highlightLines', 'addLines', 'deleteLines', 'focusLines'),
        );
    }

    public function highlightCode(
        string $code,
        string $language,
        ?string $theme = null,
        ?array $options = [],
    ): string {
        return $this->callShiki(
            $code,
            $language,
            $theme ?? $this->defaultTheme,
            $options,
        );
    }

    public function getWorkingDirPath(): string
    {
        return (
            static::$customWorkingDirPath !== null
            && ($path = realpath(static::$customWorkingDirPath)) !== false
        )
            ? $path
            : realpath(dirname(__DIR__) . '/bin');
    }

    protected function callShiki(...$arguments): string
    {
        $home = getenv('HOME');

        $command = [
            (new ExecutableFinder())->find('node', 'node', [
                '/usr/local/bin',
                '/opt/homebrew/bin',
                $home . '/n/bin', // support https://github.com/tj/n
            ]),
            'shiki.js',
            // __DIR__ . '/bin/shiki.js',
            json_encode(array_values($arguments)),
        ];
        $process = new Process(
            $command,
            // $this->getWorkingDirPath(),
            __DIR__ . '/bin',
            null,
        );
        $process->run();
        if (! $process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        dump($process->getOutput());
        return $process->getOutput();
        // passthru(implode(' ', $command), $output);
        // dump($output);
        // return $output;
    }
}
