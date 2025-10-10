<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class BelongsToAction
{
    use QueueableAction;

    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, BelongsTo::class);

        /*$relationDTO->data e' un array
         * if (! \is_array($relationDTO->data)) {
         * $related = $rows->getRelated();
         * $related = $related->find($relationDTO->data);
         * $res = $rows->associate($related);
         * $res->save();
         *
         * return;
         * }
         */

        if (! Arr::isAssoc($relationDTO->data) && \count($relationDTO->data) === 1) {
            $related_id = Arr::first($relationDTO->data);
            if ($related_id === null) {
                return;
            }

            $relatedModel = $rows->getRelated();
            Assert::notNull($relatedModel, 'Related model cannot be null');
            $related = $relatedModel->find($related_id);

            if (! ($related instanceof Model)) {
                throw new Exception('Expected a single model, got null or invalid object.');
            }
            $res = $rows->associate($related);
            $res->save();

            return;
        }

        if (Arr::isAssoc($relationDTO->data)) {
            $sub = $rows->firstOrCreate();
            // $sub = $rows->first() ?? $rows->getModel();
            if ($sub === null) {
                throw new Exception('['.__LINE__.']['.class_basename($this).']');
            }

            app(RelationAction::class)->execute($sub, $relationDTO->data);
        }

        $relatedModel = $rows->getRelated();
        Assert::notNull($relatedModel, 'Related model cannot be null');

        $fillable = collect($relatedModel->getFillable())->merge($relatedModel->getHidden());
        $data = collect($relationDTO->data)->only($fillable)->all();

        if ($rows->exists()) {
            // $rows->update($data); // non passa per il mutator
            $relatedInstance = $model->{Str::camel($relationDTO->name)};
            if ($relatedInstance instanceof Model) {
                $relatedInstance->update($data);
            }

            return;
        }

        // dddx([$relation->related, $data]);

        $related = $relatedModel->create($data);
        $res = $rows->associate($related);
        $res->save();
    }
}
