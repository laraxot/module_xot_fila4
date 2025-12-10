<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

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
=======
>>>>>>> 2f3197ab (.)
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Modules\Xot\Models\CacheLock;
use Modules\Xot\Contracts\UserContract;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
=======
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use Override;
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\CacheLock;

class CacheLockPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    #[Override]
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('cache_lock.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, CacheLock $_cache_lock): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, CacheLock $cache_lock): bool
=======
=======
    public function view(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function view(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
    public function update(UserContract $user, CacheLock $_cache_lock): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, CacheLock $cache_lock): bool
=======
=======
    public function update(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function update(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('cache_lock.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, CacheLock $_cache_lock): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, CacheLock $cache_lock): bool
=======
=======
    public function delete(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function delete(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('cache_lock.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, CacheLock $_cache_lock): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, CacheLock $cache_lock): bool
=======
=======
    public function restore(UserContract $user, CacheLock $cache_lock): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function restore(UserContract $user, CacheLock $_cache_lock): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
