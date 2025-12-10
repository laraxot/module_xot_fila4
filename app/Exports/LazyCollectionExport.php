<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Support\Arrayable;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\LazyCollection;
use Iterator;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromIterator;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransCollectionAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Traversable;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class LazyCollectionExport implements FromIterator, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public array $headings;

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
    public null|string $transKey;
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public ?string $transKey;
>>>>>>> 53d6a6ba (.)
=======
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
    public ?string $transKey;
>>>>>>> 71586de2 (.)
=======
    public null|string $transKey;
>>>>>>> 5a14301c (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
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

    /** @var array<int, string> */
    public array $fields = [];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  array<int, string>  $fields
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
>>>>>>> 6dcebf8a (.)
=======
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
>>>>>>> b7afadf9 (.)
     * @param  array<int, string>  $fields
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
    public function __construct(
        public LazyCollection $collection,
        ?string $transKey = null,
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param array<int, string> $fields
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function __construct(
        public LazyCollection $collection,
        null|string $transKey = null,
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
        array $fields = [],
    ) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function __construct(public LazyCollection $collection, ?string $transKey = null, array $fields = [])
    {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public LazyCollection $collection, ?string $transKey = null, array $fields = [])
    {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();

        $this->transKey = $transKey;
        $this->fields = $fields;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // $this->headings = $headings->toArray();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
=======
     * Undocumented function.
     *
     * @param  Collection  $item
>>>>>>> 71586de2 (.)
=======
     * Undocumented function.
     *
     * @param  Collection  $item
>>>>>>> 249a0067 (.)
=======
     * Undocumented function.
     *
     * @param Collection $item
>>>>>>> 5a14301c (.)
     */
    public function map($item): array
    {
        $data = $item->only($this->fields);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $data->toArray();
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $data->toArray();
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
        return $data->toArray();
>>>>>>> 71586de2 (.)
=======
        return $data->toArray();
>>>>>>> 249a0067 (.)
=======
        return $data->toArray();
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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

        /*
         * return [
         * $item->,
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
         * ];
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        /*
        return [
            $item->,
        ];
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        /*
         * return [
         * $item->,
         * ];
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function getHead(): Collection
    {
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        if (! empty($this->fields)) {
            return collect($this->fields);
        }

        /**
         * @var array
         */
        $head = $this->collection->first();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $headArray = $this->normalizeRow($head);

        return collect($headArray)->keys();
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
        if (!empty($this->fields)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> a12f125f4a (.)
=======
        if (!empty($this->fields)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! empty($this->fields)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return collect($this->fields);
        }

        /**
         * @var array
         */
        $head = $this->collection->first();

        return collect($head)->keys();
<<<<<<< HEAD
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

        return collect($head)->keys();
>>>>>>> 53d6a6ba (.)
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
=======

        return collect($head)->keys();
>>>>>>> 71586de2 (.)
=======

        return collect($head)->keys();
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headings = app(TransCollectionAction::class)->execute($headings, $transKey);

        return $headings->toArray();
    }

    public function collection(): LazyCollection
    {
        return $this->collection;
    }

    /**
     * Returns an iterator for the current collection.
     */
<<<<<<< HEAD
    public function iterator(): Iterator
=======
<<<<<<< HEAD
    public function iterator(): Iterator
=======
    public function iterator(): \Iterator
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        /* @phpstan-ignore return.type */
        return $this->collection->getIterator();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @param  mixed  $row
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
}
