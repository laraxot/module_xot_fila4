<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
    ): BelongsToMany {
        Assert::isInstanceOf(
            $related_model = app($related),
            Model::class,
            '['.__LINE__.']['.class_basename($this).']',
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
        $pivot = $this->guessMorphPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
        // $relatedDbName = $related_model->getConnection()->getDatabaseName();
        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
        if ($table === null) {
            $table = $pivot->getTable();
        }

        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
        if ($table === null) {
        if($table==null){
            $table = $pivot->getTable();
        }
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

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
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
        return $pivot;
    }

    /**
     * Guess the pivot class for a many-to-many relationship.
     *
     * @param string                   $related The related model class name
     * @param string|class-string|null $class   The class to use for parent class lookup (used internally)
     *
     * @return Pivot
     */
    public function guessPivot(string $related, ?string $class = null): Pivot
     * @param string $related The related model class name
     * @param string|class-string|null $class The class to use for parent class lookup (used internally)
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
        $msg = '';
        $msg = '';
        $msg = '';
        $msg = '';
        $msg = '';
        $msg = '';
        $pivot_name = implode('', $model_names);

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);

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
    }
}
