<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Log;

<<<<<<< HEAD
/**
 * @extends Factory<Log>
 */
=======
/**
 * @extends Factory<Log>
 */
<<<<<<< HEAD
/**
 * @extends Factory<Log>
 */
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
class LogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<Log>
=======
     * @var class-string<Log>
<<<<<<< HEAD
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Log>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     */
    protected $model = Log::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // 'key' => $this->faker->word,
            // 'value' => $this->faker->text,
            // 'expiration' => $this->faker->randomNumber(5),
        ];
    }
}
