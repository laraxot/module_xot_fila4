<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\CacheResource\Pages;

<<<<<<< HEAD
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
use Override;
use Filament\Actions\CreateAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Override;
use Filament\Actions\CreateAction;
=======
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions\Action;
use Override;
use Filament\Actions\CreateAction;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Actions;
>>>>>>> 5a14301c (.)
=======
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
>>>>>>> 5a14301c (.)
=======
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
>>>>>>> 5a14301c (.)
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Actions\Header\ArtisanHeaderAction;
use Modules\Xot\Filament\Resources\CacheResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
use Modules\Xot\Filament\Widgets\Clock;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Filament\Widgets\Clock;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Filament\Widgets\Clock;
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * @see CacheResource
 */
class ListCaches extends XotBaseListRecords
{
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = CacheResource::class;

    public function getHeaderWidgets(): array
    {
        return [
            // Clock::make(),
        ];
    }

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
    public function getTableColumns(): array
    {
        return [
            'key' => TextColumn::make('key')
                ->searchable()
                ->sortable()
                ->wrap()
                ->label('Key'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            'value' => TextColumn::make('value')
                ->searchable()
                ->wrap()
                ->label('Value'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            'expiration' => TextColumn::make('expiration')
                ->dateTime()
                ->sortable()
                ->label('Expiration'),
        ];
    }

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
<<<<<<< HEAD
     * @return array<string, Action>
     */
    #[Override]
=======
<<<<<<< HEAD
     * @return array<string, Action>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    protected function getHeaderActions(): array
    {
        return [
            'create' => CreateAction::make(),
<<<<<<< HEAD
=======
=======
     * @return array<string, \Filament\Actions\Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            'create' => Actions\CreateAction::make(),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            'route_list' => ArtisanHeaderAction::make('route:list'),
            'icons_cache' => ArtisanHeaderAction::make('icons:cache'),
            'filament_cache_components' => ArtisanHeaderAction::make('filament:cache-components'),
            'filament_clear_cached_components' => ArtisanHeaderAction::make('filament:clear-cached-components'),
        ];
    }
}
