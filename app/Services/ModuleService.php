<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

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
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
    private static ?self $_instance = null;
=======
=======
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    private static null|self $_instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    private static null|self $_instance = null;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        if (!(self::$_instance instanceof self)) {
=======
        if (! self::$_instance instanceof self) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
        $ns = 'Modules\\'.$mod->getName().'\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
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
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
        $ns = 'Modules\\'.$mod->getName().'\\Models';  // con la barra davanti non va il search ?
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $ns = 'Modules\\' . $mod->getName() . '\\Models'; // con la barra davanti non va il search ?
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
<<<<<<< HEAD
                $tmp = new stdClass;
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
                $tmp = new stdClass;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;

                try {
<<<<<<< HEAD
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
=======
=======
>>>>>>> a67e542f (.)
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 5a14301c (.)
=======
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 218dfed3 (.)
>>>>>>> 3fbbf1f5 (.)
=======
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
<<<<<<< HEAD
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
=======
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
>>>>>>> ce6fc085 (.)
                    $reflection_class = new \ReflectionClass($tmp->class);
                    if (! $reflection_class->isAbstract()) {
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (\Exception) {
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
                    // Ignore reflection errors
                }
            }
        }

        return $data;
    }
}
