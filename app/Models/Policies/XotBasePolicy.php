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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
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
