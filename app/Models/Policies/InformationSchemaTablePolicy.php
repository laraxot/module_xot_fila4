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
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Modules\Xot\Models\InformationSchemaTable;
use Modules\Xot\Contracts\UserContract;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;

class InformationSchemaTablePolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('information_schema_table.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, InformationSchemaTable $_information_schema_table): bool
<<<<<<< HEAD
    public function view(UserContract $user, InformationSchemaTable $information_schema_table): bool
=======
=======
    public function view(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function view(UserContract $user, InformationSchemaTable $_information_schema_table): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    {
        return $user->hasPermissionTo('information_schema_table.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('information_schema_table.create');
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, InformationSchemaTable $_information_schema_table): bool
<<<<<<< HEAD
    public function update(UserContract $user, InformationSchemaTable $information_schema_table): bool
=======
=======
    public function update(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function update(UserContract $user, InformationSchemaTable $_information_schema_table): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    {
        return $user->hasPermissionTo('information_schema_table.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, InformationSchemaTable $_information_schema_table): bool
<<<<<<< HEAD
    public function delete(UserContract $user, InformationSchemaTable $information_schema_table): bool
=======
=======
    public function delete(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function delete(UserContract $user, InformationSchemaTable $_information_schema_table): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    {
        return $user->hasPermissionTo('information_schema_table.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, InformationSchemaTable $_information_schema_table): bool
<<<<<<< HEAD
    public function restore(UserContract $user, InformationSchemaTable $information_schema_table): bool
=======
=======
    public function restore(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function restore(UserContract $user, InformationSchemaTable $_information_schema_table): bool
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    {
        return $user->hasPermissionTo('information_schema_table.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserContract $user, InformationSchemaTable $information_schema_table): bool
    {
        return $user->hasPermissionTo('information_schema_table.forceDelete');
    }
