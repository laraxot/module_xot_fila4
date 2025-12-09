<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
use Laravel\Passport\PersonalAccessTokenResult;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\PersonalAccessTokenResult;
>>>>>>> 5a14301c (.)
use Laravel\Passport\Token;
use Laravel\Passport\TransientToken;

/**
<<<<<<< HEAD
=======
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 *
>>>>>>> 5a14301c (.)
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
    public function token(): Token|TransientToken|null;
=======
    public function token();
>>>>>>> 5a14301c (.)

    /**
     * Determine if the current API token has a given scope.
     *
<<<<<<< HEAD
     * @return bool
     */
    public function tokenCan(string $scope);
=======
     * @param string $scope
     *
     * @return bool
     */
    public function tokenCan($scope);
>>>>>>> 5a14301c (.)

    /**
     * Create a new personal access token for the user.
     *
<<<<<<< HEAD
     * @param  array<int, string>  $scopes
     */
    public function createToken(string $name, array $scopes = []): PersonalAccessTokenResult;
=======
     * @param string $name
     *
     * @return PersonalAccessTokenResult
     */
    public function createToken($name, array $scopes = []);
>>>>>>> 5a14301c (.)

    /**
     * Set the current access token for the user.
     *
     * @return $this
     */
    public function withAccessToken(Token|TransientToken $accessToken);
}
