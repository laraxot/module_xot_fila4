<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Import;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
=======
<<<<<<< HEAD
use Exception;
use Illuminate\Database\Schema\Builder;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ColumnData;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\ini_set;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

use function Safe\ini_set;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\ini_set;

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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
class ImportCsvAction
{
    use QueueableAction;

    /**
     * Import a CSV file into a database table.
     *
     * @param  string  $disk  the storage disk where the file is located
     * @param  string  $filename  the name of the file to import
     * @param  string  $db  the database connection name
     * @param  string  $tbl  the table name where data will be imported
     * @param string $disk     the storage disk where the file is located
     * @param string $filename the name of the file to import
     * @param string $db       the database connection name
     * @param string $tbl      the table name where data will be imported
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws Exception
=======
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
     */
    public function execute(string $disk, string $filename, string $db, string $tbl): void
    {
        ini_set('max_execution_time', '0');
        ini_set('memory_limit', '-1');

        $storage = Storage::disk($disk);
        Assert::true($storage->exists($filename), "File {$filename} does not exist on disk {$disk}.");

        $path = $storage->path($filename);
        $path = Str::of($path)->replace('\\', '/')->toString();

        $conn = Schema::connection($db);
        $pdo = DB::connection($db)->getPdo();

        // Retrieve table columns
        $columns = $this->getTableColumns($conn, $tbl);

        // Prepare fields for SQL query
        $fieldsUp = $this->prepareFields($columns);
        $fieldsUpList = implode(', ', $fieldsUp);

        // Build SQL query
        $sql = $this->buildSql($path, $db, $tbl, $fieldsUpList, $columns);
        // Enable local infile
        $pdo->exec('SET GLOBAL local_infile=1;');

        // Execute the SQL query
        $nRows = $pdo->exec($sql);

        // Send success notification
        Notification::make()
            ->title('Import successful')
            ->success()
            ->body("{$nRows} records imported successfully.")
            ->persistent()
            ->send();
    }

    /**
     * Get table columns excluding certain fields.
     *
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
     * @return array<ColumnData>
     */
    private function getTableColumns(Builder $conn, string $tbl): array
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
>>>>>>> ce6fc085 (.)
     * @param Builder $conn
=======
<<<<<<< HEAD
     * @param Builder $conn
=======
     * @param \Illuminate\Database\Schema\Builder $conn
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
     * @return ColumnData[]
     */
    private function getTableColumns($conn, string $tbl): array
    {
        $columns = $conn->getColumnListing($tbl);
        $excludedColumns = ['id'];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        return array_map(
            function (string $column) use ($conn, $tbl) {
                $type = $conn->getColumnType($tbl, $column);

                return new ColumnData(
                    name: $column,
                    type: $type,
                );
            },
            array_diff($columns, $excludedColumns),
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        return array_map(function (string $column) use ($conn, $tbl) {
            $type = $conn->getColumnType($tbl, $column);

            return new ColumnData(
                name: $column,
                type: $type
            );
        }, array_diff($columns, $excludedColumns));
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        return array_map(
            function (string $column) use ($conn, $tbl) {
                $type = $conn->getColumnType($tbl, $column);

                return new ColumnData(
                    name: $column,
                    type: $type,
                );
            },
            array_diff($columns, $excludedColumns),
        );
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    }

    /**
     * Prepare fields for the SQL query.
     *
     * @param ColumnData[] $columns
     *
     * @return string[]
     * @param ColumnData[] $columns
     *
     * @return string[]
     * @param ColumnData[] $columns
     *
     * @return string[]
     * @param ColumnData[] $columns
     *
     * @return string[]
     * @param ColumnData[] $columns
     *
     * @return string[]
     */
    private function prepareFields(array $columns): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        return array_map(
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            $columns,
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return array_map(function (ColumnData $column) {
            return 'decimal' === $column->type ? '@'.$column->name : $column->name;
        }, $columns);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
        return array_map(function (ColumnData $column) {
            return 'decimal' === $column->type ? '@'.$column->name : $column->name;
        }, $columns);
<<<<<<< HEAD
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
        return array_map(function (ColumnData $column) {
            return 'decimal' === $column->type ? '@'.$column->name : $column->name;
        }, $columns);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    }

    /**
     * Build the SQL query for importing data.
     *
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
     */
    private function buildSql(string $path, string $db, string $tbl, string $fieldsUpList, array $columns): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $sql =
            "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' ".
            "INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 ".
            "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".
            '"'.
            "' ".
            "ESCAPED BY '".
            '"'.
            "' ".
            "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' " .
            "INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 " .
            "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '" .
            '"' .
            "' " .
            "ESCAPED BY '" .
            '"' .
            "' " .
            "LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
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
        $sql = "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' "
            ."INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 "
            ."FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".'"'."' "
            ."ESCAPED BY '".'"'."' "
            ."LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
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

        $sqlReplace = [];
        foreach ($columns as $column) {
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
                $sqlReplace[] = "{$column->name} = REPLACE(@{$column->name}, ',', '.')";
            }
        }

<<<<<<< HEAD
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
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
>>>>>>> 2f3197ab (.)
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
<<<<<<< HEAD
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 5a14301c (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 3fbbf1f5 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 399f46d3 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 17684f52 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 399f46d3 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
>>>>>>> a12f125f4a (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> b93ef594b4 (.)
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 218dfed3 (.)
>>>>>>> ca9324a4 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 7131bd09 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> ed734516 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 7131bd09 (.)
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
=======
>>>>>>> ca9324a4 (.)
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
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        }

        return $sql;
    }

    /**
     * Transform columns into ColumnData objects.
     *
     * @param  array<string>  $columns
     * @return array<ColumnData>
     *
     * @deprecated This method is currently unused but kept for future expansion.
     *
     * @param string[] $columns
     *
     * @return ColumnData[]
     * @deprecated This method is currently unused but kept for future expansion.
     * @phpstan-ignore method.unused
     */
    private function transformColumnsToColumnData(array $columns): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        return array_map(
            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

                return new ColumnData(
                    name: $column,
                    type: 'string', // Default type, modify if necessary
                );
            },
            $columns,
        );
        return array_map(function ($column): ColumnData {
            Assert::string($column, 'Column must be a string');

            return new ColumnData(
                name: $column,
                type: 'string' // Default type, modify if necessary
            );
        }, $columns);
        return array_map(
            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

                return new ColumnData(
                    name: $column,
                    type: 'string', // Default type, modify if necessary
                );
            },
            $columns,
        );
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        return array_map(function ($column): ColumnData {
            Assert::string($column, 'Column must be a string');

            return new ColumnData(
                name: $column,
                type: 'string' // Default type, modify if necessary
            );
        }, $columns);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return array_map(
            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

                return new ColumnData(
                    name: $column,
                    type: 'string', // Default type, modify if necessary
                );
            },
            $columns,
        );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
