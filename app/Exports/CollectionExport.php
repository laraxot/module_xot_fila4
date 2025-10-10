<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use BackedEnum;
use Illuminate\Contracts\Support\Arrayable;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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

class CollectionExport implements FromCollection, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public Collection $collection;
    public array $headings;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 73eab74 (.)
        $this->collection = $collection;
        $this->transKey = $transKey;
        $this->fields = $fields;
    }

    public function getHead(): array
    {
        if (\is_array($this->fields) && !empty($this->fields)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
        $head = array_keys($head->getAttributes());
        return $head;
<<<<<<< HEAD
=======
            
            return $this->fields;
        }
        

        
        $head = $this->collection->first();
        Assert::isInstanceOf($head,Model::class);
        $head= array_keys($head->getAttributes());
        return $head;

        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
    }

    public function collection(): Collection
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        return $this->collection;
    }

    /**
     * @param Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (null === $this->fields || empty($this->fields)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            Assert::isInstanceOf($item, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($item);
            $res = Arr::map($res, function ($value, $_key) {
                if ($value instanceof BackedEnum) {
                    if (method_exists($value, 'getLabel')) {
<<<<<<< HEAD
=======
            
            Assert::isInstanceOf($item,Model::class);
            $res= app(SafeArrayByModelCastAction::class)->execute($item);
            $res= Arr::map($res,function($value,$key){
                
                if ($value instanceof BackedEnum) {
                    if(method_exists($value,'getLabel')){
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
                        return $value->getLabel();
                    }
                    return $value->value;
                }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

                return SafeStringCastAction::cast($value);
            });

            return $res;
        }

        // return collect($item)->only($this->fields)->toArray();
        $data = [];

<<<<<<< HEAD
=======
            
                return SafeStringCastAction::cast($value);
            });
            
            return $res;
        }
       
        // return collect($item)->only($this->fields)->toArray();
        $data = [];
       
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        foreach ($this->fields as $field) {
            $value = data_get($item, $field);
            if (\is_object($value)) {
                if (enum_exists($value::class) && method_exists($value, 'getLabel')) {
                    $value = $value->getLabel();
                }
            }
            $data[$field] = $value;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
        

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        return $data;
    }
}
