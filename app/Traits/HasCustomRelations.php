<?php

/**
 * @see https://stackoverflow.com/questions/39213022/custom-laravel-relations
 * @see https://github.com/johnnyfreeman/laravel-custom-relation
 */

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
use Closure;
<<<<<<< HEAD
use Closure;
use Closure;
=======
=======
<<<<<<< HEAD
use Closure;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
    public function customRelation(
        string $related,
        Closure $baseConstraints,
        ?Closure $eagerConstraints = null,
        ?Closure $eagerMatcher = null,
    ): CustomRelation {
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
        null|Closure $eagerConstraints = null,
        null|Closure $eagerMatcher = null,
    ): CustomRelation {
        $instance = new $related;
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, \Closure $baseConstraints, ?\Closure $eagerConstraints = null, ?\Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
        null|Closure $eagerConstraints = null,
        null|Closure $eagerMatcher = null,
    ): CustomRelation {
        $instance = new $related;
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, \Closure $baseConstraints, ?\Closure $eagerConstraints = null, ?\Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    {
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        null|Closure $eagerConstraints = null,
        null|Closure $eagerMatcher = null,
    ): CustomRelation {
<<<<<<< HEAD
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
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
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
<<<<<<< HEAD
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        null|Closure $eagerConstraints = null,
        null|Closure $eagerMatcher = null,
    ): CustomRelation {
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
>>>>>>> ce6fc085 (.)
=======
    public function customRelation(string $related, \Closure $baseConstraints, ?\Closure $eagerConstraints = null, ?\Closure $eagerMatcher = null): CustomRelation
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
    public function customRelation(string $related, Closure $baseConstraints, ?Closure $eagerConstraints = null, ?Closure $eagerMatcher = null): CustomRelation
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    {
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
        $instance = new $related();
        // Call to an undefined method object::newQuery()
        Assert::isInstanceOf($instance, Model::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        $query = $instance->newQuery();

        return new CustomRelation($query, $this, $baseConstraints, $eagerConstraints, $eagerMatcher);
    }
}
