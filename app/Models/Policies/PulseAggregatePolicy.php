<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Modules\Xot\Models\PulseAggregate;
use Modules\Xot\Contracts\UserContract;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;

class PulseAggregatePolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    #[Override]
    public function viewAny(UserContract $user): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
=======
=======
    public function viewAny(ProfileContract $user): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
    public function viewAny(UserContract $user): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, PulseAggregate $_pulse_aggregate): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, PulseAggregate $pulse_aggregate): bool
=======
=======
    public function view(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function view(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
=======
=======
    public function create(ProfileContract $user): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function create(UserContract $user): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, PulseAggregate $_pulse_aggregate): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, PulseAggregate $pulse_aggregate): bool
=======
=======
    public function update(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function update(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, PulseAggregate $_pulse_aggregate): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, PulseAggregate $pulse_aggregate): bool
=======
=======
    public function delete(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function delete(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, PulseAggregate $_pulse_aggregate): bool
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, PulseAggregate $pulse_aggregate): bool
=======
=======
    public function restore(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function restore(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, PulseAggregate $pulse_aggregate): bool
    {
        return $user->hasPermissionTo('pulse_aggregate.forceDelete');
    }
}
    public function forceDelete(UserContract $user, PulseAggregate $pulse_aggregate): bool
    {
        return $user->hasPermissionTo('pulse_aggregate.forceDelete');
    }
}
