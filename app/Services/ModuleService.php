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
    private static null|self $_instance = null;
>>>>>>> 399f46d3 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    private static null|self $_instance = null;
>>>>>>> ca9324a4 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
    private static ?self $_instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    private static ?self $_instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
    private static null|self $_instance = null;
=======
    private static ?self $_instance = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    private static null|self $_instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    private static null|self $_instance = null;
>>>>>>> ca9324a4 (.)
=======
    private static null|self $_instance = null;
=======
    private static ?self $_instance = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    private static null|self $_instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    private static null|self $_instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
    private static null|self $_instance = null;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    private static ?self $_instance = null;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
    private static null|self $_instance = null;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

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
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
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
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
>>>>>>> 5a14301c (.)
=======
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!(self::$_instance instanceof self)) {
=======
        if (! self::$_instance instanceof self) {
>>>>>>> f1d4085 (.)
=======
        if (!(self::$_instance instanceof self)) {
>>>>>>> 73eab74 (.)
            self::$_instance = new self();
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
         * if (null == $module) {
         * return [];
         * }
         */
        $mod = Module::find($this->name);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
=======
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
<<<<<<< HEAD
=======
        if (null == $module) {
            return [];
        }
        */
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
>>>>>>> 285375c74 (.)
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
=======
>>>>>>> b7afadf9 (.)
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> b7afadf9 (.)
        if (null == $module) {
            return [];
        }
        */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
=======
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
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
>>>>>>> 8b18e4bff (.)
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
>>>>>>> 285375c74 (.)
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
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 399f46d3 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> ca9324a4 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> ca9324a4 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
=======
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
>>>>>>> 8b18e4bff (.)
                /**
                 * @var class-string
                 */
                $class = $ns . '\\' . $name;
<<<<<<< HEAD
=======
                
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
                /**
                 * @var class-string
                 */
                $class = $ns.'\\'.$name;
<<<<<<< HEAD
                // Strict comparison using === between stdClass and null will always evaluate to false.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
                //Strict comparison using === between stdClass and null will always evaluate to false.
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 300ef70 (.)
                //Strict comparison using === between stdClass and null will always evaluate to false.
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)

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
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
                    if (! $reflection_class->isAbstract()) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                    if (! $reflection_class->isAbstract()) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 3fbbf1f5 (.)
=======
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
