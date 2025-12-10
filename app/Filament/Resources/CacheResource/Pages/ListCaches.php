<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\CacheResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\CreateAction;
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
use Filament\Actions\CreateAction;
=======
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
>>>>>>> f1d4085 (.)
=======
use Filament\Actions\Action;
use Override;
use Filament\Actions\CreateAction;
>>>>>>> 73eab74 (.)
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
=======
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
=======
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
>>>>>>> f1d4085 (.)
=======
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
use Filament\Actions\CreateAction;
=======
use Filament\Actions\CreateAction;
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
use Filament\Actions\CreateAction;
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Filament\Actions;
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
>>>>>>> 5a14301c (.)
=======
use Override;
use Filament\Actions\CreateAction;
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Filament\Actions;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
    public function getTableColumns(): array
    {
        return [
            'key' => TextColumn::make('key')
                ->searchable()
                ->sortable()
                ->wrap()
                ->label('Key'),
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            'value' => TextColumn::make('value')
                ->searchable()
                ->wrap()
                ->label('Value'),
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            'expiration' => TextColumn::make('expiration')
                ->dateTime()
                ->sortable()
                ->label('Expiration'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getTableColumns()),
        ];
    }

    /**
     * @return array<string, Action>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
    protected function getHeaderActions(): array
    {
        return [
            'create' => CreateAction::make(),
            'route_list' => ArtisanHeaderAction::make('route:list'),
            'icons_cache' => ArtisanHeaderAction::make('icons:cache'),
            'filament_cache_components' => ArtisanHeaderAction::make('filament:cache-components'),
            'filament_clear_cached_components' => ArtisanHeaderAction::make('filament:clear-cached-components'),
        ];
    }
}
