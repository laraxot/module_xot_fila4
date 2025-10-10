<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

<<<<<<< HEAD
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Fidum\EloquentMorphToOne\MorphToOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Class MorphToOneAction.
 *
 * Handles the creation of MorphToOne relationship records.
 *
 * @template TModel of Model
 */
class MorphToOneAction
{
    use QueueableAction;

    /**
     * Execute the action to create a MorphToOne relationship.
     *
     * @param Model       $model       The parent model
     * @param RelationDTO $relationDTO Data transfer object containing relationship information
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException When relation type is invalid
=======
<<<<<<< HEAD
     * @throws InvalidArgumentException When relation type is invalid
=======
     * @throws \InvalidArgumentException When relation type is invalid
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Validate the relationship type
        $relation = $model->{$relationDTO->name}();
        Assert::isInstanceOf($relation, MorphToOne::class, 'Relation must be an instance of MorphToOne.');

        // Prepare the data for creation
        $data = $this->prepareData($relationDTO->data);

        // Create the related record
        $relation->create($data);
    }

    /**
     * Prepare the data array for creation.
     *
     * @param array<string, mixed> $data The input data array
     *
     * @return array<string, mixed> The prepared data array
     */
    private function prepareData(array $data): array
    {
        // Ensure the 'lang' key is set to the current locale if not provided
<<<<<<< HEAD
        if (!isset($data['lang'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> a12f125f4a (.)
=======
        if (!isset($data['lang'])) {
>>>>>>> b93ef594b4 (.)
=======
        if (! isset($data['lang'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $data['lang'] = App::getLocale();
        }

        // Return the prepared data
<<<<<<< HEAD
        return array_filter($data, static fn($value) => null !== $value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return array_filter($data, static fn($value) => null !== $value);
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> a12f125f4a (.)
=======
        return array_filter($data, static fn($value) => null !== $value);
>>>>>>> b93ef594b4 (.)
=======
        return array_filter($data, static fn ($value) => null !== $value);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
