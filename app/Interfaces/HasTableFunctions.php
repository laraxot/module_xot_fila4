<?php

declare(strict_types=1);

namespace Modules\Xot\Interfaces;

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
use Filament\Actions\Action;
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
=======
use Filament\Actions\BulkAction;
=======
use Filament\Actions\BulkAction;
>>>>>>> 3fbbf1f5 (.)
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
use Filament\Actions\BulkAction;
=======
>>>>>>> f1d4085 (.)
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
>>>>>>> 5a14301c (.)
=======
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
>>>>>>> 5a14301c (.)

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
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
     */
    public function getTableBulkActions(): array;
}
