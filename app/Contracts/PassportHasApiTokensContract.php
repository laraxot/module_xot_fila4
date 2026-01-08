<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\PersonalAccessTokenResult;
use Laravel\Passport\Token;
use Laravel\Passport\TransientToken;

/**
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
    public function token();

    /**
     * Determine if the current API token has a given scope.
     *
     * @param  string  $scope
     * @return bool
     */
<<<<<<< HEAD
    public function tokenCan(string $scope): bool;
=======
    public function tokenCan($scope);
>>>>>>> 50c0e1043 (.)

    /**
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array<int, string>  $scopes
     * @return PersonalAccessTokenResult
     */
<<<<<<< HEAD
    public function createToken(string $name, array $scopes = []): PersonalAccessTokenResult;
=======
    public function createToken($name, array $scopes = []);
>>>>>>> 50c0e1043 (.)

    /**
     * Set the current access token for the user.
     *
     * @param  Token|TransientToken  $accessToken
     * @return $this
     */
<<<<<<< HEAD
    public function withAccessToken(Token|TransientToken|null $accessToken): static;
=======
    public function withAccessToken($accessToken);
>>>>>>> 50c0e1043 (.)
}
