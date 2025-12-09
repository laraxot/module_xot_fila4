<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        if (!File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
                dd(
                    'Caught exception: ',
                    $e->getMessage(),
                    '\n[' . __LINE__ . '][' . class_basename(static::class) . ']',
>>>>>>> 5a14301c (.)
                );
<<<<<<< HEAD
=======
=======
        if (! File::exists(\dirname($to))) {
=======
        if (!File::exists(\dirname($to))) {
>>>>>>> b93ef594b4 (.)
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
<<<<<<< HEAD
                dd('Caught exception: ', $e->getMessage(), '\n['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> a12f125f4a (.)
=======
                dd(
                    'Caught exception: ',
                    $e->getMessage(),
                    '\n[' . __LINE__ . '][' . class_basename(static::class) . ']',
                );
>>>>>>> b93ef594b4 (.)
=======
        if (! File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0755, true, true);
            } catch (\Exception $e) {
                dd('Caught exception: ', $e->getMessage(), '\n['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
        } catch (Exception $exception) {
=======
<<<<<<< HEAD
        } catch (Exception $exception) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            throw new Exception(
                'Unable to copy
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
                    from [' .
                $from .
                ']
                    to [' .
                $to .
                ']
                    message [' .
                $exception->getMessage() .
>>>>>>> 5a14301c (.)
                    ']',
                $exception->getCode(),
                $exception,
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            throw new Exception('Unable to copy
                    from ['.$from.']
                    to ['.$to.']
                    message ['.$exception->getMessage().']', $exception->getCode(), $exception);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $exception) {
            throw new \Exception('Unable to copy
                    from ['.$from.']
                    to ['.$to.']
                    message ['.$exception->getMessage().']', $exception->getCode(), $exception);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
    }
}
