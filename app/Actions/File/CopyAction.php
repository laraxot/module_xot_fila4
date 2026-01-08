<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class CopyAction
{
    use QueueableAction;

    public function execute(string $from, string $to): void
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
        if (! File::exists(\dirname($to))) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!File::exists(\dirname($to))) {
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
        if (! File::exists(\dirname($to))) {
>>>>>>> 285375c74 (.)
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
                Log::error(
                    'Caught exception: '.
                    $e->getMessage().
                    ' ['.__LINE__.']['.class_basename(static::class).']',
                );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (! File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0755, true, true);
            } catch (Exception $e) {
                dd('Caught exception: ', $e->getMessage(), '\n['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
            }
        }

        if (File::exists($to)) {
            return;
        }

        if (app()->runningInConsole()) {
            return;
        }

        // not rewite
        try {
            File::copy($from, $to);
        } catch (Exception $exception) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
            throw new Exception(
                'Unable to copy
                    from ['.
                $from.
                ']
                    to ['.
                $to.
                ']
                    message ['.
                $exception->getMessage().
                    ']',
                $exception->getCode(),
                $exception,
            );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            throw new Exception('Unable to copy
                    from ['.$from.']
                    to ['.$to.']
                    message ['.$exception->getMessage().']', $exception->getCode(), $exception);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
        }
    }
}
