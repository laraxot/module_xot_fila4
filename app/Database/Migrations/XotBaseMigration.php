<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Migrations;

use Closure;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
use RuntimeException;
use Webmozart\Assert\Assert;

/**
 * Class XotBaseMigration.
 */
abstract class XotBaseMigration extends Migration
{
    protected Model $model;

<<<<<<< HEAD
    protected ?string $model_class = null;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    protected null|string $model_class = null;
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    protected ?string $model_class = null;

    public function __construct()
    {
<<<<<<< HEAD
        $this->model_class ??= $this->getModelClass();
=======


        $this->model_class = $this->model_class ?? $this->getModelClass();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        Assert::isInstanceOf($model = app($this->model_class), Model::class);
        $this->model = $model;
    }

    /**
     * Get the model class based on the migration class name.
     */
    public function getModelClass(): string
    {
        if ($this->model_class !== null) {
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

        $reflectionClass = new ReflectionClass($this);
        $filename = $reflectionClass->getFilename();
        $mod_path = Module::getPath();

        // Controllo che $filename sia valido prima di passarlo a Str::of()
<<<<<<< HEAD
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
=======
>>>>>>> ab8cc3f3 (.)
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
=======
<<<<<<< HEAD
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
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
        $mod_name = false !== $filename
            ? Str::of($filename)
                ->after($mod_path)
                ->explode(\DIRECTORY_SEPARATOR)[1]
            : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
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
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 73eab74 (.)
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        return $this->model->getTable();
    }

    public function getConn(): Builder
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
     * @return array<\Doctrine\DBAL\Schema\Index>
     *
     * @throws \Doctrine\DBAL\Exception
     */
    // public function getTableIndexes(): array
    // {
    //     return $this->getSchemaManager()->listTableIndexes($this->getTable());
    // }

    /**
     * Add common fields to the table.
     *
     * @param  Blueprint  $table  The table blueprint
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
    public function tableExists(?string $table = null): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public function tableExists(null|string $table = null): bool
=======
    public function tableExists(?string $table = null): bool
>>>>>>> f1d4085 (.)
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
=======
    public function tableExists(null|string $table = null): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
        } catch (Exception $e) {
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
<<<<<<< HEAD
            return isset($result['count']) && ((int) $result['count']) > 0;
=======
            return isset($result['count']) && (int) $result['count'] > 0;
>>>>>>> f1d4085 (.)
=======
            return isset($result['count']) && ((int) $result['count']) > 0;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }

        // If it's an object, cast to array to avoid undefined property issues
        if (is_object($result)) {
            $resArray = (array) $result;
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
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
=======
            return isset($resArray['count']) && (int) $resArray['count'] > 0;
>>>>>>> f1d4085 (.)
=======
            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
=======
        $sql = 'ALTER TABLE '.$this->getTable().' DROP PRIMARY KEY;';
>>>>>>> f1d4085 (.)
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
=======
        $sql = 'ALTER TABLE ' . $this->getTable() . ' DROP PRIMARY KEY;';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
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
>>>>>>> 48515e368 (.)
            $table->renameColumn($from, $to);
        });
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
<<<<<<< HEAD
=======

                $table->renameColumn($from, $to);

        });
    }

>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
    public function tableCreate(Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
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
        });
    }

    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
=======

                $table->renameColumn($from, $to);

=======
            $table->renameColumn($from, $to);
>>>>>>> b93ef594b4 (.)
        });
    }

    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
<<<<<<< HEAD
        if (! $this->tableExists($tableName)) {
>>>>>>> a12f125f4a (.)
=======
        if (!$this->tableExists($tableName)) {
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======

                $table->renameColumn($from, $to);

        });
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
    public function tableCreate(\Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
    public function tableCreate(Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            $this->getConn()->create($tableName, $next);
        }
    }

<<<<<<< HEAD
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
    public function tableUpdate(Closure $next, ?string $table = null): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public function tableUpdate(Closure $next, null|string $table = null): void
=======
    public function tableUpdate(Closure $next, ?string $table = null): void
>>>>>>> f1d4085 (.)
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
=======
    public function tableUpdate(Closure $next, null|string $table = null): void
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        $table->timestamps();
        $table->foreignIdFor($userClass, 'user_id')->nullable();
        $table->foreignIdFor($userClass, 'updated_by')->nullable();
        $table->foreignIdFor($userClass, 'created_by')->nullable();

        if ($hasSoftDeletes) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

            $table->timestamps();
            $table->foreignIdFor($userClass, 'user_id')->nullable();
            $table->foreignIdFor($userClass, 'updated_by')->nullable();
            $table->foreignIdFor($userClass, 'created_by')->nullable();


        if ($hasSoftDeletes ) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
            $table->softDeletes();
        }
    }

    public function updateTimestamps(Blueprint $table, bool $hasSoftDeletes = false): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();

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
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
=======
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
>>>>>>> b93ef594b4 (.)
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
>>>>>>> a12f125f4a (.)
=======
            if (!$this->hasColumn('deleted_by')) {
>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
                $table->foreignIdFor($userClass, 'deleted_by')->nullable();
            }
        }

<<<<<<< HEAD
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
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
=======
        if ($this->hasColumn('deleted_at') && ! $this->hasColumn('deleted_by')) {
>>>>>>> f1d4085 (.)
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
=======
        if ($this->hasColumn('deleted_at') && !$this->hasColumn('deleted_by')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {
            $table->uuid('team_id')->nullable()->change();
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            $table->string('model_id', 36)->index()->change();
        }

<<<<<<< HEAD
        if ($this->hasColumn('team_id') && $this->getColumnType('team_id') === 'bigint') {
            $table->uuid('team_id')->nullable()->change();
=======
        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {

                $table->uuid('team_id')->nullable()->change();

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        if (! $this->hasColumn('id')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
            $table->uuid('id')->primary()->first();
        }

        if ($this->hasColumn('id') && $this->getColumnType('id') === 'bigint') {
            $table->uuid('id')->change();
        }

        if ($this->hasColumn('user_id') && $this->getColumnType('user_id') === 'bigint') {
            $table->uuid('user_id')->change();
        }
    }

    public function updateUserKeyInt(Blueprint $table): void
    {
<<<<<<< HEAD
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
        if (! $this->hasColumn('id')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        if (!$this->hasColumn('id')) {
=======
        if (! $this->hasColumn('id')) {
>>>>>>> f1d4085 (.)
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
=======
        if (!$this->hasColumn('id')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
    public function getConnection(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function getConnection(): null|string
=======
    public function getConnection(): ?string
>>>>>>> f1d4085 (.)
=======
    public function getConnection(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        /** @var string */
        return Config::get('pulse.storage.database.connection');
    }

