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

namespace App\Console;

// Example usage
// echo Fmt::red("This is red text") . PHP_EOL;
// echo Fmt::green("This is green text") . PHP_EOL;
// echo Fmt::yellow("This is yellow text") . PHP_EOL;
// echo Fmt::blue("This is blue text") . PHP_EOL;
// echo Fmt::magenta("This is magenta text") . PHP_EOL;
// echo Fmt::cyan("This is cyan text") . PHP_EOL;
// echo Fmt::white("This is white text") . PHP_EOL;
// echo Fmt::boldText("This is bold text") . PHP_EOL;
// echo Fmt::underlineText("This is underlined text") . PHP_EOL;
// echo (new Fmt())->text("This is red text on green background")->foregroundColor(Fmt::RED)->backgroundColor(Fmt::BG_GREEN)->render() . PHP_EOL;
// echo (new Fmt())->text("This is bold red text on yellow background")->foregroundColor(Fmt::RED)->backgroundColor(Fmt::BG_YELLOW)->bold()->render() . PHP_EOL;
class Fmt
{
    // Foreground colors
    public const BLACK = "\033[30m";

    public const RED = "\033[31m";

    public const GREEN = "\033[32m";

    public const YELLOW = "\033[33m";

    public const BLUE = "\033[34m";

    public const MAGENTA = "\033[35m";

    public const CYAN = "\033[36m";

    public const WHITE = "\033[37m";

    // Background colors
    public const BG_BLACK = "\033[40m";

    public const BG_RED = "\033[41m";

    public const BG_GREEN = "\033[42m";

    public const BG_YELLOW = "\033[43m";

    public const BG_BLUE = "\033[44m";

    public const BG_MAGENTA = "\033[45m";

    public const BG_CYAN = "\033[46m";

    public const BG_WHITE = "\033[47m";

    // Text styles
    public const BOLD = "\033[1m";

    public const UNDERLINE = "\033[4m";

    public const REVERSED = "\033[7m";

    public const RESET = "\033[0m";

    private $foregroundColor = '';

    private $backgroundColor = '';

    private $styles = [];

    private $text = '';

    public function text(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function foregroundColor(string $color): self
    {
        $this->foregroundColor = $color;
        return $this;
    }

    public function backgroundColor(string $color): self
    {
        $this->backgroundColor = $color;
        return $this;
    }

    public function style(string $style): self
    {
        $this->styles[] = $style;
        return $this;
    }

    public function bold(): self
    {
        $this->styles[] = self::BOLD;
        return $this;
    }

    public function underline(): self
    {
        $this->styles[] = self::UNDERLINE;
        return $this;
    }

    public function reversed(): self
    {
        $this->styles[] = self::REVERSED;
        return $this;
    }

    public function render(): string
    {
        $styledText = $this->foregroundColor . $this->backgroundColor;

        foreach ($this->styles as $style) {
            $styledText .= $style;
        }

        $styledText .= $this->text . self::RESET;

        return $styledText;
    }

    public static function red(string $text): string
    {
        return (new self())->text($text)->foregroundColor(self::RED)->render();
    }

    public static function green(string $text): string
    {
        return (new self())->text($text)->foregroundColor(self::GREEN)->render();
    }

    public static function yellow(string $text): string
    {
        return (new self())->text($text)->foregroundColor(self::YELLOW)->render();
    }

    public static function blue(string $text): string
    {
        return (new self())->text($text)->foregroundColor(self::BLUE)->render();
    }

    public static function magenta(string $text): string
    {
        return (new self())->text($text)->foregroundColor(self::MAGENTA)->render();
    }

    public static function cyan(string $text): string
    {
        return (new self())->text($text)->foregroundColor(self::CYAN)->render();
    }

    public static function white(string $text): string
    {
        return (new self())->text($text)->foregroundColor(self::WHITE)->render();
    }

    public static function boldText(string $text): string
    {
        return (new self())->text($text)->bold()->render();
    }

    public static function underlineText(string $text): string
    {
        return (new self())->text($text)->underline()->render();
    }

    public static function reversedText(string $text): string
    {
        return (new self())->text($text)->reversed()->render();
    }
}
