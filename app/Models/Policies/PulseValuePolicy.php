<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use Override;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
use Override;

class PulseValuePolicy extends XotBasePolicy
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
>>>>>>> 300ef70 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('pulse_value.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function view(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> f1d4085 (.)
=======
    public function view(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function view(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function update(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> f1d4085 (.)
=======
    public function update(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function update(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 300ef70 (.)
    {
        return $user->hasPermissionTo('pulse_value.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function delete(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> f1d4085 (.)
=======
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 300ef70 (.)
    {
        return $user->hasPermissionTo('pulse_value.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
=======
    public function restore(UserContract $user, PulseValue $pulse_value): bool
>>>>>>> f1d4085 (.)
=======
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
>>>>>>> 300ef70 (.)
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
}
