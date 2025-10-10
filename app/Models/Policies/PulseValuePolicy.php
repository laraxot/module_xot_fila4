<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
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
use Modules\Xot\Models\PulseValue;
=======
use Modules\Xot\Models\PulseValue;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

class PulseValuePolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('pulse_value.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function view(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_value.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('pulse_value.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function update(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_value.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function delete(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_value.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function restore(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_value.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, PulseValue $pulse_value): bool
    {
        return $user->hasPermissionTo('pulse_value.forceDelete');
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
