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

    public array $columns;

    public string $filename;

    public string $sheetName;

    /**
     * @param  Builder<Model>|QueryBuilder  $query
     * @param  array<int, string>  $headings
     * @param  array<int, string>  $columns
     */
    public function __construct(Builder|QueryBuilder $query, array $headings = [], array $columns = [])
    {
        $this->query = $query;
        $this->headings = $headings;
        $this->columns = $columns;
        $this->filename = 'export_'.date('Y-m-d_H-i-s').'.xlsx';
        $this->sheetName = 'Export';
    }

    /**
     * @return Collection<int, Model>
     */
    public function collection(): Collection
    {
        return $this->query->get();
    }

    /**
     * @return array<string, mixed>
     */
    public function headings(): array
    {
        if (! empty($this->headings)) {
            return $this->headings;
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
            if (in_array($key, $fillable) || empty($guarded) || ! in_array($key, $guarded)) {
                $columns[] = $key;
            }
        }

        return $columns;
    }

    /**
     * @return array<string, mixed>
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
    }
}
