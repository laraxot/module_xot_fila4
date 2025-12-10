<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Trait Modules\Xot\Models\Traits\RelationX.
 */
trait RelationX
{
    /**
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
<<<<<<< HEAD
     * @param class-string<Model>             $related         Related model class
     * @param class-string<Model>|string|null $_table          Pivot table name
     * @param string|null                     $foreignPivotKey Foreign pivot key
     * @param string|null                     $relatedPivotKey Related pivot key
     * @param string|null                     $parentKey       Parent key
     * @param string|null                     $relatedKey      Related key
     * @param string|null                     $relation        Relation name
     */
    public function belongsToManyX(
        string $related,
        ?string $_table = null,
        ?string $foreignPivotKey = null,
        ?string $relatedPivotKey = null,
        ?string $parentKey = null,
        ?string $relatedKey = null,
        ?string $relation = null,
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
=======
>>>>>>> 551c768c4 (.)
    ): BelongsToMany {
        Assert::isInstanceOf(
            $related_model = app($related),
            Model::class,
            '['.__LINE__.']['.class_basename($this).']',
<<<<<<< HEAD
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
=======
>>>>>>> 551c768c4 (.)
        );
     * @param class-string<Model>             $related         aaa
     * @param class-string<Model>|string|null $table           aaa
     * @param string|null                     $foreignPivotKey aaa
     * @param string|null                     $relatedPivotKey aaa
     * @param string|null                     $parentKey       aaa
     * @param string|null                     $relatedKey      aaa
     * @param string|null                     $relation        aaa
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
        Assert::isInstanceOf(
            $related_model = app($related),
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
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
        $pivot = $this->guessPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
        $relatedDbName = $related_model->getConnection()->getDatabaseName();
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
>>>>>>> 5cf46378 (.)
        // Handle cross-database relationships
=======
>>>>>>> 551c768c4 (.)
        // if ($pivotDbName !== $dbName) {
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ($pivotDriver !== 'sqlite') {
<<<<<<< HEAD
                $table = $pivotDbName . '.' . $table;
            }
        }

        // if ($pivotDbName !== $dbName) {
        
        // Handle cross-database relationships
<<<<<<< HEAD

        // Handle cross-database relationships
        // if ($pivotDbName !== $dbName) {
        // if ($pivotDbName !== $dbName) {

        // Handle cross-database relationships
        // if ($pivotDbName !== $dbName) {
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ($pivotDriver !== 'sqlite') {
                $table = $pivotDbName . '.' . $table;
            }
        }

        // if ($pivotDbName !== $dbName) {
        
        // Handle cross-database relationships
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ($pivotDriver !== 'sqlite') {
                $table = $pivotDbName . '.' . $table;
            }
        }

        // if ($pivotDbName !== $dbName) {
        
        // Handle cross-database relationships
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ($pivotDriver !== 'sqlite') {
                $table = $pivotDbName . '.' . $table;
            }
        }

        // if ($pivotDbName !== $dbName) {
        
        // Handle cross-database relationships
=======
>>>>>>> 492d6d3c (.)
=======

        // Handle cross-database relationships
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ($pivotDriver !== 'sqlite') {
                $table = $pivotDbName . '.' . $table;
            }
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        // }
        // }

        // if ($pivotDbName !== $dbName) {
        
        // Handle cross-database relationships
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ($pivotDriver !== 'sqlite') {
                $table = $pivotDbName . '.' . $table;
            }
        }
        // }
        // }

        // if ($pivotDbName !== $dbName) {
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $table = $pivotDbName . '.' . $table;
        }
        // }
        if ($pivotDbName != $dbName || $relatedDbName != $dbName) {
            $table = $pivotDbName.'.'.$table;
        }
        // }
        
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $table = $pivotDbName . '.' . $table;
        }
        // }
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
                $table = $pivotDbName.'.'.$table;
            }
        }
        // }
