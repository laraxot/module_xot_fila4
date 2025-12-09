<?php

/**
 * ---.
 *
 * @see https://github.com/johnnyfreeman/laravel-custom-relation/blob/master/src/Relations/Custom.php
 */

declare(strict_types=1);

namespace Modules\Xot\Relations;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
use Exception;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Exception;
use Closure;
>>>>>>> 5a14301c (.)
=======
use Exception;
use Closure;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use function call_user_func;

>>>>>>> 5a14301c (.)
=======
use function call_user_func;

>>>>>>> 5a14301c (.)
/**
 * Class CustomRelation.
 *
 * @method static Builder when($value = null, callable $callback = null, callable $default = null)
 * @method static Builder whereBetween($column, iterable<int, mixed> $values, $boolean = 'and', $not = false)
 * @method static Builder selectRaw($expression, array<int, mixed> $bindings = []) ;
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 */
class CustomRelation extends Relation
{
    /**
     * Create a new belongs to relationship instance.
     */
    public function __construct(
        Builder $query,
        Model $model,
        /* implements BuilderContract */
        /**
         * The baseConstraints callback.
         */
        protected Closure $baseConstraints,
        /**
         * The eagerConstraints callback.
         */
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
        protected ?Closure $eagerConstraints,
        /**
         * The eager constraints model matcher.
         */
        protected ?Closure $eagerMatcher,
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> 7131bd09 (.)
        protected null|Closure $eagerConstraints,
        /**
         * The eager constraints model matcher.
         */
        protected null|Closure $eagerMatcher,
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
        protected ?Closure $eagerConstraints,
        /**
         * The eager constraints model matcher.
         */
        protected ?Closure $eagerMatcher,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        protected null|Closure $eagerConstraints,
        /**
         * The eager constraints model matcher.
         */
        protected null|Closure $eagerMatcher,
>>>>>>> b93ef594b4 (.)
=======
        protected \Closure $baseConstraints,
        /**
         * The eagerConstraints callback.
         */
        protected ?\Closure $eagerConstraints,
        /**
         * The eager constraints model matcher.
         */
        protected ?\Closure $eagerMatcher,
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    ) {
        parent::__construct($query, $model);
    }

    /**
     * Set the base constraints on the relation query.
     */
    public function addConstraints(): void
    {
        \call_user_func($this->baseConstraints, $this);
    }

    /**
     * Set the constraints for an eager load of the relation.
     */
    public function addEagerConstraints(array $models): void
    {
        // Parameter #1 $function of function call_user_func expects callable(): mixed, Closure|null given.
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
        if (! \is_callable($this->eagerConstraints)) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        if (!\is_callable($this->eagerConstraints)) {
>>>>>>> 5a14301c (.)
=======
        if (!\is_callable($this->eagerConstraints)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!\is_callable($this->eagerConstraints)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!\is_callable($this->eagerConstraints)) {
=======
        if (! \is_callable($this->eagerConstraints)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!\is_callable($this->eagerConstraints)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!\is_callable($this->eagerConstraints)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!\is_callable($this->eagerConstraints)) {
=======
        if (! \is_callable($this->eagerConstraints)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
            throw new Exception('eagerConstraints is not callable');
        }

        \call_user_func($this->eagerConstraints, $this, $models);
    }

    /**
     * Initialize the relation on a set of models.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param  string  $relation
>>>>>>> 5a14301c (.)
=======
     *
     * @param  string  $relation
>>>>>>> 5a14301c (.)
     */
    public function initRelation(array $models, $relation): array
    {
        foreach ($models as $model) {
            $model->setRelation($relation, $this->related->newCollection());
        }

        return $models;
    }

    /**
     * Match the eagerly loaded results to their parents.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  string  $relation
>>>>>>> 5a14301c (.)
=======
     * @param  string  $relation
>>>>>>> 5a14301c (.)
     * @return array<int, Model>
     */
    public function match(array $models, Collection $collection, $relation): array
    {
        // Trying to invoke Closure|null but it might not be a callable.
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
        if (! \is_callable($this->eagerMatcher)) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        if (!\is_callable($this->eagerMatcher)) {
>>>>>>> 5a14301c (.)
=======
        if (!\is_callable($this->eagerMatcher)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!\is_callable($this->eagerMatcher)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!\is_callable($this->eagerMatcher)) {
=======
        if (! \is_callable($this->eagerMatcher)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!\is_callable($this->eagerMatcher)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!\is_callable($this->eagerMatcher)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!\is_callable($this->eagerMatcher)) {
=======
        if (! \is_callable($this->eagerMatcher)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
            throw new Exception('eagerMatcher is not callable');
        }

        Assert::isArray($res = ($this->eagerMatcher)($models, $collection, $relation, $this));

        // @phpstan-ignore return.type
        return $res;
    }

    /**
     * Get the results of the relationship.
     *
     * @return Collection<int, Model>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getResults(): Collection
=======
    public function getResults()
>>>>>>> 5a14301c (.)
=======
    public function getResults()
>>>>>>> 5a14301c (.)
    {
        return $this->get();
    }

    /**
     * Execute the query as a "select" statement.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $columns
=======
     * @param  array<int, string>  $columns
>>>>>>> 5a14301c (.)
=======
     * @param  array<int, string>  $columns
>>>>>>> 5a14301c (.)
     */
    public function get($columns = ['*']): Collection
    {
        // First we'll add the proper select columns onto the query so it is run with
        // the proper columns. Then, we will get the results and hydrate out pivot
        // models with the result of those columns as a separate model relation.
        $columns = $this->query->getQuery()->columns ? [] : $columns;
        if ($columns === ['*']) {
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
            $columns = [$this->related->getTable().'.*'];
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> 5a14301c (.)
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> 3fbbf1f5 (.)
=======
            $columns = [$this->related->getTable() . '.*'];
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $columns = [$this->related->getTable() . '.*'];
=======
            $columns = [$this->related->getTable().'.*'];
>>>>>>> a12f125f4a (.)
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> b93ef594b4 (.)
=======
            $columns = [$this->related->getTable().'.*'];
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> ca9324a4 (.)
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            $columns = [$this->related->getTable() . '.*'];
=======
            $columns = [$this->related->getTable().'.*'];
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $columns = [$this->related->getTable() . '.*'];
>>>>>>> ca9324a4 (.)
=======
            $columns = [$this->related->getTable() . '.*'];
=======
            $columns = [$this->related->getTable().'.*'];
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
        }

        $query = $this->query->applyScopes();
        $models = $query->addSelect($columns)->getModels();
        // If we actually found models we will also eager load any relationships that
        // have been specified as needing to be eager loaded. This will solve the
        // n + 1 query problem for the developer and also increase performance.
        if ((is_countable($models) ? \count($models) : 0) > 0) {
            $models = $query->eagerLoadRelations($models);
        }

        return $this->related->newCollection($models);
    }

    /*
     * Add a basic where clause to the query.
     *
     * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
     * @param mixed                                                       $operator
     * @param mixed                                                       $value
     * @param string $boolean
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    // public function where($column, $operator = null, $value = null, $boolean = 'and') {
    //    return $this->query->where($column, $operator, $value, $boolean);
    // }
}
