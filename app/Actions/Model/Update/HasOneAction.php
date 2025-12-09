<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use InvalidArgumentException;
use Modules\Xot\Datas\RelationData as RelationDTO;
use RuntimeException;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
use RuntimeException;
use InvalidArgumentException;
=======
<<<<<<< HEAD
use RuntimeException;
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Xot\Datas\RelationData as RelationDTO;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Class HasOneAction.
 *
 * Handles the update operation for HasOne relationships in Eloquent models.
 *
 * @template TModel of Model
 */
class HasOneAction
{
    use QueueableAction;

    /**
     * Execute the update operation for a HasOne relationship.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  The parent model instance
     * @param  RelationDTO  $relationDTO  Data transfer object containing relationship information
=======
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException When relationship type is invalid
     * @throws RuntimeException When relationship data is invalid
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException When relationship type is invalid
     * @throws RuntimeException When relationship data is invalid
=======
     * @throws \InvalidArgumentException When relationship type is invalid
     * @throws \RuntimeException         When relationship data is invalid
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Validate that the relationship is of type HasOne
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::isInstanceOf(
            $relationDTO->rows,
            HasOne::class,
            sprintf('Expected HasOne relationship, got %s', get_debug_type($relationDTO->rows)),
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        Assert::isInstanceOf($relationDTO->rows, HasOne::class, sprintf(
            'Expected HasOne relationship, got %s',
            get_debug_type($relationDTO->rows)
        ));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        /** @var HasOne $relation */
        $relation = $relationDTO->rows;

        // Validate that the relationship data is not empty
        if (empty($relationDTO->data)) {
<<<<<<< HEAD
            throw new RuntimeException('Relationship data cannot be empty');
=======
<<<<<<< HEAD
            throw new RuntimeException('Relationship data cannot be empty');
=======
            throw new \RuntimeException('Relationship data cannot be empty');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        // Check if the related model exists
        if ($relation->exists()) {
            $related = $model->{$relationDTO->name};
            if ($related instanceof Model) {
                $related->update($relationDTO->data);

                return;
            }
        }

        // If the related model does not exist, create a new one
        $relation->create($relationDTO->data);
    }
}
