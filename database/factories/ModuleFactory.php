<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\Module;

/**
 * Module Factory
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
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
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 53d6a6ba (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 71586de2 (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 249a0067 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
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
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 53d6a6ba (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 71586de2 (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 249a0067 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
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
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 399f46d3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 53d6a6ba (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        return $this->state(fn (array $_attributes): array => [
>>>>>>> 71586de2 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 5a14301c (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
            'priority' => $this->faker->numberBetween(80, 100),
        ]);
    }
}
