<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Builder as AdjacencyBuilder;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Collection;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Ancestors;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Bloodline;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Descendants;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestorOrSelf;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings;

/**
 * Modules\Xot\Contracts\HasRecursiveRelationshipsContract.
 *
 * @property int $id
 * @property string $name
 * @property int $depth
 * @property Collection<Model> $children
 * @property int|null $children_count
 * @property Collection<Model> $ancestors The model's recursive parents.
 * @property int|null $ancestors_count
 * @property Collection<Model> $ancestorsAndSelf The model's recursive parents and itself.
 * @property int|null $ancestors_and_self_count
 * @property Collection<Model> $bloodline The model's ancestors, descendants and itself.
 * @property int|null $bloodline_count
 * @property Collection<Model> $childrenAndSelf The model's direct children and itself.
 * @property int|null $children_and_self_count
 * @property Collection<Model> $descendants The model's recursive children.
 * @property int|null $descendants_count
 * @property Collection<Model> $descendantsAndSelf The model's recursive children and itself.
 * @property int|null $descendants_and_self_count
 * @property Collection<Model> $parentAndSelf The model's direct parent and itself.
 * @property int|null $parent_and_self_count
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @property int                $id
 * @property string $name
 * @property int                $depth
 * @property Collection<static> $children
 * @property int|null           $children_count
 * @property Collection<static> $ancestors                  The model's recursive parents.
 * @property int|null           $ancestors_count
 * @property Collection<static> $ancestorsAndSelf           The model's recursive parents and itself.
 * @property int|null           $ancestors_and_self_count
 * @property Collection<static> $bloodline                  The model's ancestors, descendants and itself.
 * @property int|null           $bloodline_count
 * @property Collection<static> $childrenAndSelf            The model's direct children and itself.
 * @property int|null           $children_and_self_count
 * @property Collection<static> $descendants                The model's recursive children.
 * @property int|null           $descendants_count
 * @property Collection<static> $descendantsAndSelf         The model's recursive children and itself.
 * @property int|null           $descendants_and_self_count
 * @property Collection<static> $parentAndSelf              The model's direct parent and itself.
 * @property int|null           $parent_and_self_count
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface HasRecursiveRelationshipsContract
{
    /**
     * Execute a query with a maximum depth constraint for the recursive query.
     */
    public static function withMaxDepth(int $maxDepth, callable $query): mixed;

    /**
     * Get the name of the parent key column.
<<<<<<< HEAD
=======
     */
    public function getParentKeyName(): string;

    /**
     * Get the name of the path column.
     */
    public function getPathName(): string;

    /**
     * Get the path separator.
     */
    public function getPathSeparator(): string;
<<<<<<< HEAD
>>>>>>> 38b70c7ba (.)
     *
     * @return string
     */
    public function getParentKeyName();

     /**
     * Get the qualified parent key column.
     *
     * @return string
     */
    public function getQualifiedParentKeyName();

    /**
     * Get the name of the local key column.
     * @return string
     */
    public function getLocalKeyName();

    /**
     * Get the qualified local key column.
      * @return string
     */
    public function getQualifiedLocalKeyName();

    /**
     * Get the name of the depth column.
      * @return string
     */
    public function getDepthName();

    /**
     * Get the name of the path column.
      * @return string
     */
    public function getPathName();

    /**
     * Get the path separator.
      * @return string
     */
    public function getPathSeparator();
<<<<<<< HEAD
=======
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the additional custom paths.
     *
     * @return array<string>
     */
<<<<<<< HEAD
=======
    public function getCustomPaths(): array;

    /**
     * Get the name of the common table expression.
     */
    public function getExpressionName(): string;
<<<<<<< HEAD
     * @return array
     */
>>>>>>> 38b70c7ba (.)
    public function getCustomPaths();

    /**
     * Get the name of the common table expression.
     * @return string
     */
    public function getExpressionName();
<<<<<<< HEAD
=======
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's ancestors.
     *
<<<<<<< HEAD
     * @return Ancestors
     */
    public function ancestors();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Ancestors<static>
<<<<<<< HEAD
     *
     * @return Ancestors
     */
    public function ancestors();
=======
     */
    public function ancestors(): Ancestors;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's ancestors and itself.
     *
<<<<<<< HEAD
     * @return Ancestors
     */
    public function ancestorsAndSelf();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Ancestors<static>
<<<<<<< HEAD
     *
     * @return Ancestors
     */
    public function ancestorsAndSelf();
=======
     */
    public function ancestorsAndSelf(): Ancestors;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's bloodline.
     *
<<<<<<< HEAD
     * @return Bloodline
     */
    public function bloodline();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Bloodline<static>
<<<<<<< HEAD
     *
     * @return Bloodline
     */
    public function bloodline();
=======
     */
    public function bloodline(): Bloodline;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's children.
     *
