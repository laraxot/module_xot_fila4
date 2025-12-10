<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Migrations;

use Closure;
use Exception;
use ReflectionClass;
use Exception;
use Closure;
use RuntimeException;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Database\Connection;
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
    protected ?Model $model = null; // Make it nullable and initialize to null

    protected ?string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
    protected ?string $model_class = null;
    protected null|string $model_class = null;

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
    protected ?string $model_class = null;
    protected null|string $model_class = null;
    protected null|string $model_class = null;

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
    protected ?string $model_class = null;
    protected null|string $model_class = null;

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
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
    }

    /**
     * Get the model class based on the migration class name.
     */
    public function getModelClass(): string
    {
        if ($this->model_class !== null) {
        if (null !== $this->model_class) {
        if (null !== $this->model_class) {
        if (null !== $this->model_class) {
        if (null !== $this->model_class) {
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
        $mod_name = false !== $filename
            ? Str::of($filename)
                ->after($mod_path)
                ->explode(\DIRECTORY_SEPARATOR)[1]
            : ''; // Fallback nel caso in cui $filename non sia valido.

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
            ->replace('/', \DIRECTORY_SEPARATOR)
            ->toString();

        return $this->model_class;
    }

    public function getTable(): string
    {
        if ($this->table_name !== null) {
            return $this->table_name;
        }
        // Fallback to model if available (though it should have been set in construct)
        if ($this->model !== null) {
            return $this->model->getTable();
        }
        throw new RuntimeException('Table name not defined for migration. Please set $table_name property or ensure $model_class is set correctly.');
    }

    public function getConn(): Builder
    {
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
     */
    // public function getTableIndexes(): array
    // {
    //     return $this->getSchemaManager()->listTableIndexes($this->getTable());
    // }

    /**
     * Add common fields to the table.
     *
     * @param  Blueprint  $table  The table blueprint
     * @param Blueprint $table The table blueprint
     * @param Blueprint $table The table blueprint
     * @param Blueprint $table The table blueprint
     * @param Blueprint $table The table blueprint
     */
    public function addCommonFields(Blueprint $table): void
    {
        // Implementazione vuota di base
        // Le classi figlie possono sovrascrivere questo metodo per aggiungere campi comuni
    }

    /**
     * Check if a table exists.
     */
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
            return isset($result['count']) && ((int) $result['count']) > 0;
        }

        // If it's an object, cast to array to avoid undefined property issues
        if (is_object($result)) {
            $resArray = (array) $result;

            return isset($resArray['count']) && ((int) $resArray['count']) > 0;
        }

        // If neither, handle the error or unexpected case
        return false;
    }

    /**
     * Drop the primary key from the table.
     */
    public function dropPrimaryKey(): void
    {
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
            $table->renameColumn($from, $to);
        });
    }

    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {

                $table->renameColumn($from, $to);

        });
    }

    public function tableCreate(Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {

                $table->renameColumn($from, $to);

            $table->renameColumn($from, $to);
        });
    }

    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
        if (!$this->tableExists($tableName)) {

                $table->renameColumn($from, $to);

            $table->renameColumn($from, $to);
        });
    }

    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
        if (!$this->tableExists($tableName)) {

                $table->renameColumn($from, $to);

        });
    }

    public function tableCreate(\Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
    public function tableCreate(Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
            $this->getConn()->create($tableName, $next);
        }
    }

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
    {
        $tableName = $table ?? $this->getTable();
        $this->getConn()->table($tableName, $next);
    }

    public function timestamps(Blueprint $table, bool $hasSoftDeletes = false): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();

        $table->timestamps();
        $table->foreignIdFor($userClass, 'user_id')->nullable();
        $table->foreignIdFor($userClass, 'updated_by')->nullable();
        $table->foreignIdFor($userClass, 'created_by')->nullable();

        if ($hasSoftDeletes) {
            $table->softDeletes();
        }
    }

    public function updateTimestamps(Blueprint $table, bool $hasSoftDeletes = false): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();

        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
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
        if (!$this->hasColumn('updated_at') && !$this->hasColumn('created_at')) {
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
        if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
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
            if (! $this->hasColumn('deleted_by')) {
            if (!$this->hasColumn('deleted_by')) {
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
                $table->foreignIdFor($userClass, 'deleted_by')->nullable();
            }
        }

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
            $table->foreignIdFor($userClass, 'deleted_by')->nullable();
        }
    }

    public function updateUser(Blueprint $table): void
    {
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {
            $table->uuid('team_id')->nullable()->change();
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && $this->getColumnType('team_id') === 'bigint') {
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {
            $table->uuid('team_id')->nullable()->change();

                $table->uuid('team_id')->nullable()->change();

            $table->uuid('team_id')->nullable()->change();
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {

                $table->string('model_id', 36)->index()->change();

        }

        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && $this->getColumnType('team_id') === 'bigint') {
            $table->uuid('team_id')->nullable()->change();
        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {

                $table->uuid('team_id')->nullable()->change();

        }
    }

    public function updateUserKeyString(Blueprint $table): void
    {
        if (! $this->hasColumn('id')) {
            $table->uuid('id')->primary()->first();
        }

        if ($this->hasColumn('id') && $this->getColumnType('id') === 'bigint') {
            $table->uuid('id')->change();
        }

        if ($this->hasColumn('user_id') && $this->getColumnType('user_id') === 'bigint') {
        if (!$this->hasColumn('id')) {
            $table->uuid('id')->primary()->first();
        }

        if ($this->hasColumn('id') && 'bigint' === $this->getColumnType('id')) {
            $table->uuid('id')->change();
        }

        if ($this->hasColumn('user_id') && 'bigint' === $this->getColumnType('user_id')) {
            $table->uuid('user_id')->change();
        }
    }

    public function updateUserKeyInt(Blueprint $table): void
    {
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
            $table->id('id')->first();
        }

        if ($this->hasColumn('id') && in_array($this->getColumnType('id'), ['string', 'guid'], true)) {
            $table->renameColumn('id', 'uuid');
        }
    }

    /**
     * Get the migration connection name.
     */
    public function getConnection(): ?string
    {
        /** @var string */
        return Config::get('pulse.storage.database.connection');
    public function getConnection(): null|string
    {
        /** @var string */
        $pulse_connection = Config::get('pulse.storage.database.connection');

        return $pulse_connection;
    }

    /**
     * Determine if the migration should run.
     */
    public function shouldRun(): bool
    {
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

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
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'])) {
            return true;
        }

        if (! App::environment('testing')) {
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

        if (!App::environment('testing')) {
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
            throw new RuntimeException("Pulse does not support the [{$this->driver()}] database driver.");
        }

        if (Config::get('pulse.enabled')) {
            throw new RuntimeException(
                "Pulse does not support the [{$this->driver()}] database driver. You can disable Pulse in your testsuite by adding `<env name=\"PULSE_ENABLED\" value=\"false\"/>` to your project's `phpunit.xml` file.",
            );
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

    /**
     * Add a foreign ID column to the table based on a related model.
     *
     * @param Blueprint $table
     * @param  string  $class
     * @param  string|null  $column
     * @return ColumnDefinition
     */
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
    public function foreignIdFor($table, string $class, null|string $column = null)
    {
        return $table->foreignIdFor($class, $column);
    }
}

// end XotBaseMigration
