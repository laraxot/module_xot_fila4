<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

/**
 * HealthCheckResultHistoryItem Factory
 *
<<<<<<< HEAD
<<<<<<< HEAD
 *
 *
 *
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
 * @extends Factory<HealthCheckResultHistoryItem>
 */
class HealthCheckResultHistoryItemFactory extends Factory
{
    protected $model = HealthCheckResultHistoryItem::class;

    public function definition(): array
    {
        return [
            'check_name' => $this->faker->randomElement([
                'DatabaseCheck',
                'CacheCheck',
<<<<<<< HEAD
<<<<<<< HEAD
                'CacheCheck',
                'CacheCheck',
                'CacheCheck',
                'CacheCheck', 
=======
=======
                'CacheCheck', 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                'CacheCheck',
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
                'QueueCheck',
                'StorageCheck',
                'MemoryCheck',
            ]),
            'check_label' => $this->faker->words(3, true),
            'status' => $this->faker->randomElement(['ok', 'warning', 'failed']),
            'notification_message' => $this->faker->optional()->sentence(),
            'short_summary' => $this->faker->words(5, true),
            'meta' => [
                'execution_time' => $this->faker->randomFloat(2, 0.1, 5.0),
                'memory_usage' => $this->faker->numberBetween(1024, 1048576),
            ],
            'ended_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ];
    }

    public function ok(): static
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
=======
>>>>>>> ca9324a4 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
            'status' => 'ok',
            'notification_message' => null,
        ]);
    }

    public function failed(): static
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn (array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn (array $attributes): array => [
        return $this->state(fn(array $_attributes): array => [
        return $this->state(fn(array $_attributes): array => [
=======
>>>>>>> ca9324a4 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
            'status' => 'failed',
            'notification_message' => $this->faker->sentence(),
        ]);
    }
}
