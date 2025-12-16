<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Session;

<<<<<<< HEAD
/**
 * @extends Factory<Session>
 */
=======
/**
 * @extends Factory<Session>
 */
<<<<<<< HEAD
/**
 * @extends Factory<Session>
 */
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
class SessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<Session>
=======
     * @var class-string<Session>
<<<<<<< HEAD
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Session>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     */
    protected $model = Session::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // 'id' => $this->faker->word,
        ];
    }
}
