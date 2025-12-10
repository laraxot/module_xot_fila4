<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\XotBaseModel;

/**
 * @extends Factory<XotBaseModel>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @extends Factory<XotBaseModel>
 * @extends Factory<XotBaseModel>
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
 * @extends Factory<XotBaseModel>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Xot\Models\XotBaseModel>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
 */
class XotBaseModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<XotBaseModel>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var class-string<XotBaseModel>
     * @var class-string<XotBaseModel>
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
     * @var class-string<XotBaseModel>
=======
     * @var class-string<\Modules\Xot\Models\XotBaseModel>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
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
