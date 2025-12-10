<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Tree;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\HasRecursiveRelationshipsContract;
use Spatie\QueueableAction\QueueableAction;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Collection;

class GetTreeOptionsByModelClassAction
{
    use QueueableAction;

    /** @var array<int|string, string> */
    public array $options = [];

    /**
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
     * @return array<int|string, string>
     */
    public function execute(string $class, Model|callable|null $_where = null): array
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $class, Model|callable|null $where = null): array
=======
=======
    public function execute(string $class, Model|callable|null $where = null): array
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function execute(string $class, Model|callable|null $_where = null): array
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        /** @var HasRecursiveRelationshipsContract $model */
        $model = new $class();
        $model = new $class();
        $model = new $class();
        $model = new $class();
        $model = new $class();

        /** @var Collection<int, HasRecursiveRelationshipsContract> $collection */
        // @phpstan-ignore generics.notSubtype
        $collection = $model->newQuery()->get();
        $rows = $collection->toTree();

        foreach ($rows as $row) {
            /** @var HasRecursiveRelationshipsContract $row */
            $key = $row->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] = is_string($row)
                ? $row
                : (string) $row->getLabel();
            /* @var HasRecursiveRelationshipsContract $row */
            $key = $row->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] = is_string($row)
                ? $row
                : ((string) $row->getLabel());
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
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
<<<<<<< HEAD
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
=======
>>>>>>> f1d4085 (.)
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
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
            $this->parse($row);
        }

        return $this->options;
    }

    public function parse(HasRecursiveRelationshipsContract $model): void
    {
        foreach ($model->children as $child) {
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
<<<<<<< HEAD
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
=======
>>>>>>> f1d4085 (.)
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
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
        }
    }
}
