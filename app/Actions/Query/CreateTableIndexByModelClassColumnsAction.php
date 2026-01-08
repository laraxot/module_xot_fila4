<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Query;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use RuntimeException;
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
     * @param  class-string<Model>  $modelClass  fully qualified model class name
     * @param  array<string>  $columns  array of column names to include in the index
     *
     * @throws InvalidArgumentException|RuntimeException
     */
    public function execute(string $modelClass, array $columns): bool
    {
        // Validate the model class
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
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
        }

        /** @var Model $modelInstance */
        $modelInstance = new $modelClass;

        $tableName = $modelInstance->getTable();
        $connectionName = $modelInstance->getConnectionName() ?? config('database.default');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
<<<<<<< HEAD
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
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
        }

        /** @var Model $modelInstance */
        $modelInstance = new $modelClass();

        $tableName = $modelInstance->getTable();
        $connectionName = $modelInstance->getConnectionName() ?? config('database.default');
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
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
>>>>>>> ed734516 (.)
=======
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
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
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            $table->index($columns, $indexName);
        });

        return true;
    }

    /**
     * Validate that all specified columns exist in the table.
     *
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  array<string>  $columns  columns to validate
     *
     * @throws RuntimeException
     */
    private function validateColumnsExist(string $connectionName, string $tableName, array $columns): void
    {
        foreach ($columns as $column) {
<<<<<<< HEAD
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
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
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
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
>>>>>>> ed734516 (.)
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 3310e9c6 (.)
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
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
            }
        }
    }

    /**
     * Check if an index exists in the table.
     *
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  string  $indexName  name of the index
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

        $formName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$formName, $tableName, $indexName]);

        // @phpstan-ignore property.nonObject
        return $result && $result->{'COUNT(*)'} > 0;
    }

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
     * private function indexExists(string $connectionName, string $tableName, string $indexName): bool
     * {
     * $connection = DB::connection($connectionName);
     * $formManager = $connection->getDoctrineSchemaManager();
     * $indexes = $formManager->listTableIndexes($tableName);
     *
     * return array_key_exists($indexName, $indexes);
     * }
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        private function indexExists(string $connectionName, string $tableName, string $indexName): bool
        {
            $connection = DB::connection($connectionName);
            $schemaManager = $connection->getDoctrineSchemaManager();
            $indexes = $schemaManager->listTableIndexes($tableName);

            return array_key_exists($indexName, $indexes);
        }
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    /**
     * Generate a unique index name based on the table and columns.
     *
     * @param  string  $tableName  name of the table
     * @param  array<string>  $columns  columns to include in the index
     */
    private function generateIndexName(string $tableName, array $columns): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
        return $tableName.'_'.implode('_', $columns).'_index';
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
        return $tableName.'_'.implode('_', $columns).'_index';
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
     * @param string $tableName name of the table
     * @param string[] $columns   columns to include in the index
     */
    private function generateIndexName(string $tableName, array $columns): string
    {
        return $tableName . '_' . implode('_', $columns) . '_index';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return $tableName.'_'.implode('_', $columns).'_index';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> b93ef594b4 (.)
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
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
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    }
}
