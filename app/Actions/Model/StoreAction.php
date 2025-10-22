<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class StoreAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
>>>>>>> d2b0a27 (.)
    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $rules
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 300ef70 (.)
            $data['lang'] = app()->getLocale();
        }
        $data['updated_by'] = authId();
        $data['created_by'] = authId();
        /*if (
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
         * ! isset($data['user_id'])
         * && \in_array('user_id',  $row->getFillable(), false)
         * && 'user_id' !== $row->getKeyName()
         * ) {
         * $data['user_id'] = \Auth::id();
         * }*/
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            ! isset($data['user_id'])
            && \in_array('user_id',  $row->getFillable(), false)
            && 'user_id' !== $row->getKeyName()
        ) {
            $data['user_id'] = \Auth::id();
        }*/
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        $validator = Validator::make($data, $rules);
        $validator->validate();

        /** @var array<string, mixed> $validatedData */
        $validatedData = $data;
        $model = $model->fill($validatedData);

        $model->save();

        /** @var array<string, mixed> $relationData */
        $relationData = $data;
        $relations = app(FilterRelationsAction::class)->execute($model, $relationData);

        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in ['.$action_class.']');
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            }
            $action->execute($model, $relation);
        }

        // $msg = 'created! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
