<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Import;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 091f883c (.)
use Exception;
<<<<<<< HEAD
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
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
use Filament\Notifications\Notification;
=======
use Filament\Notifications\Notification;
use Illuminate\Database\Schema\Builder;
>>>>>>> 551c768c4 (.)
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ColumnData;
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
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\ini_set;

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

use function Safe\ini_set;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
     * @param string $disk     the storage disk where the file is located
     * @param string $filename the name of the file to import
     * @param string $db       the database connection name
     * @param string $tbl      the table name where data will be imported
=======
>>>>>>> 551c768c4 (.)
     *
<<<<<<< HEAD
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
=======
     * @throws Exception
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
     * @param Builder $conn
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
     * @param Builder $conn
     *
     * @return ColumnData[]
     */
    private function getTableColumns($conn, string $tbl): array
=======
     * @return array<ColumnData>
     */
    private function getTableColumns(Builder $conn, string $tbl): array
>>>>>>> 551c768c4 (.)
    {
        $columns = $conn->getColumnListing($tbl);
        $excludedColumns = ['id'];

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
        return array_map(function (string $column) use ($conn, $tbl) {
            $type = $conn->getColumnType($tbl, $column);

            return new ColumnData(
                name: $column,
                type: $type
            );
        }, array_diff($columns, $excludedColumns));
<<<<<<< HEAD
<<<<<<< HEAD
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
    }

    /**
     * Prepare fields for the SQL query.
     *
<<<<<<< HEAD
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
=======
     * @param  array<ColumnData>  $columns
     * @return array<string>
>>>>>>> 551c768c4 (.)
     */
    private function prepareFields(array $columns): array
    {
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
        return array_map(
<<<<<<< HEAD
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
            fn(ColumnData $column) => 'decimal' === $column->type ? ('@' . $column->name) : $column->name,
=======
            fn (ColumnData $column) => $column->type === 'decimal' ? '@'.$column->name : $column->name,
>>>>>>> 551c768c4 (.)
            $columns,
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        return array_map(function (ColumnData $column) {
            return 'decimal' === $column->type ? '@'.$column->name : $column->name;
        }, $columns);
<<<<<<< HEAD
<<<<<<< HEAD
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
    }

    /**
     * Build the SQL query for importing data.
     *
<<<<<<< HEAD
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
     * @param ColumnData[] $columns
=======
     * @param  array<ColumnData>  $columns
>>>>>>> 551c768c4 (.)
     */
    private function buildSql(string $path, string $db, string $tbl, string $fieldsUpList, array $columns): string
    {
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
        $sql =
            "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' ".
            "INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 ".
            "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".
            '"'.
            "' ".
            "ESCAPED BY '".
            '"'.
            "' ".
<<<<<<< HEAD
            "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' " .
            "INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 " .
            "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '" .
            '"' .
            "' " .
            "ESCAPED BY '" .
            '"' .
            "' " .
=======
>>>>>>> 551c768c4 (.)
            "LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
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
        $sql = "LOAD DATA LOW_PRIORITY LOCAL INFILE '{$path}' "
            ."INTO TABLE `{$db}`.`{$tbl}` CHARACTER SET latin1 "
            ."FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '".'"'."' "
            ."ESCAPED BY '".'"'."' "
            ."LINES TERMINATED BY '\r\n' ({$fieldsUpList})";
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

        $sqlReplace = [];
        foreach ($columns as $column) {
<<<<<<< HEAD
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
            if ('decimal' === $column->type) {
=======
            if ($column->type === 'decimal') {
>>>>>>> 551c768c4 (.)
                $sqlReplace[] = "{$column->name} = REPLACE(@{$column->name}, ',', '.')";
            }
        }

<<<<<<< HEAD
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
<<<<<<< HEAD
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        if (!empty($sqlReplace)) {
            $sql .= ' SET ' . implode(', ', $sqlReplace) . ';';
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if (! empty($sqlReplace)) {
            $sql .= ' SET '.implode(', ', $sqlReplace).';';
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
     * @param string[] $columns
     *
     * @return ColumnData[]
     * @deprecated This method is currently unused but kept for future expansion.
=======
>>>>>>> 551c768c4 (.)
     * @phpstan-ignore method.unused
     */
    private function transformColumnsToColumnData(array $columns): array
    {
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
        return array_map(
<<<<<<< HEAD
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

=======
            function (string $column): ColumnData {
>>>>>>> 551c768c4 (.)
                return new ColumnData(
                    name: $column,
                    type: 'string', // Default type, modify if necessary
                );
            },
            $columns,
        );
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    }
}
