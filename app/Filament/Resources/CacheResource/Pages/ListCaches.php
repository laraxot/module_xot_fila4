<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\CacheResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Filament\Actions\Action;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions\CreateAction;
use Filament\Actions;
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
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Actions\Header\ArtisanHeaderAction;
use Modules\Xot\Filament\Resources\CacheResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Override;
use Modules\Xot\Filament\Widgets\Clock;
use Modules\Xot\Filament\Widgets\Clock;
use Modules\Xot\Filament\Widgets\Clock;
use Modules\Xot\Filament\Widgets\Clock;

use Override;
use Modules\Xot\Filament\Widgets\Clock;
use Modules\Xot\Filament\Widgets\Clock;
use Modules\Xot\Filament\Widgets\Clock;
use Modules\Xot\Filament\Widgets\Clock;
use Modules\Xot\Filament\Widgets\Clock;


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
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            'value' => TextColumn::make('value')
                ->searchable()
                ->wrap()
                ->label('Value'),
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            'expiration' => TextColumn::make('expiration')
                ->dateTime()
                ->sortable()
                ->label('Expiration'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
     * @return array<string, Action>
     */
    #[Override]
     * @return array<string, Action>
     */
    #[Override]
    #[Override]
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
