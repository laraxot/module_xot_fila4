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
    {
        return once(function () use ($user) {
            if ($user->hasRole('super-admin')) {
                return true;
            }

            return null;
        });
    }

    public function viewAny(UserContract $userContract): bool
    {
        return false;
    }
}
