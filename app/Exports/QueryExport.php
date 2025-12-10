<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

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
use Traversable;
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
>>>>>>> 53d6a6ba (.)
=======
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
>>>>>>> 249a0067 (.)
=======
use Illuminate\Contracts\Support\Arrayable;
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $headings = [];
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<int, int|string> */
    public array $fields = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $transKey = null;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    /** @var array<int, string> */
    public array $fields = [];
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
    public array $columns;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey = null;
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)

    public null|string $transKey = null;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
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
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
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
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
    public null|string $transKey = null;
>>>>>>> 3fbbf1f5 (.)
=======
    public null|string $transKey = null;
>>>>>>> 3310e9c6 (.)

    public QueryBuilder|EloquentBuilder $query;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<int, int|string> $fields
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
=======
     * @param array<int, string> $fields
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @param array<int, string> $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 5a14301c (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
     * @param array<int, string> $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 5a14301c (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @param array<int, string> $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 5a14301c (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
    {
        $this->query = $query;
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
    public function __construct(Builder|QueryBuilder $query, array $headings = [], array $columns = [])
    {
        $this->query = $query;
        $this->headings = $headings;
        $this->columns = $columns;
        $this->filename = 'export_'.date('Y-m-d_H-i-s').'.xlsx';
        $this->sheetName = 'Export';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
=======
    /** @var Builder<Model>|QueryBuilder */
    public Builder|QueryBuilder $query;
>>>>>>> b7afadf9 (.)
=======
    public array $headings = [];
>>>>>>> 71586de2 (.)

    /** @var array<int, string> */
    public array $fields = [];

    public ?string $transKey = null;

    public QueryBuilder|EloquentBuilder $query;
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 300ef70 (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    {
        $this->query = $query;
        $this->transKey = $transKey;
        $this->fields = $fields;

        /*
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
    }

    public function getHead(): Collection
    {
        if (!empty($this->fields)) {
            return collect($this->fields);
        }
        /**
         * @var Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null
         */
        $first = $this->query->first();
        if (null === $first) {
            return collect([]);
        }

        // Parameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($first)->keys();
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headings = app(TransCollectionAction::class)->execute($headings, $transKey);

        return $headings->toArray();
>>>>>>> d2b0a27 (.)
    }
>>>>>>> ab8cc3f3 (.)

    /**
     * @param  array<int, string>  $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
     * @param  Builder<Model>|QueryBuilder  $query
     * @param  array<int, string>  $headings
     * @param  array<int, string>  $columns
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(Builder|QueryBuilder $query, array $headings = [], array $columns = [])
    {
<<<<<<< HEAD
        $this->query = $query;
        $this->headings = $headings;
        $this->columns = $columns;
        $this->filename = 'export_'.date('Y-m-d_H-i-s').'.xlsx';
        $this->sheetName = 'Export';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
    {
        $this->query = $query;
>>>>>>> ab8cc3f3 (.)
        $this->transKey = $transKey;
        $this->fields = $fields;

        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
        return $this->query->get();
>>>>>>> ab8cc3f3 (.)
    }

    public function getHead(): Collection
    {
=======
=======
>>>>>>> 5a14301c (.)
    public array $headings = [];

    /** @var array<int, string> */
    public array $fields = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $transKey = null;
=======
    public null|string $transKey = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public null|string $transKey = null;
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|string $transKey = null;
=======
    public null|string $transKey = null;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public null|string $transKey = null;
>>>>>>> ca9324a4 (.)
=======
    public null|string $transKey = null;
=======
    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|string $transKey = null;
>>>>>>> 9db27d12 (.)

    public QueryBuilder|EloquentBuilder $query;

    /**
<<<<<<< HEAD
     * @param  array<int, string>  $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
=======
     * @param array<int, string> $fields
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 3fbbf1f5 (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 88ea7103 (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 9db27d12 (.)
    {
        $this->query = $query;
        $this->transKey = $transKey;
        $this->fields = $fields;

        /*
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
>>>>>>> 249a0067 (.)
        if (! empty($this->fields)) {
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!empty($this->fields)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!empty($this->fields)) {
=======
=======
        if (!empty($this->fields)) {
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
        if (!empty($this->fields)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 9db27d12 (.)
            return collect($this->fields);
        }
        /**
         * @var Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null
         */
        $first = $this->query->first();
        if ($first === null) {
            return collect([]);
        }

        // Parameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($first)->keys();
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headings = app(TransCollectionAction::class)->execute($headings, $transKey);
<<<<<<< HEAD

        return $headings->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
<<<<<<< HEAD
     * @return Collection<int, int|string>
     */
    public function getHead(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
        if (!empty($this->fields)) {
            return collect($this->fields);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    public function getHead(): Collection
    {
        if (!empty($this->fields)) {
            return collect($this->fields);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
        if (!empty($this->fields)) {
            return collect($this->fields);
>>>>>>> 5a14301c (.)
        }
        /**
         * @var Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null
         */
        $first = $this->query->first();
        if (null === $first) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return collect([]);
        }

        // Parameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($first)->keys();
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
        return $this->query->get();
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5a14301c (.)
    }

    public function headings(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headings = app(TransCollectionAction::class)->execute($headings, $transKey);

        return $headings->toArray();
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
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======

        return $headings->toArray();
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
    }

    /**
     * se si usa scout aggiungere |ScoutBuilder.
     */
    public function query(): QueryBuilder|EloquentBuilder|Relation
    {
        return $this->query;

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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        // ->orderBy('id');
<<<<<<< HEAD
=======
        $data = [];
        $headings = $this->headings();

        foreach ($headings as $heading) {
            if (! is_string($heading)) {
                continue;
            }
            $value = $row->getAttribute($heading);

            if (is_array($value)) {
                $value = json_encode($value) ?: '[]';
            } elseif (is_object($value)) {
                if (method_exists($value, '__toString')) {
                    $value = (string) $value;
                } else {
                    $value = get_class($value);
                }
            }

            $data[] = $value ?? '';
        }

        return $data;
=======
        return $this->query;
<<<<<<< HEAD
<<<<<<< HEAD

        // ->orderBy('id');
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
     * se si usa scout aggiungere |ScoutBuilder.
     */
    public function query(): QueryBuilder|EloquentBuilder|Relation
    {
        return $this->query;

        // ->orderBy('id');
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
        // ->orderBy('id');
>>>>>>> 249a0067 (.)
=======
        // ->orderBy('id');
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)

        // ->orderBy('id');
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
    }

    public function chunkSize(): int
    {
        return 200;
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
     * @return array<int|string, mixed>
     */
    public function map(mixed $row): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
        return $this->query->limit(10)->get();
>>>>>>> ab8cc3f3 (.)
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
     * @param Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (!empty($this->fields)) {
            return collect($item)->toArray();
        }

<<<<<<< HEAD
<<<<<<< HEAD
        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
        return $this;
    }

    public function setSheetName(string $sheetName): self
    {
        $this->sheetName = $sheetName;

        return $this;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
        if (!empty($this->fields)) {
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map($item): array
    {
        if (! empty($this->fields)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
        return $this->query->limit(10)->get();
    }

    /**
     * @return Builder<Model>|QueryBuilder
     */
    public function query(): Builder|QueryBuilder
    {
        return $this->query;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function setSheetName(string $sheetName): self
    {
        $this->sheetName = $sheetName;

        return $this;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
        if (!empty($this->fields)) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 300ef70 (.)
        if (!empty($this->fields)) {
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> 399f46d3 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> 17684f52 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> 399f46d3 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> 399f46d3 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
        return collect($item)->only($this->fields)->toArray();
>>>>>>> ab8cc3f3 (.)
=======
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map(Arrayable|iterable|null $item): array
    {
        if (! empty($this->fields)) {
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 249a0067 (.)
=======
        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
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
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
    }
}
