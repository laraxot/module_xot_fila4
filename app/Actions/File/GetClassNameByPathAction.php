<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;

use function Safe\file_get_contents;
use function Safe\preg_match;

=======
use function Safe\file_get_contents;
use function Safe\preg_match;

use Spatie\QueueableAction\QueueableAction;

>>>>>>> f1d4085 (.)
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
        return $namespace ? ($namespace.'\\'.$className) : $className;
=======
=======
>>>>>>> 3fbbf1f5 (.)
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
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
=======
        $fullClassName = $namespace ? $namespace.'\\'.$className : $className;
>>>>>>> f1d4085 (.)

        return $fullClassName;
>>>>>>> 5a14301c (.)
=======
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;

        return $fullClassName;
>>>>>>> 5a14301c (.)
=======
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;

        return $fullClassName;
>>>>>>> 5a14301c (.)
    }
}

/*
<<<<<<< HEAD
 * $class = Str::of($path)
 * ->after(base_path('Modules'))
 * ->prepend('\Modules')
 * ->before('.php')
 * ->replace('/', '\\')
 * ->toString();
 */
=======
$class = Str::of($path)
                    ->after(base_path('Modules'))
                    ->prepend('\Modules')
                    ->before('.php')
                    ->replace('/', '\\')
                    ->toString();
                    */
>>>>>>> f1d4085 (.)
