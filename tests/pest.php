<?php

declare(strict_types=1);

use Modules\Xot\Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The default test case for all Xot module tests.
| It extends the module-specific TestCase which provides the necessary setup.
|
*/
pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| Here you can define global expectations for the Xot module.
| When defined here, global expectations will be available in all module tests.
|
*/
// Example:
// expect()->extend('toBeOne', function () {
//     return $this->toBe(1);
// });

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Here you can define global helper functions for the module tests.
| These functions will be available in all tests.
|
*/
// Example:
// function something() {
//     // ...
// }