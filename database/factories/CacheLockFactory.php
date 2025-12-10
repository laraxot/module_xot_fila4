<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\CacheLock;

/**
 * @extends Factory<CacheLock>
 */
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @extends Factory<CacheLock>
 */
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
class CacheLockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<CacheLock>
<<<<<<< HEAD
<<<<<<< HEAD
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<CacheLock>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     */
    protected $model = CacheLock::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'key' => $this->faker->word,
            'owner' => $this->faker->word,
            'expiration' => $this->faker->randomNumber(5),
        ];
    }
}
