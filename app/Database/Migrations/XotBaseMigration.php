<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Migrations;

<<<<<<< HEAD
use Closure;
use Exception;
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
use Closure;
use Exception;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
use ReflectionClass;
use Exception;
use Closure;
use RuntimeException;
use Illuminate\Database\Schema\ColumnDefinition;
<<<<<<< HEAD
use Illuminate\Database\Connection;
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Connection;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
<<<<<<< HEAD
use Illuminate\Database\Schema\ColumnDefinition;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Schema\ColumnDefinition;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
use ReflectionClass;
use RuntimeException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use ReflectionClass;
use RuntimeException;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Webmozart\Assert\Assert;

/**
 * Class XotBaseMigration.
 */
abstract class XotBaseMigration extends Migration
{
<<<<<<< HEAD
    protected ?Model $model = null; // Make it nullable and initialize to null

    protected ?string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
=======
<<<<<<< HEAD
    protected ?Model $model = null; // Make it nullable and initialize to null

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected ?string $model_class = null;
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
    protected null|string $model_class = null;
>>>>>>> 5a14301c (.)
=======
    protected null|string $model_class = null;
>>>>>>> 5a14301c (.)
=======
    protected null|string $model_class = null;
>>>>>>> 5a14301c (.)
=======
    protected null|string $model_class = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    protected null|string $model_class = null;
>>>>>>> ab8cc3f3 (.)
=======
    protected Model $model;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    protected null|string $model_class = null;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
<<<<<<< HEAD
    protected ?string $model_class = null;
    protected null|string $model_class = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    protected ?string $model_class = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    protected null|string $model_class = null;
>>>>>>> a6ef6dc7 (.)
>>>>>>> laraxot/develop

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
<<<<<<< HEAD
    protected ?string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
    protected ?string $model_class = null;
=======
    protected null|string $model_class = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    protected null|string $model_class = null;
>>>>>>> ab8cc3f3 (.)
>>>>>>> laraxot/develop

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
<<<<<<< HEAD
    protected ?string $model_class = null;
    protected null|string $model_class = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    protected ?string $model_class = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    protected null|string $model_class = null;
>>>>>>> a6ef6dc7 (.)
>>>>>>> laraxot/develop

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop
    protected ?string $model_class = null;
    protected ?string $table_name = null; // Add this property

    public function __construct()
    {
        // Only try to resolve model_class if not explicitly set by child migration
        $this->model_class ??= $this->getModelClass();

        // Instantiate model only if model_class is valid and extends Model
        if ($this->model_class && class_exists($this->model_class) && is_a($this->model_class, Model::class, true)) {
            $this->model = app($this->model_class);
            // Assert::isInstanceOf($this->model, Model::class); // No need for assert here as condition checks it
        }

        // Set table_name if explicitly defined in child migration, or derive from model if available
        if ($this->table_name === null && $this->model !== null) {
            $this->table_name = $this->model->getTable();
        } elseif ($this->table_name === null) {
            // Attempt to derive table name from migration class name as a last resort
            $name = class_basename($this);
            if (Str::startsWith($name, 'Create') && Str::endsWith($name, 'Table')) {
                $this->table_name = Str::snake(Str::between($name, 'Create', 'Table'));
            } elseif (Str::startsWith($name, 'Add') && Str::endsWith($name, 'Table')) {
                 $this->table_name = Str::snake(Str::between($name, 'To', 'Table'));
            } else {
                // For migrations not following CreateXTable or AddXToYTable convention,
                // table_name must be explicitly set in the child migration.
                // Or, use reflection to get table name if possible.
                // For now, leave as null if cannot be derived.
            }
        }
<<<<<<< HEAD
=======
=======
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
    protected ?string $model_class = null;

    public function __construct()
    {
<<<<<<< HEAD


        $this->model_class = $this->model_class ?? $this->getModelClass();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD


        $this->model_class = $this->model_class ?? $this->getModelClass();
>>>>>>> a12f125f4a (.)
=======
    protected null|string $model_class = null;

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
>>>>>>> b93ef594b4 (.)
=======
        
        
        $this->model_class = $this->model_class ?? $this->getModelClass();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        Assert::isInstanceOf($model = app($this->model_class), Model::class);
        $this->model = $model;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    }

    /**
     * Get the model class based on the migration class name.
     */
    public function getModelClass(): string
    {
<<<<<<< HEAD
        if ($this->model_class !== null) {
        if (null !== $this->model_class) {
        if (null !== $this->model_class) {
        if (null !== $this->model_class) {
        if (null !== $this->model_class) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->model_class !== null) {
=======
        if (null !== $this->model_class) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $this->model_class) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $this->model_class) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $this->model_class) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $this->model_class) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $this->model_class) {
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            return $this->model_class;
        }

        $name = class_basename($this);

        $name = Str::before(Str::after($name, 'Create'), 'Table');
        $name = Str::singular($name);
        if (Str::contains($name, '.php')) {
            $name = Str::of($name)
                ->between('_create_', '_table.php')
                ->singular()
                ->studly()
                ->toString();
        }

<<<<<<< HEAD
        $reflectionClass = new ReflectionClass($this);
=======
<<<<<<< HEAD
        $reflectionClass = new ReflectionClass($this);
=======
<<<<<<< HEAD
        $reflectionClass = new ReflectionClass($this);
=======
        $reflectionClass = new \ReflectionClass($this);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        $filename = $reflectionClass->getFilename();
        $mod_path = Module::getPath();

        // Controllo che $filename sia valido prima di passarlo a Str::of()
<<<<<<< HEAD
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 17684f52 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        $mod_name = false !== $filename
            ? Str::of($filename)
                ->after($mod_path)
                ->explode(\DIRECTORY_SEPARATOR)[1]
            : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
<<<<<<< HEAD
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
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
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> ca9324a4 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 73eab74 (.)
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
>>>>>>> 21348520 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 9db27d12 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> ca9324a4 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
>>>>>>> 71586de2 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
>>>>>>> 71586de2 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            ->replace('/', \DIRECTORY_SEPARATOR)
            ->toString();

        return $this->model_class;
    }

