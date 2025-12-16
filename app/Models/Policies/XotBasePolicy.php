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
    public function before(UserContract $user, string $_ability): ?bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
    public function before(UserContract $user, string $_ability): ?bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $_ability): null|bool
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
    public function before(UserContract $user, string $_ability): null|bool
=======
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    public function before(UserContract $user, string $_ability): null|bool
    public function before(UserContract $user, string $ability): ?bool
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
    public function before(UserContract $user, string $_ability): ?bool
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return once(function () use ($user) {
            if ($user->hasRole('super-admin')) {
                return true;
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD


<<<<<<< HEAD
            return null;

            return null;
            return null;

            return null;
            return null;
            return null;

            return null;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        });
    }

    public function viewAny(UserContract $userContract): bool
    {
        return false;
    }
}
