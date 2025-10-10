<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> f1d4085 (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)

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
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
