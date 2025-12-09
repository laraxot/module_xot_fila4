<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Import;

<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
=======
use Illuminate\Database\Schema\Builder;
=======
<<<<<<< HEAD
use Exception;
use Illuminate\Database\Schema\Builder;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Notifications\Notification;
>>>>>>> 5a14301c (.)
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
=======
=======
=======
>>>>>>> origin/develop

use function Safe\ini_set;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\ini_set;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
class ImportCsvAction
{
    use QueueableAction;

    /**
     * Import a CSV file into a database table.
     *
<<<<<<< HEAD
     * @param  string  $disk  the storage disk where the file is located
     * @param  string  $filename  the name of the file to import
     * @param  string  $db  the database connection name
     * @param  string  $tbl  the table name where data will be imported
=======
     * @param string $disk     the storage disk where the file is located
     * @param string $filename the name of the file to import
     * @param string $db       the database connection name
     * @param string $tbl      the table name where data will be imported
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
     * @throws Exception
=======
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
     * @return array<ColumnData>
     */
    private function getTableColumns(Builder $conn, string $tbl): array
=======
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5a14301c (.)
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
=======
=======
=======
>>>>>>> origin/develop
        return array_map(function (string $column) use ($conn, $tbl) {
            $type = $conn->getColumnType($tbl, $column);

            return new ColumnData(
                name: $column,
                type: $type
            );
        }, array_diff($columns, $excludedColumns));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Prepare fields for the SQL query.
     *
<<<<<<< HEAD
     * @param  array<ColumnData>  $columns
     * @return array<string>
=======
     * @param ColumnData[] $columns
     *
     * @return string[]
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
            fn (ColumnData $column) => $column->type === 'decimal' ? '@'.$column->name : $column->name,
=======
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
>>>>>>> 5a14301c (.)
            $columns,
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_map(function (ColumnData $column) {
            return 'decimal' === $column->type ? '@'.$column->name : $column->name;
        }, $columns);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        return array_map(function (ColumnData $column) {
            return 'decimal' === $column->type ? '@'.$column->name : $column->name;
        }, $columns);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Build the SQL query for importing data.
     *
<<<<<<< HEAD
     * @param  array<ColumnData>  $columns
=======
     * @param ColumnData[] $columns
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
            "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' ".
            "INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 ".
            "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".
            '"'.
            "' ".
            "ESCAPED BY '".
            '"'.
            "' ".
=======
            "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' " .
            "INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 " .
            "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '" .
            '"' .
            "' " .
            "ESCAPED BY '" .
            '"' .
            "' " .
>>>>>>> 5a14301c (.)
            "LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $sql = "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' "
            ."INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 "
            ."FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".'"'."' "
            ."ESCAPED BY '".'"'."' "
            ."LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        $sqlReplace = [];
        foreach ($columns as $column) {
<<<<<<< HEAD
            if ($column->type === 'decimal') {
=======
            if ('decimal' === $column->type) {
>>>>>>> 5a14301c (.)
                $sqlReplace[] = "{$column->name} = REPLACE(@{$column->name}, ',', '.')";
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
        }

        return $sql;
    }

    /**
     * Transform columns into ColumnData objects.
     *
<<<<<<< HEAD
     * @param  array<string>  $columns
     * @return array<ColumnData>
     *
     * @deprecated This method is currently unused but kept for future expansion.
     *
=======
     * @param string[] $columns
     *
     * @return ColumnData[]
     * @deprecated This method is currently unused but kept for future expansion.
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
            function (string $column): ColumnData {
=======
            function ($column): ColumnData {
                Assert::string($column, 'Column must be a string');

>>>>>>> 5a14301c (.)
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
