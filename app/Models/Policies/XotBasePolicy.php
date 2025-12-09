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
    public function before(UserContract $user, string $_ability): ?bool
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 5a14301c (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3fbbf1f5 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 17684f52 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> a12f125f4a (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> b93ef594b4 (.)
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> ca9324a4 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> ca9324a4 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 9db27d12 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 5a14301c (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> ca9324a4 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 5a14301c (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> ca9324a4 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
    {
        return once(function () use ($user) {
            if ($user->hasRole('super-admin')) {
                return true;
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

            return null;
>>>>>>> 5a14301c (.)
=======

            return null;
>>>>>>> 5a14301c (.)
=======

            return null;
>>>>>>> 5a14301c (.)
=======

            return null;
>>>>>>> 5a14301c (.)
        });
    }

    public function viewAny(UserContract $userContract): bool
    {
        return false;
    }
}
