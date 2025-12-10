<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
=======
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

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
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
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
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
<<<<<<< HEAD
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
=======
>>>>>>> ca9324a4 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
