<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

/**
 * Standard Rector Configuration for Laravel Modules
 *
 * Minimal configuration compatible with base Rector installation
 * Updated: 2025-11-24
 */
return static function (RectorConfig $rectorConfig): void {
    // Paths to analyze
    $rectorConfig->paths([
        __DIR__,
    ]);

    // Paths to skip
    $rectorConfig->skip([
        __DIR__.'/vendor',
        __DIR__.'/docs',
        __DIR__.'/tests/coverage',
    ]);

    // PHP version target
    $rectorConfig->phpVersion(\Rector\ValueObject\PhpVersion::PHP_81);

    // Rule sets
    $rectorConfig->sets([
        // PHP 8.1 compatibility
        LevelSetList::UP_TO_PHP_81,

        // Code quality improvements
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::EARLY_RETURN,

        // Type declarations (commented - enable carefully)
        // SetList::TYPE_DECLARATION,

        // Coding style
        // SetList::CODING_STYLE,
    ]);

    // Import names for cleaner code
    $rectorConfig->importNames();

    // Import short classes
    $rectorConfig->importShortClasses(false);
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
    $rectorConfig->paths([
        __DIR__.'/Modules',
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/lang',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    $rectorConfig->skip([
        __DIR__.'/Modules/*/docs',
        __DIR__.'/Modules/*/vendor',
        __DIR__ . '/Modules',
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/lang',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

    $rectorConfig->skip([
        __DIR__ . '/Modules/*/docs',
        __DIR__ . '/Modules/*/vendor',
        '*/docs',
        '*/vendor',
        './vendor/',
    ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
    $rectorConfig->paths(
        [
            __DIR__.'/Modules',
            __DIR__.'/app',
            __DIR__.'/bootstrap',
            __DIR__.'/config',
            __DIR__.'/lang',
            __DIR__.'/resources',
            __DIR__.'/routes',
            __DIR__.'/tests',
        ]
    );

    $rectorConfig->skip(
        [
            __DIR__.'/Modules/*/docs',
            __DIR__.'/Modules/*/vendor',
            '*/docs',
            '*/vendor',
            './vendor/',
        ]
    );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 358ba79a7 (.)

    $rectorConfig->skip([
        __DIR__ . '/Modules/*/docs',
        __DIR__ . '/Modules/*/vendor',
        '*/docs',
        '*/vendor',
        './vendor/',
    ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    // $rectorConfig->rule(RedirectRouteToToRouteHelperRector::class);

    // define sets of rules
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
    $rectorConfig->sets([
        PHPUnitLevelSetList::UP_TO_PHPUNIT_100,
        // SetList::DEAD_CODE,
        // SetList::CODE_QUALITY,
        LevelSetList::UP_TO_PHP_81,
        LaravelSetList::LARAVEL_100,
        // SetList::NAMING, //problemi con injuction
        SetList::TYPE_DECLARATION,
        // SetList::CODING_STYLE,
        // SetList::PRIVATIZATION,//problemi con final
        // SetList::EARLY_RETURN,
        // SetList::INSTANCEOF,
    ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
    $rectorConfig->sets(
        [
            PHPUnitLevelSetList::UP_TO_PHPUNIT_100,
            // SetList::DEAD_CODE,
            // SetList::CODE_QUALITY,
            LevelSetList::UP_TO_PHP_81,
            LaravelSetList::LARAVEL_100,

            // SetList::NAMING, //problemi con injuction
            SetList::TYPE_DECLARATION,
            // SetList::CODING_STYLE,
            // SetList::PRIVATIZATION,//problemi con final
            // SetList::EARLY_RETURN,
            // SetList::INSTANCEOF,
        ]
    );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)

    $rectorConfig->importNames();
};
