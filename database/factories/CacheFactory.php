<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Cache;

<<<<<<< HEAD
/**
 * @extends Factory<Cache>
 */
=======
/**
 * @extends Factory<Cache>
 */
<<<<<<< HEAD
/**
 * @extends Factory<Cache>
 */
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
class CacheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<Cache>
=======
     * @var class-string<Cache>
<<<<<<< HEAD
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Cache>
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
    protected $model = Cache::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'key' => $this->faker->word,
            'value' => $this->faker->text,
            'expiration' => $this->faker->randomNumber(5),
        ];
    }
}
