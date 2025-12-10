<?php

declare(strict_types=1);

/**
 * ----------------------------------------------------------------.
 */

namespace Modules\Xot\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\UserContract;

// use Modules\Xot\Datas\XotData;

abstract class XotBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
<<<<<<< HEAD
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
=======
>>>>>>> ca9324a4 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    {
        return once(function () use ($user) {
            if ($user->hasRole('super-admin')) {
                return true;
            }


            return null;

            return null;
            return null;

            return null;
            return null;
            return null;

            return null;
        });
    }

    public function viewAny(UserContract $userContract): bool
    {
        return false;
    }
}
