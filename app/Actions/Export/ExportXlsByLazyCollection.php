<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Http\Response;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Http\Response;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
     * @param  LazyCollection  $collection  La lazy collection da esportare
     * @param  string  $filename  Nome del file Excel
     * @param  array<int, string>  $fields  Campi da includere nell'export
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param LazyCollection $collection La lazy collection da esportare
     * @param string $filename Nome del file Excel
     * @param array<int, string> $fields Campi da includere nell'export
     *
     * @return BinaryFileResponse
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
     * @param LazyCollection $collection La lazy collection da esportare
     * @param string $filename Nome del file Excel
     * @param array<int, string> $fields Campi da includere nell'export
     *
     * @return BinaryFileResponse
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
     * @param  LazyCollection  $collection  La lazy collection da esportare
     * @param  string  $filename  Nome del file Excel
     * @param  array<int, string>  $fields  Campi da includere nell'export
>>>>>>> 53d6a6ba (.)
     */
    public function execute(
        LazyCollection $collection,
        string $filename = 'test.xlsx',
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(strval(...), array_values($fields));

        $export = new LazyCollectionExport($collection, $filename, $stringFields);

        return Excel::download($export, $filename);
    }
}
