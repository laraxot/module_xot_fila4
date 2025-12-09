<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Passport\PersonalAccessTokenResult;
use Laravel\Passport\Token;
use Laravel\Passport\TransientToken;
use Modules\User\Contracts\TeamContract;
use Modules\User\Models\Role as UserRole;
use Modules\User\Models\Tenant;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

/**
 * Modules\Xot\Contracts\UserContract.
 *
 * @property string|null                                                 $id
 * @property string|null                                                 $email
 * @property string|null                                                 $first_name
 * @property string|null                                                 $last_name
 * @property string|null                                                 $full_name
 * @property string|null                                                 $name
 * @property string|null                                                 $phone
 * @property string|null                                                 $type
 * @property string|null                                                 $current_team_id
 * @property TeamContract|null                                           $currentTeam
 * @property Collection<int, UserRole> $roles
 * @property Collection<int, Team> $teams
 * @property Collection<int, Tenant> $tenants
 *
 * @phpstan-require-extends Model
 *
 * @mixin IdeHelperUserContract
 */
interface UserContract extends Authenticatable
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Filament\Support\Contracts\HasLabel;
use Spatie\Permission\Contracts\Permission;
use Override;
use Illuminate\Support\Collection;
use BackedEnum;
use Modules\User\Models\Tenant;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Passport\Token;
use Modules\User\Contracts\HasTeamsContract;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
<<<<<<< HEAD

// use Filament\Models\Contracts\HasTenants;
=======
=======
=======
use Filament\Support\Contracts\HasLabel;
use Spatie\Permission\Contracts\Permission;
use Override;
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Collection;
use BackedEnum;
use Modules\User\Models\Tenant;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Passport\Token;
use Modules\User\Contracts\HasTeamsContract;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
>>>>>>> b93ef594b4 (.)

// use Filament\Models\Contracts\HasTenants;
=======
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

// use Filament\Models\Contracts\HasTenants;

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Modules\User\Contracts\UserContract.
 *
 * @property ProfileContract|null                                                       $profile
 * @property string $id
 * @property string $handle
 * @property string|null                                                                $first_name
 * @property string|null                                                                $last_name
 * @property string|null                                                                $full_name
<<<<<<< HEAD
 * @property BackedEnum&HasLabel $type
=======
<<<<<<< HEAD
 * @property BackedEnum&HasLabel $type
=======
 * @property \BackedEnum&\Filament\Support\Contracts\HasLabel                           $type
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @property string|null                                                                $password
 * @property string|int|null                                                            $current_team_id
 * @property string|null                                                                $phone
 * @property string|null                                                                $email
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>   $roles
<<<<<<< HEAD
 * @property \Illuminate\Database\Eloquent\Collection<int, Tenant> $tenants
=======
<<<<<<< HEAD
 * @property \Illuminate\Database\Eloquent\Collection<int, Tenant> $tenants
=======
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Tenant> $tenants
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 *
 * @method  FileAdder addMediaFromDisk(string $key, ?string $disk = null)
 * @method bool canAccessSocialite()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
interface UserContract extends
    Authenticatable,
    Authorizable,
    CanResetPassword,
    FilamentUser,
    HasTeamsContract,
    ModelContract,
    MustVerifyEmail,
    PassportHasApiTokensContract,
    HasMedia
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
{
    /*
     * public function isSuperAdmin();
     * public function name();
     * public function areas();
     * public function avatar();
     */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
interface UserContract extends Authenticatable, Authorizable, CanResetPassword, FilamentUser, HasTeamsContract, ModelContract, MustVerifyEmail, PassportHasApiTokensContract,HasMedia
{
    /*
    public function isSuperAdmin();
    public function name();
    public function areas();
    public function avatar();
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
{
    /*
     * public function isSuperAdmin();
     * public function name();
     * public function areas();
     * public function avatar();
     */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function profile(): HasOne;

    /**
<<<<<<< HEAD
     * Determine if the model has (one of) the given role(s).
     */
    public function hasRole(
        string|int|array|UserRole|Collection $roles,
        ?string $guard = null,
=======
     * Update the model in the database.
     *
     * @return bool
     */
    /**
     * Get a relationship.
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function getRelationValue($key);

    /**
     * Create a new instance of the given model.
     *
     * @param array $attributes
     * @param bool  $exists
     *
     * @return static
     */
    public function newInstance($attributes = [], $exists = false);

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed|int|string
     */
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function getKey();

    /**
     * Determine if the model has (one of) the given role(s).
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function hasRole(
        string|int|array|Role|Collection $roles,
        null|string $guard = null,
>>>>>>> 5a14301c (.)
    ): bool;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function hasRole(string|int|array|Role|Collection $roles, ?string $guard = null): bool;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function hasRole(string|int|array|Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Assign the given role to the model.
     *
     * @return $this
     */
<<<<<<< HEAD
<<<<<<< HEAD
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
     * Get the current access token being used by the user.
     */
    public function token(): Token|TransientToken|null;

    /**
     * Create a new personal access token for the user.
     *
     * @param  array<int, string>  $scopes
     */
    public function createToken(string $name, array $scopes = []): PersonalAccessTokenResult;

    /**
     * Get the user's roles.
=======
=======
>>>>>>> 399f46d3 (.)
    public function assignRole(array|string|int|Role|Collection $roles = []);
=======
<<<<<<< HEAD
    public function assignRole(array|string|int|Role|Collection $roles = []);
=======
    public function assignRole(array|string|int|Role|\Illuminate\Support\Collection $roles = []);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Revoke the given role from the model.
     *
<<<<<<< HEAD
     * @param string|int|Role|BackedEnum $role
=======
<<<<<<< HEAD
     * @param string|int|Role|BackedEnum $role
=======
     * @param string|int|Role|\BackedEnum $role
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
     * @return self
     */
    public function removeRole($role);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Get the current access token being used by the user.
     *
     * @return Token|\Laravel\Passport\TransientToken|null
     */
    // public function token();

    /**
     * A model may have multiple roles.
>>>>>>> 5a14301c (.)
     */
    public function roles(): BelongsToMany;

    /**
<<<<<<< HEAD
     * Get the user's teams.
     */
    public function teams(): BelongsToMany;

    /**
     * Get the user's tenants.
     */
    public function tenants(): BelongsToMany;

    /**
     * Remove a role from the user.
     */
    public function removeRole(string|int|\Spatie\Permission\Contracts\Role $role): static;

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
=======
     * Get all of the tenants the user belongs to.
     */
    public function tenants(): BelongsToMany;

    // public function canAccessSocialite(): bool;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Get all consents for the model (polymorphic).
     *
     */
    //public function consents(): MorphMany;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    /**
     * Determine if the role may perform the given permission.
     *
     * @param string|int|Permission|BackedEnum $permission
     *
     * @throws PermissionDoesNotExist|GuardDoesNotMatch
     */
    public function hasPermissionTo($permission, null|string $guardName = null): bool;
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
}
