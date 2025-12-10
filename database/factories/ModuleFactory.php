<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\Module;

/**
 * Module Factory
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
            'is_active' => true,
        ]);
    }

    public function inactive(): static
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
            'is_active' => false,
        ]);
    }

    public function highPriority(): static
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
            'priority' => $this->faker->numberBetween(80, 100),
        ]);
    }
}
