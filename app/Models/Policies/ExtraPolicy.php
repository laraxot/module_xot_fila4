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
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;

class ExtraPolicy extends XotBasePolicy
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
>>>>>>> 285375c74 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('extra.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Extra $_extra): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Extra $_extra): bool
=======
    public function view(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
=======
    public function view(UserContract $user, Extra $_extra): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function view(UserContract $user, Extra $_extra): bool
>>>>>>> 285375c74 (.)
    {
        return $user->hasPermissionTo('extra.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('extra.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Extra $_extra): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Extra $_extra): bool
=======
    public function update(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
=======
    public function update(UserContract $user, Extra $_extra): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function update(UserContract $user, Extra $_extra): bool
>>>>>>> 285375c74 (.)
    {
        return $user->hasPermissionTo('extra.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Extra $_extra): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Extra $_extra): bool
=======
    public function delete(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
=======
    public function delete(UserContract $user, Extra $_extra): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function delete(UserContract $user, Extra $_extra): bool
>>>>>>> 285375c74 (.)
    {
        return $user->hasPermissionTo('extra.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Extra $_extra): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Extra $_extra): bool
=======
    public function restore(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
=======
    public function restore(UserContract $user, Extra $_extra): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function restore(UserContract $user, Extra $_extra): bool
>>>>>>> 285375c74 (.)
    {
        return $user->hasPermissionTo('extra.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Extra $extra): bool
    {
        return $user->hasPermissionTo('extra.forceDelete');
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
>>>>>>> 285375c74 (.)
