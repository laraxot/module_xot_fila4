<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Exception;
>>>>>>> 091f883c (.)
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class CopyAction
{
    use QueueableAction;

    public function execute(string $from, string $to): void
    {
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        if (! File::exists(\dirname($to))) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!File::exists(\dirname($to))) {
>>>>>>> d2b0a27 (.)
=======
        if (! File::exists(\dirname($to))) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        if (!File::exists(\dirname($to))) {
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
                \Illuminate\Support\Facades\Log::error(
                    'Caught exception: '.
                    $e->getMessage().
                    ' ['.__LINE__.']['.class_basename(static::class).']',
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        if (!File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
                dd(
                    'Caught exception: ',
                    $e->getMessage(),
                    '\n[' . __LINE__ . '][' . class_basename(static::class) . ']',
=======
>>>>>>> 551c768c4 (.)
                );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            try {
                File::makeDirectory(\dirname($to), 0o755, true, true);
            } catch (Exception $e) {
=======
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
>>>>>>> ce6fc085 (.)
                dd(
                    'Caught exception: ',
                    $e->getMessage(),
                    '\n[' . __LINE__ . '][' . class_basename(static::class) . ']',
                );
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        if (! File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0755, true, true);
            } catch (\Exception $e) {
                dd('Caught exception: ', $e->getMessage(), '\n['.__LINE__.']['.class_basename(static::class).']');
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        if (! File::exists(\dirname($to))) {
            try {
                File::makeDirectory(\dirname($to), 0755, true, true);
            } catch (Exception $e) {
                dd('Caught exception: ', $e->getMessage(), '\n['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
        } catch (Exception $exception) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
        } catch (Exception $exception) {
=======
<<<<<<< HEAD
        } catch (Exception $exception) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        } catch (Exception $exception) {
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
                    from [' .
                $from .
                ']
                    to [' .
                $to .
                ']
                    message [' .
                $exception->getMessage() .
=======
>>>>>>> 551c768c4 (.)
                    ']',
                $exception->getCode(),
                $exception,
            );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (\Exception $exception) {
            throw new \Exception('Unable to copy
                    from ['.$from.']
                    to ['.$to.']
                    message ['.$exception->getMessage().']', $exception->getCode(), $exception);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
            throw new Exception('Unable to copy
                    from ['.$from.']
                    to ['.$to.']
                    message ['.$exception->getMessage().']', $exception->getCode(), $exception);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        }
    }
}
