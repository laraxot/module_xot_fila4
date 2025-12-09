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
    public function before(UserContract $user, string $_ability): ?bool
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 5a14301c (.)
=======
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 3fbbf1f5 (.)
    {
        return once(function () use ($user) {
            if ($user->hasRole('super-admin')) {
                return true;
            }
<<<<<<< HEAD
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
