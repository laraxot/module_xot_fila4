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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
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
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> f1d4085 (.)

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
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 399f46d3 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 399f46d3 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 17684f52 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $view_dir = $pack_dir.'/'.$relative_path;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $view_dir = $pack_dir.'/'.$relative_path;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> b7afadf9 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> 53d6a6ba (.)
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> 71586de2 (.)
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

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
