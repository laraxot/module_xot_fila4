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
use Modules\Xot\Models\PulseEntry;
use Override;

class PulseEntryPolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('pulse_entry.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, PulseEntry $_pulse_entry): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function view(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> f1d4085 (.)
=======
    public function view(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('pulse_entry.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('pulse_entry.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, PulseEntry $_pulse_entry): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function update(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> f1d4085 (.)
=======
    public function update(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('pulse_entry.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, PulseEntry $_pulse_entry): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function delete(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> f1d4085 (.)
=======
    public function delete(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('pulse_entry.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, PulseEntry $_pulse_entry): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function restore(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> f1d4085 (.)
=======
    public function restore(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return $user->hasPermissionTo('pulse_entry.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, PulseEntry $pulse_entry): bool
    {
        return $user->hasPermissionTo('pulse_entry.forceDelete');
    }
}
