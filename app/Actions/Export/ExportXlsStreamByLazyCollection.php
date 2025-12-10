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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
>>>>>>> ce6fc085 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)

use function Safe\fclose;
use function Safe\fopen;
use function Safe\fputcsv;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Webmozart\Assert\Assert;

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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
class ExportXlsStreamByLazyCollection
{
    use QueueableAction;

    /**
     * Esporta una LazyCollection in un file CSV streamed.
     *
     * @param  LazyCollection  $data  I dati da esportare
     * @param  string  $filename  Nome del file CSV
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @param  array<string>|null  $_fields  Campi da includere nell'export (attualmente non utilizzato)
     * @param LazyCollection $data I dati da esportare
     * @param string $filename Nome del file CSV
     * @param string|null $transKey Chiave di traduzione per le intestazioni
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
     * @param array<string>|null $fields Campi da includere nell'export
     * 
     * @return StreamedResponse
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
     * @param array<string>|null $_fields Campi da includere nell'export (attualmente non utilizzato)
     *
     * @return StreamedResponse
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
        ?string $transKey = null,
        ?array $_fields = null,
    ): StreamedResponse {
        $headers = [
            'Content-Disposition' => 'attachment; filename='.$filename,
<<<<<<< HEAD
        null|string $transKey = null,
        null|array $_fields = null,
        null|string $transKey = null,
        null|array $_fields = null,
        ?string $transKey = null,
        ?array $fields = null,
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
        null|string $transKey = null,
        null|array $_fields = null,
<<<<<<< HEAD
<<<<<<< HEAD
=======
        ?string $transKey = null,
        ?array $fields = null,
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        null|string $transKey = null,
        null|array $_fields = null,
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
    ): StreamedResponse {
        $headers = [
            'Content-Disposition' => 'attachment; filename=' . $filename,
        ];
        $head = $this->headings($data, $transKey);

        return response()->stream(
            static function () use ($data, $head): void {
                $file = fopen('php://output', 'w+');

                // Assicuriamo che le intestazioni siano stringhe
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $headStrings = array_map(function ($item) {
                    //return is_string($item) ? $item : (string) $item;
                    return strval($item);
                }, $head);
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
                            return;
                            return null;
                            return null;
                            return;
                            return null;
                        }

                            return null;
                        }
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
                            return null;
                        }
                            return null;
                        }
<<<<<<< HEAD
                            return null;
                        }
                            return null;
                        }
                            return null;
                        }
                        return is_string($item) ? $item : ((string) $item);
                        return is_string($item) ? $item : ((string) $item);
                        return is_string($item) ? $item : (string) $item;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
                        return is_string($item) ? $item : ((string) $item);
=======
                        return is_string($item) ? $item : (string) $item;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
                        return is_string($item) ? $item : ((string) $item);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $headers
=======
=======
            $headers
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            $headers,
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
        );
    }

    /**
     * Ottiene le intestazioni per l'export.
     *
     * @param  LazyCollection  $data  I dati da cui estrarre le intestazioni
     * @param  string|null  $transKey  Chiave di traduzione per le intestazioni
     * @return array<string>
     */
    public function headings(LazyCollection $data, ?string $transKey = null): array
    {
        $first = $data->first();
        if (! is_array($first) && (! is_object($first) || ! method_exists($first, 'toArray'))) {
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
     * 
     * @return array<string>
     */
    public function headings(LazyCollection $data, ?string $transKey = null): array
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
     *
     * @return array<string>
     */
    public function headings(LazyCollection $data, null|string $transKey = null): array
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    {
        $first = $data->first();
        if (!is_array($first) && (!is_object($first) || !method_exists($first, 'toArray'))) {
            return []; // Ritorna intestazioni vuote se non c'è un primo elemento valido
        }

        $headArray = is_array($first) ? $first : $first->toArray();

<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
         */
        $headings = collect($headArray)->keys();

        if ($transKey !== null) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey.'.fields.'.$item;
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
        if (null !== $transKey) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
        if (null !== $transKey) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
        if (null !== $transKey) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
        if (null !== $transKey) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
        if (null !== $transKey) {
            $headings = $headings->map(static function (string $item) use ($transKey) {
                $key = $transKey . '.fields.' . $item;
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
                }

                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
                Assert::string($item1 = Str::replace('.', '_', $item), '[' . __LINE__ . '][' . __CLASS__ . ']');
                $key = $transKey . '.fields.' . $item1;
                $trans = trans($key);
                if ($trans !== $key) {
                    return $trans;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                }

<<<<<<< HEAD
=======
                return $item;
            });
        }

        /** @var array<string> */
        return $headings->map(strval(...))->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
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
        return $headings->map(strval(...))->toArray();
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
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
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
                }
            );
        }

        /** @var array<string> */
        return $headings->map(fn($item) => strval($item))->toArray();
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
    }
}
