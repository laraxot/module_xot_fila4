<?php

declare(strict_types=1);

namespace Modules\Xot\Interfaces;

<<<<<<< HEAD
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\BulkAction;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions\BulkAction;
>>>>>>> b93ef594b4 (.)
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;

=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
interface HasTableFunctions
{
    /**
     * Get the table columns for the list view.
     *
<<<<<<< HEAD
     * @return array<string, Column>
=======
<<<<<<< HEAD
     * @return array<string, Column>
=======
     * @return array<string, \Filament\Tables\Columns\Column>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableColumns(): array;

    /**
     * Get the table actions.
     *
<<<<<<< HEAD
     * @return array<string, Action>
=======
<<<<<<< HEAD
     * @return array<string, Action>
=======
     * @return array<string, \Filament\Tables\Actions\Action>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableActions(): array;

    /**
     * Get the table bulk actions.
     *
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, BulkAction>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, \Filament\Tables\Actions\BulkAction>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableBulkActions(): array;
}
