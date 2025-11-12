<?php

declare(strict_types=1);

use Modules\Xot\Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| Il TestCase di default per tutti i test del modulo Xot.
| Estende il TestCase specifico del modulo che fornisce il setup necessario.
|
*/

<<<<<<< HEAD
pest()->extend(TestCase::class)->in('Feature', 'Unit');
=======
uses(TestCase::class)->in('Feature', 'Unit');
>>>>>>> 54cbe5d (.)

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| Qui puoi definire aspettative globali per il modulo Xot.
| Quando definisci expectation globali, saranno disponibili
| in tutti i test del modulo.
|
*/

// function something() {
//     // ...
// }
