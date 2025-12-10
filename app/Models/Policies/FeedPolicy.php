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
use Modules\Xot\Models\Feed;
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Modules\Xot\Models\Feed;
use Modules\Xot\Contracts\UserContract;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
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
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
<<<<<<< HEAD
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Feed;
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Feed $feed): bool
=======
=======
    public function view(UserContract $user, Feed $feed): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function view(UserContract $user, Feed $_feed): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Feed $_feed): bool
=======
    public function view(UserContract $user, Feed $feed): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Feed $_feed): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Feed $feed): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Feed $feed): bool
=======
=======
    public function update(UserContract $user, Feed $feed): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function update(UserContract $user, Feed $_feed): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Feed $_feed): bool
=======
    public function update(UserContract $user, Feed $feed): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Feed $_feed): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Feed $feed): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        return $user->hasPermissionTo('feed.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, Feed $_feed): bool
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Feed $feed): bool
=======
=======
    public function delete(UserContract $user, Feed $feed): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function delete(UserContract $user, Feed $_feed): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Feed $_feed): bool
=======
    public function delete(UserContract $user, Feed $feed): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Feed $_feed): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Feed $feed): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    {
        return $user->hasPermissionTo('feed.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, Feed $_feed): bool
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Feed $feed): bool
=======
=======
    public function restore(UserContract $user, Feed $feed): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function restore(UserContract $user, Feed $_feed): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Feed $_feed): bool
=======
    public function restore(UserContract $user, Feed $feed): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Feed $_feed): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Feed $feed): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
}
>>>>>>> 091f883c (.)
