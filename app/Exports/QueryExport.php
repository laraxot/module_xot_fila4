<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

<<<<<<< HEAD
<<<<<<< HEAD
use Traversable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
=======
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Contracts\Support\Arrayable;
=======
<<<<<<< HEAD
use Illuminate\Contracts\Support\Arrayable;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransCollectionAction;

// use Staudenmeir\LaravelCte\Query\Builder as CteBuilder;

class QueryExport implements FromQuery, ShouldQueue, WithChunkReading, WithHeadings, WithMapping
{
    use Exportable;

    public array $headings = [];

<<<<<<< HEAD
    /** @var array<int, int|string> */
    public array $fields = [];

    public ?string $transKey = null;
=======
    /** @var array<int, string> */
    public array $fields = [];

<<<<<<< HEAD
    public null|string $transKey = null;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey = null;
=======
    public ?string $transKey = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $transKey = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $transKey = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

    public QueryBuilder|EloquentBuilder $query;

    /**
<<<<<<< HEAD
     * @param array<int, int|string> $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
=======
     * @param array<int, string> $fields
     */
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> a12f125f4a (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    {
        $this->query = $query;
        $this->transKey = $transKey;
        $this->fields = $fields;

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * $this->headings = collect($query->first())
         * ->keys()
         * ->map(
         * function ($item) use ($transKey) {
         * $t = $transKey.'.'.$item;
         * $trans = trans($t);
         * if ($trans != $t) {
         * return $trans;
         * }
         *
         * return $item;
         * }
         * )
         * ->toArray();
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $this->headings = collect($query->first())
            ->keys()
            ->map(
                function ($item) use ($transKey) {
                    $t = $transKey.'.'.$item;
                    $trans = trans($t);
                    if ($trans != $t) {
                        return $trans;
                    }

                    return $item;
                }
            )
            ->toArray();
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

<<<<<<< HEAD
    /**
     * @return Collection<int, int|string>
     */
    public function getHead(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! empty($this->fields)) {
            return collect(array_values($this->fields))
                ->map(
                    static fn (mixed $heading): int|string => \is_int($heading) ? $heading : (string) $heading
                );
=======
    public function getHead(): Collection
    {
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
>>>>>>> 6cba4fe (.)
            return collect($this->fields);
>>>>>>> 5a14301c (.)
        }
        /**
         * @var Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null
<<<<<<< HEAD
=======
=======
        if (! empty($this->fields)) {
            return collect($this->fields);
        }
        /**
         * @var \Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
         */
        $first = $this->query->first();
        if (null === $first) {
<<<<<<< HEAD
            /** @var Collection<int, int|string> $emptyCollection */
            $emptyCollection = collect([]);

            return $emptyCollection;
        }

        /** @var Collection<int, int|string> $result */
        $result = collect(array_keys($this->normalizeRow($first)))
            ->map(
                static fn (mixed $heading): int|string => \is_int($heading) ? $heading : (string) $heading
            );

        return $result;
=======
            return collect([]);
        }

        // Parameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($first)->keys();
>>>>>>> 5a14301c (.)
    }

    public function headings(): array
    {
<<<<<<< HEAD
        /** @var Collection<int|string, mixed> $headingsWithKeys */
        $headingsWithKeys = $this->getHead()
            ->values()
            ->mapWithKeys(
                static function (int|string $value, int $key): array {
                    $stringKey = (string) $value;

                    return [$stringKey => $value];
                },
            );

        $translated = app(TransCollectionAction::class)->execute($headingsWithKeys, $this->transKey);

        return $translated->toArray();
=======
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headings = app(TransCollectionAction::class)->execute($headings, $transKey);

        return $headings->toArray();
>>>>>>> 5a14301c (.)
    }

    /**
     * se si usa scout aggiungere |ScoutBuilder.
     */
    public function query(): QueryBuilder|EloquentBuilder|Relation
    {
        return $this->query;
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
        // ->orderBy('id');
    }

    public function chunkSize(): int
    {
        return 200;
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
            ->mapWithKeys(static function (mixed $field, int|string $_key) use ($rowArray): array {
                $keyString = \is_string($field) ? $field : (string) $field;

                return [$keyString => $rowArray[$keyString] ?? null];
            })
            ->toArray();
    }

    /**
     * @return array<int|string, mixed>
     */
    private function normalizeRow(mixed $row): array
    {
        if (null === $row) {
            return [];
        }

        if ($row instanceof Arrayable) {
            /* @var array<int|string, mixed> */
            return $row->toArray();
        }

        if (\is_array($row)) {
            /* @var array<int|string, mixed> */
            return $row;
        }

        if ($row instanceof Traversable) {
            /* @var array<int|string, mixed> */
            return iterator_to_array($row);
        }

        return (array) $row;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
     * @param Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
<<<<<<< HEAD
        if (!empty($this->fields)) {
=======
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
     * @param \Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (! empty($this->fields)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
<<<<<<< HEAD
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($item)->only($this->fields)->toArray();
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> a12f125f4a (.)
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> b93ef594b4 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    }
}
