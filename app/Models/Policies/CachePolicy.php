<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Cache;
use Override;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Cache;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Cache;
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
use Modules\Xot\Models\Cache;
=======
use Modules\Xot\Models\Cache;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

class CachePolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('cache.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Cache $_cache): bool
=======
    public function view(UserContract $user, Cache $cache): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Cache $_cache): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Cache $cache): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
    public function update(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Cache $_cache): bool
=======
    public function update(UserContract $user, Cache $cache): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Cache $_cache): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Cache $cache): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('cache.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Cache $_cache): bool
=======
    public function delete(UserContract $user, Cache $cache): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Cache $_cache): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Cache $cache): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('cache.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Cache $_cache): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Cache $_cache): bool
=======
    public function restore(UserContract $user, Cache $cache): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Cache $_cache): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Cache $cache): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
