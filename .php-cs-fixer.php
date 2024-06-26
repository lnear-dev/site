<?php
return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        'declare_strict_types'                     => false,
        'header_comment'                           => [
            'comment_type' => 'PHPDoc',
            'header'       => <<<'EOF'
            This file is part lnear.dev.
            
            (c) 2024 Lanre Ajao(lnear)
        
            For the full copyright and license information, please view the LICENSE
            file that was distributed with this source code.
            .........<-..(`-')_..(`-').._(`-').._....(`-').
            ...<-.......\(.OO).).(.OO).-/(OO.).-/.<-.(OO.).
            .,--..)..,--./.,--/.(,------./.,---...,------,)
            .|..(`-')|...\.|..|..|...---'|.\./`.\.|.../`..'
            .|..|OO.)|....'|..|)(|..'--..'-'|_.'.||..|_.'.|
            (|..'__.||..|\....|..|...--'(|...-...||.......'
            .|.....|'|..|.\...|..|..`---.|..|.|..||..|\..\.
            .`-----'.`--'..`--'..`------'`--'.`--'`--'.'--'
            @link     https://lnear.dev
            @contact  hi@lnear.dev
            EOF,
            'separate'     => 'none',
            'location'     => 'after_open',
        ],
        'phpdoc_scalar'                            => true,
        'phpdoc_to_param_type'                     => true,
        'phpdoc_to_property_type'                  => true,
        'phpdoc_to_return_type'                    => true,
        '@PhpCsFixer'                              => true,
        'array_syntax'                             => [
            'syntax' => 'short',
        ],
        'list_syntax'                              => [
            'syntax' => 'short',
        ],
        'concat_space'                             => [
            'spacing' => 'one',
        ],
        'blank_line_before_statement'              => [
            'statements' => [
                'declare',
            ],
        ],
        'general_phpdoc_annotation_remove'         => [
            'annotations' => [
                'author',
                'param',
                'return',
                'template',
            ],
        ],
        'ordered_imports'                          => [
            'imports_order'  => [
                'class',
                'function',
                'const',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'single_line_comment_style'                => [
            'comment_types' => [
            ],
        ],
        'yoda_style'                               => [
            'always_move_variable' => false,
            'equal'                => false,
            'identical'            => false,
        ],
        'phpdoc_align'                             => [
            'align' => 'left',
        ],
        'multiline_whitespace_before_semicolons'   => [
            'strategy' => 'no_multi_line',
        ],
        'constant_case'                            => [
            'case' => 'lower',
        ],
        'class_attributes_separation'              => true,
        'combine_consecutive_unsets'               => true,
        'linebreak_after_opening_tag'              => true,
        'lowercase_static_reference'               => true,
        'no_useless_else'                          => true,
        'no_unused_imports'                        => true,
        'not_operator_with_successor_space'        => true,
        'not_operator_with_space'                  => false,
        'ordered_class_elements'                   => true,
        'php_unit_strict'                          => false,
        'phpdoc_separation'                        => false,
        'single_quote'                             => true,
        'standardize_not_equals'                   => true,
        'multiline_comment_opening_closing'        => true,

        'assign_null_coalescing_to_coalesce_equal' => true,
        'clean_namespace'                          => true,
        'fully_qualified_strict_types'             => false,
        'global_namespace_import'                  => [
            'import_constants' => true,
            'import_functions' => true,
        ],
        'group_import'                             => false,
        'heredoc_indentation'                      => true,
        'method_argument_space'                    => true,
        'return_to_yield_from'                     => true,
        'simplified_if_return'                     => true,
        'simplified_null_return'                   => true,
        'no_empty_phpdoc'                          => true,
        // 'no_blank_lines_before_namespace'          => true,
        'no_blank_lines_after_class_opening'       => true,
        'no_blank_lines_after_phpdoc'              => true,
        'no_extra_blank_lines'                     => [
            'tokens' => [
                'attribute',
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
                'use_trait',
            ],
        ],
        'no_superfluous_phpdoc_tags'               => true,
        'no_trailing_whitespace_in_comment'        => true,
        'no_unneeded_control_parentheses'          => true,
        'no_unneeded_braces'                       => true,
        'no_unneeded_import_alias'                 => true,
        'no_unset_cast'                            => true,
        'no_whitespace_before_comma_in_array'      => true,
        'normalize_index_brace'                    => true,
        'octal_notation'                           => true,
        'phpdoc_annotation_without_dot'            => true,
        'phpdoc_no_useless_inheritdoc'             => true,
        'phpdoc_order_by_value'                    => true,
        'phpdoc_trim'                              => true,
        'short_scalar_cast'                        => true,
        'simple_to_complex_string_variable'        => true,
        'ternary_to_null_coalescing'               => true,
        'trailing_comma_in_multiline'              => true,
        'visibility_required'                      => true,
        'void_return'                              => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude('Console')
        ->exclude('vendor')
        ->in(__DIR__ . '/app')
        ->in(__DIR__ . '/ddd'))
    ->setUsingCache(false);
