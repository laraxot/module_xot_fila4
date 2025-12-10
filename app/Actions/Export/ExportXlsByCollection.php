<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

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
=======
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> ca9324a4 (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 3fbbf1f5 (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 551c768c4 (.)
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
use Illuminate\Support\Collection;
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
<<<<<<< HEAD
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
     * @param  Collection<int|string, mixed>|EloquentCollection<int, Model>  $collection  La collezione da esportare
     * @param  string  $filename  Nome del file Excel
     * @param  string|null  $transKey  Chiave di traduzione per i campi
     * @param  array<int, string>  $fields  Campi da includere nell'export
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $collection La collezione da esportare
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $collection La collezione da esportare
     * @param string $filename Nome del file Excel
     * @param string|null $transKey Chiave di traduzione per i campi
     * @param array<int, string> $fields Campi da includere nell'export
     *
     * @return BinaryFileResponse
=======
>>>>>>> 551c768c4 (.)
     */
    public function execute(
        Collection|EloquentCollection $collection,
        string $filename = 'test.xlsx',
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        ?string $transKey = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        null|string $transKey = null,
>>>>>>> a6ef6dc7 (.)
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn (mixed $field): string => (string) $field, array_values($fields));
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        null|string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn(mixed $field): string => (string) $field, array_values($fields));

        $export = new CollectionExport(
<<<<<<< HEAD
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields,
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
        null|string $transKey = null,
        ?string $transKey = null,
        null|string $transKey = null,
=======
=======
=======
        ?string $transKey = null,
=======
        null|string $transKey = null,
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn(mixed $field): string => (string) $field, array_values($fields));

        $export = new CollectionExport(
<<<<<<< HEAD

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
=======
            collection: $collection,
            transKey: $transKey,
<<<<<<< HEAD
            fields: $stringFields
>>>>>>> a12f125f4a (.)
=======
            fields: $stringFields,
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
            collection: $normalizedCollection,
            headings: [],
            columns: $stringFields,
<<<<<<< HEAD
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields
=======
>>>>>>> 551c768c4 (.)

        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields,
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        ?string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(fn (mixed $field): string => (string) $field, array_values($fields));

        // Converti EloquentCollection in Collection<int, Model>
        /** @var Collection<int, Model> $normalizedCollection */
        $normalizedCollection = $collection instanceof EloquentCollection
            ? Collection::make($collection->all())
            : $collection;

        $export = new CollectionExport(
<<<<<<< HEAD
            collection: $normalizedCollection,
            headings: [],
            columns: $stringFields,
>>>>>>> 5cf46378 (.)
=======
            collection: $collection,
            transKey: $transKey,
            fields: $stringFields
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
        );

        return Excel::download($export, $filename);
    }

    /**
     * Esporta una collezione in Excel utilizzando PhpSpreadsheet direttamente.
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
     * @param  Collection<int|string, mixed>|EloquentCollection<int, Model>  $rows  La collezione da esportare
     * @param  array<int, string>  $fields  Campi da includere nell'export
     * @param  string  $filename  Nome del file Excel
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
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $rows La collezione da esportare
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
     * @param Collection<int|string, mixed>|EloquentCollection<int, Model> $rows La collezione da esportare
     * @param array<int, string> $fields Campi da includere nell'export
     * @param string $filename Nome del file Excel
     *
=======
     * @param  Collection<int|string, mixed>|EloquentCollection<int, Model>  $rows  La collezione da esportare
     * @param  array<int, string>  $fields  Campi da includere nell'export
     * @param  string  $filename  Nome del file Excel
>>>>>>> 551c768c4 (.)
     * @return string Il percorso del file generato
     */
    public function executeWithSpreadsheet(Collection|EloquentCollection $rows, array $fields, string $filename): string
    {
        // Converte EloquentCollection in Support\Collection se necessario
        if ($rows instanceof EloquentCollection) {
            $rows = Collection::make($rows->toArray());
        }

<<<<<<< HEAD
        $spreadsheet = new Spreadsheet();
        $spreadsheet = new Spreadsheet();
        $spreadsheet = new Spreadsheet();
        $spreadsheet = new Spreadsheet();
        $spreadsheet = new Spreadsheet();
=======
        $spreadsheet = new Spreadsheet;
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
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
=======
     * @param  Worksheet  $sheet  Il foglio Excel
     * @param  array<int, string>  $fields  I campi da utilizzare come intestazioni
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
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
=======
     * @param  Worksheet  $sheet  Il foglio di lavoro
     * @param  Collection<int|string, mixed>  $rows  I dati da scrivere
     * @param  array<int, string>  $fields  I campi da utilizzare per le colonne
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
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
=======
     * @param  mixed  $data  I dati da cui estrarre il valore
     * @param  string  $field  Il campo da estrarre
>>>>>>> 551c768c4 (.)
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
     * @param  EloquentCollection<int, Model>  $eloquentCollection
=======
>>>>>>> ce6fc085 (.)
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
<<<<<<< HEAD
     * @param EloquentCollection<int, Model> $eloquentCollection
=======
>>>>>>> 399f46d3 (.)
=======
     * @param EloquentCollection<int, Model> $eloquentCollection
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
     * @param EloquentCollection<int, Model> $eloquentCollection
=======
     * @param EloquentCollection<int, \Illuminate\Database\Eloquent\Model> $eloquentCollection
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
     * @param EloquentCollection<int, Model> $eloquentCollection
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
     * @param EloquentCollection<int, Model> $eloquentCollection
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
=======
     * @param  EloquentCollection<int, Model>  $eloquentCollection
>>>>>>> 551c768c4 (.)
     * @return Collection<int|string, mixed>
     */
    protected function convertToSupportCollection(EloquentCollection $eloquentCollection): Collection
    {
        return Collection::make($eloquentCollection->toArray());
    }
}
