<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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

    /** @var Builder<Model>|QueryBuilder */
    public Builder|QueryBuilder $query;

    public array $headings;

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

    public string $filename;

    public string $sheetName;

    /**
     * @param  Builder<Model>|QueryBuilder  $query
     * @param  array<int, string>  $headings
     * @param  array<int, string>  $columns
     */
<<<<<<< HEAD
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

        // ->orderBy('id');
>>>>>>> d2b0a27 (.)
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    /**
     * @return Collection<int, Model>
     */
    public function getHead(): Collection
    {
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
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)->only($this->fields)->toArray();
<<<<<<< HEAD
=======
        return collect($item)
            ->only($this->fields)
            ->toArray();
>>>>>>> f1d4085 (.)
=======
        return collect($item)->only($this->fields)->toArray();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
