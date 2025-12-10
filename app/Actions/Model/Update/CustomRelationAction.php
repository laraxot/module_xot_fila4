<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Model\UpdateAction;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class CustomRelationAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        // dddx(['model' => $model, 'relationDTO' => $relationDTO]);
        $models = [];
        $ids = [];
        $rows = $relationDTO->rows;
        $related = $rows->getRelated();
        Assert::notNull($related, 'Related model cannot be null');
        $keyName = $related->getKeyName();
        foreach ($relationDTO->data as $data) {
            Assert::isArray($data);
            if (\in_array($keyName, array_keys($data), false)) {
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
                $res = app(UpdateAction::class)->execute($related, $data, []);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
                // Assicura che $data sia type-safe per UpdateAction
=======
                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> dbce41cec (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> 358ba79a7 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> 5400be3e2 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> f8f76a284 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> aa96bb619 (.)
                /** @var array<string, mixed> $typedData */
                $typedData = [];
                foreach ($data as $key => $value) {
                    $typedData[(string) $key] = $value;
                }

                $res = app(UpdateAction::class)->execute($related, $typedData, []);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
>>>>>>> a12f125f4a (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> b93ef594b4 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
                $res = app(UpdateAction::class)->execute($related, $data, []);
=======
                // Assicura che $data sia type-safe per UpdateAction
>>>>>>> d2b0a27 (.)
                /** @var array<string, mixed> $typedData */
                $typedData = $data;
                $res = app(UpdateAction::class)->execute($related, $typedData, []);
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
                dddx(['model' => $model, 'relationDTO' => $relationDTO]);
            }
        }
    }
}
