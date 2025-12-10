<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Class;

// use Modules\Xot\Services\ArrayService;
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
use ReflectionClass;
use Exception;
use ReflectionClass;
use Exception;
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
>>>>>>> 2f3197ab (.)
            $filename = base_path($filename).'.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
            $filename = base_path($filename) . '.php';
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
            $filename = base_path($filename) . '.php';
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
>>>>>>> 2f3197ab (.)
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
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new \Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
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
>>>>>>> 2f3197ab (.)
    }
}
