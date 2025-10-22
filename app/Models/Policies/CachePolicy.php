<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Override;
>>>>>>> 300ef70 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Cache;
use Override;

class CachePolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('cache.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Cache $_cache): bool
=======
    public function view(UserContract $user, Cache $cache): bool
>>>>>>> f1d4085 (.)
=======
    public function view(UserContract $user, Cache $_cache): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function view(UserContract $user, Cache $_cache): bool
>>>>>>> 300ef70 (.)
    {
        return $user->hasPermissionTo('cache.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('cache.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Cache $_cache): bool
=======
    public function update(UserContract $user, Cache $cache): bool
>>>>>>> f1d4085 (.)
=======
    public function update(UserContract $user, Cache $_cache): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function update(UserContract $user, Cache $_cache): bool
>>>>>>> 300ef70 (.)
    {
        return $user->hasPermissionTo('cache.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Cache $_cache): bool
=======
    public function delete(UserContract $user, Cache $cache): bool
>>>>>>> f1d4085 (.)
=======
    public function delete(UserContract $user, Cache $_cache): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function delete(UserContract $user, Cache $_cache): bool
>>>>>>> 300ef70 (.)
    {
        return $user->hasPermissionTo('cache.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Cache $_cache): bool
=======
    public function restore(UserContract $user, Cache $cache): bool
>>>>>>> f1d4085 (.)
=======
    public function restore(UserContract $user, Cache $_cache): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function restore(UserContract $user, Cache $_cache): bool
>>>>>>> 300ef70 (.)
    {
        return $user->hasPermissionTo('cache.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Cache $cache): bool
    {
        return $user->hasPermissionTo('cache.forceDelete');
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
