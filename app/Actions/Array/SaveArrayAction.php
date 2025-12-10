<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

<<<<<<< HEAD
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
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
        };
    }
}
