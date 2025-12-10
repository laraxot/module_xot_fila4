<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

/**
 * HealthCheckResultHistoryItem Factory
<<<<<<< HEAD
 *
<<<<<<< HEAD
 *
 *
 *
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
                'CacheCheck',
<<<<<<< HEAD
                'CacheCheck',
                'CacheCheck',
                'CacheCheck',
                'CacheCheck', 
=======
=======
                'CacheCheck', 
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
>>>>>>> 2f3197ab (.)
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
>>>>>>> 2f3197ab (.)
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
>>>>>>> 2f3197ab (.)
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
>>>>>>> 2f3197ab (.)
            'status' => 'failed',
            'notification_message' => $this->faker->sentence(),
        ]);
    }
}
