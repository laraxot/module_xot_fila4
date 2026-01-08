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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        $view_dir = $pack_dir.'/'.$relative_path;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        $view_dir = $pack_dir.'/'.$relative_path;
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $view_dir = $pack_dir.'/'.$relative_path;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $view_dir = $pack_dir . '/' . $relative_path;
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> f1d4085 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)

        return str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
    }
}
