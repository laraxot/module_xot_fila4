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
=======
    public function assignRole($roles = []);
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
    public function assignRole($roles = []);
=======
<<<<<<< HEAD
=======
    public function assignRole($roles = []);
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
    public function assignRole($roles = []);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
>>>>>>> b7afadf9 (.)
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> f1d4085 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 71586de2 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 249a0067 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> b93ef594b4 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 88ea7103 (.)
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
    public function assignRole(array|string|int|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)

    /**
     * Determine if the model has (one of) the given role(s).
     *
     * @param  string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection  $roles
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
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 3310e9c6 (.)
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
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
    public function hasRole($roles, ?string $guard = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        ?string $guard = null,
    ): bool;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
    public function hasRole(
        string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles,
        ?string $guard = null,
    ): bool;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function hasRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)

    /**
     * Determine if the model has any of the given role(s).
     *
     * Alias to hasRole() but without Guard controls
     *
     * @param  string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection  $roles
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
=======
    public function hasAnyRole($roles = []): bool;
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
    public function hasAnyRole($roles = []): bool;
=======
<<<<<<< HEAD
=======
    public function hasAnyRole($roles = []): bool;
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
    public function hasAnyRole($roles = []): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
>>>>>>> b7afadf9 (.)
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> f1d4085 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 71586de2 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 249a0067 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> b93ef594b4 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 88ea7103 (.)
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = []): bool;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
    public function hasAnyRole(string|int|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles = [
    ]): bool;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)

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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
=======
>>>>>>> 6dcebf8a (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public function hasPermissionTo(string|Permission $permission, ?string $guardName = null): bool;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> f1d4085 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
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
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> 71586de2 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;
>>>>>>> 249a0067 (.)
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
>>>>>>> 21348520 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
>>>>>>> 3fbbf1f5 (.)
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
=======
    public function hasPermissionTo(string|int|Permission $permission, null|string $guardName = null): bool;
=======
>>>>>>> 17684f52 (.)
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
>>>>>>> d2b0a27 (.)
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
>>>>>>> b7afadf9 (.)

    /**
     * Create a new Eloquent query builder for the model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Builder $query
     *
=======
     * @param  Builder  $query
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
     * @return \Illuminate\Database\Eloquent\Builder|static
=======
     * @return Builder
>>>>>>> a6ef6dc7 (.)
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
=======
     * @param Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query);
>>>>>>> 5a14301c (.)

    /**
     * Undocumented function.
     */
    public function toggleSuperAdmin(): void;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * ---return BelongsTo<UserContract, self>.
=======
     * Get the user that owns the profile.
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
     * ---return BelongsTo<UserContract, self>.
>>>>>>> 53d6a6ba (.)
=======
     * Get the user that owns the profile.
>>>>>>> b7afadf9 (.)
=======
     * ---return BelongsTo<UserContract, self>.
>>>>>>> 71586de2 (.)
=======
     * ---return BelongsTo<UserContract, self>.
>>>>>>> 249a0067 (.)
=======
     * ---return BelongsTo<UserContract, self>.
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
=======
     * ---return BelongsTo<UserContract, self>.
>>>>>>> 53d6a6ba (.)
=======
     * Get the user that owns the profile.
>>>>>>> b7afadf9 (.)
     */
    public function user(): BelongsTo;

    /**
     * --.
     */
    public function isSuperAdmin(): bool;
}
