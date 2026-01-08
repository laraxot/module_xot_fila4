<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Import;

use Exception;
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ColumnData;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\ini_set;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

use function Safe\ini_set;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
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
     *
     * @throws Exception
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
     * @return array<ColumnData>
     */
    private function getTableColumns(Builder $conn, string $tbl): array
    {
        $columns = $conn->getColumnListing($tbl);
        $excludedColumns = ['id'];

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
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
=======
<<<<<<< HEAD
=======
        return array_map(function (string $column) use ($conn, $tbl) {
            $type = $conn->getColumnType($tbl, $column);

            return new ColumnData(
                name: $column,
                type: $type
            );
        }, array_diff($columns, $excludedColumns));
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    }

    /**
     * Prepare fields for the SQL query.
     *
     * @param  array<ColumnData>  $columns
     * @return array<string>
     */
    private function prepareFields(array $columns): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
        return array_map(
            fn (ColumnData $column) => $column->type === 'decimal' ? '@'.$column->name : $column->name,
            $columns,
        );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_map(function (ColumnData $column) {
            return 'decimal' === $column->type ? '@'.$column->name : $column->name;
        }, $columns);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    }

    /**
     * Build the SQL query for importing data.
     *
     * @param  array<ColumnData>  $columns
     */
    private function buildSql(string $path, string $db, string $tbl, string $fieldsUpList, array $columns): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
        $sql =
            "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' ".
            "INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 ".
            "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".
            '"'.
            "' ".
            "ESCAPED BY '".
            '"'.
            "' ".
            "LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $sql = "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' "
            ."INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 "
            ."FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".'"'."' "
            ."ESCAPED BY '".'"'."' "
            ."LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)

        $sqlReplace = [];
        foreach ($columns as $column) {
            if ($column->type === 'decimal') {
                $sqlReplace[] = "{$column->name} = REPLACE(@{$column->name}, ',', '.')";
            }
        }

<<<<<<< HEAD
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
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
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
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
     * @phpstan-ignore method.unused
     */
    private function transformColumnsToColumnData(array $columns): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
        return array_map(
            function (string $column): ColumnData {
                return new ColumnData(
                    name: $column,
                    type: 'string', // Default type, modify if necessary
                );
            },
            $columns,
        );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return array_map(function ($column): ColumnData {
            Assert::string($column, 'Column must be a string');

            return new ColumnData(
                name: $column,
                type: 'string' // Default type, modify if necessary
            );
        }, $columns);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    }
}
