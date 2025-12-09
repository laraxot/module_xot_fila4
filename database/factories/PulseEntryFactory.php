<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Xot\Models\PulseEntry;

/**
 * @extends Factory<PulseEntry>
 */
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
use Modules\Xot\Models\PulseEntry;
=======
<<<<<<< HEAD
use Modules\Xot\Models\PulseEntry;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Models\PulseEntry;
use Illuminate\Database\Eloquent\Factories\Factory;

>>>>>>> 5a14301c (.)
class PulseEntryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @var class-string<PulseEntry>
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
<<<<<<< HEAD
    protected $model = PulseEntry::class;
=======
<<<<<<< HEAD
    protected $model = PulseEntry::class;
=======
    protected $model = \Modules\Xot\Models\PulseEntry::class;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
<<<<<<< HEAD
        return [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return [];
=======
        return [
        ];
>>>>>>> a12f125f4a (.)
=======
        return [];
>>>>>>> b93ef594b4 (.)
=======
        return [
        ];
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
