<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Query\Builder;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Query\Builder;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Query\Builder;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Query\Builder;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int|null $roles_count
 * @property UserContract $user
=======
 * @property int|null              $roles_count
 * @property UserContract          $user
>>>>>>> 5a14301c (.)
=======
 * @property int|null              $roles_count
 * @property UserContract          $user
>>>>>>> 5a14301c (.)
=======
 * @property int|null              $roles_count
 * @property UserContract          $user
>>>>>>> 5a14301c (.)
=======
 * @property int|null              $roles_count
 * @property UserContract          $user
>>>>>>> 5a14301c (.)
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
     * @return $this
     */
    public function givePermissionTo(string|int|array|Permission|\Illuminate\Support\Collection $permissions = []);

    /**
     * Assign the given role to the model.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> f1d4085 (.)

    /**
     * Determine if the model has (one of) the given role(s).
     */
<<<<<<< HEAD
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ?string $guard = null,
=======
        null|string $guard = null,
>>>>>>> 5a14301c (.)
=======
        null|string $guard = null,
>>>>>>> 3fbbf1f5 (.)
=======
        null|string $guard = null,
>>>>>>> 5a14301c (.)
=======
        null|string $guard = null,
>>>>>>> 5a14301c (.)
=======
        null|string $guard = null,
>>>>>>> 5a14301c (.)
    ): bool;
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     */
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> f1d4085 (.)

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
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query);
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

    /**
     * Undocumented function.
     */
    public function toggleSuperAdmin(): void;

    /**
     * ---return BelongsTo<UserContract, self>.
     */
    public function user(): BelongsTo;

    /**
     * --.
     */
    public function isSuperAdmin(): bool;
}
