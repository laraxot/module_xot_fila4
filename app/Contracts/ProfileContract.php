<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;
use Modules\User\Models\Role;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

/**
 * Modules\Xot\Contracts\ProfileContract.
 *
 * @property string $id
 * @property string $email
 * @property string $slug
 * @property string $user_id
 * @property Collection<int, Role> $roles
 * @property int|null $roles_count
 * @property UserContract $user
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface ProfileContract extends HasMedia
{
    /**
     * Grant the given permission(s) to a role.
     *
     * @param  string|int|array|Permission|\Illuminate\Support\Collection  $permissions
     * @return $this
     */
    public function givePermissionTo($permissions = []);

    /**
     * Assign the given role to the model.
     *
     * @param  array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection  $roles
     * @return $this
     */
    public function assignRole($roles = []);

    /**
     * Determine if the model has (one of) the given role(s).
     *
     * @param  string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection  $roles
     */
    public function hasRole($roles, ?string $guard = null): bool;

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     *
     * @param  string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection  $roles
     */
    public function hasAnyRole($roles = []): bool;

    /**
     * Determine if the model may perform the given permission.
     *
     * @throws PermissionDoesNotExist
     */
    public function hasPermissionTo(string|Permission $permission, ?string $guardName = null): bool;

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function newEloquentBuilder($query);

    /**
     * Undocumented function.
     */
    public function toggleSuperAdmin(): void;

    /**
     * Get the user that owns the profile.
     */
    public function user(): BelongsTo;

    /**
     * --.
     */
    public function isSuperAdmin(): bool;
}
