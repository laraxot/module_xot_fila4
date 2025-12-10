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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
    public function execute(string $table, ?string $connectionName = null): array
<<<<<<< HEAD
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
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $table, ?string $connectionName = null): array
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $table, null|string $connectionName = null): array
=======
>>>>>>> 2f3197ab (.)
    public function execute(string $table, ?string $connectionName = null): array
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public function execute(string $table, null|string $connectionName = null): array
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
    public function execute(string $table, null|string $connectionName = null): array
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public function execute(string $table, null|string $connectionName = null): array
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
        Assert::string($connectionName ??= config('database.default'));

        // Validate database connection
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
        if (!$this->isValidConnection($connectionName)) {
=======
        if (! $this->isValidConnection($connectionName)) {
>>>>>>> 551c768c4 (.)
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s', $connectionName));
        }

        // Check if table exists in the database
<<<<<<< HEAD
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
        if (!Schema::connection($connectionName)->hasTable($table)) {
=======
        if (! Schema::connection($connectionName)->hasTable($table)) {
>>>>>>> 551c768c4 (.)
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
        Assert::string($connectionName = $connectionName ?? config('database.default'));

        // Validate database connection
        if (! $this->isValidConnection($connectionName)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
=======
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
>>>>>>> 2f3197ab (.)
=======
            throw new \InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
>>>>>>> ce6fc085 (.)
=======
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
>>>>>>> 7468a7d2 (.)
=======
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s',  $connectionName));
>>>>>>> 5cf46378 (.)
=======
        if (! $this->isValidConnection($connectionName)) {
            throw new InvalidArgumentException(sprintf('Invalid database connection: %s', $connectionName));
>>>>>>> 414a4ffcb (.)
        }

        // Check if table exists in the database
        if (! Schema::connection($connectionName)->hasTable($table)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5cf46378 (.)
            throw new InvalidArgumentException(sprintf('Table "%s" does not exist in connection "%s".', $table,  $connectionName));
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
=======
            throw new InvalidArgumentException(sprintf(
                'Table "%s" does not exist in connection "%s".',
                $table,
                $connectionName,
            ));
>>>>>>> 414a4ffcb (.)
        }

        // Get and return column listing
        try {
            $columns = Schema::connection($connectionName)->getColumnListing($table);
<<<<<<< HEAD
<<<<<<< HEAD
            $columns = array_values($columns);
            // $columns = array_map('strval', $columns);

            return $columns;
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

=======

            return array_values($columns);
            // $columns = array_map('strval', $columns);
>>>>>>> 551c768c4 (.)
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

=======

            return array_values($columns);
            // $columns = array_map('strval', $columns);
>>>>>>> 414a4ffcb (.)
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf(
                'Error fetching columns from table "%s": %s',
                $table,
                $e->getMessage(),
            ));
<<<<<<< HEAD
<<<<<<< HEAD
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (\Throwable $e) {
            throw new \InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
            // return array_values(array_map(static fn ($value): string => is_string($value) ? $value : (string) $value, $columns));
        } catch (Throwable $e) {
            throw new InvalidArgumentException(sprintf('Error fetching columns from table "%s": %s', $table, $e->getMessage()));
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
=======
        } catch (Throwable $e) {
>>>>>>> 414a4ffcb (.)
            return false;
        }
    }
}
