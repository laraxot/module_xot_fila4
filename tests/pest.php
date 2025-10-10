<?php

declare(strict_types=1);

use Modules\Xot\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | Il TestCase di default per tutti i test del modulo Xot.
 * | Estende il TestCase specifico del modulo che fornisce il setup necessario.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
// expect()->extend('toBeOne', function () {
//     return $this->toBe(1);
// });
*/
