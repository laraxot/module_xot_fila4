<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Iterator;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromIterator;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransCollectionAction;
use Traversable;

/**
 * @implements WithMapping<\Illuminate\Database\Eloquent\Model>
 */
class LazyCollectionExport implements FromIterator, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public array $headings;

<<<<<<< HEAD
    public ?string $transKey;
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
    public ?string $transKey;
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
>>>>>>> 3fbbf1f5 (.)
=======
    public null|string $transKey;
=======
    public null|string $transKey;
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> a12f125f4a (.)
=======
    public null|string $transKey;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $transKey;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
    public ?string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public ?string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|string $transKey;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public null|string $transKey;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|string $transKey;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public ?string $transKey;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

    /** @var array<int, string> */
    public array $fields = [];

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  array<int, string>  $fields
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     * @param  array<int, string>  $fields
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    public function __construct(
        public LazyCollection $collection,
        ?string $transKey = null,
        array $fields = [],
    ) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function __construct(public LazyCollection $collection, ?string $transKey = null, array $fields = [])
    {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();

        $this->transKey = $transKey;
        $this->fields = $fields;
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // $this->headings = $headings->toArray();
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
     * @return array<int|string, mixed>
     */
    public function map(mixed $row): array
    {
        $rowArray = $this->normalizeRow($row);

        if (empty($this->fields)) {
            return $rowArray;
        }

        return collect($this->fields)
            ->mapWithKeys(function (string $key) use ($rowArray): array {
                return [$key => $rowArray[$key] ?? null];
            })
            ->toArray();

        /*
         * return [
         * $row->,
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
     * Undocumented function.
     *
     * @param Collection $item
=======
     * Undocumented function.
     *
     * @param  Collection  $item
>>>>>>> 53d6a6ba (.)
=======
     * Undocumented function.
     *
     * @param  Collection  $item
=======
     * @param  \Illuminate\Database\Eloquent\Model  $item
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
     */
    public function map($item): array
    {
        if (! $item instanceof \Illuminate\Database\Eloquent\Model) {
            return [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $data->toArray();
=======
<<<<<<< HEAD
        $fields = array_map('strval', $this->fields);
        $data = $item->only($fields);

        return $data;
=======
        return $data->toArray();
=======
        $fields = array_map('strval', $this->fields);
        $data = $item->only($fields);

        return $data;
=======
        return $data->toArray();
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $data->toArray();
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        /*
         * return [
         * $item->,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
         * ];
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        /*
        return [
            $item->,
        ];
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    }

    public function getHead(): Collection
    {
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        if (! empty($this->fields)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        if (! empty($this->fields)) {
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! empty($this->fields)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
            return collect($this->fields);
        }

        $head = $this->collection->first();
<<<<<<< HEAD
<<<<<<< HEAD
        $headArray = $this->normalizeRow($head);

        return collect($headArray)->keys();
<<<<<<< HEAD
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
        if (!empty($this->fields)) {
            return collect($this->fields);
        }

        /**
         * @var array
         */
        $head = $this->collection->first();

        return collect($head)->keys();
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======

        return collect($head)->keys();
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
        if ($head === null) {
            return collect([]);
        }

        if (is_array($head)) {
            $keys = array_keys($head);
            $stringKeys = [];
            foreach ($keys as $key) {
                $stringKeys[] = (string) $key;
            }

            return collect($stringKeys);
        }

        if ($head instanceof \Illuminate\Database\Eloquent\Model) {
            $attributes = $head->getAttributes();
            $keys = array_keys($attributes);
            $stringKeys = [];
            foreach ($keys as $key) {
                $stringKeys[] = (string) $key;
            }

            return collect($stringKeys);
        }

        return collect([]);
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    }

    /**
     * @return array<mixed>
     */
    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headingsArray = $headings->toArray();
        $headingsCollection = collect($headingsArray);
        $translatedHeadings = app(TransCollectionAction::class)->execute($headingsCollection, $transKey);

        if (is_array($translatedHeadings)) {
            /** @var array<int, string> $translatedHeadings */
            $headings = collect($translatedHeadings);
        } elseif ($translatedHeadings instanceof \Illuminate\Support\Collection) {
            $headings = $translatedHeadings;
        } else {
            $headings = collect([]);
        }

        return $headings->toArray();
    }

    /**
     * @return LazyCollection<int, \Illuminate\Database\Eloquent\Model>
     */
    public function collection(): LazyCollection
    {
        return $this->collection;
    }

    /**
     * Returns an iterator for the current collection.
     */
    public function iterator(): Iterator
    {
        /* @phpstan-ignore return.type */
        return $this->collection->getIterator();
    }

    /**
     * @return array<int|string, mixed>
     */
    private function normalizeRow(mixed $row): array
    {
        if ($row === null) {
            return [];
        }

        if ($row instanceof Arrayable) {
            /** @var array<int|string, mixed> */
            return $row->toArray();
        }

        if (is_array($row)) {
            /** @var array<int|string, mixed> */
            return $row;
        }

        if ($row instanceof Traversable) {
            /** @var array<int|string, mixed> */
            return iterator_to_array($row);
        }

        return (array) $row;
    }
}
