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
>>>>>>> 399f46d3 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> ca9324a4 (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 5a14301c (.)
    {
        return once(function () use ($user) {
            if ($user->hasRole('super-admin')) {
                return true;
            }
<<<<<<< HEAD
<<<<<<< HEAD
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
