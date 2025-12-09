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
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseEntry;
use Override;
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseEntry;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseEntry;
>>>>>>> 5a14301c (.)

class PulseEntryPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    #[Override]
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('pulse_entry.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, PulseEntry $_pulse_entry): bool
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
    public function update(UserContract $user, PulseEntry $_pulse_entry): bool
    {
        return $user->hasPermissionTo('pulse_entry.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, PulseEntry $_pulse_entry): bool
    {
        return $user->hasPermissionTo('pulse_entry.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, PulseEntry $_pulse_entry): bool
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
