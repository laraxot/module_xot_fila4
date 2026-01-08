<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Modules\User\Models\Role;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

/**
 * Modules\Xot\Contracts\ModelProfileContract.
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface ModelProfileContract extends ModelContract
{
    /**
     * Grant the given permission(s) to a role.
     *
     * @param  string|int|array<int, string|int|Permission>|Permission|Collection<int, Permission>  $permissions
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|Collection $permissions = []);

    /**
     * Assign the given role to the model.
     *
     * @param  array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     * @return $this
     */
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|Collection $roles = [
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
     * @param  array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     * @return $this
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    ]);
<<<<<<< HEAD
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
>>>>>>> 285375c74 (.)

    /**
     * Determine if the model has (one of) the given role(s).
     *
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|Collection $roles,
        ?string $guard = null,
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        null|string $guard = null,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    ): bool;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     *
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|Collection $roles = [
<<<<<<< HEAD
=======
=======
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
>>>>>>> 5a14301c (.)
=======
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    ]): bool;
<<<<<<< HEAD
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
>>>>>>> 285375c74 (.)

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
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 5a14301c (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 3fbbf1f5 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 399f46d3 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> a12f125f4a (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> b93ef594b4 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> ca9324a4 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> ca9324a4 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 9db27d12 (.)
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @return Builder|static
     */
    public function newEloquentBuilder(Builder $query);
}
