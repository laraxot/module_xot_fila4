<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use BackedEnum;
<<<<<<< HEAD
=======
use Illuminate\Contracts\Support\Arrayable;
>>>>>>> 5a14301c (.)
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
=======
use Modules\Lang\Actions\TransCollectionAction;
>>>>>>> 5a14301c (.)
use Modules\Xot\Actions\Cast\SafeArrayByModelCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;

class CollectionExport implements FromCollection, ShouldQueue, WithHeadings, WithMapping
{
    use Exportable;

    public Collection $collection;
<<<<<<< HEAD

    public array $headings;

    public ?string $transKey;

    /** @var array<int, string> */
    public ?array $fields = null;

    /**
     * @param  array<int, string>  $fields
     */
    public function __construct(Collection $collection, ?string $transKey = null, array $fields = [])
=======
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
>>>>>>> 5a14301c (.)
    {
        $this->collection = $collection;
        $this->transKey = $transKey;
        $this->fields = $fields;
    }

    public function getHead(): array
    {
<<<<<<< HEAD
        if (\is_array($this->fields) && ! empty($this->fields)) {
=======
        if (\is_array($this->fields) && !empty($this->fields)) {
>>>>>>> 5a14301c (.)
            return $this->fields;
        }

        $head = $this->collection->first();
        Assert::isInstanceOf($head, Model::class);
<<<<<<< HEAD

        return array_keys($head->getAttributes());
=======
        $head = array_keys($head->getAttributes());
        return $head;
>>>>>>> 5a14301c (.)
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;

<<<<<<< HEAD
        return app(TransArrayAction::class)->execute($headings, $transKey);
=======
        $headings = app(TransArrayAction::class)->execute($headings, $transKey);

        return $headings;
>>>>>>> 5a14301c (.)
    }

    public function collection(): Collection
    {
        return $this->collection;
    }

<<<<<<< HEAD
    public function map(mixed $row): array
    {
        if ($this->fields === null || empty($this->fields)) {
            Assert::isInstanceOf($row, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($row);

            return Arr::map($res, function ($value, $_key) {
=======
    /**
     * @param Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (null === $this->fields || empty($this->fields)) {
            Assert::isInstanceOf($item, Model::class);
            $res = app(SafeArrayByModelCastAction::class)->execute($item);
            $res = Arr::map($res, function ($value, $_key) {
>>>>>>> 5a14301c (.)
                if ($value instanceof BackedEnum) {
                    if (method_exists($value, 'getLabel')) {
                        return $value->getLabel();
                    }
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
                    return $value->value;
                }

                return SafeStringCastAction::cast($value);
            });
<<<<<<< HEAD
        }

        // return collect($row)->only($this->fields)->toArray();
        $data = [];

        foreach ($this->fields as $field) {
            $value = data_get($row, $field);
=======

            return $res;
        }

        // return collect($item)->only($this->fields)->toArray();
        $data = [];

        foreach ($this->fields as $field) {
            $value = data_get($item, $field);
>>>>>>> 5a14301c (.)
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
