<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use function Safe\file_put_contents;
>>>>>>> 80bc07e81 (.)
=======
use function Safe\file_put_contents;
>>>>>>> 414a4ffcb (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class SavePhpArrayAction
{
    use QueueableAction;

    public function execute(array $data, string $filename): bool
    {
        $content = "<?php\n\nreturn " . var_export($data, true) . ";\n";
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return (bool) file_put_contents($filename, $content);
>>>>>>> 80bc07e81 (.)
=======
        return (bool) file_put_contents($filename, $content);
>>>>>>> 414a4ffcb (.)
    }
}
