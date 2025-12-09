<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Exception;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Session;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\Session;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Facades\Validator;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class StoreAction
{
    use QueueableAction;

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
    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $rules
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
=======
>>>>>>> 21348520 (.)
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 5a14301c (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
>>>>>>> 7131bd09 (.)
    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $rules
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (! isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> ca9324a4 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
            $data['lang'] = app()->getLocale();
        }
        $data['updated_by'] = authId();
        $data['created_by'] = authId();
        /*if (
<<<<<<< HEAD
         * ! isset($data['user_id'])
         * && \in_array('user_id',  $row->getFillable(), false)
         * && 'user_id' !== $row->getKeyName()
         * ) {
         * $data['user_id'] = \Auth::id();
         * }*/
=======
            ! isset($data['user_id'])
            && \in_array('user_id',  $row->getFillable(), false)
            && 'user_id' !== $row->getKeyName()
        ) {
            $data['user_id'] = \Auth::id();
        }*/
>>>>>>> f1d4085 (.)

        $validator = Validator::make($data, $rules);
        $validator->validate();

        $model = $model->fill($data);

        $model->save();

        $relations = app(FilterRelationsAction::class)->execute($model, $data);

        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
<<<<<<< HEAD
<<<<<<< HEAD
            $relationClass = $relation::class;
            $relationshipType = class_basename($relationClass);

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
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 7131bd09 (.)
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in ['.$action_class.']');
<<<<<<< HEAD
=======
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            $relationClass = get_class($relation);
            $relationshipType = class_basename($relationClass);

>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
            $action_class = __NAMESPACE__ . '\\Store\\' . $relationshipType . 'Action';
            $action = app($action_class);
            Assert::object($action);
            if (!method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in [' . $action_class . ']');
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
=======
=======
            
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
                throw new Exception('method [execute] not found in ['.$action_class.']');
>>>>>>> f1d4085 (.)
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
            }
            $action->execute($model, $relation);
        }

        // $msg = 'created! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
