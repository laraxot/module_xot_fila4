<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use stdClass;
>>>>>>> 5a14301c (.)
=======
use stdClass;
>>>>>>> 5a14301c (.)
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
<<<<<<< HEAD
<<<<<<< HEAD
use stdClass;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

// ----------- Requests ----------

/**
 * Class ModuleService.
 */
class ModuleService
{
    public string $name;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static ?self $_instance = null;
=======
    private static null|self $_instance = null;
>>>>>>> 5a14301c (.)
=======
    private static null|self $_instance = null;
>>>>>>> 3fbbf1f5 (.)
=======
    private static null|self $_instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $_instance = null;
=======
    private static ?self $_instance = null;
>>>>>>> a12f125f4a (.)
=======
    private static null|self $_instance = null;
>>>>>>> b93ef594b4 (.)
=======
    private static ?self $_instance = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    private static null|self $_instance = null;
>>>>>>> ca9324a4 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 5a14301c (.)

    /**
     * getInstance.
     *
     * this method will return instance of the class
     */
    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
>>>>>>> 5a14301c (.)
=======
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
>>>>>>> 5a14301c (.)
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
         * if (null == $module) {
         * return [];
         * }
         */
        $mod = Module::find($this->name);
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
=======
=======
>>>>>>> 5a14301c (.)
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
        if (null == $module) {
            return [];
        }
        */
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
        $mod = Module::find($this->name);
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

<<<<<<< HEAD
        $mod_path = $mod->getPath().'/Models';
>>>>>>> a12f125f4a (.)
=======
        $mod_path = $mod->getPath() . '/Models';
>>>>>>> b93ef594b4 (.)
=======
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 5a14301c (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 3fbbf1f5 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
>>>>>>> a12f125f4a (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> b93ef594b4 (.)
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> ca9324a4 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 5a14301c (.)
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $tmp = new stdClass;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
                $tmp = new stdClass();
>>>>>>> 5a14301c (.)
=======
                $tmp = new stdClass();
>>>>>>> 5a14301c (.)

                $name = mb_substr($filename, 0, -mb_strlen($ext));

                /**
                 * @var class-string
                 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $class = $ns.'\\'.$name;
                // Strict comparison using === between stdClass and null will always evaluate to false.

                // if ($tmp === null) {
                //    continue;
                // }
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
                $class = $ns . '\\' . $name;
                //Strict comparison using === between stdClass and null will always evaluate to false.

                //if ($tmp === null) {
                //    continue;
                //}
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;

                try {
                    $reflection_class = new ReflectionClass($tmp->class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    if (! $reflection_class->isAbstract()) {
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 5a14301c (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 3fbbf1f5 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 5a14301c (.)
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
