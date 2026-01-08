<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use BackedEnum;
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
use Modules\User\Models\Team;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 285375c74 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Passport\PersonalAccessTokenResult;
<<<<<<< HEAD
>>>>>>> 8ab8fd81a (.)
=======
=======
=======
>>>>>>> d86d643a (.)
use BackedEnum;
=======
use BackedEnum;
use DateTime;
>>>>>>> 53d6a6ba (.)
=======
use BackedEnum;
use DateTime;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Collection;
>>>>>>> d86d643a (.)
>>>>>>> 285375c74 (.)
use Laravel\Passport\Token;
use Modules\User\Models\Team;
use Modules\User\Models\Tenant;
use Nwidart\Modules\Laravel\Module;
use Laravel\Passport\TransientToken;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\Role as UserRole;
use Spatie\Permission\Contracts\Permission;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Passport\PersonalAccessTokenResult;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Modules\Xot\Contracts\UserContract.
 *
 * @property string|null $id
 * @property string|null $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $full_name
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $type
 * @property string|null $current_team_id
 * @property TeamContract $currentTeam
 * @property ProfileContract|null $profile
 * @property Collection<int, UserRole> $roles
 * @property Collection<int, Team> $teams
 * @property Collection<int, Tenant> $tenants
 *
 * @phpstan-require-extends Model
 *
<<<<<<< HEAD
=======
 * @mixin IdeHelperUserContract
 */
interface UserContract extends Authenticatable
=======
=======
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
=======
>>>>>>> e59778ae (.)
use Filament\Support\Contracts\HasLabel;
use Spatie\Permission\Contracts\Permission;
use Override;
use Illuminate\Support\Collection;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
=======
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> ca9324a4 (.)
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
>>>>>>> 5842a556 (.)
=======
use BackedEnum;
use Modules\User\Models\Tenant;
use Filament\Models\Contracts\FilamentUser;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> a5dccfe (.)
use Filament\Support\Contracts\HasLabel;
>>>>>>> ca9324a4 (.)
=======
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
>>>>>>> 43d67f21 (.)
=======
use BackedEnum;
use Modules\User\Models\Tenant;
use Filament\Models\Contracts\FilamentUser;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
>>>>>>> 5842a556 (.)
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
use Illuminate\Support\Collection;
use Laravel\Passport\Token;
use Modules\User\Contracts\HasTeamsContract;
use Modules\User\Models\Tenant;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\Permission\Contracts\Permission;
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
use Spatie\Permission\Contracts\Permission;
>>>>>>> 43d67f21 (.)
=======
use Spatie\Permission\Contracts\Permission;
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
use Spatie\Permission\Contracts\Permission;
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
=======
=======
use Illuminate\Support\Collection;
>>>>>>> ca9324a4 (.)
use Laravel\Passport\Token;
use Modules\User\Contracts\HasTeamsContract;
use Modules\User\Models\Tenant;
use Override;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
<<<<<<< HEAD
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
use Illuminate\Support\Collection;
use BackedEnum;
use Filament\Support\Contracts\HasLabel;
use Modules\User\Models\Tenant;
use Laravel\Passport\Token;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Contracts\Role;
use Illuminate\Database\Eloquent\Model;
use Filament\Models\Contracts\FilamentUser;
use Modules\User\Contracts\HasTeamsContract;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
>>>>>>> 43d67f21 (.)

// use Filament\Models\Contracts\HasTenants;
/**
 * Modules\User\Contracts\UserContract.
 *
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
 * @property ProfileContract|null $profile
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a5dccfe (.)
 * @property ProfileContract|null                                                       $profile
>>>>>>> d86d643a (.)
=======
 * @property ProfileContract|null $profile
>>>>>>> 43d67f21 (.)
=======
 * @property ProfileContract|null $profile
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
 * @property ProfileContract|null                                                       $profile
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
 * @property ProfileContract|null $profile
>>>>>>> 5842a556 (.)
=======
 * @property ProfileContract|null $profile
>>>>>>> 43d67f21 (.)
=======
 * @property ProfileContract|null $profile
=======
 * @property ProfileContract|null                                                       $profile
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
 * @property ProfileContract|null $profile
>>>>>>> 5842a556 (.)
 * @property string $id
 * @property string $handle
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $full_name
 * @property \BackedEnum&HasLabel $type
 * @property string|null $password
 * @property string|int|null $current_team_id
 * @property string|null $phone
 * @property string|null $email
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property \DateTime|null $email_verified_at
>>>>>>> b7afadf9 (.)
 * @property \DateTime|null $email_verified_at
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles
 * @property \Illuminate\Database\Eloquent\Collection<int, Tenant> $tenants
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
=======
 * @method  FileAdder addMediaFromDisk(string $key, ?string $disk = null)
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> 43d67f21 (.)
=======
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
=======
 * @method  FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> 5842a556 (.)
=======
 * @property ProfileContract|null                                                       $profile
=======
 * @property ProfileContract|null $profile
>>>>>>> ca9324a4 (.)
 * @property string $id
 * @property string $handle
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $full_name
 * @property BackedEnum&HasLabel $type
 * @property string|null $password
 * @property string|int|null $current_team_id
 * @property string|null $phone
 * @property string|null $email
 * @property \DateTime|null $email_verified_at
=======
 * @property DateTime|null $email_verified_at
>>>>>>> 53d6a6ba (.)
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles
 * @property \Illuminate\Database\Eloquent\Collection<int, Tenant> $tenants
 *
<<<<<<< HEAD
 * @method  FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> 5a14301c (.)
=======
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> 43d67f21 (.)
=======
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
=======
 * @method  FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> 5842a556 (.)
 * @method bool canAccessSocialite()
 *
 * @phpstan-require-extends Model
<<<<<<< HEAD
 *
>>>>>>> 285375c74 (.)
 * @mixin \Eloquent
=======
>>>>>>> 8b18e4bff (.)
 */
