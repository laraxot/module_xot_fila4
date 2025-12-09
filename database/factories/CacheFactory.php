<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Cache;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @extends Factory<Cache>
 */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
class CacheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var class-string<Cache>
=======
     * @var class-string<Model>
>>>>>>> 5a14301c (.)
=======
     * @var class-string<Model>
>>>>>>> 5a14301c (.)
=======
     * @var class-string<Model>
>>>>>>> 5a14301c (.)
=======
     * @var class-string<Model>
>>>>>>> 5a14301c (.)
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
