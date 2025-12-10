<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

<<<<<<< HEAD
use function Safe\file_put_contents;
=======
<<<<<<< HEAD
use function Safe\file_put_contents;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        return (bool) file_put_contents($filename, $content);
=======
<<<<<<< HEAD
        return (bool) file_put_contents($filename, $content);
=======
        return (bool) \Safe\file_put_contents($filename, $content);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
