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
>>>>>>> 285375c74 (.)

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
>>>>>>> 285375c74 (.)
class ExportXlsStreamByLazyCollection
{
    use QueueableAction;

    /**
     * Esporta una LazyCollection in un file CSV streamed.
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
     * @param  LazyCollection  $data  I dati da esportare
     * @param  string  $filename  Nome del file CSV
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @param  array<string>|null  $_fields  Campi da includere nell'export (attualmente non utilizzato)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
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
=======
     * @param LazyCollection $data I dati da esportare
     * @param string $filename Nome del file CSV
     * @param string|null $transKey Chiave di traduzione per le intestazioni
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
=======
     * @param array<string>|null $fields Campi da includere nell'export
     * 
>>>>>>> f1d4085 (.)
=======
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
>>>>>>> 73eab74 (.)
     * @return StreamedResponse
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
        LazyCollection $data,
        string $filename = 'test.csv',
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
        ?string $transKey = null,
        ?array $_fields = null,
>>>>>>> 285375c74 (.)
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
>>>>>>> 285375c74 (.)

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
                            return '';
=======
                            return null;
>>>>>>> 53d6a6ba (.)
                        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)

                        return is_string($item) ? $item : ((string) $item);
<<<<<<< HEAD
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
>>>>>>> 285375c74 (.)
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
>>>>>>> 285375c74 (.)
        );
    }

    /**
     * Ottiene le intestazioni per l'export.
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
     * @param  LazyCollection  $data  I dati da cui estrarre le intestazioni
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @return array<string>
     */
    public function headings(LazyCollection $data, ?string $transKey = null): array
<<<<<<< HEAD
=======
     * @param LazyCollection $data I dati da cui estrarre le intestazioni
     * @param string|null $transKey Chiave di traduzione per le intestazioni
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     *
     * @return array<string>
     */
    public function headings(LazyCollection $data, null|string $transKey = null): array
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
>>>>>>> 285375c74 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        if ($transKey !== null) {
=======
        if (null !== $transKey) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
        if ($transKey !== null) {
>>>>>>> 285375c74 (.)
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey.'.fields.'.$item;
                $trans = trans($key);
                if ($trans !== $key) {
                    return is_string($trans) ? $trans : $item;
                }

                Assert::string($item1 = Str::replace('.', '_', $item), '['.__LINE__.']['.self::class.']');
                $key = $transKey.'.fields.'.$item1;
                $trans = trans($key);
                if ($trans !== $key) {
                    return is_string($trans) ? $trans : $item;
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
>>>>>>> 285375c74 (.)
    }
}
