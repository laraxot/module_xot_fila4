<?php

/**
 * @see https://stackoverflow.com/questions/39213022/custom-laravel-relations
 * @see https://github.com/johnnyfreeman/laravel-custom-relation
 */

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
use Closure;
=======
<<<<<<< HEAD
use Closure;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Relations\CustomRelation;
use Webmozart\Assert\Assert;

// use Illuminate\Database\Eloquent\Builder;

/**
 * Trait HasCustomRelations.
 */
trait HasCustomRelations
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function customRelation(
        string $related,
        Closure $baseConstraints,
        null|Closure $eagerConstraints = null,
        null|Closure $eagerMatcher = null,
    ): CustomRelation {
<<<<<<< HEAD
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
=======
    public function customRelation(string $related, \Closure $baseConstraints, ?\Closure $eagerConstraints = null, ?\Closure $eagerMatcher = null): CustomRelation
>>>>>>> origin/develop
    {
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $query = $instance->newQuery();

        return new CustomRelation($query, $this, $baseConstraints, $eagerConstraints, $eagerMatcher);
    }
}
