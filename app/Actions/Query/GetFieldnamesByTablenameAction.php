<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Query;

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use InvalidArgumentException;
use Throwable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

final class GetFieldnamesByTablenameAction
{
    use QueueableAction;

    /**
     * Get column names from a table with specific database connection.
     *
     * @param  string  $table  Table name to get columns from
     * @param  string|null  $connectionName  Database connection name (optional)
     * @return list
     *
     * @throws InvalidArgumentException
     */
    public function execute(string $table, ?string $connectionName = null): array
     * @param string $table          Table name to get columns from
     * @param string|null $connectionName Database connection name (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return list
     */
    public function execute(string $table, null|string $connectionName = null): array
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
<<<<<<< HEAD
    public function execute(string $table, null|string $connectionName = null): array
=======
>>>>>>> 2f3197ab (.)
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
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
>>>>>>> ce6fc085 (.)
    public function execute(string $table, ?string $connectionName = null): array
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
    public function execute(string $table, null|string $connectionName = null): array
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
    public function execute(string $table, ?string $connectionName = null): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function execute(string $table, null|string $connectionName = null): array
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
    public function execute(string $table, ?string $connectionName = null): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
<<<<<<< HEAD
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
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
    public function execute(string $table, ?string $connectionName = null): array
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function execute(string $table, null|string $connectionName = null): array
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
>>>>>>> 091f883c (.)
    {
        // Validate table name
        if (empty(trim($table))) {
            throw new InvalidArgumentException('Table name cannot be empty.');
        }

        // Use default connection if none is provided
        Assert::string($connectionName ??= config('database.default'));

        // Validate database connection
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s', $connectionName));
        }

        // Check if table exists in the database
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
            throw new InvalidArgumentException(sprintf(
                'Table "%s" does not exist in connection "%s".',
                $table,
                $connectionName,
            ));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        Assert::string($connectionName = $connectionName ?? config('database.default'));
=======
        Assert::string($connectionName ??= config('database.default'));
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)

        // Validate database connection
        if (!$this->isValidConnection($connectionName)) {
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s', $connectionName));
        }

        // Check if table exists in the database
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (! Schema::connection($connectionName)->hasTable($table)) {
            throw new InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        if (!Schema::connection($connectionName)->hasTable($table)) {
            throw new InvalidArgumentException(sprintf(
                'Table "%s" does not exist in connection "%s".',
                $table,
                $connectionName,
            ));
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
     * @throws \InvalidArgumentException
     *
     * @return list
     */
    public function execute(string $table, ?string $connectionName = null): array
    {
        // Validate table name
        if (empty(trim($table))) {
            throw new \InvalidArgumentException('Table name cannot be empty.');
        }

        // Use default connection if none is provided
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
>>>>>>> ce6fc085 (.)
        Assert::string($connectionName = $connectionName ?? config('database.default'));

        // Validate database connection
        if (! $this->isValidConnection($connectionName)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
=======
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
>>>>>>> 2f3197ab (.)
=======
            throw new \InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
>>>>>>> ce6fc085 (.)
        }

        // Check if table exists in the database
        if (! Schema::connection($connectionName)->hasTable($table)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
=======
            throw new InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
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
            throw new \InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        }

        // Get and return column listing
        try {
            $columns = Schema::connection($connectionName)->getColumnListing($table);
            $columns = array_values($columns);
            // $columns = array_map('strval', $columns);

            return $columns;

            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf(
                'Error fetching columns from table "%s": %s',
                $table,
                $e->getMessage(),
            ));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)

            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf(
                'Error fetching columns from table "%s": %s',
                $table,
                $e->getMessage(),
            ));
<<<<<<< HEAD
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (\Throwable $e) {
            throw new \InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
=======
=======
>>>>>>> 218dfed3 (.)
=======
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
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
>>>>>>> b93ef594b4 (.)
=======
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (\Throwable $e) {
            throw new \InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        }
    }

    /**
     * Check if a given database connection is valid.
     */
    private function isValidConnection(string $connectionName): bool
    {
        try {
            DB::connection($connectionName)->getPdo();

            return true;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
=======
        } catch (\Throwable $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        } catch (Throwable $e) {
>>>>>>> 091f883c (.)
            return false;
        }
    }
}
