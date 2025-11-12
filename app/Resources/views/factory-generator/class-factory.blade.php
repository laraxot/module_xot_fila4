<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<?php

declare(strict_types=1);

/** @var \ReflectionClass $reflection */
/** @var array<string, string> $properties */

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<?php if (array_key_exists('remember_token', $properties)): ?>
use Illuminate\Support\Str;
<?php endif; ?>
use <?= $reflection->getName(); ?>;

class <?= $reflection->getShortName(); ?>Factory extends Factory
{
    /**
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = <?= $reflection->getShortName(); ?>::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<?php foreach ($properties as $name => $property): ?>
            '<?= $name ?>' => <?= $property ?>,
<?php endforeach; ?>
        ];
    }
}
