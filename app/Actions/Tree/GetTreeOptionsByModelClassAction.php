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
     * @param  class-string<HasRecursiveRelationshipsContract>  $class
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
    {
        /** @var HasRecursiveRelationshipsContract $model */
        $model = new $class;
        $model = new $class();
        $model = new $class();
        $model = new $class();
        $model = new $class();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
>>>>>>> 5a14301c (.)
=======
     * @param class-string<HasRecursiveRelationshipsContract> $class
     *
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $model = new $class;
=======
        $model = new $class();
>>>>>>> 5a14301c (.)
=======
        $model = new $class();
>>>>>>> 5a14301c (.)
=======
        $model = new $class();
>>>>>>> 5a14301c (.)
=======
        $model = new $class();
>>>>>>> 5a14301c (.)
=======
        $model = new $class();
>>>>>>> 5a14301c (.)
=======
        $model = new $class();
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

        /** @var Collection<int, HasRecursiveRelationshipsContract> $collection */
        // @phpstan-ignore generics.notSubtype
        $collection = $model->newQuery()->get();
        $rows = $collection->toTree();

        foreach ($rows as $row) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
            /** @var HasRecursiveRelationshipsContract $row */
            $key = $row->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] = is_string($row)
                ? $row
                : (string) $row->getLabel();
<<<<<<< HEAD
            /* @var HasRecursiveRelationshipsContract $row */
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            /* @var HasRecursiveRelationshipsContract $row */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            $key = $row->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] = is_string($row)
                ? $row
                : ((string) $row->getLabel());
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
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> laraxot/develop
            $this->parse($row);
        }

        return $this->options;
    }

    public function parse(HasRecursiveRelationshipsContract $model): void
    {
        foreach ($model->children as $child) {
<<<<<<< HEAD
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 300ef70 (.)
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
<<<<<<< HEAD
<<<<<<< HEAD
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
=======
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
>>>>>>> laraxot/develop
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
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
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> laraxot/develop
        }
    }
}
