<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
<<<<<<< HEAD
use Illuminate\Contracts\Support\Arrayable;
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
use Traversable;
=======
>>>>>>> 5a14301c (.)

class LazyCollectionExport implements FromIterator, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public array $headings;

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
>>>>>>> 399f46d3 (.)

    /** @var array<int, string> */
    public array $fields = [];

    /**
<<<<<<< HEAD
     * @param  array<int, string>  $fields
     */
    public function __construct(
        public LazyCollection $collection,
        ?string $transKey = null,
=======
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
     * Undocumented function.
     *
     * @param Collection $item
     */
    public function map($item): array
    {
        $data = $item->only($this->fields);

        return $data->toArray();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        /*
         * return [
         * $item->,
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
}
