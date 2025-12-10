<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Query;

<<<<<<< HEAD
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
=======
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
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
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
<<<<<<< HEAD
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 551c768c4 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Create an index for a specific table based on a model class and columns.
 */
class CreateTableIndexByModelClassColumnsAction
{
    use QueueableAction;

    /**
     * Execute the action.
     *
<<<<<<< HEAD
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
=======
     * @param  class-string<Model>  $modelClass  fully qualified model class name
     * @param  array<string>  $columns  array of column names to include in the index
>>>>>>> 551c768c4 (.)
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException|RuntimeException
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException|RuntimeException
=======
     * @throws \InvalidArgumentException|\RuntimeException
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @throws InvalidArgumentException|RuntimeException
>>>>>>> 091f883c (.)
     */
    public function execute(string $modelClass, array $columns): bool
    {
        // Validate the model class
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
=======
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
>>>>>>> f1d4085 (.)
=======
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
        }

        /** @var Model $modelInstance */
<<<<<<< HEAD
=======
        $modelInstance = new $modelClass;

        $tableName = $modelInstance->getTable();
        $connectionName = $modelInstance->getConnectionName() ?? config('database.default');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
        }

        /** @var Model $modelInstance */
>>>>>>> 2f3197ab (.)
        $modelInstance = new $modelClass();

        $tableName = $modelInstance->getTable();
        $connectionName = $modelInstance->getConnectionName() ?? config('database.default');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new \InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
        }

        /** @var Model $modelInstance */
        $modelInstance = new $modelClass();

        $tableName = $modelInstance->getTable();
        $connectionName = $modelInstance->getConnectionName() ?? config('database.default');
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName);
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> ab8cc3f3 (.)
=======
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> b7afadf9 (.)
=======
        Assert::string($connectionName);
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
=======
        Assert::string($connectionName);
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> ce6fc085 (.)
        Assert::string($connectionName);
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
<<<<<<< HEAD
            throw new \RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 551c768c4 (.)
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
>>>>>>> 5cf46378 (.)
        }

        // Validate the columns exist
        $this->validateColumnsExist($connectionName, $tableName, $columns);

        // Generate a unique index name
        $indexName = $this->generateIndexName($tableName, $columns);

        // Check if the index already exists
        if ($this->indexExists($connectionName, $tableName, $indexName)) {
            return false; // Skip creation as the index already exists
        }

        // Add the index to the table
<<<<<<< HEAD
<<<<<<< HEAD
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
<<<<<<< HEAD
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
=======
>>>>>>> 53d6a6ba (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
>>>>>>> 551c768c4 (.)
            $table->index($columns, $indexName);
        });

        return true;
    }

    /**
     * Validate that all specified columns exist in the table.
     *
<<<<<<< HEAD
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
=======
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  array<string>  $columns  columns to validate
>>>>>>> 551c768c4 (.)
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws RuntimeException
=======
<<<<<<< HEAD
     * @throws RuntimeException
=======
     * @throws \RuntimeException
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @throws RuntimeException
>>>>>>> 091f883c (.)
     */
    private function validateColumnsExist(string $connectionName, string $tableName, array $columns): void
    {
        foreach ($columns as $column) {
<<<<<<< HEAD
<<<<<<< HEAD
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
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
>>>>>>> 2f3197ab (.)
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
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
=======
>>>>>>> 9db27d12 (.)
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 5a14301c (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
<<<<<<< HEAD
<<<<<<< HEAD
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
                throw new \RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
                throw new \RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
>>>>>>> 551c768c4 (.)
            }
        }
    }

    /**
     * Check if an index exists in the table.
     *
<<<<<<< HEAD
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string $indexName      name of the index
     *
=======
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  string  $indexName  name of the index
>>>>>>> 551c768c4 (.)
     * @return bool true if the index exists, false otherwise
     */
    private function indexExists(string $connectionName, string $tableName, string $indexName): bool
    {
        $connection = DB::connection($connectionName);

        // Query to check if the index exists
        $query = '
        SELECT COUNT(*) 
        FROM information_schema.statistics 
        WHERE table_schema = ? 
        AND table_name = ? 
        AND index_name = ?;
    ';

<<<<<<< HEAD
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
=======
        $formName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$formName, $tableName, $indexName]);
>>>>>>> 551c768c4 (.)

        // @phpstan-ignore property.nonObject
        return $result && $result->{'COUNT(*)'} > 0;
    }

    /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
     * private function indexExists(string $connectionName, string $tableName, string $indexName): bool
     * {
     * $connection = DB::connection($connectionName);
<<<<<<< HEAD
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
=======
     * $formManager = $connection->getDoctrineSchemaManager();
     * $indexes = $formManager->listTableIndexes($tableName);
>>>>>>> 551c768c4 (.)
     *
     * return array_key_exists($indexName, $indexes);
     * }
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        private function indexExists(string $connectionName, string $tableName, string $indexName): bool
        {
            $connection = DB::connection($connectionName);
            $schemaManager = $connection->getDoctrineSchemaManager();
            $indexes = $schemaManager->listTableIndexes($tableName);

            return array_key_exists($indexName, $indexes);
        }
        */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    /**
     * Generate a unique index name based on the table and columns.
     *
     * @param  string  $tableName  name of the table
     * @param  array<string>  $columns  columns to include in the index
     */
    private function generateIndexName(string $tableName, array $columns): string
    {
<<<<<<< HEAD
        return $tableName.'_'.implode('_', $columns).'_index';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
     * @param string $tableName name of the table
     * @param string[] $columns   columns to include in the index
     */
    private function generateIndexName(string $tableName, array $columns): string
    {
        return $tableName . '_' . implode('_', $columns) . '_index';
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $tableName.'_'.implode('_', $columns).'_index';
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return $tableName . '_' . implode('_', $columns) . '_index';
=======
>>>>>>> 2f3197ab (.)
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName.'_'.implode('_', $columns).'_index';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
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
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
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
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
<<<<<<< HEAD
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
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
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
    }
}
