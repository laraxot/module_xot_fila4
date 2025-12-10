<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
declare(strict_types=1);


=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
declare(strict_types=1);


=======
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
declare(strict_types=1);


=======
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
declare(strict_types=1);


=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
declare(strict_types=1);


=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f7e6113c6 (.)
declare(strict_types=1);


=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5e6e0d054 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
declare(strict_types=1);


>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
declare(strict_types=1);


=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
declare(strict_types=1);


>>>>>>> aba62c408 (.)
=======
declare(strict_types=1);


=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
declare(strict_types=1);


>>>>>>> 5cb992cc6 (.)
=======
declare(strict_types=1);


=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
declare(strict_types=1);


>>>>>>> 3c8d62b79 (.)
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
