<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use InvalidArgumentException;
use Modules\Xot\Datas\RelationData as RelationDTO;
use RuntimeException;
use RuntimeException;
use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Xot\Datas\RelationData as RelationDTO;
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
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     * @param Model       $model       The parent model instance
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     *
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Validate that the relationship is of type HasOne
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        Assert::isInstanceOf(
            $relationDTO->rows,
            HasOne::class,
            sprintf('Expected HasOne relationship, got %s', get_debug_type($relationDTO->rows)),
        );
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        Assert::isInstanceOf($relationDTO->rows, HasOne::class, sprintf(
            'Expected HasOne relationship, got %s',
            get_debug_type($relationDTO->rows)
        ));
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

        /** @var HasOne $relation */
        $relation = $relationDTO->rows;

        // Validate that the relationship data is not empty
        if (empty($relationDTO->data)) {
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
