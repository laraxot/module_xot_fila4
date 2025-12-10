<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\file;

use function Safe\file;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

=======
use ReflectionClass;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
use ReflectionClass;
=======
<<<<<<< HEAD
use ReflectionClass;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use ReflectionClass;
>>>>>>> 091f883c (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\file;

class GetMethodBodyAction
{
    use QueueableAction;

    public function execute(string $class_name, string $method_name): string
    {
        Assert::classExists($class_name);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $reflection_class = new ReflectionClass($class_name);
=======
<<<<<<< HEAD
        $reflection_class = new ReflectionClass($class_name);
=======
        $reflection_class = new \ReflectionClass($class_name);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        $reflection_class = new ReflectionClass($class_name);
>>>>>>> 091f883c (.)
        $table_method = $reflection_class->getMethod($method_name);
        $start_line = $table_method->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
        $end_line = $table_method->getEndLine();
        $length = $end_line - $start_line;
        Assert::string($file_name = $table_method->getFileName());
        $source = file($file_name);
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
        $body = implode('', \array_slice($source, $start_line, $length));

        return $body;
    }
}
