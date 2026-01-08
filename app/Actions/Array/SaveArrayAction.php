<?php

declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 50c0e1043 (.)

namespace Modules\Xot\Actions\Array;

use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;

class SaveArrayAction
{
    use QueueableAction;

    public function execute(array $data, string $filename, string $format = 'php'): bool
    {
        return match ($format) {
            'json' => app(SaveJsonArrayAction::class)->execute($data, $filename),
            'php' => app(SavePhpArrayAction::class)->execute($data, $filename),
            default => throw new InvalidArgumentException("Formato non supportato: {$format}"),
        };
    }
}
<<<<<<< HEAD
>>>>>>> c35185e63 (.)
=======
>>>>>>> 50c0e1043 (.)
