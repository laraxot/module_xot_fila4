<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\App;
use InvalidArgumentException;
use Modules\Xot\Datas\RelationData as RelationDTO;
use RuntimeException;
use InvalidArgumentException;
use RuntimeException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\App;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Class MorphOneAction.
 *
 * Handles morphOne relationship updates and creation with strict typing.
 */
final class MorphOneAction
{
    use QueueableAction;

    /**
     * Execute the morphOne relationship action.
     *
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     * @param Model       $model       The model instance
     * @param RelationDTO $relationDTO The relation data transfer object
     *
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Validate the relation is an instance of MorphOne
        $relation = $model->{$relationDTO->name}();
        Assert::isInstanceOf($relation, MorphOne::class, 'Relation must be an instance of MorphOne.');

        // Validate and prepare the data
        $data = $this->validateAndPrepareData($relationDTO->data);

        // Update or create the related model
        if ($relation->exists()) {
            $relation->update($data);
        } else {
            $relation->create($data);
        }
    }

    /**
     * Validate and prepare the data array.
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @param array<string, mixed> $data The input data array
     *
     * @return array<string, mixed> The validated and prepared data
     */
    private function validateAndPrepareData(array $data): array
    {
        // Ensure the 'lang' key is set to the current locale if not provided
<<<<<<< HEAD
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
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
>>>>>>> 2f3197ab (.)
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
<<<<<<< HEAD
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (! isset($data['lang'])) {
        if (!isset($data['lang'])) {
        if (!isset($data['lang'])) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (!isset($data['lang'])) {
=======
        if (! isset($data['lang'])) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            $data['lang'] = App::getLocale();
        }

        // Remove null values from the data array
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
>>>>>>> 2f3197ab (.)
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
<<<<<<< HEAD
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
=======
>>>>>>> ed734516 (.)
=======
        return array_filter($data, static fn($value): bool => null !== $value);
>>>>>>> 7131bd09 (.)
=======
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
<<<<<<< HEAD
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static function ($value): bool {
            return null !== $value;
        });
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn ($value): bool => $value !== null);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
        return array_filter($data, static fn($value): bool => null !== $value);
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    }
}
