<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Migrations;

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
use ReflectionClass;
use Exception;
use Closure;
use RuntimeException;
use Illuminate\Database\Schema\ColumnDefinition;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Connection;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
<<<<<<< HEAD
use Illuminate\Database\Schema\ColumnDefinition;
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
use Webmozart\Assert\Assert;

/**
 * Class XotBaseMigration.
 */
abstract class XotBaseMigration extends Migration
{
    protected Model $model;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected ?string $model_class = null;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    protected null|string $model_class = null;
>>>>>>> 5a14301c (.)

    public function __construct()
    {
        $this->model_class ??= $this->getModelClass();
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    protected ?string $model_class = null;

    public function __construct()
    {
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
        Assert::isInstanceOf($model = app($this->model_class), Model::class);
        $this->model = $model;
    }

    /**
     * Get the model class based on the migration class name.
     */
    public function getModelClass(): string
    {
<<<<<<< HEAD
        if ($this->model_class !== null) {
=======
        if (null !== $this->model_class) {
>>>>>>> 5a14301c (.)
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
        $reflectionClass = new \ReflectionClass($this);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $filename = $reflectionClass->getFilename();
        $mod_path = Module::getPath();

        // Controllo che $filename sia valido prima di passarlo a Str::of()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mod_name = $filename !== false ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
>>>>>>> 5a14301c (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
=======
=======
>>>>>>> origin/develop
        $mod_name = false !== $filename
            ? Str::of($filename)
                ->after($mod_path)
                ->explode(\DIRECTORY_SEPARATOR)[1]
            : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\'.$mod_name.'\Models\\'.$name)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
        $mod_name = false !== $filename ? Str::of($filename)->after($mod_path)->explode(\DIRECTORY_SEPARATOR)[1] : ''; // Fallback nel caso in cui $filename non sia valido.

        $this->model_class = Str::of('\Modules\\' . $mod_name . '\Models\\' . $name)
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
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
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
       
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $this->model->getTable();
    }

    public function getConn(): Builder
    {
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
=======
     * @throws \Doctrine\DBAL\Exception
     *
     * @return array<\Doctrine\DBAL\Schema\Index>
>>>>>>> 5a14301c (.)
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
=======
     * @param Blueprint $table The table blueprint
>>>>>>> 5a14301c (.)
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
>>>>>>> 399f46d3 (.)
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
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        }

        // If it's an object, cast to array to avoid undefined property issues
        if (is_object($result)) {
            $resArray = (array) $result;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to): void {
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        $this->getConn()->table($this->getTable(), function (Blueprint $table) use ($from, $to) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
            $table->renameColumn($from, $to);
        });
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function tableCreate(Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
    public function tableCreate(Closure $next, null|string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (!$this->tableExists($tableName)) {
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
>>>>>>> b93ef594b4 (.)
=======

                $table->renameColumn($from, $to);

        });
    }

    public function tableCreate(\Closure $next, ?string $table = null): void
    {
        $tableName = $table ?? $this->getTable();
        if (! $this->tableExists($tableName)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
            $this->getConn()->create($tableName, $next);
        }
    }

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
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
            $table->softDeletes();
        }
    }

    public function updateTimestamps(Blueprint $table, bool $hasSoftDeletes = false): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
                $table->foreignIdFor($userClass, 'deleted_by')->nullable();
            }
        }

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
>>>>>>> 399f46d3 (.)
            $table->foreignIdFor($userClass, 'deleted_by')->nullable();
        }
    }

    public function updateUser(Blueprint $table): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && $this->getColumnType('team_id') === 'bigint') {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {
>>>>>>> 5a14301c (.)
            $table->uuid('team_id')->nullable()->change();
<<<<<<< HEAD
=======
=======
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
=======
        $methodName = 'updateUserKey' . Str::studly($this->model->getKeyType());
>>>>>>> b93ef594b4 (.)
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            $table->string('model_id', 36)->index()->change();
        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {
<<<<<<< HEAD

                $table->uuid('team_id')->nullable()->change();

>>>>>>> a12f125f4a (.)
=======
            $table->uuid('team_id')->nullable()->change();
>>>>>>> b93ef594b4 (.)
=======
        $methodName = 'updateUserKey'.Str::studly($this->model->getKeyType());
        $this->{$methodName}($table);

        if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {

                $table->string('model_id', 36)->index()->change();

        }

        if ($this->hasColumn('team_id') && 'bigint' === $this->getColumnType('team_id')) {

                $table->uuid('team_id')->nullable()->change();

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
    }

    public function updateUserKeyString(Blueprint $table): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->hasColumn('id')) {
            $table->uuid('id')->primary()->first();
        }

        if ($this->hasColumn('id') && $this->getColumnType('id') === 'bigint') {
            $table->uuid('id')->change();
        }

        if ($this->hasColumn('user_id') && $this->getColumnType('user_id') === 'bigint') {
=======
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
            $table->uuid('id')->primary()->first();
        }

        if ($this->hasColumn('id') && 'bigint' === $this->getColumnType('id')) {
            $table->uuid('id')->change();
        }

        if ($this->hasColumn('user_id') && 'bigint' === $this->getColumnType('user_id')) {
>>>>>>> 5a14301c (.)
            $table->uuid('user_id')->change();
        }
    }

    public function updateUserKeyInt(Blueprint $table): void
    {
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
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function getConnection(): ?string
    {
        /** @var string */
        return Config::get('pulse.storage.database.connection');
=======
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
    {
        /** @var string */
        $pulse_connection = Config::get('pulse.storage.database.connection');

        return $pulse_connection;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (! App::environment('testing')) {
=======
        if (!App::environment('testing')) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (!App::environment('testing')) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'])) {
            return true;
        }

        if (! App::environment('testing')) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (in_array($this->driver(), ['mariadb', 'mysql', 'pgsql', 'sqlite'], strict: true)) {
            return true;
        }

        if (!App::environment('testing')) {
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
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
        }

        return false;
    }

    /**
<<<<<<< HEAD
     * Add a foreign ID column to the table based on a related model.
     */
    public function foreignIdFor(Blueprint $table, string $class, ?string $column = null): ColumnDefinition
    {
        return $table->foreignIdFor($class, $column);
    }

    /**
=======
>>>>>>> 5a14301c (.)
     * Get the database connection driver.
     */
    protected function driver(): string
    {
        return DB::connection($this->getConnection())->getDriverName();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
    /**
     * Add a foreign ID column to the table based on a related model.
     *
     * @param Blueprint $table
     * @param  string  $class
     * @param  string|null  $column
     * @return ColumnDefinition
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function foreignIdFor($table, string $class, null|string $column = null)
    {
        return $table->foreignIdFor($class, $column);
    }
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
