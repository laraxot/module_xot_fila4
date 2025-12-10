<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

use stdClass;
use stdClass;
use stdClass;
use stdClass;
use stdClass;
use Exception;
use stdClass;
use stdClass;
use stdClass;
use stdClass;
use stdClass;
use stdClass;
use Exception;
use stdClass;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
use stdClass;
use stdClass;

// ----------- Requests ----------

/**
 * Class ModuleService.
 */
class ModuleService
{
    public string $name;

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
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
    private static ?self $_instance = null;
    private static null|self $_instance = null;
    private static null|self $_instance = null;
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
    private static null|self $_instance = null;
=======
    private static ?self $_instance = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

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
>>>>>>> 2f3197ab (.)
        if (!(self::$_instance instanceof self)) {
=======
        if (! self::$_instance instanceof self) {
>>>>>>> f1d4085 (.)
            self::$_instance = new self();
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
        if (!(self::$_instance instanceof self)) {
        if (!(self::$_instance instanceof self)) {
        if (! self::$_instance instanceof self) {
            self::$_instance = new self();
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (! (self::$_instance instanceof self)) {
            self::$_instance = new self;
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
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
         * if (null == $module) {
         * return [];
         * }
         */
        $mod = Module::find($this->name);
        $mod = Module::find($this->name);
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        if (null == $module) {
            return [];
        }
        */
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 2f3197ab (.)
        $mod = Module::find($this->name);
        if (!($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
        $mod_path = $mod->getPath() . '/Models';
<<<<<<< HEAD
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod_path = $mod->getPath().'/Models';
        $mod_path = $mod->getPath() . '/Models';
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        $mod = Module::find($this->name);
        if (! $mod instanceof \Nwidart\Modules\Module) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 2f3197ab (.)
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
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
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
<<<<<<< HEAD
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
=======
>>>>>>> ca9324a4 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
=======
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
                $tmp = new stdClass;
                $tmp = new stdClass();
                $tmp = new stdClass();
                $tmp = new stdClass();
                $tmp = new stdClass();
                $tmp = new stdClass();

                $name = mb_substr($filename, 0, -mb_strlen($ext));

                /**
                 * @var class-string
                 */
                $tmp = new stdClass;
                $tmp = new stdClass();
                $tmp = new stdClass();
                $tmp = new stdClass();
                $tmp = new stdClass();
                $tmp = new stdClass();
                $tmp = new stdClass();

                $name = mb_substr($filename, 0, -mb_strlen($ext));

<<<<<<< HEAD
                /**
                 * @var class-string
                 */
                $class = $ns.'\\'.$name;
                // Strict comparison using === between stdClass and null will always evaluate to false.

                // if ($tmp === null) {
                //    continue;
                // }
                $class = $ns . '\\' . $name;
                $class = $ns . '\\' . $name;
                
                /**
                 * @var class-string
                 */
                $class = $ns.'\\'.$name;
                /**
                 * @var class-string
                 */
                $class = $ns . '\\' . $name;
=======
                
                /**
                 * @var class-string
                 */
                $class = $ns.'\\'.$name;
>>>>>>> f1d4085 (.)
                //Strict comparison using === between stdClass and null will always evaluate to false.

                //if ($tmp === null) {
                //    continue;
                //}
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;

                try {
                    $reflection_class = new ReflectionClass($tmp->class);
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
>>>>>>> 2f3197ab (.)
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
<<<<<<< HEAD
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
=======
>>>>>>> 3fbbf1f5 (.)
=======
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
                    $reflection_class = new ReflectionClass($tmp->class);
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (! $reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
                    $reflection_class = new ReflectionClass($tmp->class);
                    if (!$reflection_class->isAbstract()) {
                    if (!$reflection_class->isAbstract()) {
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
                    $reflection_class = new \ReflectionClass($tmp->class);
                    if (! $reflection_class->isAbstract()) {
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (\Exception) {
                    // Ignore reflection errors
                }
            }
        }

        return $data;
    }
}
