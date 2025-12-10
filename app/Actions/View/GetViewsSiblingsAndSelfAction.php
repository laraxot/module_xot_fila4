<?php

declare(strict_types=1);

/**
 * All the parent's children.
 */

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class GetViewsSiblingsAndSelfAction
{
    use QueueableAction;

    /**
     * ---.
     *
     * @return array<string,string>
     */
    public function execute(string $view): array
    {
        $path = app(GetViewPathAction::class)->execute($view);

        $dir = \dirname($path);
        $files = File::files($dir);
        $views = [];
        foreach ($files as $file) {
<<<<<<< HEAD
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
=======
=======
=======
>>>>>>> 091f883c (.)
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 5a14301c (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 399f46d3 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 17684f52 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 399f46d3 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
=======
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> a12f125f4a (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> b93ef594b4 (.)
=======
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> ca9324a4 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
=======
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
<<<<<<< HEAD
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
=======
>>>>>>> ca9324a4 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
=======
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
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
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                continue;
            }

            $k = $file->getBasename('.blade.php');
            $views[$k] = $k;
        }

        return $views;
    }
}
