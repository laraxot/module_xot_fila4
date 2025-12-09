<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 73eab74 (.)
=======
>>>>>>> 849568d9 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
pace Database\Factories;
=======
?>
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
namespace Database\Factories;
>>>>>>> 5a14301c (.)
=======
pace Database\Factories;
>>>>>>> 849568d9 (.)
=======
pace Database\Factories;
=======
?>
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
namespace Database\Factories;
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
?>
namespace Database\Factories;
>>>>>>> 492d6d3c (.)
=======
?>
namespace Database\Factories;
=======
pace Database\Factories;
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
?>
namespace Database\Factories;
>>>>>>> 43d67f21 (.)
=======
?>
namespace Database\Factories;
=======
pace Database\Factories;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
?>
namespace Database\Factories;
>>>>>>> 5842a556 (.)
=======
?>
namespace Database\Factories;
>>>>>>> 5a14301c (.)
=======
pace Database\Factories;
>>>>>>> 849568d9 (.)
=======
pace Database\Factories;
=======
?>
namespace Database\Factories;
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
?>
namespace Database\Factories;
>>>>>>> 492d6d3c (.)
=======
?>
namespace Database\Factories;
=======
pace Database\Factories;
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)

use Illuminate\Database\Eloquent\Factories\Factory;
@isset($properties['remember_token'])
    use Illuminate\Support\Str;
@endisset
use {{ $reflection->getName() }};

class {{ $reflection->getShortName() }}Factory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = {{ $reflection->getShortName() }}::class;

/**
* Define the model's default state.
*
* @return array
*/
public function definition(): array
{
return [
@foreach ($properties as $name => $property)
    '{{ $name }}' => {!! $property !!},
@endforeach
];
}
}
