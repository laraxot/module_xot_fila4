<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

<<<<<<< HEAD
use Modules\Xot\Models\Extra;
=======
<<<<<<< HEAD
use Modules\Xot\Models\Extra;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
<<<<<<< HEAD
    protected $model = Extra::class;
=======
<<<<<<< HEAD
    protected $model = Extra::class;
=======
    protected $model = \Modules\Xot\Models\Extra::class;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
