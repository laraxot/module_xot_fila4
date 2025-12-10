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
>>>>>>> 2f3197ab (.)
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (!Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
            if (! Str::endsWith($file->getFilename(), '.blade.php')) {
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
>>>>>>> 2f3197ab (.)
                continue;
            }

            $k = $file->getBasename('.blade.php');
            $views[$k] = $k;
        }

        return $views;
    }
}
