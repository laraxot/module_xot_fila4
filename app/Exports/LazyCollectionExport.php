<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Iterator;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromIterator;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransCollectionAction;

/**
 * @implements WithMapping<\Illuminate\Database\Eloquent\Model>
 */
class LazyCollectionExport implements FromIterator, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public array $headings;

<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> f1d4085 (.)
=======
    public null|string $transKey;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public null|string $transKey;
>>>>>>> 300ef70 (.)

    /** @var array<int, string> */
    public array $fields = [];

    /**
     * @param  array<int, string>  $fields
     */
<<<<<<< HEAD
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
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
>>>>>>> 300ef70 (.)
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

>>>>>>> 300ef70 (.)
        // $this->headings = $headings->toArray();
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Model  $item
     */
    public function map($item): array
    {
        if (! $item instanceof \Illuminate\Database\Eloquent\Model) {
            return [];
        }

<<<<<<< HEAD
        $fields = array_map('strval', $this->fields);
        $data = $item->only($fields);

        return $data;
=======
        return $data->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        /*
         * return [
         * $item->,
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
>>>>>>> 300ef70 (.)
    }

    public function getHead(): Collection
    {
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
            return collect($this->fields);
        }

        $head = $this->collection->first();
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
}
