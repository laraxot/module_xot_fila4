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
=======
=======
=======
>>>>>>> origin/develop
use function Safe\file_get_contents;
use function Safe\preg_match;

use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\file_get_contents;
use function Safe\preg_match;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        return $namespace ? ($namespace.'\\'.$className) : $className;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5a14301c (.)
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
$class = Str::of($path)
                    ->after(base_path('Modules'))
                    ->prepend('\Modules')
                    ->before('.php')
                    ->replace('/', '\\')
                    ->toString();
                    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
