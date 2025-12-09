<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
=======
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Trait Modules\Xot\Models\Traits\RelationX.
 */
trait RelationX
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string<Model>  $related  Related model class
     * @param  class-string<Model>|string|null  $_table  Pivot table name
     * @param  string|null  $foreignPivotKey  Foreign pivot key
     * @param  string|null  $relatedPivotKey  Related pivot key
     * @param  string|null  $parentKey  Parent key
     * @param  string|null  $relatedKey  Related key
     * @param  string|null  $relation  Relation name
     */
    public function belongsToManyX(
        string $related,
        ?string $_table = null,
        ?string $foreignPivotKey = null,
        ?string $relatedPivotKey = null,
        ?string $parentKey = null,
        ?string $relatedKey = null,
        ?string $relation = null,
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
     * @param class-string<Model>             $related         Related model class
     * @param class-string<Model>|string|null $_table          Pivot table name
     * @param string|null                     $foreignPivotKey Foreign pivot key
     * @param string|null                     $relatedPivotKey Related pivot key
     * @param string|null                     $parentKey       Parent key
     * @param string|null                     $relatedKey      Related key
     * @param string|null                     $relation        Relation name
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     */
    public function belongsToManyX(
        string $related,
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
>>>>>>> 5a14301c (.)
    ): BelongsToMany {
        Assert::isInstanceOf(
            $related_model = app($related),
            Model::class,
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 3fbbf1f5 (.)
        );
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * @param class-string<Model>             $related         aaa
     * @param class-string<Model>|string|null $table           aaa
     * @param string|null                     $foreignPivotKey aaa
     * @param string|null                     $relatedPivotKey aaa
     * @param string|null                     $parentKey       aaa
     * @param string|null                     $relatedKey      aaa
     * @param string|null                     $relation        aaa
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
     */
    public function belongsToManyX(
        string $related,
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
    ): BelongsToMany {
<<<<<<< HEAD
        Assert::isInstanceOf($related_model = app($related), Model::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::isInstanceOf(
            $related_model = app($related),
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
>>>>>>> b93ef594b4 (.)
=======
     */
    public function belongsToManyX(
        string $related,
        ?string $table = null,
        ?string $foreignPivotKey = null,
        ?string $relatedPivotKey = null,
        ?string $parentKey = null,
        ?string $relatedKey = null,
        ?string $relation = null,
    ): BelongsToMany {
        Assert::isInstanceOf($related_model = app($related), Model::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $pivot = $this->guessPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
        $relatedDbName = $related_model->getConnection()->getDatabaseName();
<<<<<<< HEAD
        
        // Handle cross-database relationships
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 492d6d3c (.)
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ($pivotDriver !== 'sqlite') {
<<<<<<< HEAD
                $table = $pivotDbName.'.'.$table;
            }
=======
            $table = $pivotDbName . '.' . $table;
>>>>>>> 5a14301c (.)
=======
                $table = $pivotDbName . '.' . $table;
            }
>>>>>>> 492d6d3c (.)
        }

=======
        // if ($pivotDbName !== $dbName) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $table = $pivotDbName . '.' . $table;
        }
        // }

=======
=======
>>>>>>> origin/develop
        if ($pivotDbName != $dbName || $relatedDbName != $dbName) {
            $table = $pivotDbName.'.'.$table;
        }
        // }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $table = $pivotDbName . '.' . $table;
        }
        // }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $this->belongsToMany(
            related: $related,
            table: $table,
            foreignPivotKey: $foreignPivotKey,
            relatedPivotKey: $relatedPivotKey,
            parentKey: $parentKey,
            relatedKey: $relatedKey,
            relation: $relation,
        )
            ->using($pivot::class)
            ->withPivot($pivotFields)
            ->withTimestamps();
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Define a polymorphic many-to-many relationship.
     *
     * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
     *
     * @param  class-string<TRelatedModel>  $related
<<<<<<< HEAD
=======
     * @param  string  $name
<<<<<<< HEAD
     * @param  string|null  $_table
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string|null  $_table
=======
     * @param  string|null  $table
>>>>>>> a12f125f4a (.)
=======
     * @param  string|null  $_table
>>>>>>> b93ef594b4 (.)
=======
     * @param  string|null  $table
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @param  string|null  $foreignPivotKey
     * @param  string|null  $relatedPivotKey
     * @param  string|null  $parentKey
     * @param  string|null  $relatedKey
     * @param  string|null  $relation
     * @param  bool  $inverse
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
     * @return MorphToMany<TRelatedModel, $this>
     */
=======
<<<<<<< HEAD
     * @return MorphToMany<TRelatedModel, $this>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function morphToManyX(
        string $related,
        string $name,
<<<<<<< HEAD
        ?string $_table = null,
        ?string $foreignPivotKey = null,
        ?string $relatedPivotKey = null,
        ?string $parentKey = null,
        ?string $relatedKey = null,
        ?string $relation = null,
        bool $inverse = false,
    ): MorphToMany {
=======
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
        bool $inverse = false,
    ) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany<TRelatedModel, $this>
     */
>>>>>>> origin/develop
    public function morphToManyX($related, $name, $table = null, $foreignPivotKey = null,
                                $relatedPivotKey = null, $parentKey = null,
                                $relatedKey = null, $relation = null, $inverse = false)
    {
       
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        $pivot = $this->guessMorphPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
<<<<<<< HEAD
<<<<<<< HEAD
        // $relatedDbName = $related_model->getConnection()->getDatabaseName();
=======
        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
>>>>>>> 3fbbf1f5 (.)
        if ($table === null) {
            $table = $pivot->getTable();
        }

=======
        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
<<<<<<< HEAD
        if ($table === null) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($table === null) {
=======
        if($table==null){
>>>>>>> a12f125f4a (.)
=======
        if ($table === null) {
>>>>>>> b93ef594b4 (.)
=======
        if($table==null){
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $table = $pivot->getTable();
        }
>>>>>>> 5a14301c (.)
        return $this->morphToMany(
            related: $related,
            name: $name,
            table: $table,
            foreignPivotKey: $foreignPivotKey,
            relatedPivotKey: $relatedPivotKey,
            parentKey: $parentKey,
            relatedKey: $relatedKey,
            relation: $relation,
            inverse: $inverse,
        )
<<<<<<< HEAD
            ->using($pivot::class)
            ->withPivot($pivotFields)
            ->withTimestamps();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->using($pivot::class)
            ->withPivot($pivotFields)
            ->withTimestamps();
=======
        ->using($pivot::class)
        ->withPivot($pivotFields)
        ->withTimestamps();
>>>>>>> a12f125f4a (.)
=======
            ->using($pivot::class)
            ->withPivot($pivotFields)
            ->withTimestamps();
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    }

<<<<<<< HEAD
    public function guessMorphPivot(string $related, ?string $_class = null): MorphPivot
    {
        $class = $this::class;
        $pivot_name = class_basename($related).'Morph';
=======
    /**
     * @return MorphPivot
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function guessMorphPivot(string $related, null|string $_class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related) . 'Morph';
>>>>>>> 5a14301c (.)

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
    public function guessMorphPivot(string $related,?string $class = null)
=======
    public function guessMorphPivot(string $related, null|string $_class = null)
>>>>>>> b93ef594b4 (.)
    {
        $class = $this::class;
        $pivot_name = class_basename($related) . 'Morph';

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
<<<<<<< HEAD
        Assert::isInstanceOf($pivot,MorphPivot::class);
>>>>>>> a12f125f4a (.)
=======
        Assert::isInstanceOf($pivot, MorphPivot::class);
>>>>>>> b93ef594b4 (.)
=======
        ->using($pivot::class)
        ->withPivot($pivotFields)
        ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphPivot
     */
    public function guessMorphPivot(string $related,?string $class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related).'Morph';
        
        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        return $pivot;
    }

    /**
     * Guess the pivot class for a many-to-many relationship.
     *
<<<<<<< HEAD
     * @param  string  $related  The related model class name
     * @param  string|class-string|null  $class  The class to use for parent class lookup (used internally)
     */
    public function guessPivot(string $related, ?string $class = null): Pivot
=======
     * @param string $related The related model class name
     * @param string|class-string|null $class The class to use for parent class lookup (used internally)
<<<<<<< HEAD
     * @return Pivot
     */
    public function guessPivot(string $related, null|string $class = null)
>>>>>>> 5a14301c (.)
    {
        $class ??= $this::class;
=======
<<<<<<< HEAD
     * @return Pivot
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function guessPivot(string $related, null|string $class = null)
    {
        $class ??= $this::class;
=======
    public function guessPivot(string $related, ?string $class = null)
    {
        $class = $class ?? $this::class;
>>>>>>> a12f125f4a (.)
=======
    public function guessPivot(string $related, null|string $class = null)
    {
        $class ??= $this::class;
>>>>>>> b93ef594b4 (.)
=======
     * @return \Illuminate\Database\Eloquent\Relations\Pivot
     */
    public function guessPivot(string $related, ?string $class = null)
    {
        $class = $class ?? $this::class;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $model_names = [
            class_basename($class),
            class_basename($related),
        ];
        sort($model_names);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        $msg = '';
>>>>>>> 5a14301c (.)
        $pivot_name = implode('', $model_names);

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);

<<<<<<< HEAD
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, Pivot::class);
=======
=======
        $msg='';
=======
        $msg = '';
>>>>>>> b93ef594b4 (.)
        $pivot_name = implode('', $model_names);

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, Pivot::class);
=======
        $msg='';
        $pivot_name = implode('', $model_names);
        
        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, \Illuminate\Database\Eloquent\Relations\Pivot::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $pivot;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function guessPivotFullClass(string $pivot_name, string $related, ?string $class = null): string
    {
        $class ??= $this::class;

        // Try class-based pivot first
        $pivot_class = $this->buildPivotClassName($class, $pivot_name);
        if (class_exists($pivot_class)) {
            return $pivot_class;
        }

        // Try related model-based pivot
        $pivot_class = $this->buildPivotClassName($related, $pivot_name);
        if (class_exists($pivot_class)) {
            return $pivot_class;
        }

        // Try parent class if available
        return $this->tryParentClassPivot($pivot_name, $related, $class);
    }

    private function buildPivotClassName(string $context, string $pivotName): string
    {
        return Str::of($context)
            ->beforeLast('\\')
            ->append('\\'.$pivotName)
            ->toString();
    }

    private function tryParentClassPivot(string $pivot_name, string $related, string $class): string
    {
        $parent_class = get_parent_class($class);
        if ($parent_class === false) {
            return $this->buildPivotClassName($class, $pivot_name);
        }

        // If parent class ends with 'Morph', use it directly
        if (Str::endsWith($parent_class, 'Morph')) {
            return $this->buildPivotClassName($class, $pivot_name);
        }

        // Otherwise, use parent class to build new pivot name
        $model_names = [
            class_basename($parent_class),
            class_basename($related),
        ];
        sort($model_names);
        $new_pivot_name = implode('', $model_names);

        return $this->guessPivotFullClass($new_pivot_name, $related, $parent_class);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    {
        $class ??= $this::class;
        $pivot_class = Str::of($class)
            ->beforeLast('\\')
            ->append('\\' . $pivot_name)
            ->toString();
        if (!class_exists($pivot_class)) {
            $pivot_class = Str::of($related)
                ->beforeLast('\\')
                ->append('\\' . $pivot_name)
                ->toString();
        }
        if (!class_exists($pivot_class)) {
            if (get_parent_class($class) !== false) {
                if (!Str::endsWith(get_parent_class($class), 'Morph')) {
<<<<<<< HEAD
=======
=======
    public function guessPivotFullClass(string $pivot_name, string $related, ?string $class = null):string{
        $class = $class ?? $this::class;
=======
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    {
        $class ??= $this::class;
>>>>>>> b93ef594b4 (.)
        $pivot_class = Str::of($class)
            ->beforeLast('\\')
            ->append('\\' . $pivot_name)
            ->toString();
        if (!class_exists($pivot_class)) {
            $pivot_class = Str::of($related)
                ->beforeLast('\\')
                ->append('\\' . $pivot_name)
                ->toString();
        }
<<<<<<< HEAD
=======
    public function guessPivotFullClass(string $pivot_name, string $related, ?string $class = null):string{
        $class = $class ?? $this::class;
        $pivot_class = Str::of($class)
            ->beforeLast('\\')
            ->append('\\'.$pivot_name)
            ->toString();
        if (! class_exists($pivot_class)) {
            $pivot_class = Str::of($related)
            ->beforeLast('\\')
            ->append('\\'.$pivot_name)
            ->toString();
        }
>>>>>>> origin/develop
        if (! class_exists($pivot_class)) {
            
            if(get_parent_class($class)!==false){
                if(!Str::endsWith(get_parent_class($class),'Morph')){
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!class_exists($pivot_class)) {
            if (get_parent_class($class) !== false) {
                if (!Str::endsWith(get_parent_class($class), 'Morph')) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                    $model_names = [
                        class_basename(get_parent_class($class)),
                        class_basename($related),
                    ];
                    sort($model_names);
                    $pivot_name = implode('', $model_names);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                }
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
        return $pivot_class;
>>>>>>> 5a14301c (.)
    }
}
