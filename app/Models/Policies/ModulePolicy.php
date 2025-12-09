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
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
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
use Override;
=======
>>>>>>> f1d4085 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
>>>>>>> 399f46d3 (.)
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
use Modules\Xot\Models\Module;
=======
use Modules\Xot\Models\Module;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Module;
>>>>>>> ca9324a4 (.)

class ModulePolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('module.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Module $_module): bool
=======
    public function view(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
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
    public function update(UserContract $user, Module $_module): bool
=======
    public function update(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
    {
        return $user->hasPermissionTo('module.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Module $_module): bool
=======
    public function delete(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
    {
        return $user->hasPermissionTo('module.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Module $_module): bool
=======
    public function restore(UserContract $user, Module $module): bool
>>>>>>> f1d4085 (.)
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
