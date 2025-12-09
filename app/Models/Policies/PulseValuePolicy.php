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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> 9db27d12 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseValue;
>>>>>>> 5a14301c (.)

class PulseValuePolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    #[Override]
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('pulse_value.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, PulseValue $_pulse_value): bool
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
    public function update(UserContract $user, PulseValue $_pulse_value): bool
    {
        return $user->hasPermissionTo('pulse_value.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, PulseValue $_pulse_value): bool
    {
        return $user->hasPermissionTo('pulse_value.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, PulseValue $_pulse_value): bool
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
