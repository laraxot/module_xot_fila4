<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Relations\HasMany;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $id
 * @property string $name
 * @property int $depth
 * @property Collection<static> $children
 * @property int|null $children_count
 * @property Collection<static> $ancestors The model's recursive parents.
 * @property int|null $ancestors_count
 * @property Collection<static> $ancestorsAndSelf The model's recursive parents and itself.
 * @property int|null $ancestors_and_self_count
 * @property Collection<static> $bloodline The model's ancestors, descendants and itself.
 * @property int|null $bloodline_count
 * @property Collection<static> $childrenAndSelf The model's direct children and itself.
 * @property int|null $children_and_self_count
 * @property Collection<static> $descendants The model's recursive children.
 * @property int|null $descendants_count
 * @property Collection<static> $descendantsAndSelf The model's recursive children and itself.
 * @property int|null $descendants_and_self_count
 * @property Collection<static> $parentAndSelf The model's direct parent and itself.
 * @property int|null $parent_and_self_count
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
     *
     * @return string
     */
    public function getLocalKeyName();

    /**
     * Get the qualified local key column.
     *
     * @return string
     */
    public function getQualifiedLocalKeyName();

    /**
     * Get the name of the depth column.
     *
     * @return string
     */
    public function getDepthName();

    /**
     * Get the name of the path column.
     *
     * @return string
     */
    public function getPathName();

    /**
     * Get the path separator.
     *
     * @return string
     */
    public function getPathSeparator();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the additional custom paths.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string>
     */
    public function getCustomPaths(): array;

    /**
     * Get the name of the common table expression.
     */
    public function getExpressionName(): string;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @return array
     */
    public function getCustomPaths();

    /**
     * Get the name of the common table expression.
     *
     * @return string
     */
    public function getExpressionName();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's ancestors.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Ancestors<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function ancestors(): Ancestors;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return Ancestors
     */
    public function ancestors();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's ancestors and itself.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Ancestors<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function ancestorsAndSelf(): Ancestors;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return Ancestors
     */
    public function ancestorsAndSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's bloodline.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Bloodline<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function bloodline(): Bloodline;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return Bloodline
     */
    public function bloodline();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's children.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function children(): HasMany;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
     *
     * @return HasMany
=======
     * @return HasMany<Model, Model>
>>>>>>> b7afadf9 (.)
=======
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
>>>>>>> 71586de2 (.)
=======
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
>>>>>>> 249a0067 (.)
     */
    public function children();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
     * return \Illuminate\Database\Eloquent\Relations\HasMany<static>
     *
     * @return HasMany
     */
    public function children();
>>>>>>> 5a14301c (.)

    /**
     * Get the model's children and itself.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Descendants<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function childrenAndSelf(): Descendants;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return Descendants
     */
    public function childrenAndSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's descendants.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Descendants<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function descendants(): Descendants;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return Descendants
     */
    public function descendants();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's descendants and itself.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Descendants<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function descendantsAndSelf(): Descendants;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return Descendants
     */
    public function descendantsAndSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's parent.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function parent(): BelongsTo;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
     *
     * @return BelongsTo
=======
     * @return BelongsTo<Model, Model>
>>>>>>> b7afadf9 (.)
=======
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
>>>>>>> 71586de2 (.)
=======
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
>>>>>>> 249a0067 (.)
     */
    public function parent();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
     * return \Illuminate\Database\Eloquent\Relations\BelongsTo<static, static>
     *
     * @return BelongsTo
     */
    public function parent();
>>>>>>> 5a14301c (.)

    /**
     * Get the model's parent and itself.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Ancestors<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function parentAndSelf(): Ancestors;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     *
     * @return Ancestors
     */
    public function parentAndSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the model's root ancestor.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function rootAncestor(): RootAncestor;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
     *
     * @return RootAncestor
=======
     * @return RootAncestor<Model, Model>
>>>>>>> b7afadf9 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
>>>>>>> 71586de2 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
>>>>>>> 249a0067 (.)
     */
    public function rootAncestor();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestor<static>
     *
     * @return RootAncestor
     */
    public function rootAncestor();
>>>>>>> 5a14301c (.)

    /**
     * Get the model's root ancestor or self.
     *
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\RootAncestorOrSelf<static>
     */
    public function rootAncestorOrSelf(): RootAncestorOrSelf;

    /**
     * Get the model's siblings.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function siblings(): Siblings;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
     *
     * @return Siblings
=======
     * @return Siblings<Model, Model>
>>>>>>> b7afadf9 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
>>>>>>> 71586de2 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
>>>>>>> 249a0067 (.)
     */
    public function siblings();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
     */
    public function siblings();
>>>>>>> 5a14301c (.)

    /**
     * Get the model's siblings and itself.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
     *
     * @return Siblings
=======
     * @return Siblings<Model, Model>
>>>>>>> b7afadf9 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
>>>>>>> 71586de2 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
>>>>>>> 249a0067 (.)
=======
     * return \Staudenmeir\LaravelAdjacencyList\Eloquent\Relations\Siblings<static>
     *
     * @return Siblings
>>>>>>> 5a14301c (.)
     */
    public function siblingsAndSelf();

    /**
     * Get the first segment of the model's path.
     *
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
     *
     * @param string $attribute
     *
     * @return bool
     */
    public function isIntegerAttribute($attribute);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * added by XOT, viene utilizzato nelle options delle select.
     */
    public function getLabel(): string;
}
