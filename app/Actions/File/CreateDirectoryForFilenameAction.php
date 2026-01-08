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
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        if (! File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0o755, true, true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0o755, true, true);
=======
        if (! File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0755, true, true);
>>>>>>> f1d4085 (.)
=======
        if (!File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0o755, true, true);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
        }
    }
}
