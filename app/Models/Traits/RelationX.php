<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
=======
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
>>>>>>> 0e51323 (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Trait Modules\Xot\Models\Traits\RelationX.
 */
trait RelationX
{
    /**
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
        ?string $_table = null,
        ?string $foreignPivotKey = null,
        ?string $relatedPivotKey = null,
        ?string $parentKey = null,
        ?string $relatedKey = null,
        ?string $relation = null,
=======
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
>>>>>>> 0e51323 (.)
    ): BelongsToMany {
        Assert::isInstanceOf(
            $related_model = app($related),
            Model::class,
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 0e51323 (.)
        );
        $pivot = $this->guessPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
        $relatedDbName = $related_model->getConnection()->getDatabaseName();
<<<<<<< HEAD
        // Handle cross-database relationships
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $pivotDriver = $pivot->getConnection()->getDriverName();
            // Only add database prefix for non-SQLite drivers
            // SQLite doesn't support database.table syntax
            if ('sqlite' !== $pivotDriver) {
                $table = $pivotDbName.'.'.$table;
            }
        }
=======
        // if ($pivotDbName !== $dbName) {
        if ($pivotDbName !== $dbName || $relatedDbName !== $dbName) {
            $table = $pivotDbName . '.' . $table;
        }
        // }
>>>>>>> 0e51323 (.)

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
=======
     * @param  class-string<TRelatedModel>  $related
     * @param  string  $name
     * @param  string|null  $_table
     * @param  string|null  $foreignPivotKey
     * @param  string|null  $relatedPivotKey
     * @param  string|null  $parentKey
     * @param  string|null  $relatedKey
     * @param  string|null  $relation
     * @param  bool  $inverse
>>>>>>> 0e51323 (.)
     * @return MorphToMany<TRelatedModel, $this>
     */
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
=======
        null|string $_table = null,
        null|string $foreignPivotKey = null,
        null|string $relatedPivotKey = null,
        null|string $parentKey = null,
        null|string $relatedKey = null,
        null|string $relation = null,
>>>>>>> 0e51323 (.)
        bool $inverse = false,
    ) {
        $pivot = $this->guessMorphPivot($related);
        $table = $pivot->getTable();
        $pivotFields = $pivot->getFillable();

        $pivotDbName = $pivot->getConnection()->getDatabaseName();
        $dbName = $this->getConnection()->getDatabaseName();
<<<<<<< HEAD
        // $relatedDbName = $related_model->getConnection()->getDatabaseName();
        if (null === $table) {
            $table = $pivot->getTable();
        }

=======
        //$relatedDbName = $related_model->getConnection()->getDatabaseName();
        if ($table === null) {
            $table = $pivot->getTable();
        }
>>>>>>> 0e51323 (.)
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

    /**
     * @return MorphPivot
     */
<<<<<<< HEAD
    public function guessMorphPivot(string $related, ?string $_class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related).'Morph';
=======
    public function guessMorphPivot(string $related, null|string $_class = null)
    {
        $class = $this::class;
        $pivot_name = class_basename($related) . 'Morph';
>>>>>>> 0e51323 (.)

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, MorphPivot::class);
<<<<<<< HEAD

=======
>>>>>>> 0e51323 (.)
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
    public function guessPivot(string $related, ?string $class = null)
=======
     * @param string $related The related model class name
     * @param string|class-string|null $class The class to use for parent class lookup (used internally)
     * @return Pivot
     */
    public function guessPivot(string $related, null|string $class = null)
>>>>>>> 0e51323 (.)
    {
        $class ??= $this::class;
        $model_names = [
            class_basename($class),
            class_basename($related),
        ];
        sort($model_names);
        $msg = '';
        $pivot_name = implode('', $model_names);

        $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);

        $pivot = app($pivot_class);
        Assert::isInstanceOf($pivot, Pivot::class);

        return $pivot;
    }

<<<<<<< HEAD
    public function guessPivotFullClass(string $pivot_name, string $related, ?string $class = null): string
=======
    public function guessPivotFullClass(string $pivot_name, string $related, null|string $class = null): string
>>>>>>> 0e51323 (.)
    {
        $class ??= $this::class;
        $pivot_class = Str::of($class)
            ->beforeLast('\\')
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
>>>>>>> 0e51323 (.)
                    $model_names = [
                        class_basename(get_parent_class($class)),
                        class_basename($related),
                    ];
                    sort($model_names);
                    $pivot_name = implode('', $model_names);
                }
<<<<<<< HEAD

                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }

=======
                return $this->guessPivotFullClass($pivot_name, $related, get_parent_class($class));
            }
        }
>>>>>>> 0e51323 (.)
        return $pivot_class;
    }
}
