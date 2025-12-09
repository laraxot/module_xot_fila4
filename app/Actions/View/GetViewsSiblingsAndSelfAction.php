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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
=======
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
>>>>>>> 3fbbf1f5 (.)
                continue;
            }

            $k = $file->getBasename('.blade.php');
            $views[$k] = $k;
        }

        return $views;
    }
}
