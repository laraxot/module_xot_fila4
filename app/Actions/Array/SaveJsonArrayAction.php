<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use function Safe\json_encode;
use function Safe\file_put_contents;
=======
<<<<<<< HEAD
use function Safe\json_encode;
use function Safe\file_put_contents;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class SaveJsonArrayAction
{
    use QueueableAction;

    public function execute(array $data, string $filename): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $content = json_encode($data, JSON_PRETTY_PRINT);
        //if ($content === false) {
        //    return false;
        //}
        return (bool) file_put_contents($filename, $content);
<<<<<<< HEAD
=======
=======
        $content = \Safe\json_encode($data, JSON_PRETTY_PRINT);
        //if ($content === false) {
        //    return false;
        //}
        return (bool) \Safe\file_put_contents($filename, $content);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
