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
            /** @var array<string, mixed> $data PHPStan: ensure correct type */
            if (\in_array($keyName, array_keys($data), false)) {
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
=======
>>>>>>> f1d4085 (.)
=======
                $res = app(UpdateAction::class)->execute($related, $data, []);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
                $ids[] = $res->getKey();
                $models[] = $res;
            } else {
                dddx(['model' => $model, 'relationDTO' => $relationDTO]);
            }
        }
    }
}
