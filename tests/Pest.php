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
<<<<<<< HEAD
uses(TestCase::class)->in('Feature', 'Unit');
=======

pest()->extend(TestCase::class)->in('Feature', 'Unit');
>>>>>>> 5a14301c (.)

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | Qui puoi definire aspettative globali per il modulo Xot.
<<<<<<< HEAD
 * | Quando definisci aspettative globali, saranno disponibili
 * | in tutti i test del modulo.
 * |
 */
=======
 * | Quando definisci here expectation globali, saranno disponibili
 * | in tutti i test del modulo.
 * |
 */

>>>>>>> 5a14301c (.)
// expect()->extend('toBeOne', function () {
//     return $this->toBe(1);
// });

/*
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | Qui puoi definire funzioni helper globali per i test del modulo.
 * | Queste funzioni saranno disponibili in tutti i test.
 * |
 */
<<<<<<< HEAD
// function something() {
//     // ...
// }
=======

// function something() {
//     // ...
// }
>>>>>>> 5a14301c (.)
