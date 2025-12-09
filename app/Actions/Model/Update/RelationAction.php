<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Model\FilterRelationsAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class RelationAction
{
    use QueueableAction;

    /**
     * Undocumented function.
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $data
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(Model $model, array $data): void
    {
        $relations = app(FilterRelationsAction::class)->execute($model, $data);
        /*
         * if ('Operation' === class_basename($model)) {
         * dddx([
         * 'basename' => class_basename($model),
         * 'model' => $model,
         * 'data' => $data,
         * 'relations' => $relations,
         * ]);
         * }
         * // */
        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
<<<<<<< HEAD
            $relationClass = $relation::class;
            $relationshipType = class_basename($relationClass);

            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
=======
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 5a14301c (.)
            Assert::object($action = app($actionClass));

            if (method_exists($action, 'execute')) {
                $action->execute($model, $relation);
            }
        }
    }
}
