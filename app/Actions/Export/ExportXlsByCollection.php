<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Collection;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Classe per l'esportazione di collezioni in formato Excel.
 */
class ExportXlsByCollection
{
    use QueueableAction;

    /**
     * Esporta una collezione in Excel.
     *
<<<<<<< HEAD
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $collection La collezione da esportare
=======
<<<<<<< HEAD
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $collection La collezione da esportare
=======
     * @param Collection<int|string, mixed>|EloquentCollection<int, \Illuminate\Database\Eloquent\Model> $collection La collezione da esportare
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @param string $filename Nome del file Excel
     * @param string|null $transKey Chiave di traduzione per i campi
     * @param array<int, string> $fields Campi da includere nell'export
     *
     * @return BinaryFileResponse
     */
    public function execute(
        Collection|EloquentCollection $collection,
        string $filename = 'test.xlsx',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        null|string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn(mixed $field): string => (string) $field, array_values($fields));

        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields,
<<<<<<< HEAD
=======
=======
        ?string $transKey = null,
=======
        null|string $transKey = null,
>>>>>>> b93ef594b4 (.)
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn(mixed $field): string => (string) $field, array_values($fields));

        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
<<<<<<< HEAD
            fields: $stringFields
>>>>>>> a12f125f4a (.)
=======
            fields: $stringFields,
>>>>>>> b93ef594b4 (.)
=======
        ?string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
        
       
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(
            fn (mixed $field): string => (string) $field,
            array_values($fields)
        );
       
        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        );

        return Excel::download($export, $filename);
    }

    /**
     * Esporta una collezione in Excel utilizzando PhpSpreadsheet direttamente.
     *
<<<<<<< HEAD
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $rows La collezione da esportare
=======
<<<<<<< HEAD
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $rows La collezione da esportare
=======
     * @param Collection<int|string, mixed>|EloquentCollection<int, \Illuminate\Database\Eloquent\Model> $rows La collezione da esportare
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @param array<int, string> $fields Campi da includere nell'export
     * @param string $filename Nome del file Excel
     *
     * @return string Il percorso del file generato
     */
    public function executeWithSpreadsheet(Collection|EloquentCollection $rows, array $fields, string $filename): string
    {
        // Converte EloquentCollection in Support\Collection se necessario
        if ($rows instanceof EloquentCollection) {
            $rows = Collection::make($rows->toArray());
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $this->writeHeader($sheet, $fields);
        $this->writeRows($sheet, $rows, $fields);

        $writer = new Xlsx($spreadsheet);
        $writer->save($filename);

        return $filename;
    }

    /**
     * Scrive l'intestazione nel foglio Excel.
     *
     * @param Worksheet $sheet Il foglio Excel
     * @param array<int, string> $fields I campi da utilizzare come intestazioni
     */
    protected function writeHeader(Worksheet $sheet, array $fields): void
    {
        foreach ($fields as $col => $field) {
            $sheet->setCellValueByColumnAndRow($col + 1, 1, $field);
        }
    }

    /**
     * Scrive le righe nel foglio di lavoro.
     *
     * @param Worksheet $sheet Il foglio di lavoro
     * @param Collection<int|string, mixed> $rows I dati da scrivere
     * @param array<int, string> $fields I campi da utilizzare per le colonne
     */
    protected function writeRows(Worksheet $sheet, Collection $rows, array $fields): void
    {
        $row = 2;
        foreach ($rows as $data) {
            foreach ($fields as $col => $field) {
                $value = $this->extractValue($data, $field);
                $sheet->setCellValueByColumnAndRow($col + 1, $row, $value);
            }
            $row++;
        }
    }

    /**
     * Estrae il valore da un oggetto o array usando il campo specificato.
     *
     * @param mixed $data I dati da cui estrarre il valore
     * @param string $field Il campo da estrarre
     *
     * @return mixed Il valore estratto
     */
    protected function extractValue(mixed $data, string $field): mixed
    {
        // Usa data_get di Laravel per accesso sicuro ai dati nidificati
        return data_get($data, $field, '');
    }

    /**
     * Converte EloquentCollection in Support\Collection mantenendo i dati.
     *
<<<<<<< HEAD
     * @param EloquentCollection<int, Model> $eloquentCollection
=======
<<<<<<< HEAD
     * @param EloquentCollection<int, Model> $eloquentCollection
=======
     * @param EloquentCollection<int, \Illuminate\Database\Eloquent\Model> $eloquentCollection
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return Collection<int|string, mixed>
     */
    protected function convertToSupportCollection(EloquentCollection $eloquentCollection): Collection
    {
        return Collection::make($eloquentCollection->toArray());
    }
}
