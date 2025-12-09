<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
use stdClass;
>>>>>>> 5a14301c (.)
use Exception;
=======
<<<<<<< HEAD
use stdClass;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
<<<<<<< HEAD
use stdClass;
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
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        if (!(self::$_instance instanceof self)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!(self::$_instance instanceof self)) {
=======
        if (! self::$_instance instanceof self) {
>>>>>>> a12f125f4a (.)
=======
        if (!(self::$_instance instanceof self)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! self::$_instance instanceof self) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * if (null == $module) {
         * return [];
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $mod = Module::find($this->name);
<<<<<<< HEAD
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
=======
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
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
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
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
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
<<<<<<< HEAD
<<<<<<< HEAD
                $tmp = new stdClass;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
                $tmp = new stdClass();
>>>>>>> 5a14301c (.)

                $name = mb_substr($filename, 0, -mb_strlen($ext));

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                /**
                 * @var class-string
                 */
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
                $class = $ns . '\\' . $name;
<<<<<<< HEAD
=======
=======
=======
                $tmp = new \stdClass();

                $name = mb_substr($filename, 0, -mb_strlen($ext));

>>>>>>> origin/develop
                
                /**
                 * @var class-string
                 */
                $class = $ns.'\\'.$name;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                /**
                 * @var class-string
                 */
                $class = $ns . '\\' . $name;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                //Strict comparison using === between stdClass and null will always evaluate to false.

                //if ($tmp === null) {
                //    continue;
                //}
>>>>>>> 5a14301c (.)
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;

                try {
<<<<<<< HEAD
                    $reflection_class = new ReflectionClass($tmp->class);
<<<<<<< HEAD
<<<<<<< HEAD
                    if (! $reflection_class->isAbstract()) {
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 5a14301c (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 3fbbf1f5 (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
=======
<<<<<<< HEAD
                    $reflection_class = new ReflectionClass($tmp->class);
<<<<<<< HEAD
<<<<<<< HEAD
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> a12f125f4a (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> b93ef594b4 (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
=======
                    $reflection_class = new \ReflectionClass($tmp->class);
                    if (! $reflection_class->isAbstract()) {
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (\Exception) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                    // Ignore reflection errors
                }
            }
        }

        return $data;
    }
}
