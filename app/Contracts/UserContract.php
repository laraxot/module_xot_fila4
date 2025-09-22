<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
use BackedEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Contracts\HasLabel;
=======
use Filament\Support\Contracts\HasLabel;
use Spatie\Permission\Contracts\Permission;
use Override;
use Illuminate\Support\Collection;
use BackedEnum;
use Modules\User\Models\Tenant;
use Filament\Models\Contracts\FilamentUser;
>>>>>>> c06600c (.)
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;
use Laravel\Passport\Token;
use Modules\User\Contracts\HasTeamsContract;
use Modules\User\Models\Tenant;
use Override;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
<<<<<<< HEAD
use Spatie\Permission\Contracts\Permission;
=======
>>>>>>> c06600c (.)
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

// use Filament\Models\Contracts\HasTenants;
/**
 * Modules\User\Contracts\UserContract.
 *
<<<<<<< HEAD
 * @property ProfileContract|null $profile
=======
 * @property ProfileContract|null                                                       $profile
>>>>>>> c06600c (.)
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
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles
 * @property \Illuminate\Database\Eloquent\Collection<int, Tenant> $tenants
 *
<<<<<<< HEAD
 * @method FileAdder addMediaFromDisk(string $key, ?string $disk = null)
=======
 * @method  FileAdder addMediaFromDisk(string $key, ?string $disk = null)
>>>>>>> c06600c (.)
 * @method bool canAccessSocialite()
 *
 * @phpstan-require-extends Model
 *
<<<<<<< HEAD
 * @mixin \Eloquent
 */
interface UserContract extends Authenticatable, Authorizable, CanResetPassword, FilamentUser, HasMedia, HasTeamsContract, ModelContract, MustVerifyEmail, PassportHasApiTokensContract
=======
 * @mixin IdeHelperUserContract
 */
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
>>>>>>> c06600c (.)
{
    /*
     * public function isSuperAdmin();
     * public function name();
     * public function areas();
     * public function avatar();
     */
    public function profile(): HasOne;

    /**
     * Update the model in the database.
     *
     * @return bool
     */
    /**
     * Get a relationship.
     *
<<<<<<< HEAD
     * @param  string  $key
=======
     * @param string $key
     *
>>>>>>> c06600c (.)
     * @return mixed|null
     */
    public function getRelationValue($key);

    /**
     * Create a new instance of the given model.
     *
<<<<<<< HEAD
     * @param  array  $attributes
     * @param  bool  $exists
=======
     * @param array $attributes
     * @param bool  $exists
     *
>>>>>>> c06600c (.)
     * @return static
     */
    public function newInstance($attributes = [], $exists = false);

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed|int|string
     */
    #[Override]
    public function getKey();

    /**
     * Determine if the model has (one of) the given role(s).
     */
    public function hasRole(
        string|int|array|Role|Collection $roles,
<<<<<<< HEAD
        ?string $guard = null,
=======
        null|string $guard = null,
>>>>>>> c06600c (.)
    ): bool;

    /**
     * Assign the given role to the model.
     *
     * @return $this
     */
    public function assignRole(array|string|int|Role|Collection $roles = []);

    /**
     * Revoke the given role from the model.
     *
<<<<<<< HEAD
     * @param  string|int|Role|BackedEnum  $role
=======
     * @param string|int|Role|BackedEnum $role
     *
>>>>>>> c06600c (.)
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
     */
    public function roles(): BelongsToMany;

    /**
     * Get all of the tenants the user belongs to.
     */
    public function tenants(): BelongsToMany;

    // public function canAccessSocialite(): bool;
    /**
     * Get all consents for the model (polymorphic).
<<<<<<< HEAD
=======
     *
>>>>>>> c06600c (.)
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
    public function hasPermissionTo($permission, ?string $guardName = null): bool;
=======
    public function hasPermissionTo($permission, null|string $guardName = null): bool;
>>>>>>> c06600c (.)
}
