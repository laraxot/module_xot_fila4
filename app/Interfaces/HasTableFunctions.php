<?php

declare(strict_types=1);

namespace Modules\Xot\Interfaces;

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

interface HasTableFunctions
{
    /**
     * Get the table columns for the list view.
     *
     */
    public function getTableColumns(): array;

    /**
     * Get the table actions.
     *
     */
    public function getTableActions(): array;

    /**
     * Get the table bulk actions.
     *
     * @return array<string, BulkAction>
     * @return array<string, \Filament\Tables\Actions\BulkAction>
     */
    public function getTableBulkActions(): array;
}
