<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Feed;

<<<<<<< HEAD
/**
 * @extends Factory<Feed>
 */
=======
>>>>>>> 5a14301c (.)
class FeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<Feed>
=======
     * @var class-string<Model>
>>>>>>> 5a14301c (.)
     */
    protected $model = Feed::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // 'created_at' => $this->faker->dateTime,
            // 'updated_at' => $this->faker->dateTime,
        ];
    }
}
