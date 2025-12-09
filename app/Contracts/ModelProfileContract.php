<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
>>>>>>> 5a14301c (.)
use Modules\User\Models\Role;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

/**
 * Modules\Xot\Contracts\ModelProfileContract.
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
 * @property string $id
 * @property string $email
 * @property Collection<int, Role> $roles
 * @property int|null $roles_count
 *
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface ModelProfileContract extends ModelContract
{
    /**
     * Grant the given permission(s) to a role.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|int|array<int, string|int|Permission>|Permission|Collection<int, Permission> $permissions
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|Collection $permissions = []);
=======
=======
>>>>>>> 5a14301c (.)
     * @param  string|int|array<int, string|int|Permission>|Permission|\Illuminate\Support\Collection<int, Permission>  $permissions
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|\Illuminate\Support\Collection $permissions = []);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Assign the given role to the model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role> $roles
     * @return $this
     */
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|Collection $roles = [
=======
=======
>>>>>>> 5a14301c (.)
     * @param  array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     * @return $this
     */
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    ]);

    /**
     * Determine if the model has (one of) the given role(s).
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role> $roles
     */
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|Collection $roles,
        ?string $guard = null,
=======
=======
>>>>>>> 5a14301c (.)
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        null|string $guard = null,
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    ): bool;

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role> $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|Collection $roles = [
=======
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
>>>>>>> 5a14301c (.)
=======
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
>>>>>>> 5a14301c (.)
    ]): bool;

    /**
     * Determine if the model may perform the given permission.
     *
     * @throws PermissionDoesNotExist
     */
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
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
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

    /**
     * Create a new Eloquent query builder for the model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return Builder|static
     */
    public function newEloquentBuilder(Builder $query);
=======
=======
>>>>>>> 5a14301c (.)
     * @param  Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
}
