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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
     * Undocumented function.
     *
     * @param  array<string, mixed>  $data
     *
     * @param array<string, mixed> $data
     *
     * @param  array<string, mixed>  $data
     *
     * @param array<string, mixed> $data
=======
=======
>>>>>>> 300ef70 (.)
     * Undocumented function.
<<<<<<< HEAD
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
>>>>>>> 53d6a6ba (.)
=======
     *
     * @param  array<string, mixed>  $data
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
     */
    public function execute(Model $model, array $data): void
    {
        /** @var array<string, mixed> $typedData */
        $typedData = $data;
        $relations = app(FilterRelationsAction::class)->execute($model, $typedData);
        Assert::isArray($relations, 'FilterRelationsAction must return an array');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function execute(Model $model, array $data): void
    {
        $relations = app(FilterRelationsAction::class)->execute($model, $data);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        /*
=======
=======
=======
     * Execute relation updates with type-safe data.
     *
     * @param  array<mixed, mixed>  $data
=======
     * Undocumented function.
>>>>>>> b93ef594b4 (.)
     */
    public function execute(Model $model, array $data): void
    {
        $relations = app(FilterRelationsAction::class)->execute($model, $data);
        /*
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
        /*
>>>>>>> 7468a7d2 (.)
=======
        /*
>>>>>>> 5cf46378 (.)
        if ('Operation' === class_basename($model)) {
            dddx([
                'basename' => class_basename($model),
                'model' => $model,
                'data' => $data,
                'relations' => $relations,
            ]);
        }
        // */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
         * if ('Operation' === class_basename($model)) {
         * dddx([
         * 'basename' => class_basename($model),
         * 'model' => $model,
         * 'data' => $data,
         * 'relations' => $relations,
         * ]);
         * }
         * // */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
            $relationClass = $relation::class;
            $relationshipType = class_basename($relationClass);

<<<<<<< HEAD
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
=======
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 2f3197ab (.)
            
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
<<<<<<< HEAD
=======
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
>>>>>>> 218dfed3 (.)
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
<<<<<<< HEAD
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
            $actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
            $actionClass = __NAMESPACE__ . '\\' . $relationshipType . 'Action';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Assert::object($action = app($actionClass));

            if (method_exists($action, 'execute')) {
                $action->execute($model, $relation);
            }
        }
    }
}
