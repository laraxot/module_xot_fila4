<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class StoreAction
{
    use QueueableAction;

<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $rules
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $data['lang'] = app()->getLocale();
        }
        $data['updated_by'] = authId();
        $data['created_by'] = authId();
        /*if (
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * ! isset($data['user_id'])
         * && \in_array('user_id',  $row->getFillable(), false)
         * && 'user_id' !== $row->getKeyName()
         * ) {
         * $data['user_id'] = \Auth::id();
         * }*/
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            ! isset($data['user_id'])
            && \in_array('user_id',  $row->getFillable(), false)
            && 'user_id' !== $row->getKeyName()
        ) {
            $data['user_id'] = \Auth::id();
        }*/
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        $validator = Validator::make($data, $rules);
        $validator->validate();

        $model = $model->fill($data);

        $model->save();

        $relations = app(FilterRelationsAction::class)->execute($model, $data);

        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
<<<<<<< HEAD
=======
=======
=======
            
>>>>>>> origin/develop
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
<<<<<<< HEAD
                throw new Exception('method [execute] not found in ['.$action_class.']');
>>>>>>> a12f125f4a (.)
=======
            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
>>>>>>> b93ef594b4 (.)
=======
                throw new \Exception('method [execute] not found in ['.$action_class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            }
            $action->execute($model, $relation);
        }

        // $msg = 'created! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
