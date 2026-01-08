<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

namespace Modules\Xot\Actions\Array;

use Spatie\QueueableAction\QueueableAction;

use function Safe\file_put_contents;

class SavePhpArrayAction
{
    use QueueableAction;

    public function execute(array $data, string $filename): bool
    {
        $content = "<?php\n\nreturn ".var_export($data, true).";\n";

        return (bool) file_put_contents($filename, $content);
    }
}
>>>>>>> 50c0e1043 (.)
