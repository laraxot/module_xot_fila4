<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b93ef594b4 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
