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
     * @return array<int|string, string>
     */
<<<<<<< HEAD
    public function execute(string $class, Model|callable|null $_where = null): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $class, Model|callable|null $_where = null): array
=======
    public function execute(string $class, Model|callable|null $where = null): array
>>>>>>> a12f125f4a (.)
=======
    public function execute(string $class, Model|callable|null $_where = null): array
>>>>>>> b93ef594b4 (.)
=======
    public function execute(string $class, Model|callable|null $where = null): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        /** @var HasRecursiveRelationshipsContract $model */
        $model = new $class();

        /** @var Collection<int, HasRecursiveRelationshipsContract> $collection */
        // @phpstan-ignore generics.notSubtype
        $collection = $model->newQuery()->get();
        $rows = $collection->toTree();

        foreach ($rows as $row) {
            /* @var HasRecursiveRelationshipsContract $row */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            $key = $row->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] = is_string($row)
                ? $row
                : ((string) $row->getLabel());
<<<<<<< HEAD
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
            $this->parse($row);
        }

        return $this->options;
    }

    public function parse(HasRecursiveRelationshipsContract $model): void
    {
        foreach ($model->children as $child) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
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
        }
    }
}
