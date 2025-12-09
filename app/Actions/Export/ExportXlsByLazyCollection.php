<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Http\Response;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
>>>>>>> 5a14301c (.)
use Illuminate\Support\LazyCollection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\LazyCollectionExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByLazyCollection
{
    use QueueableAction;

    /**
     * Esporta una lazy collection in Excel.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  LazyCollection  $collection  La lazy collection da esportare
     * @param  string  $filename  Nome del file Excel
     * @param  array<int, string>  $fields  Campi da includere nell'export
=======
=======
>>>>>>> 5a14301c (.)
     * @param LazyCollection $collection La lazy collection da esportare
     * @param string $filename Nome del file Excel
     * @param array<int, string> $fields Campi da includere nell'export
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
     * @return BinaryFileResponse
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(
        LazyCollection $collection,
        string $filename = 'test.xlsx',
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
<<<<<<< HEAD
        $stringFields = array_map(strval(...), array_values($fields));

        $export = new LazyCollectionExport($collection, $filename, $stringFields);
=======
        $stringFields = array_map(function ($field) {
            return strval($field);
        }, array_values($fields));

        $export = new LazyCollectionExport(
            $collection,
            $filename,
            $stringFields
        );
>>>>>>> f1d4085 (.)

        return Excel::download($export, $filename);
    }
}
