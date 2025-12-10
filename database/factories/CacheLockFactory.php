<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\CacheLock;

<<<<<<< HEAD
/**
 * @extends Factory<CacheLock>
 */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @extends Factory<CacheLock>
 */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
class CacheLockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<CacheLock>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var class-string<CacheLock>
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
=======
     * @var class-string<Model>
>>>>>>> 5a14301c (.)
=======
     * @var class-string<Model>
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
