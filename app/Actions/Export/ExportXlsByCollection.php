<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
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
>>>>>>> 2f3197ab (.)
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

/**
 * Classe per l'esportazione di collezioni in formato Excel.
 */
class ExportXlsByCollection
{
    use QueueableAction;

    /**
     * Esporta una collezione in Excel.
     *
     * @param  Collection<int|string, mixed>|EloquentCollection<int, Model>  $collection  La collezione da esportare
     * @param  string  $filename  Nome del file Excel
     * @param  string|null  $transKey  Chiave di traduzione per i campi
     * @param  array<int, string>  $fields  Campi da includere nell'export
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $collection La collezione da esportare
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
        ?string $transKey = null,
        null|string $transKey = null,
        null|string $transKey = null,
        ?string $transKey = null,
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
        ?string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn (mixed $field): string => (string) $field, array_values($fields));
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
=======
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
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
        ?string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn (mixed $field): string => (string) $field, array_values($fields));
        null|string $transKey = null,
        ?string $transKey = null,
        null|string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn(mixed $field): string => (string) $field, array_values($fields));

        $export = new CollectionExport(

        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields
            fields: $stringFields,
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
            collection: $normalizedCollection,
            headings: [],
            columns: $stringFields,
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields

        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields,
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields,
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        );

        return Excel::download($export, $filename);
    }

    /**
     * Esporta una collezione in Excel utilizzando PhpSpreadsheet direttamente.
     *
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $rows La collezione da esportare
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
        $spreadsheet = new Spreadsheet();
        $spreadsheet = new Spreadsheet();
        $spreadsheet = new Spreadsheet();
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
     * @param Worksheet $sheet Il foglio Excel
     * @param array<int, string> $fields I campi da utilizzare come intestazioni
     * @param Worksheet $sheet Il foglio Excel
     * @param array<int, string> $fields I campi da utilizzare come intestazioni
     * @param Worksheet $sheet Il foglio Excel
     * @param array<int, string> $fields I campi da utilizzare come intestazioni
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
     * @param Worksheet $sheet Il foglio di lavoro
     * @param Collection<int|string, mixed> $rows I dati da scrivere
     * @param array<int, string> $fields I campi da utilizzare per le colonne
     * @param Worksheet $sheet Il foglio di lavoro
     * @param Collection<int|string, mixed> $rows I dati da scrivere
     * @param array<int, string> $fields I campi da utilizzare per le colonne
     * @param Worksheet $sheet Il foglio di lavoro
     * @param Collection<int|string, mixed> $rows I dati da scrivere
     * @param array<int, string> $fields I campi da utilizzare per le colonne
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
     * @param mixed $data I dati da cui estrarre il valore
     * @param string $field Il campo da estrarre
     *
     * @param mixed $data I dati da cui estrarre il valore
     * @param string $field Il campo da estrarre
     *
     * @param mixed $data I dati da cui estrarre il valore
     * @param string $field Il campo da estrarre
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
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @return Collection<int|string, mixed>
     */
    protected function convertToSupportCollection(EloquentCollection $eloquentCollection): Collection
    {
        return Collection::make($eloquentCollection->toArray());
    }
}
