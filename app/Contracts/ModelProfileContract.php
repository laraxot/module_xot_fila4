<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Modules\User\Models\Role;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

/**
 * Modules\Xot\Contracts\ModelProfileContract.
 *
 * @property string $id
 * @property string $email
 * @property Collection<int, Role> $roles
 * @property int|null $roles_count
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
     * @param string|int|array<int, string|int|Permission>|Permission|Collection<int, Permission> $permissions
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|Collection $permissions = []);
     * @param  string|int|array<int, string|int|Permission>|Permission|\Illuminate\Support\Collection<int, Permission>  $permissions
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|\Illuminate\Support\Collection $permissions = []);

    /**
     * Assign the given role to the model.
     *
     * @param array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role> $roles
     * @return $this
     */
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|Collection $roles = [
     * @param  array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     * @return $this
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> a12f125f4a (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> b93ef594b4 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

    /**
     * Determine if the model has (one of) the given role(s).
     *
     * @param string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role> $roles
     */
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|Collection $roles,
        ?string $guard = null,
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        null|string $guard = null,
    ): bool;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
=======
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     *
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
=======
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> a12f125f4a (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> b93ef594b4 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

    /**
     * Determine if the model may perform the given permission.
     *
     * @throws PermissionDoesNotExist
     */
<<<<<<< HEAD
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
<<<<<<< HEAD
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
>>>>>>> ca9324a4 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param  Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query);
}
