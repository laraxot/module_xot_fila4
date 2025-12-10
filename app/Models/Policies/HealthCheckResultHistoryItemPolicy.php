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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Modules\Xot\Contracts\UserContract;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
=======
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
>>>>>>> 2f3197ab (.)
use Override;
=======
>>>>>>> f1d4085 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

class HealthCheckResultHistoryItemPolicy extends XotBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
<<<<<<< HEAD
    public function view(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
=======
=======
    public function view(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
=======
=======
    public function update(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
<<<<<<< HEAD
    public function delete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
=======
=======
    public function delete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, HealthCheckResultHistoryItem $_health_check_result_history_item): bool
<<<<<<< HEAD
    public function restore(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
=======
=======
    public function restore(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        return $user->hasPermissionTo('health_check_result_history_item.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(
        UserContract $user,
        HealthCheckResultHistoryItem $health_check_result_history_item,
    ): bool {
=======
    public function forceDelete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
    {
>>>>>>> f1d4085 (.)
        return $user->hasPermissionTo('health_check_result_history_item.forceDelete');
    }
}
    public function forceDelete(UserContract $user, HealthCheckResultHistoryItem $health_check_result_history_item): bool
    {
        return $user->hasPermissionTo('health_check_result_history_item.forceDelete');
    }
}
