<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\PulseAggregate;

/**
 * @extends Factory<PulseAggregate>
 */
=======
=======
>>>>>>> 399f46d3 (.)
use Modules\Xot\Models\PulseAggregate;
=======
<<<<<<< HEAD
use Modules\Xot\Models\PulseAggregate;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
    protected $model = PulseAggregate::class;
=======
<<<<<<< HEAD
    protected $model = PulseAggregate::class;
=======
    protected $model = \Modules\Xot\Models\PulseAggregate::class;
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
