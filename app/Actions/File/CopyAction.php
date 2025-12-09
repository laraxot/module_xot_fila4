<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Exception;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class CopyAction
{
    use QueueableAction;

    public function execute(string $from, string $to): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
                \Illuminate\Support\Facades\Log::error(
                    'Caught exception: '.
                    $e->getMessage().
                    ' ['.__LINE__.']['.class_basename(static::class).']',
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
        if (!File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
                dd(
                    'Caught exception: ',
                    $e->getMessage(),
                    '\n[' . __LINE__ . '][' . class_basename(static::class) . ']',
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                );
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
            throw new Exception(
                'Unable to copy
<<<<<<< HEAD
<<<<<<< HEAD
                    from ['.
                $from.
                ']
                    to ['.
                $to.
                ']
                    message ['.
                $exception->getMessage().
=======
=======
>>>>>>> 5a14301c (.)
                    from [' .
                $from .
                ']
                    to [' .
                $to .
                ']
                    message [' .
                $exception->getMessage() .
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    ']',
                $exception->getCode(),
                $exception,
            );
        }
    }
}
