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

use App\Services\Markdown\TypeScriptLanguage\TsDecoratorComplexInjection;
use App\Services\Markdown\TypeScriptLanguage\TsDecoratorPlainInjection;
use App\Services\Markdown\TypeScriptLanguage\TsGenericTypeInjection;
use App\Services\Markdown\TypeScriptLanguage\TsImportPattern;
use App\Services\Markdown\TypeScriptLanguage\TsOptionalParameterPattern;
use App\Services\Markdown\TypeScriptLanguage\TsTypeAssertionPattern;
use Tempest\Highlight\Languages\Base\BaseLanguage;
use Tempest\Highlight\Languages\JavaScript\Injections\JsDocInjection;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsClassNamePattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsDoubleQuoteValuePattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsKeywordPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsMethodPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsMultilineCommentPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsNewObjectPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsObjectPropertyPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsPropertyPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsSinglelineCommentPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsSingleQuoteValuePattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsStaticClassPattern;
use Tempest\Highlight\Languages\JavaScript\Patterns\JsStaticPropertyPattern;

class TypeScriptLanguage extends BaseLanguage
{
    public const kKeyWords = [
        'set',
        'of',
        'get',
        'from',
        'eval',
        'async',
        'as',
        'break',
        'case',
        'catch',
        'class',
        'const',
        'continue',
        'debugger',
        'default',
        'delete',
        'do',
        'else',
        'export',
        'extends',
        'false',
        'finally',
        'for',
        'function',
        'if',
        'import',
        'in',
        'instanceof',
        'new',
        'null',
        'return',
        'super',
        'switch',
        'this',
        'throw',
        'true',
        'try',
        'typeof',
        'var',
        'void',
        'while',
        'with',
        'let',
        'static',
        'yield',
        'await',
        'enum',
        'implements',
        'interface',
        'package',
        'private',
        'protected',
        'public',
        'constructor',
        'this',
        'abstract',
        'any',
        'as',
        'async',
        'await',
        'boolean',
        'declare',
        'enum',
        'from',
        'implements',
        'import',
        'interface',
        'let',
        'module',
        'namespace',
        'never',
        'readonly',
        'require',
        'number',
        'object',
        'public',
        'private',
        'protected',
        'string',
        'super',
        'symbol',
        'type',
        'undefined',
        'unique',
        'unknown',
        'void',
    ];

    public const kName = 'ts';

    public const kAliases = [
        'typescript',
        'ts',
    ];

    public function getName(): string
    {
        return self::kName;
    }

    public function getAliases(): array
    {
        return self::kAliases;
    }

    public function getInjections(): array
    {
        return [
            ...parent::getInjections(),
            new JsDocInjection(),
            new TsDecoratorPlainInjection(),
            new TsDecoratorComplexInjection(),
            new TsGenericTypeInjection(),
        ];
    }

    public function getPatterns(): array
    {
        return [
            ...parent::getPatterns(),
            ...array_map(fn ($keyword) => new JsKeywordPattern($keyword), self::kKeyWords),

            // COMMENTS
            new JsMultilineCommentPattern(),
            new JsSinglelineCommentPattern(),

            // TYPES
            new JsClassNamePattern(),
            new JsNewObjectPattern(),
            new JsStaticClassPattern(),

            // PROPERTIES
            new JsPropertyPattern(),
            new JsObjectPropertyPattern(),
            new JsMethodPattern(),
            new JsStaticPropertyPattern(),

            // VALUES
            new JsSingleQuoteValuePattern(),
            new JsDoubleQuoteValuePattern(),

            // TYPESCRIPT
            new TsImportPattern(),
            new TsOptionalParameterPattern(),
            new TsTypeAssertionPattern(),
        ];
    }
}
