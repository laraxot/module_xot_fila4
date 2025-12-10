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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use RuntimeException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Xot\Datas\RelationData as RelationDTO;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
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
=======
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
=======
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
>>>>>>> 5a14301c (.)
     *
     * @throws InvalidArgumentException When relationship type is invalid
     * @throws RuntimeException When relationship data is invalid
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Validate that the relationship is of type HasOne
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        Assert::isInstanceOf(
            $relationDTO->rows,
            HasOne::class,
            sprintf('Expected HasOne relationship, got %s', get_debug_type($relationDTO->rows)),
        );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::isInstanceOf($relationDTO->rows, HasOne::class, sprintf(
            'Expected HasOne relationship, got %s',
            get_debug_type($relationDTO->rows)
        ));
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        /** @var HasOne $relation */
        $relation = $relationDTO->rows;

        // Validate that the relationship data is not empty
        if (empty($relationDTO->data)) {
            throw new RuntimeException('Relationship data cannot be empty');
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
