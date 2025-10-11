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

    public ?string $transKey;

    /** @var array<int, string> */
    public array $fields = [];

    /**
     * @param  array<int, string>  $fields
     */
    /**
     * @param  LazyCollection<int, \Illuminate\Database\Eloquent\Model>  $collection
     * @param  array<int, string>  $fields
     */
    public function __construct(
        public LazyCollection $collection,
        ?string $transKey = null,
        array $fields = [],
    ) {
        // $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();

        $this->transKey = $transKey;
        $this->fields = $fields;

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

        $fields = array_map('strval', $this->fields);
        $data = $item->only($fields);

        return $data;

        /*
         * return [
         * $item->,
         * ];
         */
    }

    public function getHead(): Collection
    {
        if (! empty($this->fields)) {
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
