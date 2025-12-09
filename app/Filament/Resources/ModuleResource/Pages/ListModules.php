<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

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
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Override;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
use Filament\Actions\BulkAction;
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Override;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
<<<<<<< HEAD
use Filament\Tables;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
use Filament\Tables;
=======
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Nwidart\Modules\Facades\Module;

=======
use Nwidart\Modules\Facades\Module;

=======
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Nwidart\Modules\Facades\Module;

>>>>>>> a12f125f4a (.)
=======
use Nwidart\Modules\Facades\Module;

use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
class ListModules extends XotBaseListRecords
{
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = ModuleResource::class;

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
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getTableColumns()),
        ];
    }

    /**
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'name' => TextColumn::make('name')->searchable()->sortable(),
            'path' => TextColumn::make('path')->searchable()->sortable(),
            'enabled' => TextColumn::make('enabled')->sortable(),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function getTableColumns(): array
    {
        return [
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable(),
            'path' => TextColumn::make('path')
                ->searchable()
                ->sortable(),
            'enabled' => TextColumn::make('enabled')
                ->sortable(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'name' => TextColumn::make('name')->searchable()->sortable(),
            'path' => TextColumn::make('path')->searchable()->sortable(),
            'enabled' => TextColumn::make('enabled')->sortable(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
     * @return array<BaseFilter>
     */
    #[Override]
=======
<<<<<<< HEAD
     * @return array<BaseFilter>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
     * @return array<Tables\Filters\BaseFilter>
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function getTableFilters(): array
    {
        return [
            // Tables\Filters\SelectFilter::make('name')->options(
            //    Module::pluck('name', 'name')->toArray()
            // ),
            // Tables\Filters\SelectFilter::make('status')->options([
            //    'enabled' => 'Enabled',
            //    'disabled' => 'Disabled',
            // ])->default('enabled'),
        ];
    }

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
     * @return array<Action|ActionGroup>
     */
=======
<<<<<<< HEAD
     * @return array<Action|ActionGroup>
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    #[Override]
    public function getTableActions(): array
    {
        return [
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make()->requiresConfirmation(),
<<<<<<< HEAD
=======
=======
=======
     * @return array<Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
>>>>>>> origin/develop
    public function getTableActions(): array
    {
        return [
            ViewAction::make()
                ,
            EditAction::make()
                ,
            DeleteAction::make()

                ->requiresConfirmation(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getTableActions(): array
    {
        return [
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make()->requiresConfirmation(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
    #[Override]
=======
     * @return array<string, \Filament\Actions\BulkAction>
     */
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, BulkAction>
     */
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, Tables\Actions\BulkAction>
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
