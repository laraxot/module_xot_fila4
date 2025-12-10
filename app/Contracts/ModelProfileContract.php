<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @property string $id
 * @property string $email
 * @property Collection<int, Role> $roles
 * @property int|null $roles_count
 *
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|int|array<int, string|int|Permission>|Permission|Collection<int, Permission> $permissions
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|Collection $permissions = []);
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param  string|int|array<int, string|int|Permission>|Permission|\Illuminate\Support\Collection<int, Permission>  $permissions
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|\Illuminate\Support\Collection $permissions = []);
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
     * Assign the given role to the model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|Collection<int, \Spatie\Permission\Contracts\Role> $roles
     * @return $this
     */
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|Collection $roles = [
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param  array<int, string|int|\Spatie\Permission\Contracts\Role>|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     * @return $this
     */
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
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
    ]);

    /**
     * Determine if the model has (one of) the given role(s).
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param  string|int|array<int, string|int|\Spatie\Permission\Contracts\Role>|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection<int, \Spatie\Permission\Contracts\Role>  $roles
     */
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        null|string $guard = null,
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
    ): bool;

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 399f46d3 (.)
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 5a14301c (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> 53d6a6ba (.)
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> 71586de2 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 5a14301c (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
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

    /**
     * Create a new Eloquent query builder for the model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return Builder|static
     */
    public function newEloquentBuilder(Builder $query);
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param  Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query);
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
}
