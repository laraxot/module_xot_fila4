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
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
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
use Modules\Xot\Models\HealthCheckResultHistoryItem;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
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
use Modules\Xot\Models\HealthCheckResultHistoryItem;
=======
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
>>>>>>> ca9324a4 (.)

class HealthCheckResultHistoryItemPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    #[Override]
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(
        UserContract $user,
        HealthCheckResultHistoryItem $health_check_result_history_item,
    ): bool {
        return $user->hasPermissionTo('health_check_result_history_item.forceDelete');
    }
}
