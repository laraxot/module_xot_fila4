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
=======
>>>>>>> 2f3197ab (.)
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Modules\Xot\Models\Session;
use Modules\Xot\Contracts\UserContract;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
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
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
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
use Modules\Xot\Models\Session;
=======
use Modules\Xot\Models\Session;
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
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Session;
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

class SessionPolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('session.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Session $_session): bool
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Session $session): bool
=======
=======
    public function view(UserContract $user, Session $session): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function view(UserContract $user, Session $_session): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Session $_session): bool
=======
    public function view(UserContract $user, Session $session): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Session $_session): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Session $session): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    {
        return $user->hasPermissionTo('session.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('session.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Session $_session): bool
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Session $session): bool
=======
=======
    public function update(UserContract $user, Session $session): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function update(UserContract $user, Session $_session): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Session $_session): bool
=======
    public function update(UserContract $user, Session $session): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Session $_session): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Session $session): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    {
        return $user->hasPermissionTo('session.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Session $_session): bool
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Session $session): bool
=======
=======
    public function delete(UserContract $user, Session $session): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function delete(UserContract $user, Session $_session): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Session $_session): bool
=======
    public function delete(UserContract $user, Session $session): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Session $_session): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Session $session): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    {
        return $user->hasPermissionTo('session.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Session $_session): bool
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Session $session): bool
=======
=======
    public function restore(UserContract $user, Session $session): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function restore(UserContract $user, Session $_session): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Session $_session): bool
=======
    public function restore(UserContract $user, Session $session): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Session $_session): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Session $session): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    {
        return $user->hasPermissionTo('session.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Session $session): bool
    {
        return $user->hasPermissionTo('session.forceDelete');
    }
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
