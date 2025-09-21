<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
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

class HealthCheckResultHistoryItemPolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('health_check_result_history_item.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function view(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function update(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function delete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function restore(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function forceDelete(
        UserContract $user,
        HealthCheckResultHistoryItem $health_check_result_history_item,
    ): bool {
<<<<<<< HEAD
        return $user->hasPermissionTo('health_check_result_history_item.forceDelete');
    }
}
=======
<<<<<<< HEAD
=======
    public function forceDelete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
    {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
        return $user->hasPermissionTo('health_check_result_history_item.forceDelete');
    }
}
=======
    public function forceDelete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.forceDelete');
    }
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