    public function getTable(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
        if ($this->table_name !== null) {
            return $this->table_name;
        }
        // Fallback to model if available (though it should have been set in construct)
        if ($this->model !== null) {
            return $this->model->getTable();
        }
        throw new RuntimeException('Table name not defined for migration. Please set $table_name property or ensure $model_class is set correctly.');
<<<<<<< HEAD
=======
=======
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
       
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        return $this->model->getTable();
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    }

    public function getConn(): Builder
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        return Schema::connection($this->model->getConnectionName());
    }

    /**
     * Commentato perché Doctrine non è supportato nativamente in Laravel.
     * Se hai bisogno di questa funzione, assicurati di installare doctrine/dbal.
     */
    // public function getSchemaManager(): AbstractSchemaManager
    // {
    //     return $this->getConn()->getConnection()->getDoctrineSchemaManager();
    // }

    /**
     * Get table details using Doctrine's schema manager.
     *
     * @throws \Doctrine\DBAL\Exception
     */
    // public function getTableDetails(): Table
    // {
    //     return $this->getSchemaManager()->listTableDetails($this->getTable());
    // }

    /**
     * Get the table indexes using Doctrine's schema manager.
     *
<<<<<<< HEAD
     * @return array<\Doctrine\DBAL\Schema\Index>
     *
     * @throws \Doctrine\DBAL\Exception
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<\Doctrine\DBAL\Schema\Index>
     *
     * @throws \Doctrine\DBAL\Exception
=======
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
>>>>>>> 5a14301c (.)
=======
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
>>>>>>> 5a14301c (.)
=======
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
>>>>>>> 5a14301c (.)
=======
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
>>>>>>> 5a14301c (.)
=======
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
>>>>>>> 5a14301c (.)
=======
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     */
    // public function getTableIndexes(): array
    // {
    //     return $this->getSchemaManager()->listTableIndexes($this->getTable());
    // }

    /**
     * Add common fields to the table.
     *
<<<<<<< HEAD
     * @param  Blueprint  $table  The table blueprint
     * @param Blueprint $table The table blueprint
     * @param Blueprint $table The table blueprint
     * @param Blueprint $table The table blueprint
     * @param Blueprint $table The table blueprint
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Blueprint  $table  The table blueprint
=======
     * @param Blueprint $table The table blueprint
>>>>>>> 5a14301c (.)
=======
     * @param Blueprint $table The table blueprint
>>>>>>> 5a14301c (.)
=======
     * @param Blueprint $table The table blueprint
>>>>>>> 5a14301c (.)
=======
     * @param Blueprint $table The table blueprint
>>>>>>> 5a14301c (.)
=======
     * @param Blueprint $table The table blueprint
>>>>>>> 5a14301c (.)
=======
     * @param Blueprint $table The table blueprint
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     */
    public function addCommonFields(Blueprint $table): void
    {
        // Implementazione vuota di base
        // Le classi figlie possono sovrascrivere questo metodo per aggiungere campi comuni
    }

    /**
     * Check if a table exists.
     */
