<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Class;

// use Modules\Xot\Services\ArrayService;
<<<<<<< HEAD
use ReflectionClass;
use Exception;
=======
<<<<<<< HEAD
use ReflectionClass;
use Exception;
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;

class GetFilenameByClassnameAction
{
    use QueueableAction;

    public function execute(string $class_name): string
    {
        $filename = null;
        try {
            if (class_exists($class_name)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                $reflector = new ReflectionClass($class_name);
                $filename = $reflector->getFileName();
            }
        } catch (Exception $e) {
            $filename = str_replace('\\', '/', $class_name);
<<<<<<< HEAD
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
        }

        if (is_string($filename)) {
            return $filename;
        }
<<<<<<< HEAD
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
    }
}
