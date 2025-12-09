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
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> a12f125f4a (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Models\PulseAggregate;
=======
use Modules\Xot\Models\PulseAggregate;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> 9db27d12 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\PulseAggregate;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)

class PulseAggregatePolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    #[Override]
    public function viewAny(UserContract $user): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    public function viewAny(UserContract $user): bool
=======
    public function viewAny(ProfileContract $user): bool
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function viewAny(UserContract $user): bool
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
    public function view(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.view');
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
=======
    public function create(ProfileContract $user): bool
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
    public function update(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
    public function delete(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, PulseAggregate $_pulse_aggregate): bool
=======
    public function restore(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, PulseAggregate $_pulse_aggregate): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, PulseAggregate $pulse_aggregate): bool
=======
    public function forceDelete(ProfileContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, PulseAggregate $pulse_aggregate): bool
>>>>>>> b93ef594b4 (.)
    {
        return $user->hasPermissionTo('pulse_aggregate.forceDelete');
    }
}
=======
>>>>>>> 6cba4fe (.)
    public function forceDelete(UserContract $user, PulseAggregate $pulse_aggregate): bool
    {
        return $user->hasPermissionTo('pulse_aggregate.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
