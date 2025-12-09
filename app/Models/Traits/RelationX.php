<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
        ?string $_table = null,
        ?string $foreignPivotKey = null,
        ?string $relatedPivotKey = null,
        ?string $parentKey = null,
        ?string $relatedKey = null,
        ?string $relation = null,
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
    ): BelongsToMany {
        Assert::isInstanceOf(
            $related_model = app($related),
            Model::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 0e51323 (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 43d67f21 (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
        );
        $pivot = $this->guessPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
        $relatedDbName = $related_model->getConnection()->getDatabaseName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> d86d643a (.)
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
<<<<<<< HEAD
            $table = $pivotDbName . '.' . $table;
>>>>>>> 5a14301c (.)
=======
                $table = $pivotDbName . '.' . $table;
            }
>>>>>>> 492d6d3c (.)
        }

=======
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
        // if ($pivotDbName !== $dbName) {
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $table = $pivotDbName . '.' . $table;
        }
        // }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param class-string<TRelatedModel> $related
     *
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
     * @param  class-string<TRelatedModel>  $related
<<<<<<< HEAD
=======
=======
     * @param  class-string<TRelatedModel>  $related
>>>>>>> 5a14301c (.)
     * @param  string  $name
     * @param  string|null  $_table
     * @param  string|null  $foreignPivotKey
     * @param  string|null  $relatedPivotKey
     * @param  string|null  $parentKey
     * @param  string|null  $relatedKey
     * @param  string|null  $relation
     * @param  bool  $inverse
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
     * @return MorphToMany<TRelatedModel, $this>
     */
    public function morphToManyX(
        string $related,
        string $name,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
        bool $inverse = false,
    ) {
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
        bool $inverse = false,
    ) {
>>>>>>> 5a14301c (.)
        $pivot = $this->guessMorphPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
        if ($table === null) {
            $table = $pivot->getTable();
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
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
            ->using($pivot::class)
            ->withPivot($pivotFields)
            ->withTimestamps();
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function guessMorphPivot(string $related, ?string $_class = null): MorphPivot
=======
<<<<<<< HEAD
    public function guessMorphPivot(string $related, ?string $_class = null)
>>>>>>> d86d643a (.)
    {
        $class = $this::class;
        $pivot_name = class_basename($related).'Morph';
=======
<<<<<<< HEAD
    /**
     * @return MorphPivot
     */
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    /**
     * @return MorphPivot
     */
>>>>>>> 43d67f21 (.)
=======
    /**
     * @return MorphPivot
     */
>>>>>>> 5a14301c (.)
    public function guessMorphPivot(string $related, null|string $_class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related) . 'Morph';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======

=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
        return $pivot;
    }

    /**
     * Guess the pivot class for a many-to-many relationship.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $related  The related model class name
     * @param  string|class-string|null  $class  The class to use for parent class lookup (used internally)
=======
<<<<<<< HEAD
     * @param string                   $related The related model class name
     * @param string|class-string|null $class   The class to use for parent class lookup (used internally)
     *
     * @return Pivot
>>>>>>> d86d643a (.)
     */
    public function guessPivot(string $related, ?string $class = null): Pivot
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
     * @param string $related The related model class name
     * @param string|class-string|null $class The class to use for parent class lookup (used internally)
     * @return Pivot
     */
    public function guessPivot(string $related, null|string $class = null)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
    {
        $class ??= $this::class;
        $model_names = [
            class_basename($class),
            class_basename($related),
        ];
        sort($model_names);
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
        $msg = '';
>>>>>>> 5a14301c (.)
=======
        $msg = '';
>>>>>>> 5a14301c (.)
        $pivot_name = implode('', $model_names);

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);

        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, Pivot::class);

        return $pivot;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
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
=======
>>>>>>> ca9324a4 (.)
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
<<<<<<< HEAD
=======
>>>>>>> 0e51323 (.)
=======
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
>>>>>>> 43d67f21 (.)
=======
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
>>>>>>> 5a14301c (.)
    {
        $class ??= $this::class;
        $pivot_class = Str::of($class)
            ->beforeLast('\\')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
                    $model_names = [
                        class_basename(get_parent_class($class)),
                        class_basename($related),
                    ];
                    sort($model_names);
                    $pivot_name = implode('', $model_names);
                }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
=======
<<<<<<< HEAD
<<<<<<< HEAD

                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }

=======
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
>>>>>>> 0e51323 (.)
=======
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
>>>>>>> 43d67f21 (.)
        return $pivot_class;
>>>>>>> 5a14301c (.)
=======
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
        return $pivot_class;
>>>>>>> 5a14301c (.)
    }
}
