<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Faker\Generator as Faker;
@isset($properties['remember_token'])
    use Illuminate\Support\Str;
@endisset

/* @var $factory \Illuminate\Database\Eloquent\Factory */
$factory->define({{ $reflection->getName() }}::class, function (Faker $faker) {
return [
@foreach ($properties as $name => $property)
    '{{ $name }}' => {!! $property !!},
@endforeach
];
});
