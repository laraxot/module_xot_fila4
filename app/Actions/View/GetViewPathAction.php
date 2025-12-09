<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 3fbbf1f5 (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;

class GetViewPathAction
{
    use QueueableAction;

    /**
     * ---.
     */
    public function execute(string $view): string
    {
        $ns = Str::before($view, '::');
        $relative_path = str_replace('.', '/', Str::after($view, '::'));
        $pack_dir = app(GetViewNameSpacePathAction::class)->execute($ns);
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
        $view_dir = $pack_dir.'/'.$relative_path;
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 5a14301c (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 3fbbf1f5 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 399f46d3 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> a12f125f4a (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> b93ef594b4 (.)
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> ca9324a4 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> ca9324a4 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 9db27d12 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 5a14301c (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 3fbbf1f5 (.)

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
