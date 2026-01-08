<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class StoreAction
{
    use QueueableAction;

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
=======
=======
>>>>>>> 17684f52 (.)
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
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
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
    {
        if (!isset($data['lang']) && \in_array('lang', $model->getFillable(), false)) {
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            $data['lang'] = app()->getLocale();
        }
        $data['updated_by'] = authId();
        $data['created_by'] = authId();
        /*if (
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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

        $validator = Validator::make($data, $rules);
        $validator->validate();

        $model = $model->fill($data);

        $model->save();

        $relations = app(FilterRelationsAction::class)->execute($model, $data);

        foreach ($relations as $relation) {
            // Ottieni il tipo di relazione dal nome della classe
            $relationClass = $relation::class;
            $relationshipType = class_basename($relationClass);

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
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
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
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
                throw new Exception('method [execute] not found in ['.$action_class.']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
=======
=======
            
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
            $action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
            $action = app($action_class);
            Assert::object($action);
            if (! method_exists($action, 'execute')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            }
            $action->execute($model, $relation);
        }

        // $msg = 'created! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
