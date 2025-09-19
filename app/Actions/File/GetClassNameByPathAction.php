<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\file_get_contents;
use function Safe\preg_match;

<<<<<<< HEAD
=======
use function Safe\file_get_contents;
use function Safe\preg_match;

use Spatie\QueueableAction\QueueableAction;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
class GetClassNameByPathAction
{
    use QueueableAction;

    public function execute(string $path): string
    {
        $content = file_get_contents($path);

        preg_match('/namespace\s+(.+);/', $content, $namespaceMatch);
        preg_match('/class\s+(\w+)/', $content, $classMatch);

        $namespace = $namespaceMatch[1] ?? '';
        $className = $classMatch[1] ?? '';

<<<<<<< HEAD
<<<<<<< HEAD
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
=======
        $fullClassName = $namespace ? $namespace.'\\'.$className : $className;
>>>>>>> f1d4085 (.)
=======
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
>>>>>>> 73eab74 (.)

        return $fullClassName;
    }
}

/*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
 * $class = Str::of($path)
 * ->after(base_path('Modules'))
 * ->prepend('\Modules')
 * ->before('.php')
 * ->replace('/', '\\')
 * ->toString();
 */
<<<<<<< HEAD
=======
$class = Str::of($path)
                    ->after(base_path('Modules'))
                    ->prepend('\Modules')
                    ->before('.php')
                    ->replace('/', '\\')
                    ->toString();
                    */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
