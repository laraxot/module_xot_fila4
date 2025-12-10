<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Session;

/**
 * @extends Factory<Session>
 */
<<<<<<< HEAD
/**
 * @extends Factory<Session>
 */
=======
>>>>>>> 551c768c4 (.)
class SessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
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
