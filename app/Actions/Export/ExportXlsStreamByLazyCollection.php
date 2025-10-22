<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
=======
>>>>>>> f1d4085 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
>>>>>>> 300ef70 (.)

use function Safe\fclose;
use function Safe\fopen;
use function Safe\fputcsv;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
class ExportXlsStreamByLazyCollection
{
    use QueueableAction;

    /**
     * Esporta una LazyCollection in un file CSV streamed.
     *
<<<<<<< HEAD
     * @param  LazyCollection  $data  I dati da esportare
     * @param  string  $filename  Nome del file CSV
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @param  array<string>|null  $_fields  Campi da includere nell'export (attualmente non utilizzato)
=======
     * @param LazyCollection $data I dati da esportare
     * @param string $filename Nome del file CSV
     * @param string|null $transKey Chiave di traduzione per le intestazioni
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
     * @return StreamedResponse
>>>>>>> d2b0a27 (.)
     */
    public function execute(
        LazyCollection $data,
        string $filename = 'test.csv',
<<<<<<< HEAD
<<<<<<< HEAD
        ?string $transKey = null,
        ?array $_fields = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
        null|string $transKey = null,
        null|array $_fields = null,
=======
        ?string $transKey = null,
        ?array $fields = null,
>>>>>>> f1d4085 (.)
=======
        null|string $transKey = null,
        null|array $_fields = null,
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        null|string $transKey = null,
        null|array $_fields = null,
>>>>>>> 300ef70 (.)
    ): StreamedResponse {
        $headers = [
            'Content-Disposition' => 'attachment; filename='.$filename,
        ];
        $head = $this->headings($data, $transKey);

        return response()->stream(
            static function () use ($data, $head): void {
                $file = fopen('php://output', 'w+');

                // Assicuriamo che le intestazioni siano stringhe
<<<<<<< HEAD
<<<<<<< HEAD
                $headStrings = array_map(strval(...), $head);
=======
<<<<<<< HEAD
<<<<<<< HEAD
                $headStrings = array_map(strval(...), $head);
=======
                $headStrings = array_map(function ($item) {
                    //return is_string($item) ? $item : (string) $item;
                    return strval($item);
                }, $head);
>>>>>>> f1d4085 (.)
=======
                $headStrings = array_map(strval(...), $head);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                $headStrings = array_map(strval(...), $head);
>>>>>>> 300ef70 (.)

                fputcsv($file, $headStrings);

                foreach ($data as $value) {
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
                            return;
                        }
<<<<<<< HEAD
<<<<<<< HEAD

                        return is_string($item) ? $item : ((string) $item);
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        return is_string($item) ? $item : ((string) $item);
=======
                        return is_string($item) ? $item : (string) $item;
>>>>>>> f1d4085 (.)
=======
                        return is_string($item) ? $item : ((string) $item);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                        return is_string($item) ? $item : ((string) $item);
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            $headers,
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $headers,
=======
            $headers
>>>>>>> f1d4085 (.)
=======
            $headers,
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $headers,
>>>>>>> 300ef70 (.)
        );
    }

    /**
     * Ottiene le intestazioni per l'export.
     *
<<<<<<< HEAD
     * @param  LazyCollection  $data  I dati da cui estrarre le intestazioni
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @return array<string>
     */
    public function headings(LazyCollection $data, ?string $transKey = null): array
=======
     * @param LazyCollection $data I dati da cui estrarre le intestazioni
     * @param string|null $transKey Chiave di traduzione per le intestazioni
     *
     * @return array<string>
     */
    public function headings(LazyCollection $data, null|string $transKey = null): array
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * 
     * @return array<string>
     */
    public function headings(LazyCollection $data, ?string $transKey = null): array
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    {
        $first = $data->first();
        if (! is_array($first) && (! is_object($first) || ! method_exists($first, 'toArray'))) {
            return []; // Ritorna intestazioni vuote se non c'è un primo elemento valido
        }

        $headArray = is_array($first) ? $first : $first->toArray();

        /**
         * @var array<string, mixed> $headArray
         * @var Collection<int, string> $headings
         */
        $headings = collect($headArray)->keys();

<<<<<<< HEAD
        if ($transKey !== null) {
=======
        if (null !== $transKey) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey.'.fields.'.$item;
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
                }

                Assert::string($item1 = Str::replace('.', '_', $item), '['.__LINE__.']['.__CLASS__.']');
                $key = $transKey.'.fields.'.$item1;
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
                }

                return $item;
            });
        }

        /** @var array<string> */
        return $headings->map(strval(...))->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            $headings = $headings->map(
                static function (string $item) use ($transKey) {
                    $key = $transKey . '.fields.' . $item;
                    $trans = trans($key);
                    if ($trans !== $key) {
                        return $trans;
                    }

                    Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                    $key = $transKey . '.fields.' . $item1;
                    $trans = trans($key);
                    if ($trans !== $key) {
                        return $trans;
                    }

                    return $item;
                }
            );
        }

        /** @var array<string> */
        return $headings->map(fn($item) => strval($item))->toArray();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
