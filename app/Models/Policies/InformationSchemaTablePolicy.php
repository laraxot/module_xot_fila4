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
use Modules\Xot\Models\InformationSchemaTable;
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
use Override;
=======
>>>>>>> f1d4085 (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 5a14301c (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
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
use Modules\Xot\Models\InformationSchemaTable;
=======
use Modules\Xot\Models\InformationSchemaTable;
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 9db27d12 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> ca9324a4 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> ca9324a4 (.)

class InformationSchemaTablePolicy extends XotBasePolicy
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
        return $user->hasPermissionTo('information_schema_table.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, InformationSchemaTable $_information_schema_table): bool
=======
    public function view(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
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
    public function update(UserContract $user, InformationSchemaTable $_information_schema_table): bool
=======
    public function update(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
    {
        return $user->hasPermissionTo('information_schema_table.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, InformationSchemaTable $_information_schema_table): bool
=======
    public function delete(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
    {
        return $user->hasPermissionTo('information_schema_table.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, InformationSchemaTable $_information_schema_table): bool
=======
    public function restore(UserContract $user, InformationSchemaTable $information_schema_table): bool
>>>>>>> f1d4085 (.)
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
}
