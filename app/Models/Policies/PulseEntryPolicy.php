<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseEntry;
use Override;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseEntry;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseEntry;
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
use Modules\Xot\Models\PulseEntry;
=======
use Modules\Xot\Models\PulseEntry;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

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
<<<<<<< HEAD
    public function view(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function view(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function update(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
    public function delete(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function delete(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
    public function restore(UserContract $user, PulseEntry $_pulse_entry): bool
=======
    public function restore(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, PulseEntry $_pulse_entry): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, PulseEntry $pulse_entry): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
