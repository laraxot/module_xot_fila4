<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
=======
=======
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 551c768c4 (.)
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> a6ef6dc7 (.)
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 5cf46378 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
use Modules\Xot\Actions\View\GetViewNameSpacePathAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 414a4ffcb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir . '/' . $relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        $view_dir = $pack_dir.'/'.$relative_path;
        $view_dir = $pack_dir.'/'.$relative_path;
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $view_dir = $pack_dir . '/' . $relative_path;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> 551c768c4 (.)
=======
        $view_dir = $pack_dir.'/'.$relative_path;
>>>>>>> 414a4ffcb (.)

        $res = str_replace('/', \DIRECTORY_SEPARATOR, $view_dir);
        $res .= '.blade.php';

        return $res;
    }
}
