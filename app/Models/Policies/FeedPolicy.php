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
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
use Modules\Xot\Models\Feed;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
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
use Modules\Xot\Models\Feed;
=======
use Modules\Xot\Models\Feed;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 9db27d12 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 9db27d12 (.)

class FeedPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    #[Override]
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('feed.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, Feed $_feed): bool
    {
        return $user->hasPermissionTo('feed.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('feed.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, Feed $_feed): bool
    {
        return $user->hasPermissionTo('feed.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Feed $_feed): bool
    {
        return $user->hasPermissionTo('feed.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Feed $_feed): bool
    {
        return $user->hasPermissionTo('feed.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Feed $feed): bool
    {
        return $user->hasPermissionTo('feed.forceDelete');
    }
}