<<<<<<< HEAD
     * @return HasMany
     */
    public function children();
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return HasMany
     * @return HasMany<Model, Model>
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
     */
    public function children();
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
     * @return HasMany<Model, Model>
     */
    public function children();
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
=======
     * @return HasMany<Model, Model>
>>>>>>> b7afadf9 (.)
     */
    public function children();
=======
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     */
    public function children(): HasMany;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's children and itself.
     *
<<<<<<< HEAD
     * @return Descendants
     */
    public function childrenAndSelf();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Descendants<static>
<<<<<<< HEAD
     *
     * @return Descendants
     */
    public function childrenAndSelf();
=======
     */
    public function childrenAndSelf(): Descendants;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's descendants.
     *
<<<<<<< HEAD
     * @return Descendants
     */
    public function descendants();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Descendants<static>
<<<<<<< HEAD
     *
     * @return Descendants
     */
    public function descendants();
=======
     */
    public function descendants(): Descendants;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's descendants and itself.
     *
<<<<<<< HEAD
     * @return Descendants
     */
    public function descendantsAndSelf();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Descendants<static>
<<<<<<< HEAD
     *
     * @return Descendants
     */
    public function descendantsAndSelf();
=======
     */
    public function descendantsAndSelf(): Descendants;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's parent.
     *
<<<<<<< HEAD
     * @return BelongsTo
     */
    public function parent();
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return BelongsTo
     * @return BelongsTo<Model, Model>
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
=======
     * @return BelongsTo<Model, Model>
>>>>>>> b7afadf9 (.)
     */
    public function parent();
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
     * @return BelongsTo<Model, Model>
     */
    public function parent();
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     */
    public function parent();
=======
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     */
    public function parent(): BelongsTo;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's parent and itself.
     *
<<<<<<< HEAD
     * @return Ancestors
     */
    public function parentAndSelf();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Ancestors<static>
<<<<<<< HEAD
     *
     * @return Ancestors
     */
    public function parentAndSelf();
=======
     */
    public function parentAndSelf(): Ancestors;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's root ancestor.
     *
<<<<<<< HEAD
     * @return RootAncestor
     */
    public function rootAncestor();
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return RootAncestor
     * @return RootAncestor<Model, Model>
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
     */
    public function rootAncestor();
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
     * @return RootAncestor<Model, Model>
     */
    public function rootAncestor();
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
=======
     * @return RootAncestor<Model, Model>
>>>>>>> b7afadf9 (.)
     */
    public function rootAncestor();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     */
    public function rootAncestor(): RootAncestor;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's root ancestor or self.
     *
<<<<<<< HEAD
     * @return RootAncestorOrSelf
=======
     * @return RootAncestorOrSelf<Model, Model>
>>>>>>> 38b70c7ba (.)
     */
    public function rootAncestorOrSelf();

    /**
     * Get the model's siblings.
     *
<<<<<<< HEAD
     * @return Siblings
     */
    public function siblings();
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return Siblings
     * @return Siblings<Model, Model>
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     */
    public function siblings();
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * @return Siblings<Model, Model>
     */
    public function siblings();
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
=======
     * @return Siblings<Model, Model>
>>>>>>> b7afadf9 (.)
     */
    public function siblings();
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     */
    public function siblings(): Siblings;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the model's siblings and itself.
     *
<<<<<<< HEAD
     * @return Siblings
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
>>>>>>> 551c768c4 (.)
     */
    public function siblingsAndSelf(): Siblings;

    /**
     * Get the first segment of the model's path.
     */
    public function getFirstPathSegment(): string;

    /**
     * Determine whether the model's path is nested.
     */
    public function hasNestedPath(): bool;

    /**
     * Determine if an attribute is an integer.
     */
    public function isIntegerAttribute(string $attribute): bool;
<<<<<<< HEAD
     *
     * @return Siblings
     * @return Siblings<Model, Model>
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * @return Siblings<Model, Model>
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
=======
     * @return Siblings<Model, Model>
>>>>>>> b7afadf9 (.)
>>>>>>> 38b70c7ba (.)
     */
    public function siblingsAndSelf();

    /**
     * Get the first segment of the model's path.
     * @return string
     */
    public function getFirstPathSegment();

     /**
     * Determine whether the model's path is nested.
     *
     * @return bool
     */
    public function hasNestedPath();

    /**
     * Determine if an attribute is an integer.
     * @return bool
     */
<<<<<<< HEAD
    public function isIntegerAttribute(string $attribute);

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param \Illuminate\Database\Query\Builder $query
     *
     * @return AdjacencyBuilder
     */
    public function newEloquentBuilder($query);

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param list<static> $models
     *
     * @return Collection
     */
    public function newCollection(array $models = []);
=======
    public function isIntegerAttribute($attribute);
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * added by XOT, viene utilizzato nelle options delle select.
     */
    public function getLabel(): string;
}
