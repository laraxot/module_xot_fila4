<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\Module;

/**
 * Module Factory
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @extends Factory<Module>
 */
class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'version' => $this->faker->semver(),
            'description' => $this->faker->sentence(),
            'is_active' => $this->faker->boolean(80),
            'priority' => $this->faker->numberBetween(1, 100),
        ];
    }

    public function active(): static
    {
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
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
            'is_active' => true,
        ]);
    }

    public function inactive(): static
    {
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
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
            'is_active' => false,
        ]);
    }

    public function highPriority(): static
    {
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
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
            'priority' => $this->faker->numberBetween(80, 100),
        ]);
    }
}
