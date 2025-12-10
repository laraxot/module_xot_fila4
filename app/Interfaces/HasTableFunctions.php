<?php

declare(strict_types=1);

namespace Modules\Xot\Interfaces;

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\BulkAction;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Actions\BulkAction;
>>>>>>> 73eab74 (.)
use Filament\Tables\Columns\Column;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use Filament\Actions\BulkAction;
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;

use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
>>>>>>> d2b0a27 (.)
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
>>>>>>> 551c768c4 (.)

interface HasTableFunctions
{
    /**
     * Get the table columns for the list view.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @return array<string, Column>
=======
<<<<<<< HEAD
     * @return array<string, Column>
=======
     * @return array<string, \Filament\Tables\Columns\Column>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @return array<string, Column>
>>>>>>> 091f883c (.)
     */
    public function getTableColumns(): array;

    /**
     * Get the table actions.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @return array<string, Action>
=======
<<<<<<< HEAD
     * @return array<string, Action>
=======
     * @return array<string, \Filament\Tables\Actions\Action>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @return array<string, Action>
>>>>>>> 091f883c (.)
     */
    public function getTableActions(): array;

    /**
     * Get the table bulk actions.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, \Filament\Tables\Actions\BulkAction>
=======
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     * @return array<string, BulkAction>
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
     * @return array<string, BulkAction>
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
=======
     * @return array<string, BulkAction>
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
     * @return array<string, BulkAction>
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
     */
    public function getTableBulkActions(): array;
}
