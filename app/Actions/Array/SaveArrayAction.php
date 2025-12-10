<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use InvalidArgumentException;
>>>>>>> 091f883c (.)
=======
use InvalidArgumentException;
>>>>>>> 80bc07e81 (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class SaveArrayAction
{
    use QueueableAction;

    public function execute(array $data, string $filename, string $format = 'php'): bool
    {
        return match ($format) {
            'json' => app(SaveJsonArrayAction::class)->execute($data, $filename),
            'php' => app(SavePhpArrayAction::class)->execute($data, $filename),
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
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            default => throw new \InvalidArgumentException("Formato non supportato: {$format}")
=======
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> a12f125f4a (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> b93ef594b4 (.)
=======
            default => throw new \InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> f1d4085 (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> 80bc07e81 (.)
        };
    }
}
