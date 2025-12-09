<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Class;

// use Modules\Xot\Services\ArrayService;
<<<<<<< HEAD
use Exception;
use ReflectionClass;
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
            $filename = base_path($filename).'.php';
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 5a14301c (.)
=======
            $filename = base_path($filename) . '.php';
>>>>>>> 3fbbf1f5 (.)
        }

        if (is_string($filename)) {
            return $filename;
        }
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('['.__LINE__.']['.class_basename($this).']['.$class_name.']');
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 5a14301c (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . '][' . $class_name . ']');
>>>>>>> 3fbbf1f5 (.)
    }
}
