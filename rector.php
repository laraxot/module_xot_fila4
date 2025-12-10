<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    $rectorConfig->paths([
<<<<<<< HEAD
<<<<<<< HEAD
        __DIR__.'/Modules',
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/lang',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ]);

    $rectorConfig->skip([
        __DIR__.'/Modules/*/docs',
        __DIR__.'/Modules/*/vendor',
=======
=======
>>>>>>> 5a14301c (.)
        __DIR__ . '/Modules',
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/lang',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    $rectorConfig->skip([
        __DIR__ . '/Modules/*/docs',
        __DIR__ . '/Modules/*/vendor',
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        '*/docs',
        '*/vendor',
        './vendor/',
    ]);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
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
>>>>>>> a12f125f4a (.)
=======

    $rectorConfig->skip([
        __DIR__ . '/Modules/*/docs',
        __DIR__ . '/Modules/*/vendor',
        '*/docs',
        '*/vendor',
        './vendor/',
    ]);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    // $rectorConfig->rule(RedirectRouteToToRouteHelperRector::class);

    // define sets of rules
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    $rectorConfig->importNames();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
};
