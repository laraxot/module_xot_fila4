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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string<HasRecursiveRelationshipsContract>  $class
=======
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
>>>>>>> 5a14301c (.)
=======
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
>>>>>>> 5a14301c (.)
     * @return array<int|string, string>
     */
    public function execute(string $class, Model|callable|null $_where = null): array
    {
        /** @var HasRecursiveRelationshipsContract $model */
<<<<<<< HEAD
<<<<<<< HEAD
        $model = new $class;
=======
        $model = new $class();
>>>>>>> 5a14301c (.)
=======
        $model = new $class();
>>>>>>> 5a14301c (.)

        /** @var Collection<int, HasRecursiveRelationshipsContract> $collection */
        // @phpstan-ignore generics.notSubtype
        $collection = $model->newQuery()->get();
        $rows = $collection->toTree();

        foreach ($rows as $row) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var HasRecursiveRelationshipsContract $row */
            $key = $row->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] = is_string($row)
                ? $row
                : (string) $row->getLabel();
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
            /* @var HasRecursiveRelationshipsContract $row */
            $key = $row->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] = is_string($row)
                ? $row
                : ((string) $row->getLabel());
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
<<<<<<< HEAD
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
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
=======
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
=======
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
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
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
>>>>>>> 5a14301c (.)
=======
=======
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
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
=======
=======
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
        }
    }
}
