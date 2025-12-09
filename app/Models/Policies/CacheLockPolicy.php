<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

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
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
=======
use Modules\Xot\Models\CacheLock;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)

class CacheLockPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('cache_lock.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, CacheLock $_cache_lock): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, CacheLock $_cache_lock): bool
=======
    public function view(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('cache_lock.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('cache_lock.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, CacheLock $_cache_lock): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, CacheLock $_cache_lock): bool
=======
    public function update(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('cache_lock.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, CacheLock $_cache_lock): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, CacheLock $_cache_lock): bool
=======
    public function delete(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('cache_lock.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, CacheLock $_cache_lock): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, CacheLock $_cache_lock): bool
=======
    public function restore(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('cache_lock.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, CacheLock $cache_lock): bool
    {
        return $user->hasPermissionTo('cache_lock.forceDelete');
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