    /**
     * Determine if the migration should run.
     */
    public function shouldRun(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

<<<<<<< HEAD
        if (! App::environment('testing')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'])) {
            return true;
        }

        if (! App::environment('testing')) {
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
>>>>>>> a12f125f4a (.)
=======
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

        if (!App::environment('testing')) {
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            throw new RuntimeException("Pulse does not support the [{$this->driver()}] database driver.");
        }

        if (Config::get('pulse.enabled')) {
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
>>>>>>> f1d4085 (.)
=======
            throw new RuntimeException(
                "Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.",
            );
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }

        return false;
    }

    /**
     * Add a foreign ID column to the table based on a related model.
     */
    public function foreignIdFor(Blueprint $table, string $class, ?string $column = null): ColumnDefinition
    {
        return $table->foreignIdFor($class, $column);
    }

    /**
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
>>>>>>> ab8cc3f3 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
<<<<<<< HEAD
    public function foreignIdFor($table, string $class, ?string $column = null)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function foreignIdFor($table, string $class, null|string $column = null)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
    {
        return $table->foreignIdFor($class, $column);
    }
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
}

// end XotBaseMigration
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function foreignIdFor($table, string $class, ?string $column = null) {
        return $table->foreignIdFor($class, $column);
    } 


}// end XotBaseMigration
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