interface UserContract extends Authenticatable
{
    /*
     * public function isSuperAdmin();
     * public function name();
     * public function areas();
     * public function avatar();
     */
    /**
     * Get the user's profile.
     */
    public function profile(): HasOne;

    /**
     * Get the access token currently associated with the user.
     *
     * @return Token|TransientToken|null
     */
    public function token();

    /**
     * Create a new personal access token for the user.
     *
     * @param array<int, string> $scopes
     */
    public function createToken(string $name, array $scopes = []): PersonalAccessTokenResult;

    /**
     * Passport API tokens support.
     */
    // @phpstan-ignore-next-line interface should extend this contract

    /**
     * Determine if the model has (one of) the given role(s).
     */
    public function hasRole(
        string|int|array|UserRole|Collection $roles,
        ?string $guard = null,
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
     * Update the model in the database.
     *
    /**
     *
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
     * @param  string  $key
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
     * @param string $key
     *
>>>>>>> 0e51323 (.)
=======
     * @param string $key
     *
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
     * @param  string  $key
>>>>>>> 43d67f21 (.)
=======
     * @param  string  $key
=======
     * @param string $key
     *
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  string  $key
>>>>>>> 5842a556 (.)
=======
     * @param string $key
     *
>>>>>>> 5a14301c (.)
=======
     * @param  string  $key
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  string  $key
>>>>>>> 43d67f21 (.)
=======
     * @param  string  $key
=======
     * @param string $key
     *
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  string  $key
>>>>>>> 5842a556 (.)
=======
     * @param  string  $key
>>>>>>> 53d6a6ba (.)
=======
     * @return bool
    /**
     * Get a relationship.
>>>>>>> b7afadf9 (.)
     * @return mixed|null
     */
    public function getRelationValue($key);

    /**
     * Create a new instance of the given model.
     *
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
     * @param  array  $attributes
     * @param  bool  $exists
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
     * @param array $attributes
     * @param bool  $exists
     *
>>>>>>> 0e51323 (.)
=======
     * @param array $attributes
     * @param bool  $exists
     *
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
     * @param  array  $attributes
     * @param  bool  $exists
>>>>>>> 43d67f21 (.)
=======
     * @param  array  $attributes
     * @param  bool  $exists
=======
=======
     * @param  array  $attributes
     * @param  bool  $exists
=======
>>>>>>> e59778ae (.)
     * @param array $attributes
     * @param bool  $exists
     *
>>>>>>> c06600c (.)
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
     * @param  array  $attributes
     * @param  bool  $exists
>>>>>>> 5842a556 (.)
=======
     * @param array $attributes
     * @param bool  $exists
     *
>>>>>>> 5a14301c (.)
=======
     * @param  array  $attributes
     * @param  bool  $exists
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array  $attributes
     * @param  bool  $exists
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
     * @param  array  $attributes
     * @param  bool  $exists
>>>>>>> 5842a556 (.)
     * @return static
     */
    public function newInstance($attributes = [], $exists = false);

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed|int|string
     */
    #[\Override]
    public function getKey();

    /**
     * Determine if the model has (one of) the given role(s).
     */
    public function hasRole(
        string|int|array|Role|Collection $roles,
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
        null|string $guard = null,
>>>>>>> 5a14301c (.)
=======
        ?string $guard = null,
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
        null|string $guard = null,
>>>>>>> 0e51323 (.)
=======
        null|string $guard = null,
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        ?string $guard = null,
>>>>>>> 43d67f21 (.)
=======
        ?string $guard = null,
=======
        null|string $guard = null,
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        ?string $guard = null,
>>>>>>> 5842a556 (.)
=======
        null|string $guard = null,
>>>>>>> 5a14301c (.)
=======
        ?string $guard = null,
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        ?string $guard = null,
>>>>>>> 43d67f21 (.)
=======
        ?string $guard = null,
=======
        null|string $guard = null,
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        ?string $guard = null,
>>>>>>> 5842a556 (.)
>>>>>>> 285375c74 (.)
    ): bool;

    /**
     * Assign the given role to the model.
     *
     * @return $this
     */
    public function assignRole(array|string|int|UserRole|Collection $roles = []);

    /**
     * Remove all current roles and set the given ones.
     *
     * @return $this
     */
    public function syncRoles(array|string|int|UserRole|Collection $roles = []);

    /**
     * Determine if the model has (one of) the given permission(s).
     *
     * @throws PermissionDoesNotExist
     */
    public function hasPermissionTo(string|int|Permission $permission, ?string $guardName = null): bool;

    /**
     * Check if the user can access Socialite.
     */
    public function canAccessSocialite(): bool;

    /**
     * Get the user's roles.
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
    public function assignRole(array|string|int|Role|Collection $roles = []);

    /**
     * Revoke the given role from the model.
     *
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
     * @param  string|int|Role|BackedEnum  $role
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
     * @param string|int|Role|BackedEnum $role
=======
<<<<<<< HEAD
     * @param string|int|Role|BackedEnum $role
=======
     * @param string|int|Role|\BackedEnum $role
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
>>>>>>> 0e51323 (.)
=======
     * @param string|int|Role|BackedEnum $role
     *
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
     * @param  string|int|Role|BackedEnum  $role
>>>>>>> 43d67f21 (.)
=======
     * @param  string|int|Role|BackedEnum  $role
=======
     * @param string|int|Role|BackedEnum $role
     *
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  string|int|Role|BackedEnum  $role
>>>>>>> 5842a556 (.)
=======
     * @param string|int|Role|BackedEnum $role
     *
>>>>>>> 5a14301c (.)
=======
     * @param  string|int|Role|BackedEnum  $role
>>>>>>> ca9324a4 (.)
=======
=======
     * @param string|int|Role|BackedEnum $role
     *
>>>>>>> 0e51323 (.)
=======
     * @param string|int|Role|BackedEnum $role
     *
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
     * @param  string|int|Role|BackedEnum  $role
>>>>>>> 43d67f21 (.)
=======
     * @param  string|int|Role|BackedEnum  $role
=======
     * @param string|int|Role|BackedEnum $role
     *
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  string|int|Role|BackedEnum  $role
>>>>>>> 5842a556 (.)
=======
     * @param  string|int|Role|BackedEnum  $role
>>>>>>> 53d6a6ba (.)
=======
     * @param  string|int|Role|\BackedEnum  $role
>>>>>>> b7afadf9 (.)
     * @return self
     */
    public function removeRole($role);

    /**
     * Get the current access token being used by the user.
     *
     * @return Token|\Laravel\Passport\TransientToken|null
     */
    // public function token();

    /**
     * A model may have multiple roles.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
     *
     * @return BelongsToMany
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     */
    public function roles(): BelongsToMany;

    /**
     * Get the user's teams.
     */
    public function teams(): BelongsToMany;

    /**
     * Get the user's tenants.
     */
    public function tenants(): BelongsToMany;

    /**
     * Revoke the given role from the model.
     *
<<<<<<< HEAD
     * @param  string|int|array|UserRole|Collection|BackedEnum  ...$role
=======
     * @param string|int|array|UserRole|Collection|BackedEnum ...$role
>>>>>>> 8ab8fd81a (.)
     * @return $this
     */
    public function removeRole(...$role);

    /**
     * Determine if the user owns the given team.
     */
    public function ownsTeam(TeamContract $team): bool;

    /**
     * Determine if the user belongs to the given team.
     */
    public function belongsToTeam(TeamContract $team): bool;

    /**
     * Determine if the user has the given permission on the given team.
     */
    public function hasTeamPermission(TeamContract $team, string $permission): bool;

    /**
     * Switch the user's context to the given team.
     */
    public function switchTeam(TeamContract $team): bool;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
     * Get all of the tenants the user belongs to.
     *
     * @return BelongsToMany
     */
    public function tenants(): BelongsToMany;
>>>>>>> 8b18e4bff (.)


    /**
<<<<<<< HEAD
    * @return list<Module>
    */
    public function getModules(): array;
=======
     * Get all consents for the model (polymorphic).
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
<<<<<<< HEAD
=======
=======
>>>>>>> a5dccfe (.)
     *
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
     *
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
     *
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
     */
    // public function consents(): MorphMany;
    /**
     * Determine if the role may perform the given permission.
     *
     *
     * @throws PermissionDoesNotExist|GuardDoesNotMatch
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
    public function hasPermissionTo($permission, null|string $guardName = null): bool;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
>>>>>>> 43d67f21 (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
=======
    public function hasPermissionTo($permission, null|string $guardName = null): bool;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
>>>>>>> 5842a556 (.)
=======
     *
=======
>>>>>>> ca9324a4 (.)
     */
    // public function consents(): MorphMany;
    /**
     * Determine if the role may perform the given permission.
     *
     * @param  string|int|Permission|BackedEnum  $permission
     *
     * @throws PermissionDoesNotExist|GuardDoesNotMatch
     */
<<<<<<< HEAD
    public function hasPermissionTo($permission, null|string $guardName = null): bool;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
    
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
>>>>>>> 43d67f21 (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
=======
    public function hasPermissionTo($permission, null|string $guardName = null): bool;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
>>>>>>> 5842a556 (.)
=======
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
    public function hasPermissionTo(string|int|Permission|\BackedEnum $permission, ?string $guardName = null): bool;
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
}
