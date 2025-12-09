<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

<<<<<<< HEAD
use ReflectionClass;
=======
<<<<<<< HEAD
use ReflectionClass;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\file;

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use function Safe\file;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\file;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
class GetMethodBodyAction
{
    use QueueableAction;

    public function execute(string $class_name, string $method_name): string
    {
        Assert::classExists($class_name);
<<<<<<< HEAD
        $reflection_class = new ReflectionClass($class_name);
=======
<<<<<<< HEAD
        $reflection_class = new ReflectionClass($class_name);
=======
        $reflection_class = new \ReflectionClass($class_name);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $table_method = $reflection_class->getMethod($method_name);
        $start_line = $table_method->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
        $end_line = $table_method->getEndLine();
        $length = $end_line - $start_line;
        Assert::string($file_name = $table_method->getFileName());
        $source = file($file_name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return implode('', \array_slice($source, $start_line, $length));
=======
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
>>>>>>> 5a14301c (.)
=======
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
>>>>>>> 5a14301c (.)
=======
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
>>>>>>> 5a14301c (.)
=======
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
>>>>>>> 5a14301c (.)
    }
}
