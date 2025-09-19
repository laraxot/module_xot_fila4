<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)

// use Filament\Models\Contracts\HasTenants;
/**
 * Modules\User\Contracts\UserContract.
 *
 * @property ProfileContract|null                                                       $profile
 * @property string $id
 * @property string $handle
 * @property string|null                                                                $first_name
 * @property string|null                                                                $last_name
 * @property string|null                                                                $full_name
 * @property BackedEnum&HasLabel $type
 * @property string|null                                                                $password
 * @property string|int|null                                                            $current_team_id
 * @property string|null                                                                $phone
 * @property string|null                                                                $email
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>   $roles
 * @property \Illuminate\Database\Eloquent\Collection<int, Tenant> $tenants
 *
 * @method  FileAdder addMediaFromDisk(string $key, ?string $disk = null)
 * @method bool canAccessSocialite()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
{
    /*
     * public function isSuperAdmin();
     * public function name();
     * public function areas();
     * public function avatar();
     */
<<<<<<< HEAD
=======
interface UserContract extends Authenticatable, Authorizable, CanResetPassword, FilamentUser, HasTeamsContract, ModelContract, MustVerifyEmail, PassportHasApiTokensContract,HasMedia
{
    /*
    public function isSuperAdmin();
    public function name();
    public function areas();
    public function avatar();
    */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    public function profile(): HasOne;

    /**
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
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
    public function getKey();

    /**
     * Determine if the model has (one of) the given role(s).
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function hasRole(
        string|int|array|Role|Collection $roles,
        null|string $guard = null,
    ): bool;
<<<<<<< HEAD
=======
    public function hasRole(string|int|array|Role|Collection $roles, ?string $guard = null): bool;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

    /**
     * Assign the given role to the model.
     *
     * @return $this
     */
    public function assignRole(array|string|int|Role|Collection $roles = []);

    /**
     * Revoke the given role from the model.
     *
     * @param string|int|Role|BackedEnum $role
     *
     * @return self
     */
    public function removeRole($role);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
    /**
     * Get the current access token being used by the user.
     *
     * @return Token|\Laravel\Passport\TransientToken|null
     */
    // public function token();

    /**
     * A model may have multiple roles.
     */
    public function roles(): BelongsToMany;

    /**
     * Get all of the tenants the user belongs to.
     */
    public function tenants(): BelongsToMany;

    // public function canAccessSocialite(): bool;
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    /**
     * Get all consents for the model (polymorphic).
     *
     */
    //public function consents(): MorphMany;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    /**
     * Determine if the role may perform the given permission.
     *
     * @param string|int|Permission|BackedEnum $permission
     *
     * @throws PermissionDoesNotExist|GuardDoesNotMatch
     */
    public function hasPermissionTo($permission, null|string $guardName = null): bool;
<<<<<<< HEAD
=======
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
}
