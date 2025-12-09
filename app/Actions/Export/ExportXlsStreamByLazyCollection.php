<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;

use function Safe\fclose;
use function Safe\fopen;
use function Safe\fputcsv;

class ExportXlsStreamByLazyCollection
{
    use QueueableAction;

    /**
     * Esporta una LazyCollection in un file CSV streamed.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  LazyCollection  $data  I dati da esportare
     * @param  string  $filename  Nome del file CSV
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @param  array<string>|null  $_fields  Campi da includere nell'export (attualmente non utilizzato)
=======
=======
>>>>>>> 5a14301c (.)
     * @param LazyCollection $data I dati da esportare
     * @param string $filename Nome del file CSV
     * @param string|null $transKey Chiave di traduzione per le intestazioni
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
     * @return StreamedResponse
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(
        LazyCollection $data,
        string $filename = 'test.csv',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ?string $transKey = null,
        ?array $_fields = null,
    ): StreamedResponse {
        $headers = [
            'Content-Disposition' => 'attachment; filename='.$filename,
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
        null|string $transKey = null,
        null|array $_fields = null,
    ): StreamedResponse {
        $headers = [
            'Content-Disposition' => 'attachment; filename=' . $filename,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        ];
        $head = $this->headings($data, $transKey);

        return response()->stream(
            static function () use ($data, $head): void {
                $file = fopen('php://output', 'w+');

                // Assicuriamo che le intestazioni siano stringhe
                $headStrings = array_map(strval(...), $head);

                fputcsv($file, $headStrings);

                foreach ($data as $key => $value) {
                    // Gestiamo sia oggetti che possono essere convertiti ad array che array diretti
                    if (is_object($value) && method_exists($value, 'toArray')) {
                        /** @var array<string|int|float|bool|null> $rowData */
                        $rowData = $value->toArray();
                    } elseif (is_array($value)) {
                        /** @var array<string|int|float|bool|null> $rowData */
                        $rowData = $value;
                    } else {
                        // Se non è né un oggetto con toArray né un array, saltiamo
                        continue;
                    }
                    // Convertiamo tutti i valori in stringhe o null
                    $safeRowData = array_map(function ($item) {
                        if ($item === null) {
<<<<<<< HEAD
<<<<<<< HEAD
                            return '';
                        }

=======
                            return null;
                        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                            return null;
                        }
>>>>>>> 5a14301c (.)
                        return is_string($item) ? $item : ((string) $item);
                    }, $rowData);

                    fputcsv($file, $safeRowData);
                }

                // Aggiungiamo righe vuote alla fine
                $blanks = ["\t", "\t", "\t", "\t"];
                fputcsv($file, $blanks);
                fputcsv($file, $blanks);
                fputcsv($file, $blanks);

                fclose($file);
            },
            200,
            $headers,
        );
    }

    /**
     * Ottiene le intestazioni per l'export.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  LazyCollection  $data  I dati da cui estrarre le intestazioni
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @return array<string>
     */
    public function headings(LazyCollection $data, ?string $transKey = null): array
    {
        $first = $data->first();
        if (! is_array($first) && (! is_object($first) || ! method_exists($first, 'toArray'))) {
=======
=======
>>>>>>> 5a14301c (.)
     * @param LazyCollection $data I dati da cui estrarre le intestazioni
     * @param string|null $transKey Chiave di traduzione per le intestazioni
     *
     * @return array<string>
     */
    public function headings(LazyCollection $data, null|string $transKey = null): array
    {
        $first = $data->first();
        if (!is_array($first) && (!is_object($first) || !method_exists($first, 'toArray'))) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return []; // Ritorna intestazioni vuote se non c'è un primo elemento valido
        }

        $headArray = is_array($first) ? $first : $first->toArray();

        /**
         * @var array<string, mixed> $headArray
         * @var Collection<int, string> $headings
         */
        $headings = collect($headArray)->keys();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($transKey !== null) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey.'.fields.'.$item;
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if (null !== $transKey) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
>>>>>>> 5a14301c (.)
=======
        if (null !== $transKey) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
>>>>>>> 5a14301c (.)
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
                }

<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($item1 = Str::replace('.', '_', $item), '['.__LINE__.']['.self::class.']');
                $key = $transKey.'.fields.'.$item1;
=======
                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
>>>>>>> 5a14301c (.)
=======
                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
>>>>>>> 5a14301c (.)
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
                }

                return $item;
            });
        }

        /** @var array<string> */
        return $headings->map(strval(...))->toArray();
    }
}
