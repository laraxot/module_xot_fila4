<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use function Safe\json_encode;

/**
 * @implements WithMapping<Model>
 */
class CollectionExport implements FromCollection, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    /** @var Collection<int, Model> */
    public Collection $collection;

    public array $headings;

    public array $columns;

    public string $filename;

    public string $sheetName;

    /**
     * @param  Collection<int, Model>  $collection
     * @param  array<int, string>  $headings
     * @param  array<int, string>  $columns
     */
    public function __construct(Collection $collection, array $headings = [], array $columns = [])
    {
        $this->collection = $collection;
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
        return $this->collection;
    }

    /**
     * @return list<string>
     */
    public function headings(): array
    {
        if (! empty($this->headings)) {
            return $this->headings;
        }

        if ($this->collection->isEmpty()) {
            return [];
        }

        $firstItem = $this->collection->first();
        if ($firstItem == null) {
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

        /** @var list<string> */ return array_values($columns);
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
