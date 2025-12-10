<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use BackedEnum;
use BackedEnum;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Arrayable;
use BackedEnum;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;
use BackedEnum;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Modules\Lang\Actions\TransArrayAction;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransArrayAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use BackedEnum;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransArrayAction;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransArrayAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Modules\Lang\Actions\TransArrayAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Exportable;
use Modules\Lang\Actions\TransArrayAction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransArrayAction;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Exportable;
use Modules\Lang\Actions\TransArrayAction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransArrayAction;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Exportable;
use Modules\Lang\Actions\TransArrayAction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransArrayAction;
use Modules\Lang\Actions\TransCollectionAction;
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
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
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;

class CollectionExport implements FromCollection, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public Collection $collection;
    public null|string $transKey;
    public null|string $transKey;

    public ?string $transKey;

    /** @var array<int, string> */
    public ?array $fields = null;

    /**
     * @param  array<int, string>  $fields
     */
    public function __construct(Collection $collection, ?string $transKey = null, array $fields = [])
    public array $headings;
    public array $headings;
    public array $headings;
    public array $headings;
    public array $headings;
    public null|string $transKey;

    /** @var array<int, string> */
    public null|array $fields = null;

    /**
     * @param Collection $collection
     * @param string|null $transKey
     * @param array<int, string> $fields
     */
    public function __construct(Collection $collection, null|string $transKey = null, array $fields = [])
    {
        $this->collection = $collection;

    public ?string $transKey;

    /** @var array<int, string> */
    public ?array $fields = null;
    {

    /** @var array<int, string> */
    public null|array $fields = null;

    /**
     * @param Collection $collection
     * @param string|null $transKey
     * @param array<int, string> $fields
     */
    public ?string $transKey;

    /** @var array<int, string> */
    public ?array $fields = null;

    /**
    public function __construct(
        Collection $collection,
        ?string $transKey = null,
        array $fields = []
    ) {
        
    public function __construct(Collection $collection, null|string $transKey = null, array $fields = [])
    {
        $this->collection = $collection;
        $this->transKey = $transKey;
        $this->fields = $fields;
    }

    public function getHead(): array
    {
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);

    {
        $this->collection = $collection;
        $this->transKey = $transKey;
        $this->fields = $fields;
    }

    public function getHead(): array
    {
        if (\is_array($this->fields) && !empty($this->fields)) {
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
            
        if (\is_array($this->fields) && !empty($this->fields)) {
        if (\is_array($this->fields) && !empty($this->fields)) {
        if (\is_array($this->fields) && !empty($this->fields)) {
        if (\is_array($this->fields) && !empty($this->fields)) {
        if (\is_array($this->fields) && ! empty($this->fields)) {
        if (\is_array($this->fields) && !empty($this->fields)) {
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
        $head = array_keys($head->getAttributes());
            
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
        $head = array_keys($head->getAttributes());
        return $head;

        
            
            return $this->fields;
        }
        

        
        $head = $this->collection->first();
        Assert::isInstanceOf($head,Model::class);
        $head= array_keys($head->getAttributes());
        return $head;

        
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;

        
        

        

        

        

        

        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;


        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
    }

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
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
        $head = array_keys($head->getAttributes());
        return $head;
            
            return $this->fields;
        }
        

        
        $head = $this->collection->first();
        Assert::isInstanceOf($head,Model::class);
        $head= array_keys($head->getAttributes());
        return $head;

        
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;

        
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
    }

    /**
     * @return Collection<int, Model>
     */
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
    }

    public function collection(): Collection
    {
        
        return $this->collection;
    }

        if (! empty($this->headings)) {
            /** @var list<string> */
            return array_values($this->headings);
        }

        if ($this->collection->isEmpty()) {
            return [];
        if (! empty($this->headings)) {
            /** @var list<string> */
            return array_values($this->headings);
        }

        if ($this->collection->isEmpty()) {
            return [];
    /**
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map($item): array
    {
        if ($this->fields === null || empty($this->fields)) {
    /**
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map($item): array
    {
        if ($this->fields === null || empty($this->fields)) {
    /**
     * @param  Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null  $item
     */
    public function map($item): array
    {
        if ($this->fields === null || empty($this->fields)) {
            Assert::isInstanceOf($item, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($item);
            $res = Arr::map($res, function ($value, $_key) {
                if ($value instanceof BackedEnum) {
                    if (method_exists($value, 'getLabel')) {
                        return $value->getLabel();
                    }

                    return $value->value;
                }
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

            
                return SafeStringCastAction::cast($value);
            });
            
            return $res;
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

            return Arr::map($res, function ($value, $_key) {
    /**
     */
    public function map($item): array
    {
        if (null === $this->fields || empty($this->fields)) {
            Assert::isInstanceOf($item, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($item);
            $res = Arr::map($res, function ($value, $_key) {
                if ($value instanceof BackedEnum) {
                    if (method_exists($value, 'getLabel')) {
            
            Assert::isInstanceOf($item,Model::class);
            $res= app(SafeArrayByModelCastAction::class)->execute($item);
            $res= Arr::map($res,function($value,$key){
                
            Assert::isInstanceOf($item, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($item);
            $res = Arr::map($res, function ($value, $_key) {
                if ($value instanceof BackedEnum) {
                    if (method_exists($value, 'getLabel')) {
                if ($value instanceof \BackedEnum) {
                    if(method_exists($value,'getLabel')){
                        return $value->getLabel();
                    }
                    return $value->value;
                }

                return SafeStringCastAction::cast($value);
            });
        }

        // return collect($row)->only($this->fields)->toArray();
        $data = [];

        foreach ($this->fields as $field) {
            $value = data_get($row, $field);


            return $res;
        }

        // return collect($item)->only($this->fields)->toArray();
        $data = [];

                return SafeStringCastAction::cast($value);
            });

            return $res;
        }

        // return collect($item)->only($this->fields)->toArray();
        $data = [];

            
                return SafeStringCastAction::cast($value);
            });
            
            return $res;
        }
       
        // return collect($item)->only($this->fields)->toArray();
        $data = [];
       
        foreach ($this->fields as $field) {
            $value = data_get($item, $field);
            if (\is_object($value)) {
                if (enum_exists($value::class) && method_exists($value, 'getLabel')) {
                    $value = $value->getLabel();
        }

        // return collect($item)->only($this->fields)->toArray();
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


        foreach ($this->fields as $field) {
            $value = data_get($item, $field);
            if (\is_object($value)) {
                if (enum_exists($value::class) && method_exists($value, 'getLabel')) {
                    $value = $value->getLabel();
            if (\is_object($value)) {
                if (enum_exists($value::class) && method_exists($value, 'getLabel')) {
                    $value = $value->getLabel();
            if (\is_object($value)) {
                if (enum_exists($value::class) && method_exists($value, 'getLabel')) {
                    $value = $value->getLabel();
                }
            }
            $data[$field] = $value;
        }

        

        return $data;
    }
}
