<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

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
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}")
>>>>>>> f1d4085 (.)
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        };
    }
}
