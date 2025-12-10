<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\LazyCollection;
use Iterator;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromIterator;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransCollectionAction;

class LazyCollectionExport implements FromIterator, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public array $headings;

<<<<<<< HEAD
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
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
>>>>>>> 2f3197ab (.)
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public ?string $transKey;
    public ?string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
<<<<<<< HEAD
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
    public ?string $transKey;
    public null|string $transKey;
    public null|string $transKey;
=======
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

    /** @var array<int, string> */
    public array $fields = [];

    /**
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
     * @param  array<int, string>  $fields
     */
    public function __construct(
        public LazyCollection $collection,
        ?string $transKey = null,
     * @param array<int, string> $fields
     */
<<<<<<< HEAD
    public function __construct(
        public LazyCollection $collection,
        null|string $transKey = null,
        array $fields = [],
    ) {
<<<<<<< HEAD
    public function __construct(public LazyCollection $collection, ?string $transKey = null, array $fields = [])
    {
=======
=======
    public function __construct(public LazyCollection $collection, ?string $transKey = null, array $fields = [])
    {
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();

        $this->transKey = $transKey;
        $this->fields = $fields;
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
        // $this->headings = $headings->toArray();
    }

    /**
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
     * Undocumented function.
     *
     * @param Collection $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * @param  \Illuminate\Database\Eloquent\Model  $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * Undocumented function.
     *
     * @param Collection $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * @param  \Illuminate\Database\Eloquent\Model  $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * Undocumented function.
     *
     * @param  Collection  $item
     * Undocumented function.
     *
     * @param Collection $item
     */
    public function map($item): array
    {
        $data = $item->only($this->fields);

        $fields = array_map('strval', $this->fields);
        $data = $item->only($fields);

        return $data;
        return $data->toArray();
        $fields = array_map('strval', $this->fields);
        $data = $item->only($fields);

        return $data;
        return $data->toArray();
        return $data->toArray();
        return $data->toArray();
        return $data->toArray();
        return $data->toArray();
        return $data->toArray();
        return $data->toArray();
        return $data->toArray();
        return $data->toArray();
<<<<<<< HEAD

        /*
         * return [
         * $item->,
         * ];
         */
        /*
        return [
            $item->,
        ];
        */

        /*
         * return [
         * $item->,
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
>>>>>>> 2f3197ab (.)
        if (! empty($this->fields)) {
            return collect($this->fields);
        }

        /**
         * @var array
         */
        $head = $this->collection->first();
<<<<<<< HEAD
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (! empty($this->fields)) {
=======
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
>>>>>>> 7131bd09 (.)
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
            return collect($this->fields);
        }

        /**
         * @var array
         */
        $head = $this->collection->first();

        return collect($head)->keys();

        return collect($head)->keys();
        if ($head === null) {
            return collect([]);
        }

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

        return collect($head)->keys();

        return collect($head)->keys();

        return collect($head)->keys();

        return collect($head)->keys();

        return collect($head)->keys();
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
