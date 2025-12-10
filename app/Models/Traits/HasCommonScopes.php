<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * Common query scopes for Laraxot models.
 *
 * Implements the strategy documented in METODI_DUPLICATI_ANALISI.md
 * Found 100% identical in 5 models across modules.
 *
 * Add this trait to models that need these scopes.
 *
 * Usage:
 * ```php
 * class MyModel extends BaseModel
 * {
 *     use HasCommonScopes;
 * }
 *
 * // Then use in queries:
 * MyModel::active()->get();
 * MyModel::published()->get();
 * ```
 *
 * @see docs/METODI_DUPLICATI_ANALISI.md - Proposta 4: Model Traits
 */
trait HasCommonScopes
{
    /**
     * Scope query to only active records.
     *
     * Found 100% identical in: Activity, Blog, Cms, User, Fixcity modules.
     *
     * @return Builder<static>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope query to only inactive records.
     *
     * @return Builder<static>
     */
    public function scopeInactive(Builder $query): Builder
    {
        return $query->where('is_active', false);
    }

    /**
     * Scope query to published records.
     *
     * Records with published_at <= now().
     *
     * @return Builder<static>
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Scope query to draft (unpublished) records.
     *
     * Records with published_at = null or > now().
     *
     * @return Builder<static>
     */
    public function scopeDraft(Builder $query): Builder
    {
<<<<<<< HEAD
        return $query->where(function ($q): void {
        return $query->where(function ($q) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $query->where(function ($q): void {
=======
        return $query->where(function ($q) {
>>>>>>> 249a0067 (.)
=======
        return $query->where(function ($q) {
>>>>>>> 249a0067 (.)
>>>>>>> laraxot/develop
            $q->whereNull('published_at')
                ->orWhere('published_at', '>', now());
        });
    }

    /**
     * Scope query to records created after a date.
     *
     * @param  Builder<static>  $query
<<<<<<< HEAD
     * @param  mixed  $date
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  mixed  $date
>>>>>>> 249a0067 (.)
=======
     * @param  mixed  $date
>>>>>>> 249a0067 (.)
>>>>>>> laraxot/develop
     * @return Builder<static>
     */
    public function scopeCreatedAfter(Builder $query, mixed $date): Builder
    {
        return $query->where('created_at', '>=', $date);
    }

    /**
     * Scope query to records created before a date.
     *
     * @param  Builder<static>  $query
<<<<<<< HEAD
     * @param  mixed  $date
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  mixed  $date
>>>>>>> 249a0067 (.)
=======
     * @param  mixed  $date
>>>>>>> 249a0067 (.)
>>>>>>> laraxot/develop
     * @return Builder<static>
     */
    public function scopeCreatedBefore(Builder $query, mixed $date): Builder
    {
        return $query->where('created_at', '<=', $date);
    }

    /**
     * Scope query to records updated after a date.
     *
     * @param  Builder<static>  $query
<<<<<<< HEAD
     * @param  mixed  $date
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  mixed  $date
>>>>>>> 249a0067 (.)
=======
     * @param  mixed  $date
>>>>>>> 249a0067 (.)
>>>>>>> laraxot/develop
     * @return Builder<static>
     */
    public function scopeUpdatedAfter(Builder $query, mixed $date): Builder
    {
        return $query->where('updated_at', '>=', $date);
    }

    /**
     * Scope query to records created by a specific user.
     *
     * @param  Builder<static>  $query
<<<<<<< HEAD
     * @param  string|int  $userId
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  string|int  $userId
>>>>>>> 249a0067 (.)
=======
     * @param  string|int  $userId
>>>>>>> 249a0067 (.)
>>>>>>> laraxot/develop
     * @return Builder<static>
     */
    public function scopeCreatedBy(Builder $query, string|int $userId): Builder
    {
        return $query->where('created_by', $userId);
    }

    /**
     * Check if the model is published.
     */
    public function isPublished(): bool
    {
        if (! isset($this->published_at)) {
            return false;
        }

        return $this->published_at !== null &&
               $this->published_at->isPast();
    }

    /**
     * Check if the model is draft.
     */
    public function isDraft(): bool
    {
        return ! $this->isPublished();
    }

    /**
     * Check if the model is active.
     */
    public function isActive(): bool
    {
        return isset($this->is_active) && $this->is_active === true;
    }
}
