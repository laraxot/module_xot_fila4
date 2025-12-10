<?php

/**
 * @see https://github.com/buyersclub/laravel-eloquent-model-interface/blob/master/src/EloquentModelInterface.php
 */

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Modules\Xot\Contracts\ModelContract.
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $post_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $title
 * @property bool $is_reclamed
 * @property bool $table_enable
 * @property Pivot|null $pivot
 * @property string $tennant_name
 *
 * @method mixed getKey()
 * @method string getRouteKey()
 * @method string getRouteKeyName()
 * @method string getTable()
 * @method mixed with($array)
 * @method array getFillable()
 * @method mixed fill($array)
 * @method mixed getConnection()
 * @method mixed update($params)
 * @method mixed delete()
 * @method mixed detach($params)
 * @method mixed attach($params)
 * @method array treeLabel()
 * @method array treeSons()
 * @method array toArray()
 * @method BelongsTo user()
 * @method mixed getAttributeValue(string $key)
 * @property int                $id
 * @property int|null           $user_id
 * @property string|null        $post_type
 * @property Carbon|null        $created_at
 * @property Carbon|null        $updated_at
 * @property string|null        $created_by
 * @property string|null        $updated_by
 * @property string|null        $title
 * @property bool               $is_reclamed
 * @property bool               $table_enable
 * @property PivotContract|null $pivot
 * @property string $tennant_name
 *
 * @method mixed     getKey()
 * @method string    getRouteKey()
 * @method string    getRouteKeyName()
 * @method string    getTable()
 * @method mixed     with($array)
 * @method array     getFillable()
 * @method mixed     fill($array)
 * @method mixed     getConnection()
 * @method mixed     update($params)
 * @method mixed     delete()
 * @method mixed     detach($params)
 * @method mixed     attach($params)
 * @method array     treeLabel()
 * @method array     treeSons()
 * @method array     toArray()
 * @method BelongsTo user()
 * @method mixed     getAttributeValue(string $key)
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface ModelContract
{
    /**
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @return Model|$this
     *
     * public function forceCreate(array $attributes);
     */

    /**
     * Duplicate the instance and unset all the loaded relations.
     *
     * @return $this
     */
    public function withoutRelations();

    /**
     * Fill the model with an array of attributes. Force mass assignment.
     *
     * @return $this
     */
    public function forceFill(array $attributes);

    /**
     * Save the model to the database.
     *
     * @return bool
     */
    public function save(array $options = []);
<<<<<<< HEAD
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
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)

    /**
     * Convert the model instance to an array representation.
     *
     * @return array<mixed>
    /*
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @return \Illuminate\Database\Eloquent\Model|$this
     *
     * public function forceCreate(array $attributes);
     */
<<<<<<< HEAD
<<<<<<< HEAD
    /*
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @return \Illuminate\Database\Eloquent\Model|$this

        public function forceCreate(array $attributes);
        */

    /*
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @return \Illuminate\Database\Eloquent\Model|$this
     *
     * public function forceCreate(array $attributes);
     */
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
    /*
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @return \Illuminate\Database\Eloquent\Model|$this

        public function forceCreate(array $attributes);
        */
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray();

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed
     */
    public function getKey();

    /**
     * Get a relationship.
     *
     * @param  string  $key
     *
     * @phpstan-param string $key
     *
     * @return mixed
     */
    public function getRelationValue($key);

    /**
     * Create a new instance of the given model.
     *
     * @param  array  $attributes
     * @param  bool  $exists
     * @return static
     */
    public function newInstance($attributes = [], $exists = false);

     * @return mixed|int|string
     */
    public function getKey();

    /*
     * Add a basic where clause to the query.
     *
     * @param  \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string $boolean
     * @return $this
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    public function where($column, $operator = null, $value = null, $boolean = 'and');
    */

=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
     *
     * public function where($column, $operator = null, $value = null, $boolean = 'and');
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * public function where($column, $operator = null, $value = null, $boolean = 'and');
     */
=======
=======
>>>>>>> dbce41cec (.)

    public function where($column, $operator = null, $value = null, $boolean = 'and');
    */

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
=======
     *
     * public function where($column, $operator = null, $value = null, $boolean = 'and');
     */
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
     *
     * public function where($column, $operator = null, $value = null, $boolean = 'and');
     */
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
    /*
     * Execute the query and get the first result or throw an exception.
     *
     * @param  array|string $columns
     * @return \Illuminate\Database\Eloquent\Model|static
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * public function firstOrFail($columns = ['*']);
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    public function firstOrFail($columns = ['*']);
    */
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
     *
     * public function firstOrFail($columns = ['*']);
     */
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * public function firstOrFail($columns = ['*']);
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
     *
     * public function firstOrFail($columns = ['*']);
     */
>>>>>>> dbce41cec (.)
=======

    public function firstOrFail($columns = ['*']);
    */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
     *
     * public function firstOrFail($columns = ['*']);
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======

    public function firstOrFail($columns = ['*']);
    */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     *
     * public function firstOrFail($columns = ['*']);
     */
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
}
