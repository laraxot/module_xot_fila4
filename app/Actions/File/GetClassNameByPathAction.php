<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\file_get_contents;
use function Safe\preg_match;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
use function Safe\file_get_contents;
use function Safe\preg_match;

use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\file_get_contents;
use function Safe\preg_match;

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? ($namespace.'\\'.$className) : $className;
        $fullClassName = $namespace ? ($namespace.'\\'.$className) : $className;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? $namespace.'\\'.$className : $className;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? ($namespace.'\\'.$className) : $className;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? ($namespace.'\\'.$className) : $className;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? ($namespace.'\\'.$className) : $className;
        $fullClassName = $namespace ? ($namespace.'\\'.$className) : $className;

        return $fullClassName;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
        $fullClassName = $namespace ? $namespace.'\\'.$className : $className;

        return $fullClassName;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;

        return $fullClassName;
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
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
=======
        $fullClassName = $namespace ? $namespace.'\\'.$className : $className;
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
=======
        $fullClassName = $namespace ? $namespace.'\\'.$className : $className;
>>>>>>> a12f125f4a (.)
=======
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;
>>>>>>> b93ef594b4 (.)
=======
        $fullClassName = $namespace ? $namespace.'\\'.$className : $className;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $fullClassName;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;

        return $fullClassName;
        $fullClassName = $namespace ? ($namespace . '\\' . $className) : $className;

        return $fullClassName;
    }
}

/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
 * $class = Str::of($path)
 * ->after(base_path('Modules'))
 * ->prepend('\Modules')
 * ->before('.php')
 * ->replace('/', '\\')
 * ->toString();
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
$class = Str::of($path)
                    ->after(base_path('Modules'))
                    ->prepend('\Modules')
                    ->before('.php')
                    ->replace('/', '\\')
                    ->toString();
                    */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