>>>>>>> 551c768c4 (.)

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


    /**
     * Define a polymorphic many-to-many relationship.
     *
     * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
     *
<<<<<<< HEAD
     * @param class-string<TRelatedModel> $related
     *
     * @param  class-string<TRelatedModel>  $related
     * @param  class-string<TRelatedModel>  $related
     * @param  class-string<TRelatedModel>  $related
     * @param  class-string<TRelatedModel>  $related
     * @param  class-string<TRelatedModel>  $related
     * @param  string  $name
     * @param  string|null  $_table
     * @param  string|null  $table
     * @param  string|null  $foreignPivotKey
     * @param  string|null  $relatedPivotKey
     * @param  string|null  $parentKey
     * @param  string|null  $relatedKey
     * @param  string|null  $relation
     * @param  bool  $inverse
=======
     * @param  class-string<TRelatedModel>  $related
>>>>>>> 551c768c4 (.)
     * @return MorphToMany<TRelatedModel, $this>
     */
    public function morphToManyX(
        string $related,
        string $name,
        ?string $_table = null,
        ?string $foreignPivotKey = null,
        ?string $relatedPivotKey = null,
        ?string $parentKey = null,
        ?string $relatedKey = null,
        ?string $relation = null,
        bool $inverse = false,
    ): MorphToMany {
<<<<<<< HEAD
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
        bool $inverse = false,
    ) {
    public function morphToManyX($related, $name, $table = null, $foreignPivotKey = null,
                                $relatedPivotKey = null, $parentKey = null,
                                $relatedKey = null, $relation = null, $inverse = false)
    {
       
        bool $inverse = false,
    ) {
        bool $inverse = false,
    ) {
        bool $inverse = false,
    ) {
        bool $inverse = false,
    ) {
        bool $inverse = false,
    ) {
=======
>>>>>>> 551c768c4 (.)
        $pivot = $this->guessMorphPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
        // $relatedDbName = $related_model->getConnection()->getDatabaseName();
<<<<<<< HEAD
        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
=======
>>>>>>> 551c768c4 (.)
        if ($table === null) {
            $table = $pivot->getTable();
        }

<<<<<<< HEAD
        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
        if ($table === null) {
        if($table==null){
            $table = $pivot->getTable();
        }
=======
>>>>>>> 551c768c4 (.)
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
            ->using($pivot::class)
            ->withPivot($pivotFields)
            ->withTimestamps();
    }

<<<<<<< HEAD
    {
        $class = $this::class;
        $pivot_name = class_basename($related).'Morph';
    /**
     * @return MorphPivot
     */
    /**
     * @return MorphPivot
     */
    /**
     * @return MorphPivot
     */
    /**
     * @return MorphPivot
     */
    /**
     * @return MorphPivot
     */
    /**
     * @return MorphPivot
     */
    public function guessMorphPivot(string $related, null|string $_class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related) . 'Morph';
=======
    public function guessMorphPivot(string $related, ?string $_class = null): MorphPivot
    {
        $class = $this::class;
        $pivot_name = class_basename($related).'Morph';
>>>>>>> 551c768c4 (.)

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
<<<<<<< HEAD
    public function guessMorphPivot(string $related,?string $class = null)
    public function guessMorphPivot(string $related, null|string $_class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related) . 'Morph';

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
    public function guessMorphPivot(string $related,?string $class = null)
    public function guessMorphPivot(string $related, null|string $_class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related) . 'Morph';

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
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

        Assert::isInstanceOf($pivot,MorphPivot::class);
        Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
        Assert::isInstanceOf($pivot,MorphPivot::class);
        Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
        Assert::isInstanceOf($pivot,MorphPivot::class);
        Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
        Assert::isInstanceOf($pivot,MorphPivot::class);
        Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
        Assert::isInstanceOf($pivot,MorphPivot::class);
        Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
=======

>>>>>>> 551c768c4 (.)
        return $pivot;
    }

    /**
     * Guess the pivot class for a many-to-many relationship.
     *
<<<<<<< HEAD
     * @param string                   $related The related model class name
     * @param string|class-string|null $class   The class to use for parent class lookup (used internally)
     *
     * @return Pivot
     */
    public function guessPivot(string $related, ?string $class = null): Pivot
     * @param string $related The related model class name
     * @param string|class-string|null $class The class to use for parent class lookup (used internally)
=======
     * @param  string  $related  The related model class name
     * @param  string|class-string|null  $class  The class to use for parent class lookup (used internally)
     */
    public function guessPivot(string $related, ?string $class = null): Pivot
>>>>>>> 551c768c4 (.)
    {
        $class ??= $this::class;
    public function guessPivot(string $related, null|string $class = null)
    {
        $class ??= $this::class;
     * @return \Illuminate\Database\Eloquent\Relations\Pivot
     */
    public function guessPivot(string $related, ?string $class = null)
    {
        $class = $class ?? $this::class;
        $model_names = [
            class_basename($class),
            class_basename($related),
        ];
        sort($model_names);
<<<<<<< HEAD
        $msg = '';
        $msg = '';
        $msg = '';
        $msg = '';
        $msg = '';
        $msg = '';
        $pivot_name = implode('', $model_names);

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);

=======
>>>>>>> 551c768c4 (.)
        $pivot_name = implode('', $model_names);

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);

        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, Pivot::class);
        $msg='';
        $pivot_name = implode('', $model_names);
        
        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, \Illuminate\Database\Eloquent\Relations\Pivot::class);

        return $pivot;
    }

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
<<<<<<< HEAD
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
    {
        $class ??= $this::class;
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
        if (! class_exists($pivot_class)) {
            if (false !== get_parent_class($class)) {
                if (! Str::endsWith(get_parent_class($class), 'Morph')) {
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
    public function guessPivotFullClass(string $pivot_name, string $related, ?string $class = null):string{
        $class = $class ?? $this::class;
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
        if (! class_exists($pivot_class)) {
            
            if(get_parent_class($class)!==false){
                if(!Str::endsWith(get_parent_class($class),'Morph')){
        if (!class_exists($pivot_class)) {
            if (get_parent_class($class) !== false) {
                if (!Str::endsWith(get_parent_class($class), 'Morph')) {
                    $model_names = [
                        class_basename(get_parent_class($class)),
                        class_basename($related),
                    ];
                    sort($model_names);
                    $pivot_name = implode('', $model_names);
                    
                }

                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }

                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
        return $pivot_class;
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
        return $pivot_class;
=======
>>>>>>> 551c768c4 (.)
    }
}
