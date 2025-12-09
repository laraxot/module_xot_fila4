<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

<<<<<<< HEAD
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
=======
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

use function Safe\fclose;
use function Safe\fopen;
use function Safe\fputcsv;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
=======
     * @param array<string>|null $fields Campi da includere nell'export
     * 
>>>>>>> a12f125f4a (.)
=======
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
>>>>>>> b93ef594b4 (.)
=======
     * @param array<string>|null $fields Campi da includere nell'export
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return StreamedResponse
>>>>>>> 5a14301c (.)
     */
    public function execute(
        LazyCollection $data,
        string $filename = 'test.csv',
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
        null|string $transKey = null,
        null|array $_fields = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        null|string $transKey = null,
        null|array $_fields = null,
=======
        ?string $transKey = null,
        ?array $fields = null,
>>>>>>> a12f125f4a (.)
=======
        null|string $transKey = null,
        null|array $_fields = null,
>>>>>>> b93ef594b4 (.)
=======
        ?string $transKey = null,
        ?array $fields = null,
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    ): StreamedResponse {
        $headers = [
            'Content-Disposition' => 'attachment; filename=' . $filename,
>>>>>>> 5a14301c (.)
        ];
        $head = $this->headings($data, $transKey);

        return response()->stream(
            static function () use ($data, $head): void {
                $file = fopen('php://output', 'w+');

                // Assicuriamo che le intestazioni siano stringhe
<<<<<<< HEAD
                $headStrings = array_map(strval(...), $head);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $headStrings = array_map(strval(...), $head);
=======
=======
>>>>>>> origin/develop
                $headStrings = array_map(function ($item) {
                    //return is_string($item) ? $item : (string) $item;
                    return strval($item);
                }, $head);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                $headStrings = array_map(strval(...), $head);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
                            return '';
                        }

=======
                            return null;
                        }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
                        return is_string($item) ? $item : ((string) $item);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        return is_string($item) ? $item : ((string) $item);
=======
                        return is_string($item) ? $item : (string) $item;
>>>>>>> a12f125f4a (.)
=======
                        return is_string($item) ? $item : ((string) $item);
>>>>>>> b93ef594b4 (.)
=======
                        return is_string($item) ? $item : (string) $item;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
            $headers,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $headers,
=======
            $headers
>>>>>>> a12f125f4a (.)
=======
            $headers,
>>>>>>> b93ef594b4 (.)
=======
            $headers
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
    {
        $first = $data->first();
        if (! is_array($first) && (! is_object($first) || ! method_exists($first, 'toArray'))) {
=======
     * @param LazyCollection $data I dati da cui estrarre le intestazioni
     * @param string|null $transKey Chiave di traduzione per le intestazioni
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     *
     * @return array<string>
     */
    public function headings(LazyCollection $data, null|string $transKey = null): array
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * 
     * @return array<string>
     */
    public function headings(LazyCollection $data, ?string $transKey = null): array
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
     * @return array<string>
     */
    public function headings(LazyCollection $data, null|string $transKey = null): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        $first = $data->first();
        if (!is_array($first) && (!is_object($first) || !method_exists($first, 'toArray'))) {
>>>>>>> 5a14301c (.)
            return []; // Ritorna intestazioni vuote se non c'è un primo elemento valido
        }

        $headArray = is_array($first) ? $first : $first->toArray();

<<<<<<< HEAD
        /**
         * @var array<string, mixed> $headArray
         * @var Collection<int, string> $headings
=======
<<<<<<< HEAD
        /**
         * @var array<string, mixed> $headArray
         * @var Collection<int, string> $headings
=======
        /** 
         * @var array<string, mixed> $headArray 
         * @var \Illuminate\Support\Collection<int, string> $headings 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
         */
        $headings = collect($headArray)->keys();

<<<<<<< HEAD
<<<<<<< HEAD
        if ($transKey !== null) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey.'.fields.'.$item;
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if (null !== $transKey) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
>>>>>>> 5a14301c (.)
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                }

<<<<<<< HEAD
                Assert::string($item1 = Str::replace('.', '_', $item), '['.__LINE__.']['.self::class.']');
                $key = $transKey.'.fields.'.$item1;
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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
                }

                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
                }

                return $item;
            });
        }

        /** @var array<string> */
<<<<<<< HEAD
        return $headings->map(fn($item) => strval($item))->toArray();
>>>>>>> a12f125f4a (.)
=======
        return $headings->map(strval(...))->toArray();
>>>>>>> b93ef594b4 (.)
=======
                }
            );
        }

        /** @var array<string> */
        return $headings->map(fn($item) => strval($item))->toArray();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
