<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

/**
 * HealthCheckResultHistoryItem Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
 *
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
                'CacheCheck',
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'CacheCheck',
=======
                'CacheCheck', 
>>>>>>> f1d4085 (.)
=======
                'CacheCheck',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                'CacheCheck',
>>>>>>> 300ef70 (.)
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
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            'status' => 'ok',
            'notification_message' => null,
        ]);
    }

    public function failed(): static
    {
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            'status' => 'failed',
            'notification_message' => $this->faker->sentence(),
        ]);
    }
}
