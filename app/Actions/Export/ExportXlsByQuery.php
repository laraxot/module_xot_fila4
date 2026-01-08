<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\QueryExport;
use Spatie\QueueableAction\QueueableAction;
// use Staudenmeir\LaravelCte\Query\Builder as CteBuilder;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByQuery
{
    use QueueableAction;

    /**
     * Esporta i risultati di una query in Excel.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
     * @param  Builder  $query  Query da esportare
     * @param  string  $filename  Nome del file Excel
     * @param  array<int, string>  $fields  Campi da includere nell'export
     * @param  int|null  $limit  Limite di righe da esportare
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
     * @param Builder $query Query da esportare
     * @param string $filename Nome del file Excel
     * @param array<int, string> $fields Campi da includere nell'export
     * @param int|null $limit Limite di righe da esportare
<<<<<<< HEAD
     *
     * @return BinaryFileResponse
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
     * @return BinaryFileResponse
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
     */
    public function execute(
        Builder $query,
        string $filename = 'test.xlsx',
        array $fields = [],
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        ?int $limit = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(strval(...), array_values($fields));

<<<<<<< HEAD
        // Apply limit if needed before creating export
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        null|int $limit = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(strval(...), array_values($fields));
<<<<<<< HEAD
=======
        ?int $limit = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function ($field) {
            return strval($field);
        }, array_values($fields));
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

=======
>>>>>>> 285375c74 (.)
        $export = new QueryExport(
            query: $query,
            transKey: null,
<<<<<<< HEAD
<<<<<<< HEAD
            fields: $stringFields,
=======
            fields: $stringFields
>>>>>>> f1d4085 (.)
=======
            fields: $stringFields,
>>>>>>> 73eab74 (.)
        );
        // Note: QueryExport doesn't accept a limit parameter directly
        // If limit is needed, apply it to the query before passing to the exporter
        if ($limit !== null) {
            $query->limit($limit);
        }

        return Excel::download($export, $filename);
    }
}
