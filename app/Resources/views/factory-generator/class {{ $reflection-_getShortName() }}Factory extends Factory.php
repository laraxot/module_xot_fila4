<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 849568d9 (.)
<?php

declare(strict_types=1);

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
namespace Database\Factories;
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)

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
