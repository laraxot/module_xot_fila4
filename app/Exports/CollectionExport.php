<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use BackedEnum;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Contracts\Support\Arrayable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
use BackedEnum;
use Illuminate\Contracts\Support\Arrayable;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
use Illuminate\Contracts\Support\Arrayable;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Lang\Actions\TransArrayAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Lang\Actions\TransCollectionAction;
>>>>>>> 5a14301c (.)
=======
use Modules\Lang\Actions\TransCollectionAction;
>>>>>>> 3fbbf1f5 (.)
=======
use Modules\Lang\Actions\TransCollectionAction;
>>>>>>> 5a14301c (.)
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;
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

class CollectionExport implements FromCollection, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public Collection $collection;
<<<<<<< HEAD
<<<<<<< HEAD

    public array $headings;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    public ?string $transKey;

    /** @var array<int, string> */
    public ?array $fields = null;

    /**
     * @param  array<int, string>  $fields
     */
    public function __construct(Collection $collection, ?string $transKey = null, array $fields = [])
=======
    public array $headings;
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    public array $headings;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
    public null|string $transKey;

    /** @var array<int, string> */
    public null|array $fields = null;

    /**
     * @param Collection $collection
     * @param string|null $transKey
     * @param array<int, string> $fields
     */
    public function __construct(Collection $collection, null|string $transKey = null, array $fields = [])
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    {
=======
    public ?string $transKey;

    /** @var array<int, string> */
    public ?array $fields = null;

    /**
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
        $this->collection = $collection;
        $this->transKey = $transKey;
        $this->fields = $fields;
    }

    public function getHead(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (\is_array($this->fields) && ! empty($this->fields)) {
=======
        if (\is_array($this->fields) && !empty($this->fields)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (\is_array($this->fields) && !empty($this->fields)) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
<<<<<<< HEAD

        return array_keys($head->getAttributes());
=======
        $head = array_keys($head->getAttributes());
        return $head;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
            
=======
>>>>>>> b93ef594b4 (.)
=======
        if (\is_array($this->fields) && !empty($this->fields)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
        $head = array_keys($head->getAttributes());
        return $head;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
            
            return $this->fields;
        }
        

        
        $head = $this->collection->first();
        Assert::isInstanceOf($head,Model::class);
        $head= array_keys($head->getAttributes());
        return $head;

        
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return app(TransArrayAction::class)->execute($headings, $transKey);
=======
=======
>>>>>>> 3fbbf1f5 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
>>>>>>> 5a14301c (.)
=======
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
>>>>>>> 5a14301c (.)
    }

    public function collection(): Collection
    {
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
        return $this->collection;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function map(mixed $row): array
    {
        if ($this->fields === null || empty($this->fields)) {
            Assert::isInstanceOf($row, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($row);

            return Arr::map($res, function ($value, $_key) {
=======
=======
>>>>>>> 5a14301c (.)
    /**
     * @param Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (null === $this->fields || empty($this->fields)) {
<<<<<<< HEAD
            Assert::isInstanceOf($item, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($item);
            $res = Arr::map($res, function ($value, $_key) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                if ($value instanceof BackedEnum) {
                    if (method_exists($value, 'getLabel')) {
=======
            
            Assert::isInstanceOf($item,Model::class);
            $res= app(SafeArrayByModelCastAction::class)->execute($item);
            $res= Arr::map($res,function($value,$key){
                
                if ($value instanceof BackedEnum) {
                    if(method_exists($value,'getLabel')){
>>>>>>> f1d4085 (.)
                        return $value->getLabel();
                    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    return $value->value;
                }
<<<<<<< HEAD

                return SafeStringCastAction::cast($value);
            });
<<<<<<< HEAD
<<<<<<< HEAD
        }

        // return collect($row)->only($this->fields)->toArray();
        $data = [];

        foreach ($this->fields as $field) {
            $value = data_get($row, $field);
=======
=======
>>>>>>> 5a14301c (.)

            return $res;
        }

        // return collect($item)->only($this->fields)->toArray();
        $data = [];

=======
            
                return SafeStringCastAction::cast($value);
            });
            
            return $res;
        }
       
        // return collect($item)->only($this->fields)->toArray();
        $data = [];
       
>>>>>>> f1d4085 (.)
        foreach ($this->fields as $field) {
            $value = data_get($item, $field);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            if (\is_object($value)) {
                if (enum_exists($value::class) && method_exists($value, 'getLabel')) {
                    $value = $value->getLabel();
                }
            }
            $data[$field] = $value;
        }

<<<<<<< HEAD
=======
        

>>>>>>> f1d4085 (.)
        return $data;
    }
}
