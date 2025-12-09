<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Class;

// use Modules\Xot\Services\ArrayService;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use ReflectionClass;
=======
use ReflectionClass;
use Exception;
>>>>>>> 5a14301c (.)
=======
use ReflectionClass;
use Exception;
=======
<<<<<<< HEAD
use ReflectionClass;
use Exception;
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use ReflectionClass;
use Exception;
>>>>>>> ca9324a4 (.)
=======
use ReflectionClass;
use Exception;
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;

class GetFilenameByClassnameAction
{
    use QueueableAction;

    public function execute(string $class_name): string
    {
        $filename = null;
        try {
            if (class_exists($class_name)) {
                $reflector = new ReflectionClass($class_name);
                $filename = $reflector->getFileName();
            }
        } catch (Exception $e) {
            $filename = str_replace('\\', '/', $class_name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $filename = base_path($filename).'.php';
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 5a14301c (.)
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 3fbbf1f5 (.)
=======
            $filename = base_path($filename) . '.php';
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $filename = base_path($filename) . '.php';
=======
            $filename = base_path($filename).'.php';
>>>>>>> a12f125f4a (.)
=======
            $filename = base_path($filename) . '.php';
>>>>>>> b93ef594b4 (.)
=======
                $reflector = new \ReflectionClass($class_name);
                $filename = $reflector->getFileName();
            }
        } catch (\Exception $e) {
            $filename = str_replace('\\', '/', $class_name);
            $filename = base_path($filename).'.php';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            $filename = base_path($filename) . '.php';
>>>>>>> ca9324a4 (.)
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            $filename = base_path($filename) . '.php';
=======
            $filename = base_path($filename).'.php';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
        }

        if (is_string($filename)) {
            return $filename;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 5a14301c (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 3fbbf1f5 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
>>>>>>> a12f125f4a (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> b93ef594b4 (.)
=======
        throw new \Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> ca9324a4 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    }
}
