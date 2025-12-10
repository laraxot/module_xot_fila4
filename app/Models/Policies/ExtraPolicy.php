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
=======
>>>>>>> 2f3197ab (.)
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Modules\Xot\Models\Extra;
use Modules\Xot\Contracts\UserContract;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
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
>>>>>>> 2f3197ab (.)
use Override;
=======
>>>>>>> f1d4085 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Extra;

class ExtraPolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('extra.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Extra $_extra): bool
<<<<<<< HEAD
    public function view(UserContract $user, Extra $extra): bool
=======
=======
    public function view(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
    public function update(UserContract $user, Extra $_extra): bool
<<<<<<< HEAD
    public function update(UserContract $user, Extra $extra): bool
=======
=======
    public function update(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        return $user->hasPermissionTo('extra.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Extra $_extra): bool
<<<<<<< HEAD
    public function delete(UserContract $user, Extra $extra): bool
=======
=======
    public function delete(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        return $user->hasPermissionTo('extra.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Extra $_extra): bool
<<<<<<< HEAD
    public function restore(UserContract $user, Extra $extra): bool
=======
=======
    public function restore(UserContract $user, Extra $extra): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
=======

>>>>>>> f1d4085 (.)
