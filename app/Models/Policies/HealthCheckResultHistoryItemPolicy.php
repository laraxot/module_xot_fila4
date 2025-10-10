<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

class HealthCheckResultHistoryItemPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function view(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
=======
    public function view(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function update(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
=======
    public function update(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> 73eab74 (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function delete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
=======
    public function delete(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> 73eab74 (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
=======
    public function restore(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
=======
    public function restore(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
>>>>>>> 73eab74 (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function forceDelete(
        UserContract $user,
        HealthCheckResultHistoryItem $health_check_result_history_item,
    ): bool {
<<<<<<< HEAD
=======
    public function forceDelete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
    {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        return $user->hasPermissionTo('health_check_result_history_item.forceDelete');
    }
}
