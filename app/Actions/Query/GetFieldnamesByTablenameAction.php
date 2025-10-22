<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Query;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $table, ?string $connectionName = null): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $table, null|string $connectionName = null): array
=======
    public function execute(string $table, ?string $connectionName = null): array
>>>>>>> f1d4085 (.)
=======
    public function execute(string $table, null|string $connectionName = null): array
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function execute(string $table, null|string $connectionName = null): array
>>>>>>> 300ef70 (.)
    {
        // Validate table name
        if (empty(trim($table))) {
            throw new InvalidArgumentException('Table name cannot be empty.');
        }

        // Use default connection if none is provided
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        Assert::string($connectionName ??= config('database.default'));

        // Validate database connection
        if (! $this->isValidConnection($connectionName)) {
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s', $connectionName));
        }

        // Check if table exists in the database
        if (! Schema::connection($connectionName)->hasTable($table)) {
            throw new InvalidArgumentException(sprintf(
                'Table "%s" does not exist in connection "%s".',
                $table,
                $connectionName,
            ));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::string($connectionName = $connectionName ?? config('database.default'));

        // Validate database connection
        if (! $this->isValidConnection($connectionName)) {
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
        }

        // Check if table exists in the database
        if (! Schema::connection($connectionName)->hasTable($table)) {
            throw new InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        }

        // Get and return column listing
        try {
            $columns = Schema::connection($connectionName)->getColumnListing($table);
            $columns = array_values($columns);
            // $columns = array_map('strval', $columns);

            return $columns;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf(
                'Error fetching columns from table "%s": %s',
                $table,
                $e->getMessage(),
            ));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
        } catch (Throwable $e) {
            return false;
        }
    }
}
