<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Query;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $table, null|string $connectionName = null): array
=======
>>>>>>> 2f3197ab (.)
    public function execute(string $table, ?string $connectionName = null): array
    public function execute(string $table, null|string $connectionName = null): array
    public function execute(string $table, ?string $connectionName = null): array
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
>>>>>>> 2f3197ab (.)
    {
        // Validate table name
        if (empty(trim($table))) {
            throw new InvalidArgumentException('Table name cannot be empty.');
        }

        // Use default connection if none is provided
<<<<<<< HEAD
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

        // Validate database connection
        if (!$this->isValidConnection($connectionName)) {
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s', $connectionName));
        }

        // Check if table exists in the database
        if (!Schema::connection($connectionName)->hasTable($table)) {
            throw new InvalidArgumentException(sprintf(
                'Table "%s" does not exist in connection "%s".',
                $table,
                $connectionName,
            ));
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
=======
=======
>>>>>>> 2f3197ab (.)
        Assert::string($connectionName = $connectionName ?? config('database.default'));

        // Validate database connection
        if (! $this->isValidConnection($connectionName)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
=======
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
>>>>>>> 2f3197ab (.)
        }

        // Check if table exists in the database
        if (! Schema::connection($connectionName)->hasTable($table)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
=======
            throw new InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        }

        // Get and return column listing
        try {
            $columns = Schema::connection($connectionName)->getColumnListing($table);
            $columns = array_values($columns);
            // $columns = array_map('strval', $columns);

            return $columns;
<<<<<<< HEAD

            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf(
                'Error fetching columns from table "%s": %s',
                $table,
                $e->getMessage(),
            ));
<<<<<<< HEAD

            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf(
                'Error fetching columns from table "%s": %s',
                $table,
                $e->getMessage(),
            ));
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (\Throwable $e) {
            throw new \InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
=======
=======
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
            return false;
        }
    }
}
