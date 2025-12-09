<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class CreateDirectoryForFilenameAction
{
    use QueueableAction;

    public function execute(string $filename): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! File::exists(\dirname($filename))) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        if (!File::exists(\dirname($filename))) {
>>>>>>> 5a14301c (.)
=======
        if (!File::exists(\dirname($filename))) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!File::exists(\dirname($filename))) {
>>>>>>> 5a14301c (.)
            File::makeDirectory(\dirname($filename), 0o755, true, true);
        }
    }
}
