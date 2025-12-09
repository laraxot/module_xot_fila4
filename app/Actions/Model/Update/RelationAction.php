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
<<<<<<< HEAD
     * Undocumented function.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $data
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
=======
     * Execute relation updates with type-safe data.
     *
     * @param  array<mixed, mixed>  $data
     */
    public function execute(Model $model, array $data): void
    {
        // Assicura che $data sia type-safe per FilterRelationsAction
        /** @var array<string, mixed> $typedData */
        $typedData = [];
        foreach ($data as $key => $value) {
            $typedData[(string) $key] = $value;
        }

        $relations = app(FilterRelationsAction::class)->execute($model, $typedData);
        /*
        if ('Operation' === class_basename($model)) {
            dddx([
                'basename' => class_basename($model),
                'model' => $model,
                'data' => $data,
                'relations' => $relations,
            ]);
        }
        // */
>>>>>>> f1d4085 (.)
        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $relationClass = $relation::class;
            $relationshipType = class_basename($relationClass);

            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

<<<<<<< HEAD
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
=======
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
>>>>>>> a12f125f4a (.)
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> b93ef594b4 (.)
=======
            
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
            Assert::object($action = app($actionClass));

            if (method_exists($action, 'execute')) {
                $action->execute($model, $relation);
            }
        }
    }
}
