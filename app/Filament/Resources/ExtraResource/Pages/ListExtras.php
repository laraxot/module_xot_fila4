<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ExtraResource\Pages;

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
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
use Modules\Xot\Filament\Resources\ExtraResource;
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
use Filament\Actions\BulkAction;
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
=======
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
>>>>>>> f1d4085 (.)
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\ExtraResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
/**
 * @see ExtraResource
 */
class ListExtras extends XotBaseListRecords
{
    protected static string $resource = ExtraResource::class;

<<<<<<< HEAD
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->label('ID'),
            'model_type' => TextColumn::make('model_type')->searchable()->label('Model Type'),
            'model_id' => TextColumn::make('model_id')->sortable()->label('Model ID'),
            'extra_attributes' => TextColumn::make('extra_attributes')->searchable()->label('Extra Attributes'),
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

            'model_type' => TextColumn::make('model_type')
                ->searchable()
                ->label('Model Type'),

            'model_id' => TextColumn::make('model_id')
                ->sortable()
                ->label('Model ID'),

            'extra_attributes' => TextColumn::make('extra_attributes')
                ->searchable()
                ->label('Extra Attributes'),
>>>>>>> f1d4085 (.)
        ];
    }

    /**
     * @return array<BaseFilter>
     */
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
    public function getTableFilters(): array
    {
        return [];
    }

    /**
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
    public function getTableActions(): array
    {
        return [
            'edit' => EditAction::make(),
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
    #[Override]
=======
     * @return array<string, \Filament\Actions\BulkAction>
     */
>>>>>>> f1d4085 (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
