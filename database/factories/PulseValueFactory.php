<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

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
     *
     * @var class-string<PulseValue>
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    protected $model = PulseValue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return [];
=======
        return [
        ];
>>>>>>> f1d4085 (.)
=======
        return [];
>>>>>>> 73eab74 (.)
    }
}
