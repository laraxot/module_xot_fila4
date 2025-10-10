<?php

declare(strict_types=1);

namespace Modules\Xot\Interfaces;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\BulkAction;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Actions\BulkAction;
>>>>>>> 73eab74 (.)
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;

interface HasTableFunctions
{
    /**
     * Get the table columns for the list view.
     *
     * @return array<string, Column>
     */
    public function getTableColumns(): array;

    /**
     * Get the table actions.
     *
     * @return array<string, Action>
     */
    public function getTableActions(): array;

    /**
     * Get the table bulk actions.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
=======
     * @return array<string, BulkAction>
>>>>>>> 73eab74 (.)
     */
    public function getTableBulkActions(): array;
}
