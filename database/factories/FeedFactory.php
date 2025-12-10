<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Feed;

/**
 * @extends Factory<Feed>
 */
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @extends Factory<Feed>
 */
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
class FeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Feed>
<<<<<<< HEAD
<<<<<<< HEAD
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Model>
     * @var class-string<Feed>
     * @var class-string<Model>
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
