<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Session;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @extends Factory<Session>
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
class SessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @var class-string<Session>
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
