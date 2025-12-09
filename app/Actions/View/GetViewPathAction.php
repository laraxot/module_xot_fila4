<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> 3fbbf1f5 (.)
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
        $view_dir = $pack_dir.'/'.$relative_path;
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 5a14301c (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 3fbbf1f5 (.)

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
