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
<<<<<<< HEAD
<<<<<<< HEAD
    public function assignRole($roles = []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> f1d4085 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 300ef70 (.)

    /**
     * Determine if the model has (one of) the given role(s).
     *
     * @param  string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection  $roles
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasRole($roles, ?string $guard = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        ?string $guard = null,
    ): bool;
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     *
     * @param  string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection  $roles
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasAnyRole($roles = []): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> f1d4085 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 300ef70 (.)

    /**
     * Determine if the model may perform the given permission.
     *
     * @throws PermissionDoesNotExist
     */
<<<<<<< HEAD
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasPermissionTo(string|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param  Builder  $query
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Builder|static
=======
     * @return Builder
>>>>>>> a6ef6dc7 (.)
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
