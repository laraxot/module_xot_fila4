<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;
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
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $rules
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 21348520 (.)
>>>>>>> 2f3197ab (.)
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $rules
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
            ! isset($data['user_id'])
            && \in_array('user_id',  $row->getFillable(), false)
            && 'user_id' !== $row->getKeyName()
        ) {
            $data['user_id'] = \Auth::id();
        }*/
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)

        $validator = Validator::make($data, $rules);
        $validator->validate();

        $model = $model->fill($data);

        $model->save();

        $relations = app(FilterRelationsAction::class)->execute($model, $data);

        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);
<<<<<<< HEAD

<<<<<<< HEAD
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

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
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
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
>>>>>>> ce6fc085 (.)
            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in ['.$action_class.']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
<<<<<<< HEAD
            
=======
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
=======
=======
            
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
                throw new Exception('method [execute] not found in ['.$action_class.']');
            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
                throw new \Exception('method [execute] not found in ['.$action_class.']');
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
>>>>>>> ce6fc085 (.)
                throw new Exception('method [execute] not found in ['.$action_class.']');
<<<<<<< HEAD
                throw new Exception('method [execute] not found in ['.$action_class.']');
                throw new Exception('method [execute] not found in ['.$action_class.']');
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
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
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
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
>>>>>>> ce6fc085 (.)
            }
            $action->execute($model, $relation);
        }

        // $msg = 'created! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
