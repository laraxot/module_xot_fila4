<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\PulseValue;

/**
 * @extends Factory<PulseValue>
 */
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
use Modules\Xot\Models\PulseValue;
=======
<<<<<<< HEAD
use Modules\Xot\Models\PulseValue;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\PulseValue;
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\PulseValue;
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\PulseValue;
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\PulseValue;
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
class PulseValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @var class-string<PulseValue>
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
     */
<<<<<<< HEAD
    protected $model = PulseValue::class;
=======
<<<<<<< HEAD
    protected $model = PulseValue::class;
=======
    protected $model = \Modules\Xot\Models\PulseValue::class;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
<<<<<<< HEAD
        return [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return [];
=======
        return [
        ];
>>>>>>> a12f125f4a (.)
=======
        return [];
>>>>>>> b93ef594b4 (.)
=======
        return [
        ];
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
