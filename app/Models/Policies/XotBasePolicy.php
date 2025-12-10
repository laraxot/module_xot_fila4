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
=======
>>>>>>> 6dcebf8a (.)
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
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 17684f52 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 17684f52 (.)
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
=======
=======
    public function before(UserContract $user, string $_ability): ?bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public function before(UserContract $user, string $_ability): ?bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function before(UserContract $user, string $_ability): ?bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public function before(UserContract $user, string $_ability): null|bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> f1d4085 (.)
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
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public function before(UserContract $user, string $_ability): ?bool
>>>>>>> 53d6a6ba (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
    public function before(UserContract $user, string $_ability): ?bool
>>>>>>> 71586de2 (.)
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
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
    {
        return once(function () use ($user) {
            if ($user->hasRole('super-admin')) {
                return true;
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
            return null;
<<<<<<< HEAD
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
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
            return null;
>>>>>>> 71586de2 (.)
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
