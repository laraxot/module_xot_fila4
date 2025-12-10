<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Builder;
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
 * @property int|null              $roles_count
 * @property UserContract          $user
 * @property int|null              $roles_count
 * @property UserContract          $user
 * @property int|null              $roles_count
 * @property UserContract          $user
 * @property int|null              $roles_count
 * @property UserContract          $user
 * @property int|null              $roles_count
 * @property UserContract          $user
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
<<<<<<< HEAD
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
<<<<<<< HEAD
    public function assignRole($roles = []);
    public function assignRole($roles = []);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

    /**
     * Determine if the model has (one of) the given role(s).
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        null|string $guard = null,
        null|string $guard = null,
        null|string $guard = null,
        null|string $guard = null,
    ): bool;
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasRole($roles, ?string $guard = null): bool;
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        ?string $guard = null,
    ): bool;
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        ?string $guard = null,
    ): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        null|string $guard = null,
    ): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
=======
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
<<<<<<< HEAD
    public function hasAnyRole($roles = []): bool;
    public function hasAnyRole($roles = []): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

    /**
     * Determine if the model may perform the given permission.
     *
     * @throws PermissionDoesNotExist
     */
<<<<<<< HEAD
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
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
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query);
     * @param Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query);

    /**
     * Undocumented function.
     */
    public function toggleSuperAdmin(): void;

    /**
     * ---return BelongsTo<UserContract, self>.
     * Get the user that owns the profile.
     * ---return BelongsTo<UserContract, self>.
     * ---return BelongsTo<UserContract, self>.
     * ---return BelongsTo<UserContract, self>.
     * ---return BelongsTo<UserContract, self>.
     * Get the user that owns the profile.
     * ---return BelongsTo<UserContract, self>.
     * ---return BelongsTo<UserContract, self>.
     * ---return BelongsTo<UserContract, self>.
     */
    public function user(): BelongsTo;

    /**
     * --.
     */
    public function isSuperAdmin(): bool;
}