<<<<<<< HEAD
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(null|string $table = null): bool
    public function tableExists(?string $table = null): bool
    public function tableExists(?string $table = null): bool
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function tableExists(?string $table = null): bool
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 5a14301c (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3fbbf1f5 (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 17684f52 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 17684f52 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 17684f52 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> a12f125f4a (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> b93ef594b4 (.)
=======
    public function tableExists(?string $table = null): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> ca9324a4 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
    public function tableExists(?string $table = null): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public function tableExists(?string $table = null): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public function tableExists(?string $table = null): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function tableExists(?string $table = null): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> ca9324a4 (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 9db27d12 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 5a14301c (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> ca9324a4 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 5a14301c (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> ca9324a4 (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function tableExists(?string $table = null): bool
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public function tableExists(?string $table = null): bool
>>>>>>> 71586de2 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 5a14301c (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> ca9324a4 (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function tableExists(?string $table = null): bool
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function tableExists(?string $table = null): bool
>>>>>>> 71586de2 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 5a14301c (.)
=======
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
    {
        return $this->getConn()->hasTable($table ?? $this->getTable());
    }

    public function hasColumn(string $column): bool
    {
        return $this->getConn()->hasColumn($this->getTable(), $column);
    }

    public function hasTable(string $table): bool
    {
        return $this->getConn()->hasTable($table);
    }

    public function getColumnType(string $column): string
    {
        try {
            return $this->getConn()->getColumnType($this->getTable(), $column);
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            return 'not-exists';
        }
    }

    public function isColumnType(string $column, string $type): bool
    {
        return $this->hasColumn($column) && $this->getColumnType($column) === $type;
    }

    public function query(string $sql): void
    {
        $this->getConn()->getConnection()->statement($sql);
    }

    public function hasIndex(string $column): bool
    {
        return $this->getConn()->hasIndex($this->getTable(), $column);
    }

    /**
     * Check if the table has a primary key.
     */
    public function hasPrimaryKey(): bool
    {
        // Commentato perché dipende da Doctrine DBAL
        // return $this->getTableDetails()->hasPrimaryKey();
        $connection = $this->getConn()->getConnection();
        $table = $this->getTable();
        $database = $connection->getDatabaseName();

        $query = "SELECT COUNT(*) as count
              FROM information_schema.table_constraints
              WHERE table_schema = ?
              AND table_name = ?
              AND constraint_type = 'PRIMARY KEY'";

        $result = $connection->selectOne($query, [$database, $table]);

        // Check if result is an array or object and handle accordingly
        if (is_array($result)) {
<<<<<<< HEAD
            return isset($result['count']) && ((int) $result['count']) > 0;
=======
<<<<<<< HEAD
            return isset($result['count']) && ((int) $result['count']) > 0;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return isset($result['count']) && ((int) $result['count']) > 0;
=======
            return isset($result['count']) && (int) $result['count'] > 0;
>>>>>>> a12f125f4a (.)
=======
            return isset($result['count']) && ((int) $result['count']) > 0;
>>>>>>> b93ef594b4 (.)
=======
            return isset($result['count']) && (int) $result['count'] > 0;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        }

        // If it's an object, cast to array to avoid undefined property issues
        if (is_object($result)) {
            $resArray = (array) $result;
<<<<<<< HEAD

            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
=======
            return isset($resArray['count']) && (int) $resArray['count'] > 0;
>>>>>>> a12f125f4a (.)
=======
            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
>>>>>>> b93ef594b4 (.)
=======
            return isset($resArray['count']) && (int) $resArray['count'] > 0;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        }

        // If neither, handle the error or unexpected case
        return false;
    }

    /**
     * Drop the primary key from the table.
     */
    public function dropPrimaryKey(): void
    {
<<<<<<< HEAD
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 5a14301c (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3fbbf1f5 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 17684f52 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 17684f52 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 17684f52 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> a12f125f4a (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> b93ef594b4 (.)
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> ca9324a4 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> ca9324a4 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 9db27d12 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 5a14301c (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> ca9324a4 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 5a14301c (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> ca9324a4 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> 71586de2 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 5a14301c (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> ca9324a4 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> 71586de2 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 5a14301c (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        $this->query($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->dropTableIfExists($this->getTable());
    }

    public function dropTableIfExists(string $table): void
    {
        $this->getConn()->dropIfExists($table);
    }

    public function renameTable(string $from, string $to): void
    {
        if ($this->tableExists($from)) {
            $this->getConn()->rename($from, $to);
        }
    }

    public function renameColumn(string $from, string $to): void
    {
<<<<<<< HEAD
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to): void {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to): void {
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
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
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 71586de2 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 249a0067 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 71586de2 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 249a0067 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            $table->renameColumn($from, $to);
        });
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
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> laraxot/develop

                $table->renameColumn($from, $to);

        });
    }

<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop
    public function tableCreate(Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
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
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
<<<<<<< HEAD

                $table->renameColumn($from, $to);

            $table->renameColumn($from, $to);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

                $table->renameColumn($from, $to);

=======
            $table->renameColumn($from, $to);
>>>>>>> b93ef594b4 (.)
>>>>>>> laraxot/develop
        });
    }

    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
<<<<<<< HEAD
        if (! $this->tableExists($tableName)) {
        if (!$this->tableExists($tableName)) {

                $table->renameColumn($from, $to);

            $table->renameColumn($from, $to);
=======
<<<<<<< HEAD
        if (! $this->tableExists($tableName)) {
>>>>>>> a12f125f4a (.)
=======
        if (!$this->tableExists($tableName)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======

                $table->renameColumn($from, $to);

=======
            $table->renameColumn($from, $to);
>>>>>>> b93ef594b4 (.)
>>>>>>> laraxot/develop
        });
    }

    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
<<<<<<< HEAD
        if (! $this->tableExists($tableName)) {
        if (!$this->tableExists($tableName)) {
=======
<<<<<<< HEAD
        if (! $this->tableExists($tableName)) {
>>>>>>> a12f125f4a (.)
=======
        if (!$this->tableExists($tableName)) {
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> laraxot/develop

                $table->renameColumn($from, $to);

        });
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
    public function tableCreate(\Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> laraxot/develop
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
>>>>>>> laraxot/develop
    public function tableCreate(Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            $this->getConn()->create($tableName, $next);
        }
    }

<<<<<<< HEAD
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(\Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, null|string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
    public function tableUpdate(Closure $next, ?string $table = null): void
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function tableUpdate(Closure $next, ?string $table = null): void
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 5a14301c (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3fbbf1f5 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 17684f52 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 17684f52 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 17684f52 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> a12f125f4a (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> b93ef594b4 (.)
=======
    public function tableUpdate(\Closure $next, ?string $table = null): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> ca9324a4 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public function tableUpdate(Closure $next, ?string $table = null): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public function tableUpdate(Closure $next, ?string $table = null): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> ca9324a4 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 9db27d12 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 5a14301c (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> ca9324a4 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 5a14301c (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> ca9324a4 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> 71586de2 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 5a14301c (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> ca9324a4 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> 71586de2 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 5a14301c (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
    {
        $tableName = $table ?? $this->getTable();
        $this->getConn()->table($tableName, $next);
    }

    public function timestamps(Blueprint $table, bool $hasSoftDeletes = false): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        $table->timestamps();
        $table->foreignIdFor($userClass, 'user_id')->nullable();
        $table->foreignIdFor($userClass, 'updated_by')->nullable();
        $table->foreignIdFor($userClass, 'created_by')->nullable();
<<<<<<< HEAD

        if ($hasSoftDeletes) {
=======
<<<<<<< HEAD

        if ($hasSoftDeletes) {
=======
<<<<<<< HEAD

        if ($hasSoftDeletes) {
=======
=======
>>>>>>> origin/develop

            $table->timestamps();
            $table->foreignIdFor($userClass, 'user_id')->nullable();
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
            $table->foreignIdFor($userClass, 'created_by')->nullable();


        if ($hasSoftDeletes ) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        if ($hasSoftDeletes) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            $table->softDeletes();
        }
    }

    public function updateTimestamps(Blueprint $table, bool $hasSoftDeletes = false): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();

<<<<<<< HEAD
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
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
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> b7afadf9 (.)
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
            $table->timestamps();
        }

        if (!$this->hasColumn('updated_by')) {
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
        }

        if (!$this->hasColumn('created_by')) {
            $table->foreignIdFor($userClass, 'created_by')->nullable();
        }

        if ($hasSoftDeletes && !$this->hasColumn('deleted_at')) {
            $table->softDeletes();
            if (!$this->hasColumn('deleted_by')) {
<<<<<<< HEAD
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 300ef70 (.)
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> laraxot/develop
            $table->timestamps();
        }

        if (! $this->hasColumn('updated_by')) {
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
        }

        if (! $this->hasColumn('created_by')) {
            $table->foreignIdFor($userClass, 'created_by')->nullable();
        }

        if ($hasSoftDeletes && ! $this->hasColumn('deleted_at')) {
            $table->softDeletes();
<<<<<<< HEAD
            if (! $this->hasColumn('deleted_by')) {
=======
<<<<<<< HEAD
            if (! $this->hasColumn('deleted_by')) {
=======
            if (!$this->hasColumn('deleted_by')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> ed734516 (.)
>>>>>>> laraxot/develop
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
            $table->timestamps();
        }

        if (! $this->hasColumn('updated_by')) {
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
        }

        if (! $this->hasColumn('created_by')) {
            $table->foreignIdFor($userClass, 'created_by')->nullable();
        }

        if ($hasSoftDeletes && ! $this->hasColumn('deleted_at')) {
            $table->softDeletes();
            if (! $this->hasColumn('deleted_by')) {
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
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> laraxot/develop
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
            $table->timestamps();
        }

        if (!$this->hasColumn('updated_by')) {
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
        }

        if (!$this->hasColumn('created_by')) {
            $table->foreignIdFor($userClass, 'created_by')->nullable();
        }

        if ($hasSoftDeletes && !$this->hasColumn('deleted_at')) {
            $table->softDeletes();
            if (!$this->hasColumn('deleted_by')) {
<<<<<<< HEAD
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
=======
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
>>>>>>> b93ef594b4 (.)
>>>>>>> laraxot/develop
            $table->timestamps();
        }

        if (!$this->hasColumn('updated_by')) {
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
        }

        if (!$this->hasColumn('created_by')) {
            $table->foreignIdFor($userClass, 'created_by')->nullable();
        }

        if ($hasSoftDeletes && !$this->hasColumn('deleted_at')) {
            $table->softDeletes();
<<<<<<< HEAD
            if (! $this->hasColumn('deleted_by')) {
            if (!$this->hasColumn('deleted_by')) {
=======
<<<<<<< HEAD
            if (! $this->hasColumn('deleted_by')) {
>>>>>>> a12f125f4a (.)
=======
            if (!$this->hasColumn('deleted_by')) {
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
            $table->timestamps();
        }

        if (! $this->hasColumn('updated_by')) {
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
        }

        if (! $this->hasColumn('created_by')) {
            $table->foreignIdFor($userClass, 'created_by')->nullable();
        }

        if ($hasSoftDeletes && ! $this->hasColumn('deleted_at')) {
            $table->softDeletes();
            if (! $this->hasColumn('deleted_by')) {
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> laraxot/develop
                $table->foreignIdFor($userClass, 'deleted_by')->nullable();
            }
        }

<<<<<<< HEAD
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 5a14301c (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3fbbf1f5 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 17684f52 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 17684f52 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 17684f52 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> a12f125f4a (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> b93ef594b4 (.)
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> ca9324a4 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> ca9324a4 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 9db27d12 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 5a14301c (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> ca9324a4 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 5a14301c (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> ca9324a4 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> 71586de2 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 5a14301c (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> ca9324a4 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> 71586de2 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 5a14301c (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            $table->foreignIdFor($userClass, 'deleted_by')->nullable();
        }
    }

    public function updateUser(Blueprint $table): void
    {
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {
            $table->uuid('team_id')->nullable()->change();
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && $this->getColumnType('team_id') === 'bigint') {
<<<<<<< HEAD
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
=======
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
=======
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {
<<<<<<< HEAD
            $table->uuid('team_id')->nullable()->change();

                $table->uuid('team_id')->nullable()->change();

            $table->uuid('team_id')->nullable()->change();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            $table->uuid('team_id')->nullable()->change();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)

                $table->uuid('team_id')->nullable()->change();

>>>>>>> a12f125f4a (.)
=======
            $table->uuid('team_id')->nullable()->change();
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> laraxot/develop
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {

                $table->string('model_id', 36)->index()->change();

        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> laraxot/develop
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            $table->string('model_id', 36)->index()->change();
        }

<<<<<<< HEAD
        if ($this->hasColumn('team_id') && $this->getColumnType('team_id') === 'bigint') {
            $table->uuid('team_id')->nullable()->change();
=======
<<<<<<< HEAD
        if ($this->hasColumn('team_id') && $this->getColumnType('team_id') === 'bigint') {
            $table->uuid('team_id')->nullable()->change();
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {

                $table->uuid('team_id')->nullable()->change();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> laraxot/develop
        }
    }

    public function updateUserKeyString(Blueprint $table): void
    {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop
        if (! $this->hasColumn('id')) {
            $table->uuid('id')->primary()->first();
        }

        if ($this->hasColumn('id') && $this->getColumnType('id') === 'bigint') {
            $table->uuid('id')->change();
        }

        if ($this->hasColumn('user_id') && $this->getColumnType('user_id') === 'bigint') {
<<<<<<< HEAD
        if (!$this->hasColumn('id')) {
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        if (!$this->hasColumn('id')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> a12f125f4a (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> b93ef594b4 (.)
=======
        if (! $this->hasColumn('id')) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            $table->uuid('id')->primary()->first();
        }

        if ($this->hasColumn('id') && 'bigint' === $this->getColumnType('id')) {
            $table->uuid('id')->change();
        }

        if ($this->hasColumn('user_id') && 'bigint' === $this->getColumnType('user_id')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            $table->uuid('user_id')->change();
        }
    }

    public function updateUserKeyInt(Blueprint $table): void
    {
<<<<<<< HEAD
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (!$this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
        if (! $this->hasColumn('id')) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->hasColumn('id')) {
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 17684f52 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 17684f52 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 17684f52 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> a12f125f4a (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> b93ef594b4 (.)
=======
        if (! $this->hasColumn('id')) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> ca9324a4 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! $this->hasColumn('id')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! $this->hasColumn('id')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! $this->hasColumn('id')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if (! $this->hasColumn('id')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> ca9324a4 (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 9db27d12 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> ca9324a4 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> ca9324a4 (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! $this->hasColumn('id')) {
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        if (! $this->hasColumn('id')) {
>>>>>>> 71586de2 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> ca9324a4 (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! $this->hasColumn('id')) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (! $this->hasColumn('id')) {
>>>>>>> 71586de2 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            $table->id('id')->first();
        }

        if ($this->hasColumn('id') && in_array($this->getColumnType('id'), ['string', 'guid'], true)) {
            $table->renameColumn('id', 'uuid');
        }
    }

    /**
     * Get the migration connection name.
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop
    public function getConnection(): ?string
    {
        /** @var string */
        return Config::get('pulse.storage.database.connection');
<<<<<<< HEAD
    public function getConnection(): null|string
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    public function getConnection(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getConnection(): null|string
=======
    public function getConnection(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getConnection(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getConnection(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    {
        /** @var string */
        $pulse_connection = Config::get('pulse.storage.database.connection');

        return $pulse_connection;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine if the migration should run.
     */
    public function shouldRun(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

<<<<<<< HEAD
        if (! App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (! App::environment('testing')) {
        if (! App::environment('testing')) {
        if (! App::environment('testing')) {
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
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> ab8cc3f3 (.)
        if (! App::environment('testing')) {
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (!App::environment('testing')) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
        if (! App::environment('testing')) {
=======
=======
        if (! App::environment('testing')) {
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
        if (! App::environment('testing')) {
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'])) {
            return true;
        }

        if (! App::environment('testing')) {
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> laraxot/develop
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

        if (!App::environment('testing')) {
<<<<<<< HEAD
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (! App::environment('testing')) {
        if (! App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (!App::environment('testing')) {
        if (! App::environment('testing')) {
        if (! App::environment('testing')) {
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!App::environment('testing')) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        if (!App::environment('testing')) {
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!App::environment('testing')) {
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! App::environment('testing')) {
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! App::environment('testing')) {
>>>>>>> 71586de2 (.)
=======
        if (!App::environment('testing')) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!App::environment('testing')) {
>>>>>>> 3fbbf1f5 (.)
=======
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
        if (!App::environment('testing')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! App::environment('testing')) {
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! App::environment('testing')) {
>>>>>>> 71586de2 (.)
=======
        if (!App::environment('testing')) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!App::environment('testing')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
            throw new RuntimeException("Pulse does not support the [{$this->driver()}] database driver.");
        }

        if (Config::get('pulse.enabled')) {
<<<<<<< HEAD
            throw new RuntimeException(
                "Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.",
            );
=======
<<<<<<< HEAD
            throw new RuntimeException(
                "Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.",
            );
=======
<<<<<<< HEAD
<<<<<<< HEAD
            throw new RuntimeException(
                "Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.",
            );
=======
            throw new RuntimeException("Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.");
>>>>>>> a12f125f4a (.)
=======
            throw new RuntimeException(
                "Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.",
            );
>>>>>>> b93ef594b4 (.)
=======
            throw new \RuntimeException("Pulse does not support the [{$this->driver()}] database driver.");
        }

        if (Config::get('pulse.enabled')) {
            throw new \RuntimeException("Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        }

        return false;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * Add a foreign ID column to the table based on a related model.
     */
    public function foreignIdFor(Blueprint $table, string $class, ?string $column = null): ColumnDefinition
    {
        return $table->foreignIdFor($class, $column);
    }

    /**
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * Get the database connection driver.
     */
    protected function driver(): string
    {
        return DB::connection($this->getConnection())->getDriverName();
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
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    /**
     * Add a foreign ID column to the table based on a related model.
     *
     * @param Blueprint $table
     * @param  string  $class
     * @param  string|null  $column
     * @return ColumnDefinition
     */
<<<<<<< HEAD
    public function foreignIdFor($table, string $class, null|string $column = null)
    public function foreignIdFor($table, string $class, ?string $column = null)
    public function foreignIdFor($table, string $class, ?string $column = null)
    public function foreignIdFor($table, string $class, null|string $column = null)
    public function foreignIdFor($table, string $class, ?string $column = null)
    public function foreignIdFor($table, string $class, ?string $column = null)
    public function foreignIdFor($table, string $class, null|string $column = null)
    public function foreignIdFor($table, string $class, ?string $column = null)
    public function foreignIdFor($table, string $class, ?string $column = null)
    {
        return $table->foreignIdFor($class, $column);
    }
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
<<<<<<< HEAD
    public function foreignIdFor($table, string $class, null|string $column = null)
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
    public function foreignIdFor($table, string $class, ?string $column = null)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
    public function foreignIdFor($table, string $class, ?string $column = null)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function foreignIdFor($table, string $class, null|string $column = null)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
    public function foreignIdFor($table, string $class, ?string $column = null)
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
    public function foreignIdFor($table, string $class, ?string $column = null)
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function foreignIdFor($table, string $class, null|string $column = null)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
    public function foreignIdFor($table, string $class, ?string $column = null)
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
    public function foreignIdFor($table, string $class, ?string $column = null)
>>>>>>> 71586de2 (.)
    {
        return $table->foreignIdFor($class, $column);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
    public function foreignIdFor($table, string $class, null|string $column = null)
    {
        return $table->foreignIdFor($class, $column);
    }
<<<<<<< HEAD
}

// end XotBaseMigration
=======
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
}

// end XotBaseMigration
<<<<<<< HEAD
=======
=======
    public function foreignIdFor($table, string $class, ?string $column = null) {
=======
    public function foreignIdFor($table, string $class, null|string $column = null)
    {
>>>>>>> b93ef594b4 (.)
        return $table->foreignIdFor($class, $column);
    }
}

<<<<<<< HEAD

}// end XotBaseMigration
>>>>>>> a12f125f4a (.)
=======
// end XotBaseMigration
>>>>>>> b93ef594b4 (.)
=======
    /**
     * Add a foreign ID column to the table based on a related model.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $table
     * @param  string  $class
     * @param  string|null  $column
     * @return \Illuminate\Database\Schema\ColumnDefinition
     */
    public function foreignIdFor($table, string $class, ?string $column = null) {
        return $table->foreignIdFor($class, $column);
    } 
    
   
}// end XotBaseMigration
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
