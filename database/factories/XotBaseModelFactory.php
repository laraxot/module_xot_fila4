<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\XotBaseModel;

/**
<<<<<<< HEAD
 * @extends Factory<XotBaseModel>
=======
<<<<<<< HEAD
 * @extends Factory<XotBaseModel>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Xot\Models\XotBaseModel>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 */
class XotBaseModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<XotBaseModel>
=======
<<<<<<< HEAD
     * @var class-string<XotBaseModel>
=======
     * @var class-string<\Modules\Xot\Models\XotBaseModel>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    protected $model = XotBaseModel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
