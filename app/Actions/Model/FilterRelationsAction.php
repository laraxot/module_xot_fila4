<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Webmozart\Assert\Assert;

class FilterRelationsAction
{
    /**
     * @param array<string, mixed> $relations
     *
     * @param array<string, mixed> $relations
     *
     * @param array<string, mixed> $relations
     *
     * @param array<string, mixed> $relations
     *
     * @param array<string, mixed> $relations
     *
     * @return array<string, Relation>
     */
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
    public function execute(Model $_model, array $relations): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, array $relations): array
=======
=======
    public function execute(Model $model, array $relations): array
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 358ba79a7 (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> f8f76a284 (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 5e6e0d054 (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, array $relations): array
=======
    public function execute(Model $model, array $relations): array
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, array $relations): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
    public function execute(Model $_model, array $relations): array
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
    public function execute(Model $_model, array $relations): array
=======
    public function execute(Model $model, array $relations): array
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $_model, array $relations): array
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
    public function execute(Model $_model, array $relations): array
=======
    public function execute(Model $model, array $relations): array
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> aba62c408 (.)
=======
    public function execute(Model $_model, array $relations): array
=======
    public function execute(Model $model, array $relations): array
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 5cb992cc6 (.)
=======
    public function execute(Model $_model, array $relations): array
=======
    public function execute(Model $model, array $relations): array
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 3c8d62b79 (.)
=======
    public function execute(Model $_model, array $relations): array
=======
    public function execute(Model $model, array $relations): array
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 60f0a1820 (.)
=======
    public function execute(Model $_model, array $relations): array
=======
    public function execute(Model $model, array $relations): array
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
    public function execute(Model $_model, array $relations): array
>>>>>>> 851793957 (.)
    {
        $filtered = [];

        foreach ($relations as $name => $relation) {
            Assert::isInstanceOf($relation, Relation::class);
            $related = $relation->getRelated();
            Assert::isInstanceOf($related, Model::class);

            $className = class_basename($related);
            $filtered[$className] = $relation;
        }

        return $filtered;
    }
}
