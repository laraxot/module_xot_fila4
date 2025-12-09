<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\PulseAggregate;

/**
 * @extends Factory<PulseAggregate>
 */
=======
use Modules\Xot\Models\PulseAggregate;
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
class PulseAggregateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     *
     * @var class-string<PulseAggregate>
=======
>>>>>>> 5a14301c (.)
     */
    protected $model = PulseAggregate::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
<<<<<<< HEAD
        return [];
=======
        return [
        ];
>>>>>>> f1d4085 (.)
    }
}
