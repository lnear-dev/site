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

use Exception;

class ShikiHighlighter
{
    public function __construct(
        protected Shiki $shiki,
        protected bool $throw = false,
    ) {}

    public function highlight(string $codeBlock, ?string $infoLine = null): string
    {
        [$contents, $addLines, $deleteLines] = $this->parseAddedAndDeletedLines(htmlspecialchars_decode(strip_tags($codeBlock)));
        $definition = $this->parseLangAndLines($infoLine);
        $language = $definition['lang'] ?? 'php';

        try {
            $highlightedContents = $this->shiki->highlightCode(
                code: $contents,
                language: $language,
                options: [
                    'addLines' => $addLines,
                    'deleteLines' => $deleteLines,
                    'highlightLines' => $definition['highlightLines'],
                    'focusLines' => $definition['focusLines'],
                ],
            );
        } catch (Exception $e) {
            if ($this->throw) {
                throw $e;
            }
            $highlightedContents = $codeBlock;
        }
        return $highlightedContents;
    }

    protected function parseLangAndLines(?string $language): array
    {
        $parsed = [
            'lang' => $language,
            'highlightLines' => [],
            'focusLines' => [],
        ];
        if ($language === null) {
            return $parsed;
        }
        $bracePosition = strpos($language, '{');
        if ($bracePosition === false) {
            return $parsed;
        }
        preg_match_all('/{([^}]*)}/', $language, $matches);

        $parsed['lang'] = substr($language, 0, $bracePosition);
        $parsed['highlightLines'] = array_map('trim', explode(',', $matches[1][0] ?? ''));
        $parsed['focusLines'] = array_map('trim', explode(',', $matches[1][1] ?? ''));

        return $parsed;
    }

    private function parseAddedAndDeletedLines(string $contents): array
    {
        $addLines = [];
        $deleteLines = [];

        $contentLines = explode("\n", $contents);
        $contentLines = array_map(function (string $line, int $index) use (&$addLines, &$deleteLines) {
            if (str_starts_with($line, '+ ')) {
                $addLines[] = $index + 1;
                $line = substr($line, 2);
            }
            if (str_starts_with($line, '- ')) {
                $deleteLines[] = $index + 1;
                $line = substr($line, 2);
            }
            return $line;
        }, $contentLines, array_keys($contentLines));

        return [
            implode("\n", $contentLines),
            $addLines,
            $deleteLines,
        ];
    }
}
