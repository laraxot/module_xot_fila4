<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Webmozart\Assert\Assert;

class FilterRelationsAction
{
    /**
<<<<<<< HEAD
     * @param  array<string, mixed>  $relations
=======
     * @param array<string, mixed> $relations
     *
>>>>>>> 5a14301c (.)
     * @return array<string, Relation>
     */
<<<<<<< HEAD
    public function execute(Model $_model, array $relations): array
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
