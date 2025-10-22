<?php

/**
 * @see https://stackoverflow.com/questions/39213022/custom-laravel-relations
 * @see https://github.com/johnnyfreeman/laravel-custom-relation
 */

declare(strict_types=1);

namespace Modules\Xot\Traits;

use Closure;
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    public function customRelation(
        string $related,
        Closure $baseConstraints,
        ?Closure $eagerConstraints = null,
        ?Closure $eagerMatcher = null,
    ): CustomRelation {
<<<<<<< HEAD
        $instance = new $related;
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
=======
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    {
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        $query = $instance->newQuery();

        return new CustomRelation($query, $this, $baseConstraints, $eagerConstraints, $eagerMatcher);
    }
}
