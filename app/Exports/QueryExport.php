<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
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
use Traversable;
=======
>>>>>>> b7afadf9 (.)
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Illuminate\Contracts\Support\Arrayable;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
=======
use Traversable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
>>>>>>> 551c768c4 (.)
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
>>>>>>> a6ef6dc7 (.)
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use function Safe\json_encode;

/**
 * @implements WithMapping<Model>
 */
class QueryExport implements FromCollection, WithChunkReading, WithHeadings, WithMapping
{
    use Exportable;

<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<int, string> */
    public array $fields = [];
    public array $columns;
    public null|string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
=======
<<<<<<< HEAD
    public array $headings = [];
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

    public null|string $transKey = null;
    public null|string $transKey = null;
    public ?string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
    public array $headings = [];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<int, int|string> */
    public array $fields = [];

<<<<<<< HEAD
    public ?string $transKey = null;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
    /** @var array<int, string> */
    public array $fields = [];
=======
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey = null;
=======
>>>>>>> 2f3197ab (.)
    public ?string $transKey = null;
    public null|string $transKey = null;
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
    public ?string $transKey = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
    public null|string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
<<<<<<< HEAD
    public ?string $transKey = null;
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
=======
    public array $headings = [];

    /** @var array<int, int|string> */
    public array $fields = [];

    public ?string $transKey = null;
>>>>>>> 551c768c4 (.)

    public QueryBuilder|EloquentBuilder $query;

