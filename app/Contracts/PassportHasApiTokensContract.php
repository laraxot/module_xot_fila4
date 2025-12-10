<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> 414a4ffcb (.)
use Laravel\Passport\PersonalAccessTokenResult;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\PersonalAccessTokenResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\PersonalAccessTokenResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\PersonalAccessTokenResult;
=======
use Laravel\Passport\PersonalAccessTokenResult;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Laravel\Passport\Token;
use Laravel\Passport\TransientToken;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 *
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 *
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 *
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 *
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
 * @phpstan-require-extends Model
 */
interface PassportHasApiTokensContract
{
    /**
     * Get all of the user's registered OAuth clients.
     *
     * @return HasMany
     */
    public function clients();

    /**
     * Get all of the access tokens for the user.
     *
     * @return HasMany
     */
    public function tokens();

    /**
     * Get the current access token being used by the user.
     *
     * @return Token|TransientToken|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function token();
    public function token();
    public function token();
    public function token();
    public function token();
=======
    public function token(): Token|TransientToken|null;
>>>>>>> 551c768c4 (.)
=======
    public function token(): Token|TransientToken|null;
>>>>>>> 414a4ffcb (.)

    /**
     * Determine if the current API token has a given scope.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $scope
     *
     * @return bool
     */
    public function tokenCan($scope);
=======
     * @return bool
     */
    public function tokenCan(string $scope);
>>>>>>> 551c768c4 (.)
=======
     * @return bool
     */
    public function tokenCan(string $scope);
>>>>>>> 414a4ffcb (.)

    /**
     * Create a new personal access token for the user.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $name
     *
     * @return PersonalAccessTokenResult
     */
    public function createToken($name, array $scopes = []);
=======
     * @param  array<int, string>  $scopes
     */
    public function createToken(string $name, array $scopes = []): PersonalAccessTokenResult;
>>>>>>> 551c768c4 (.)
=======
     * @param  array<int, string>  $scopes
     */
    public function createToken(string $name, array $scopes = []): PersonalAccessTokenResult;
>>>>>>> 414a4ffcb (.)

    /**
     * Set the current access token for the user.
     *
     * @return $this
     */
    public function withAccessToken(Token|TransientToken $accessToken);
}
