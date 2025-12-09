<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\Extra;

/**
 * @extends Factory<Extra>
 */
=======
use Modules\Xot\Models\Extra;
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
class ExtraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     *
     * @var class-string<Extra>
=======
>>>>>>> 5a14301c (.)
     */
    protected $model = Extra::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
