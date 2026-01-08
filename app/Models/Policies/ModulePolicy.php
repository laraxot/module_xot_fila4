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
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 8b18e4bff (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
use Override;

class ModulePolicy extends XotBasePolicy
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('module.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Module $_module): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Module $_module): bool
=======
    public function view(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
=======
    public function view(UserContract $user, Module $_module): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function view(UserContract $user, Module $_module): bool
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    {
        return $user->hasPermissionTo('module.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('module.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Module $_module): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Module $_module): bool
=======
    public function update(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
=======
    public function update(UserContract $user, Module $_module): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function update(UserContract $user, Module $_module): bool
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    {
        return $user->hasPermissionTo('module.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Module $_module): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Module $_module): bool
=======
    public function delete(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
=======
    public function delete(UserContract $user, Module $_module): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function delete(UserContract $user, Module $_module): bool
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    {
        return $user->hasPermissionTo('module.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Module $_module): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Module $_module): bool
=======
    public function restore(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
=======
    public function restore(UserContract $user, Module $_module): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function restore(UserContract $user, Module $_module): bool
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    {
        return $user->hasPermissionTo('module.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, Module $module): bool
    {
        return $user->hasPermissionTo('module.forceDelete');
    }
}
