<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8cf76e7 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 8cf76e7 (.)
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
