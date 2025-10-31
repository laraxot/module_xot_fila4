<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
use stdClass;

// ----------- Requests ----------

/**
 * Class ModuleService.
 */
class ModuleService
{
    public string $name;

<<<<<<< HEAD
    private static ?self $_instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    private static ?self $_instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $_instance = null;
=======
    private static ?self $_instance = null;
>>>>>>> f1d4085 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

    /**
     * getInstance.
     *
     * this method will return instance of the class
     */
    public static function getInstance(): self
    {
<<<<<<< HEAD
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
        }

        return self::$_instance;
    }

    /**
     * Undocumented function.
     */
    public static function make(): self
    {
        return static::getInstance();
    }

    /**
     * Undocumented function.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get models for the module.
     *
     * @return array<string, class-string>
     */
    public function getModels(): array
    {
        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
         * if (null == $module) {
         * return [];
         * }
         */
        $mod = Module::find($this->name);
<<<<<<< HEAD
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
=======
<<<<<<< HEAD
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
=======
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (null == $module) {
            return [];
        }
        */
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
>>>>>>> d2b0a27 (.)
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
<<<<<<< HEAD
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
>>>>>>> f1d4085 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
                $tmp = new stdClass;

                $name = mb_substr($filename, 0, -mb_strlen($ext));

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
                /**
                 * @var class-string
                 */
<<<<<<< HEAD
                $class = $ns.'\\'.$name;
                // Strict comparison using === between stdClass and null will always evaluate to false.
=======
                $class = $ns . '\\' . $name;
<<<<<<< HEAD
<<<<<<< HEAD
=======
                
>>>>>>> d2b0a27 (.)
                /**
                 * @var class-string
                 */
                $class = $ns.'\\'.$name;
<<<<<<< HEAD
                // Strict comparison using === between stdClass and null will always evaluate to false.
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
                //Strict comparison using === between stdClass and null will always evaluate to false.
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)

                // if ($tmp === null) {
                //    continue;
                // }
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;

                try {
                    $reflection_class = new ReflectionClass($tmp->class);
<<<<<<< HEAD
                    if (! $reflection_class->isAbstract()) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
                    if (! $reflection_class->isAbstract()) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
                    // Ignore reflection errors
                }
            }
        }

        return $data;
    }
}
