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
=======
     * @param  class-string<HasRecursiveRelationshipsContract>  $class
>>>>>>> 551c768c4 (.)
=======
     * @param  class-string<HasRecursiveRelationshipsContract>  $class
>>>>>>> 414a4ffcb (.)
     * @return array<int|string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $class, Model|callable|null $_where = null): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
    public function execute(string $class, Model|callable|null $_where = null): array
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $class, Model|callable|null $_where = null): array
=======
    public function execute(string $class, Model|callable|null $where = null): array
>>>>>>> f1d4085 (.)
=======
    public function execute(string $class, Model|callable|null $_where = null): array
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    public function execute(string $class, Model|callable|null $_where = null): array
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    {
        /** @var HasRecursiveRelationshipsContract $model */
<<<<<<< HEAD
        $model = new $class();
        $model = new $class();
        $model = new $class();
        $model = new $class();
        $model = new $class();
=======
        $model = new $class;
>>>>>>> 551c768c4 (.)
=======
    {
        /** @var HasRecursiveRelationshipsContract $model */
        $model = new $class;
>>>>>>> 414a4ffcb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
            /* @var HasRecursiveRelationshipsContract $row */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 5cf46378 (.)
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
            $this->options[$row->getKey()] = is_string($row) ? $row : (string) $row->getLabel();
<<<<<<< HEAD
=======
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
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            $this->parse($row);
        }

        return $this->options;
    }

    public function parse(HasRecursiveRelationshipsContract $model): void
    {
        foreach ($model->children as $child) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
=======
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
<<<<<<< HEAD
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            /** @var HasRecursiveRelationshipsContract $child */
            $key = $child->getKey();
            $this->options[is_string($key) ? $key : ((string) $key)] =
<<<<<<< HEAD
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
=======
                Str::repeat('---', $child->depth) . '   ' . $child->getLabel();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
            $this->options[$child->getKey()] = Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> 551c768c4 (.)
=======
                Str::repeat('---', $child->depth).'   '.$child->getLabel();
>>>>>>> 414a4ffcb (.)
        }
    }
}
