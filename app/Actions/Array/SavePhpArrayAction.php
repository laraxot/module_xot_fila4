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
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\VarExporter\VarExporter;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class SavePhpArrayAction
{
    use QueueableAction;

    public function execute(array $data, string $filename): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $exported = VarExporter::export($data);
        //$exported = var_export($data, true);
        $content = "<?php\n\ndeclare(strict_types=1);\n\nreturn " . $exported . ";\n";
=======
        $content = "<?php\n\nreturn " . var_export($data, true) . ";\n";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        $content = "<?php\n\nreturn " . var_export($data, true) . ";\n";
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
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
