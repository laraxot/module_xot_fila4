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
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Log;
use Override;

class LogPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
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
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('log.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Log $_log): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Log $_log): bool
=======
    public function view(UserContract $user, Log $log): bool
>>>>>>> f1d4085 (.)
=======
    public function view(UserContract $user, Log $_log): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('log.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('log.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Log $_log): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Log $_log): bool
=======
    public function update(UserContract $user, Log $log): bool
>>>>>>> f1d4085 (.)
=======
    public function update(UserContract $user, Log $_log): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('log.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Log $_log): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Log $_log): bool
=======
    public function delete(UserContract $user, Log $log): bool
>>>>>>> f1d4085 (.)
=======
    public function delete(UserContract $user, Log $_log): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('log.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Log $_log): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Log $_log): bool
=======
    public function restore(UserContract $user, Log $log): bool
>>>>>>> f1d4085 (.)
=======
    public function restore(UserContract $user, Log $_log): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('log.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Log $log): bool
    {
        return $user->hasPermissionTo('log.forceDelete');
    }
}
