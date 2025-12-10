<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use function Safe\json_encode;

class SearchTextInDbCommand extends Command
{
    protected $signature = 'db:search-text {search : The text to search for} {--tables=* : Optional specific tables to search in}';

    protected $description = 'Search for text in all database tables or specific tables';

    public function handle(): int
    {
        $searchString = $this->argument('search');
        if (! is_string($searchString)) {
            $this->error('Search string must be a valid string');

            return Command::FAILURE;
        }

        $specificTables = $this->option('tables');
        $databaseName = DB::getDatabaseName();
        $tableProp = 'Tables_in_'.$databaseName;

        // Get tables either from specific option or all tables
        if (empty($specificTables) || ! is_array($specificTables)) {
            $tables = collect(DB::select('SHOW TABLES'));
        } else {
            $tables = collect($specificTables);
        }
<<<<<<< HEAD
<<<<<<< HEAD
        $tables = empty($specificTables)
            ? collect(DB::select('SHOW TABLES'))
            : collect($specificTables);
        $tables = empty($specificTables)
            ? collect(DB::select('SHOW TABLES'))
            : collect($specificTables);
        $tables = empty($specificTables)
            ? collect(DB::select('SHOW TABLES'))
            : collect($specificTables);
        $tables = empty($specificTables)
            ? collect(DB::select('SHOW TABLES'))
            : collect($specificTables);
        $tables = empty($specificTables)
            ? collect(DB::select('SHOW TABLES'))
            : collect($specificTables);
        $tables = empty($specificTables)
            ? collect(DB::select('SHOW TABLES'))
            : collect($specificTables);
        $tables = empty($specificTables)
            ? collect(DB::select('SHOW TABLES'))
            : collect($specificTables);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

        foreach ($tables as $table) {
            // Get table name with proper type checking
            $tableName = null;
            if (is_object($table)) {
                // Usa isset() invece di property_exists per oggetti stdClass
                if (isset($table->$tableProp) && is_string($table->$tableProp)) {
<<<<<<< HEAD
<<<<<<< HEAD
                if (property_exists($table, $tableProp) && is_string($table->$tableProp)) {
                if (property_exists($table, $tableProp) && is_string($table->$tableProp)) {
                if (property_exists($table, $tableProp) && is_string($table->$tableProp)) {
                // Usa isset() invece di property_exists per oggetti stdClass
                if (isset($table->$tableProp) && is_string($table->$tableProp)) {
                if (property_exists($table, $tableProp) && is_string($table->$tableProp)) {
                if (property_exists($table, $tableProp) && is_string($table->$tableProp)) {
                if (property_exists($table, $tableProp) && is_string($table->$tableProp)) {
                if (property_exists($table, $tableProp) && is_string($table->$tableProp)) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                    $tableName = $table->$tableProp;
                }
            } elseif (is_string($table)) {
                $tableName = $table;
            }

            if (! is_string($tableName)) {
                $this->warn('Invalid table name format');

                continue;
            }

            if (! Schema::hasTable($tableName)) {
                $this->warn(sprintf('Table %s does not exist', $tableName));

                continue;
            }

            $this->info(sprintf('Searching in table: %s', $tableName));

            /** @var array<string>|false $columns */
            $columns = Schema::getColumnListing($tableName);
            if (! is_array($columns)) {
                continue;
            }

            foreach ($columns as $column) {
                if (! is_string($column)) {
                    continue;
                }

                /** @var string|null $columnType */
                $columnType = Schema::getColumnType($tableName, $column);
                if (! is_string($columnType)) {
                    continue;
                }

                // Search only in string-like columns
                if (! in_array($columnType, ['string', 'text'])) {
                    continue;
                }

                $results = DB::table($tableName)
                    ->select('*')
                    ->where($column, 'LIKE', '%'.addslashes($searchString).'%')
                    ->get();

                if ($results->isNotEmpty()) {
                    $this->info("Found in column: {$column}");
<<<<<<< HEAD
<<<<<<< HEAD
                    $this->info("Found in column: $column");
                    $this->info("Found in column: $column");
                    $this->info("Found in column: $column");
                    $this->info("Found in column: {$column}");
                    $this->info("Found in column: $column");
                    $this->info("Found in column: $column");
                    $this->info("Found in column: $column");
                    $this->info("Found in column: $column");
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                    foreach ($results as $result) {
                        $this->table(
                            ['Column', 'Value'],
                            collect((array) $result)
                                ->map(fn ($value, $key) => [
                                    (string) $key,
                                    is_scalar($value) ? (string) $value : json_encode($value),
                                ])
                                ->toArray()
                        );
                        $this->newLine();
                    }
                }
            }
        }

        return Command::SUCCESS;
    }
}