    /**
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
     * @param array<int, string> $fields
     */
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
     * @param array<int, string> $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
     * @param array<int, string> $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
>>>>>>> 2f3197ab (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    {
        $this->query = $query;
    public function __construct(Builder|QueryBuilder $query, array $headings = [], array $columns = [])
    {
        $this->query = $query;
        $this->headings = $headings;
        $this->columns = $columns;
        $this->filename = 'export_'.date('Y-m-d_H-i-s').'.xlsx';
        $this->sheetName = 'Export';
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
<<<<<<< HEAD
    /** @var Builder<Model>|QueryBuilder */
    public Builder|QueryBuilder $query;
    public array $headings = [];

    /** @var array<int, string> */
    public array $fields = [];

    public ?string $transKey = null;

    public QueryBuilder|EloquentBuilder $query;
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public array $headings = [];
    /** @var Builder<Model>|QueryBuilder */
    public Builder|QueryBuilder $query;
    public array $headings = [];
=======
=======
=======
    /** @var Builder<Model>|QueryBuilder */
    public Builder|QueryBuilder $query;
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

    public array $headings;

<<<<<<< HEAD
    public ?string $transKey = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public null|string $transKey = null;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

    public string $filename;

    public string $sheetName;

    /**
<<<<<<< HEAD
     * @param  array<int, string>  $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 5cf46378 (.)
     * @param  Builder<Model>|QueryBuilder  $query
     * @param  array<int, string>  $headings
     * @param  array<int, string>  $columns
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public function __construct(Builder|QueryBuilder $query, array $headings = [], array $columns = [])
    {
        $this->query = $query;
        $this->headings = $headings;
        $this->columns = $columns;
        $this->filename = 'export_'.date('Y-m-d_H-i-s').'.xlsx';
        $this->sheetName = 'Export';
<<<<<<< HEAD
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
     * @param array<int, string> $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
    }

    public function getHead(): Collection
    {
    public array $headings = [];

    /** @var array<int, string> */
    public array $fields = [];

    public ?string $transKey = null;

    public QueryBuilder|EloquentBuilder $query;

    /**
     * @param  array<int, string>  $fields
     */
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    {
        $this->query = $query;
=======
<<<<<<< HEAD
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
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
>>>>>>> f1d4085 (.)
=======
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
>>>>>>> 73eab74 (.)
    {
        $this->query = $query;
>>>>>>> ab8cc3f3 (.)
        $this->transKey = $transKey;
        $this->fields = $fields;

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
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
    }

    public function getHead(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!empty($this->fields)) {
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 73eab74 (.)
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
>>>>>>> ab8cc3f3 (.)
    }

    public function getHead(): Collection
    {
        if (! empty($this->fields)) {
        if (!empty($this->fields)) {
        if (! empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
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
    /**
     * @param  Builder<Model>|QueryBuilder  $query
     * @param  array<int, string>  $headings
     * @param  array<int, string>  $columns
     */
        $this->query = $query;
        $this->headings = $headings;
        $this->columns = $columns;
        $this->filename = 'export_'.date('Y-m-d_H-i-s').'.xlsx';
        $this->sheetName = 'Export';
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
=======
        return $headings->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 5cf46378 (.)
    }

    public function getHead(): Collection
    {
    public array $headings = [];

    /** @var array<int, string> */
    public array $fields = [];

    public null|string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;
    public ?string $transKey = null;
    public null|string $transKey = null;
    public null|string $transKey = null;

    public QueryBuilder|EloquentBuilder $query;

    /**
=======
     * @param array<int, int|string> $fields
     */
>>>>>>> 551c768c4 (.)
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
    public function __construct(QueryBuilder|EloquentBuilder $query, null|string $transKey = null, array $fields = [])
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

<<<<<<< HEAD
    public function getHead(): Collection
    {
        if (! empty($this->fields)) {
        if (!empty($this->fields)) {
        if (! empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
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
    }

=======
    /**
>>>>>>> 551c768c4 (.)
     * @return Collection<int, int|string>
     */
    public function getHead(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 551c768c4 (.)
        if (! empty($this->fields)) {
            return collect(array_values($this->fields))
                ->map(
                    static fn (mixed $heading): int|string => \is_int($heading) ? $heading : (string) $heading
                );
<<<<<<< HEAD
        if (!empty($this->fields)) {
            return collect($this->fields);
    public function getHead(): Collection
    {
        if (!empty($this->fields)) {
            return collect($this->fields);
        if (!empty($this->fields)) {
            return collect($this->fields);
        if (!empty($this->fields)) {
            return collect($this->fields);
=======
>>>>>>> 551c768c4 (.)
        }
        /**
         * @var Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null
         */
        $first = $this->query->first();
        if (null === $first) {
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
<<<<<<< HEAD
            return collect([]);
        }

        // Parameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($first)->keys();
<<<<<<< HEAD
        return $this->query->get();
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
        return $this->query->get();
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 551c768c4 (.)
    }

    public function headings(): array
    {
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
<<<<<<< HEAD
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headings = app(TransCollectionAction::class)->execute($headings, $transKey);

        return $headings->toArray();
<<<<<<< HEAD

        return $headings->toArray();

        return $headings->toArray();
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
    }

    /**
     * @return Collection<int, Model>
     */
    public function collection(): Collection
    {
<<<<<<< HEAD
        return $this->query->get();
    }

    /**
     * @return list<string>
     */
    public function headings(): array
    {
        if (! empty($this->headings)) {
            /** @var list<string> */
            return array_values($this->headings);
        }

        $firstItem = $this->query->first();
        if ($firstItem === null || ! $firstItem instanceof Model) {
            return [];
        }

        $attributes = $firstItem->getAttributes();
        $fillable = $firstItem->getFillable();
        $guarded = $firstItem->getGuarded();

        $columns = [];
        foreach ($attributes as $key => $value) {
            $keyStr = is_string($key) ? $key : (string) $key;
            if (in_array($keyStr, $fillable) || empty($guarded) || ! in_array($keyStr, $guarded)) {
                $columns[] = $keyStr;
            }
        }

        /** @var list<string> */
        return $columns;
    }

    /**
     * @return list<mixed>
     */
    public function map($row): array
    {
        if (! $row instanceof Model) {
            return [];
        }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD



        // ->orderBy('id');
        return $this->query;
     * se si usa scout aggiungere |ScoutBuilder.
     */
    public function query(): QueryBuilder|EloquentBuilder|Relation
    {
        return $this->query;

<<<<<<< HEAD
        // ->orderBy('id');
        // ->orderBy('id');
        // ->orderBy('id');

        // ->orderBy('id');
        // ->orderBy('id');
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // ->orderBy('id');
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
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
>>>>>>> 5cf46378 (.)
=======
        // ->orderBy('id');
>>>>>>> 551c768c4 (.)
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    /**
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
     * @return array<int|string, mixed>
     */
    public function map(mixed $row): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return $this->query->limit(10)->get();
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
     * @param Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (!empty($this->fields)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
     * @param \Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (! empty($this->fields)) {
<<<<<<< HEAD
            return collect($item)->toArray();
        }

        if (!empty($this->fields)) {
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map($item): array
    {
        if (! empty($this->fields)) {
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
        if (!empty($this->fields)) {
        if (!empty($this->fields)) {
        if (! empty($this->fields)) {
        if (!empty($this->fields)) {
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map($item): array
    {
        if (! empty($this->fields)) {
=======
=======
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        if (!empty($this->fields)) {
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            return collect($item)->toArray();
        }

<<<<<<< HEAD
        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
        return collect($item)
            ->only($this->fields)
            ->toArray();
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
        if (!empty($this->fields)) {
=======
<<<<<<< HEAD
        if (! empty($this->fields)) {
>>>>>>> f1d4085 (.)
=======
        if (!empty($this->fields)) {
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
=======
     * @return Collection<int, Model>
>>>>>>> a6ef6dc7 (.)
     */
    public function getHead(): Collection
    {
<<<<<<< HEAD
        if (! empty($this->fields)) {
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 300ef70 (.)
        if (!empty($this->fields)) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
        return collect($item)
            ->only($this->fields)
            ->toArray();
        return collect($item)
            ->only($this->fields)
            ->toArray();
        return collect($item)
            ->only($this->fields)
            ->toArray();
        return collect($item)
            ->only($this->fields)
            ->toArray();
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        return collect($item)->only($this->fields)->toArray();
        return collect($item)
            ->only($this->fields)
            ->toArray();
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
        return collect($item)
            ->only($this->fields)
            ->toArray();
        return collect($item)->only($this->fields)->toArray();
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map(Arrayable|iterable|null $item): array
    {
        if (! empty($this->fields)) {
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map(Arrayable|iterable|null $item): array
    {
        if (! empty($this->fields)) {
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> f1d4085 (.)
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
    }
}
