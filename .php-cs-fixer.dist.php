<?php

declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


declare(strict_types=1);


declare(strict_types=1);


=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
declare(strict_types=1);


>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true);
    ->ignoreVCS(true);
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true);
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true)
    ->ignoreVCS(true)

$config = new PhpCsFixer\Config();

$config
    ->setRules([
        '@Symfony' => true,
        'array_indentation' => true,
        'function_typehint_space' => true,
        'declare_equal_normalize' => true,
        'declare_strict_types' => true,
        'combine_consecutive_unsets' => true,
        //'binary_operator_spaces' => ['align_double_arrow' => false],
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'php_unit_construct' => false,
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
        ],
        'function_declaration' => true,
        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
    ])
    ->setFinder($finder);

return $config;
return $config;
