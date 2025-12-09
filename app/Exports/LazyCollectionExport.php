<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Support\Arrayable;
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
use Traversable;
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
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
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

    /** @var array<int, string> */
    public array $fields = [];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<int, string>  $fields
     */
    public function __construct(
        public LazyCollection $collection,
        ?string $transKey = null,
=======
=======
>>>>>>> 5a14301c (.)
     * @param array<int, string> $fields
     */
<<<<<<< HEAD
    public function __construct(
        public LazyCollection $collection,
        null|string $transKey = null,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        array $fields = [],
    ) {
=======
    public function __construct(public LazyCollection $collection, ?string $transKey = null, array $fields = [])
    {
>>>>>>> f1d4085 (.)
        // $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();

        $this->transKey = $transKey;
        $this->fields = $fields;
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
        // $this->headings = $headings->toArray();
    }

    /**
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
     * Undocumented function.
     *
     * @param Collection $item
     */
    public function map($item): array
    {
        $data = $item->only($this->fields);

        return $data->toArray();
<<<<<<< HEAD

        /*
         * return [
         * $item->,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
         * ];
         */
=======
        /*
        return [
            $item->,
        ];
        */
>>>>>>> f1d4085 (.)
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
        if (! empty($this->fields)) {
            return collect($this->fields);
        }

        $head = $this->collection->first();
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
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
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
    public function iterator(): Iterator
    {
        /* @phpstan-ignore return.type */
        return $this->collection->getIterator();
    }
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
}
