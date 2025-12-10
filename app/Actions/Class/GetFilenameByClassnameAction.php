<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Class;

// use Modules\Xot\Services\ArrayService;
<<<<<<< HEAD
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
use Exception;
use ReflectionClass;
=======
>>>>>>> ce6fc085 (.)
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
<<<<<<< HEAD
use ReflectionClass;
use Exception;
=======
>>>>>>> 399f46d3 (.)
=======
use ReflectionClass;
use Exception;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use ReflectionClass;
use Exception;
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
<<<<<<< HEAD
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
                $reflector = new \ReflectionClass($class_name);
                $filename = $reflector->getFileName();
            }
        } catch (\Exception $e) {
            $filename = str_replace('\\', '/', $class_name);
            $filename = base_path($filename).'.php';
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
<<<<<<< HEAD
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
=======
>>>>>>> ca9324a4 (.)
=======
            $filename = base_path($filename) . '.php';
=======
            $filename = base_path($filename).'.php';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        }

        if (is_string($filename)) {
            return $filename;
        }
<<<<<<< HEAD
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
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
=======
>>>>>>> 2f3197ab (.)
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new \Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
<<<<<<< HEAD
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    }
}
