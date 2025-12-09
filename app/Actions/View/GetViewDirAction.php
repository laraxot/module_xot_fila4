<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class GetViewDirAction
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
        $view_dir = $pack_dir.'/'.$relative_path;

        return str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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

        return $res;
>>>>>>> 5a14301c (.)
    }
}
