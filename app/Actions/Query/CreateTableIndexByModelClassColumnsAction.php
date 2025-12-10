<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Query;

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
use InvalidArgumentException;
use RuntimeException;
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
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use RuntimeException;
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 9db27d12 (.)
=======
use InvalidArgumentException;
use RuntimeException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
<<<<<<< HEAD
use InvalidArgumentException;
use RuntimeException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use InvalidArgumentException;
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
     * @param  class-string<Model>  $modelClass  fully qualified model class name
     * @param  array<string>  $columns  array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
     *
     * @throws InvalidArgumentException|RuntimeException
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string<Model>  $modelClass  fully qualified model class name
     * @param  array<string>  $columns  array of column names to include in the index
=======
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
>>>>>>> 5a14301c (.)
=======
     * @param class-string<Model> $modelClass fully qualified model class name
     * @param string[]            $columns    array of column names to include in the index
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException|RuntimeException
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException|RuntimeException
=======
     * @throws \InvalidArgumentException|\RuntimeException
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
        }

        /** @var Model $modelInstance */
        $modelInstance = new $modelClass();

        $tableName = $modelInstance->getTable();
        $connectionName = $modelInstance->getConnectionName() ?? config('database.default');
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
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
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
=======
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
>>>>>>> a12f125f4a (.)
=======
        if (!is_subclass_of($modelClass, Model::class)) {
            throw new InvalidArgumentException("{$modelClass} must be a subclass of " . Model::class . '.');
>>>>>>> b93ef594b4 (.)
=======
        if (! is_subclass_of($modelClass, Model::class)) {
            throw new \InvalidArgumentException("{$modelClass} must be a subclass of ".Model::class.'.');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        }

        /** @var Model $modelInstance */
        $modelInstance = new $modelClass();

        $tableName = $modelInstance->getTable();
        $connectionName = $modelInstance->getConnectionName() ?? config('database.default');
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
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
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
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
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        Assert::string($connectionName, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
=======
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
        Assert::string($connectionName, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        // Validate the table exists
        if (!Schema::connection($connectionName)->hasTable($tableName)) {
>>>>>>> b93ef594b4 (.)
            throw new RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
=======
        Assert::string($connectionName);
        // Validate the table exists
        if (! Schema::connection($connectionName)->hasTable($tableName)) {
            throw new \RuntimeException("Table '{$tableName}' does not exist on connection '{$connectionName}'.");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
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
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 53d6a6ba (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
>>>>>>> b7afadf9 (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 71586de2 (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 249a0067 (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 53d6a6ba (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns): void {
>>>>>>> b7afadf9 (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 71586de2 (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 249a0067 (.)
=======
        Schema::connection($connectionName)->table($tableName, function (Blueprint $table) use ($indexName, $columns) {
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            $table->index($columns, $indexName);
        });

        return true;
    }

    /**
     * Validate that all specified columns exist in the table.
     *
<<<<<<< HEAD
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  array<string>  $columns  columns to validate
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
     *
     * @throws RuntimeException
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  array<string>  $columns  columns to validate
=======
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
>>>>>>> 5a14301c (.)
=======
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
>>>>>>> 5a14301c (.)
=======
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
>>>>>>> 5a14301c (.)
=======
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
>>>>>>> 5a14301c (.)
=======
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
>>>>>>> 5a14301c (.)
=======
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string[] $columns        columns to validate
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
     * @throws RuntimeException
=======
<<<<<<< HEAD
     * @throws RuntimeException
=======
     * @throws \RuntimeException
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
     */
    private function validateColumnsExist(string $connectionName, string $tableName, array $columns): void
    {
        foreach ($columns as $column) {
<<<<<<< HEAD
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
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
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
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
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> b7afadf9 (.)
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
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
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 5a14301c (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
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
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 71586de2 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 5a14301c (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 71586de2 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 5a14301c (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> 3fbbf1f5 (.)
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> a12f125f4a (.)
=======
            if (!Schema::connection($connectionName)->hasColumn($tableName, $column)) {
>>>>>>> b93ef594b4 (.)
                throw new RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
=======
            if (! Schema::connection($connectionName)->hasColumn($tableName, $column)) {
                throw new \RuntimeException("Column '{$column}' does not exist in table '{$tableName}'.");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            }
        }
    }

    /**
     * Check if an index exists in the table.
     *
<<<<<<< HEAD
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  string  $indexName  name of the index
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $connectionName  database connection name
     * @param  string  $tableName  name of the table
     * @param  string  $indexName  name of the index
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
>>>>>>> laraxot/develop
     * @param string $connectionName database connection name
     * @param string $tableName      name of the table
     * @param string $indexName      name of the index
     *
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
        $formName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$formName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $formName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$formName, $tableName, $indexName]);
=======
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
>>>>>>> 5a14301c (.)
=======
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
>>>>>>> 5a14301c (.)
=======
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
>>>>>>> 5a14301c (.)
=======
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
>>>>>>> 5a14301c (.)
=======
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
>>>>>>> 5a14301c (.)
=======
        $schemaName = $connection->getDatabaseName();
        $result = $connection->selectOne($query, [$schemaName, $tableName, $indexName]);
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

        // @phpstan-ignore property.nonObject
        return $result && $result->{'COUNT(*)'} > 0;
    }

    /*
<<<<<<< HEAD
     * private function indexExists(string $connectionName, string $tableName, string $indexName): bool
     * {
     * $connection = DB::connection($connectionName);
     * $formManager = $connection->getDoctrineSchemaManager();
     * $indexes = $formManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     * private function indexExists(string $connectionName, string $tableName, string $indexName): bool
     * {
     * $connection = DB::connection($connectionName);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * $formManager = $connection->getDoctrineSchemaManager();
     * $indexes = $formManager->listTableIndexes($tableName);
=======
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
>>>>>>> 5a14301c (.)
=======
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
>>>>>>> 5a14301c (.)
=======
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
>>>>>>> 5a14301c (.)
=======
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
>>>>>>> 5a14301c (.)
=======
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
>>>>>>> 5a14301c (.)
=======
     * $schemaManager = $connection->getDoctrineSchemaManager();
     * $indexes = $schemaManager->listTableIndexes($tableName);
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     *
     * return array_key_exists($indexName, $indexes);
     * }
     */
<<<<<<< HEAD
    /**
     * Generate a unique index name based on the table and columns.
     *
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        private function indexExists(string $connectionName, string $tableName, string $indexName): bool
        {
            $connection = DB::connection($connectionName);
            $schemaManager = $connection->getDoctrineSchemaManager();
            $indexes = $schemaManager->listTableIndexes($tableName);

            return array_key_exists($indexName, $indexes);
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Generate a unique index name based on the table and columns.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param  string  $tableName  name of the table
     * @param  array<string>  $columns  columns to include in the index
     */
    private function generateIndexName(string $tableName, array $columns): string
    {
        return $tableName.'_'.implode('_', $columns).'_index';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
     * @param string $tableName name of the table
     * @param string[] $columns   columns to include in the index
     */
    private function generateIndexName(string $tableName, array $columns): string
    {
<<<<<<< HEAD
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
        return $tableName.'_'.implode('_', $columns).'_index';
        return $tableName . '_' . implode('_', $columns) . '_index';
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
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $tableName.'_'.implode('_', $columns).'_index';
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
        return $tableName . '_' . implode('_', $columns) . '_index';
=======
        return $tableName.'_'.implode('_', $columns).'_index';
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
>>>>>>> 5a14301c (.)
=======
=======
        return $tableName.'_'.implode('_', $columns).'_index';
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
>>>>>>> 5a14301c (.)
=======
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
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
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $tableName . '_' . implode('_', $columns) . '_index';
>>>>>>> 300ef70 (.)
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
=======
        return $tableName.'_'.implode('_', $columns).'_index';
>>>>>>> f1d4085 (.)
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
>>>>>>> laraxot/develop
    }
}
