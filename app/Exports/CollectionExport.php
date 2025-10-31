<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

<<<<<<< HEAD
=======
use BackedEnum;
<<<<<<< HEAD
=======
use Illuminate\Contracts\Support\Arrayable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
<<<<<<< HEAD
=======
use Modules\Lang\Actions\TransArrayAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Exportable;
use Modules\Lang\Actions\TransArrayAction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

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
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public null|string $transKey;
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
        $this->collection = $collection;
        $this->headings = $headings;
        $this->columns = $columns;
        $this->filename = 'export_'.date('Y-m-d_H-i-s').'.xlsx';
        $this->sheetName = 'Export';
=======
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
    public ?string $transKey;

    /** @var array<int, string> */
    public ?array $fields = null;

    /**
<<<<<<< HEAD
     * @param  array<int, string>  $fields
     */
    public function __construct(Collection $collection, ?string $transKey = null, array $fields = [])
    {
=======
     * @param Collection $collection
     * @param string|null $transKey  
     * @param array<int, string> $fields
     */
    public function __construct(
        Collection $collection,
        ?string $transKey = null,
        array $fields = []
    ) {
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        $this->collection = $collection;
        $this->transKey = $transKey;
        $this->fields = $fields;
    }

    public function getHead(): array
    {
        if (\is_array($this->fields) && ! empty($this->fields)) {
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
        $head = array_keys($head->getAttributes());

        return $head;
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;

        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
>>>>>>> d2b0a27 (.)
    }

    /**
     * @return Collection<int, Model>
     */
    public function collection(): Collection
    {
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
        return $this->collection;
    }

    /**
<<<<<<< HEAD
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
=======
     * @return list<string>
>>>>>>> a6ef6dc7 (.)
     */
    public function headings(): array
    {
<<<<<<< HEAD
        if ($this->fields === null || empty($this->fields)) {
=======
<<<<<<< HEAD
        if (! empty($this->headings)) {
            /** @var list<string> */
            return array_values($this->headings);
        }

        if ($this->collection->isEmpty()) {
            return [];
=======
        if (null === $this->fields || empty($this->fields)) {
>>>>>>> a6ef6dc7 (.)
            Assert::isInstanceOf($item, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($item);
            $res = Arr::map($res, function ($value, $_key) {
                if ($value instanceof BackedEnum) {
                    if (method_exists($value, 'getLabel')) {
                        return $value->getLabel();
                    }

                    return $value->value;
                }

                return SafeStringCastAction::cast($value);
            });

            return $res;
        }

        // return collect($item)->only($this->fields)->toArray();
        $data = [];

<<<<<<< HEAD
<<<<<<< HEAD
=======
            
                return SafeStringCastAction::cast($value);
            });
            
            return $res;
>>>>>>> d2b0a27 (.)
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
<<<<<<< HEAD
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
=======
       
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        foreach ($this->fields as $field) {
            $value = data_get($item, $field);
            if (\is_object($value)) {
                if (enum_exists($value::class) && method_exists($value, 'getLabel')) {
                    $value = $value->getLabel();
>>>>>>> d2b0a27 (.)
                }
            }

            $data[] = $value ?? '';
        }

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
