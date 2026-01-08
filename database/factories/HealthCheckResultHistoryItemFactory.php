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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
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
>>>>>>> 8b18e4bff (.)
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
>>>>>>> 285375c74 (.)
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
        return $this->state(fn (array $_attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3fbbf1f5 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> a12f125f4a (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> b93ef594b4 (.)
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> ca9324a4 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> ca9324a4 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            'status' => 'ok',
            'notification_message' => null,
        ]);
    }

    public function failed(): static
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
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
>>>>>>> 8b18e4bff (.)
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
>>>>>>> 285375c74 (.)
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
        return $this->state(fn (array $_attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3fbbf1f5 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> a12f125f4a (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> b93ef594b4 (.)
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> ca9324a4 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> ca9324a4 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            'status' => 'failed',
            'notification_message' => $this->faker->sentence(),
        ]);
    }
}
