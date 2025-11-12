<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

<<<<<<< HEAD
use Filament\Infolists\Components\TextEntry;
=======
<<<<<<< HEAD
use Filament\Support\Components\Component;
use Filament\Schemas\Components\Section;
>>>>>>> 3df5f27e (.)
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Support\Components\Component;
use Modules\Xot\Filament\Resources\LogResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
>>>>>>> 54cbe5d (.)
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Modules\Xot\Filament\Resources\LogResource;
>>>>>>> 3df5f27e (.)

use function Safe\json_encode;

class ViewLog extends XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

<<<<<<< HEAD
    /**
     * @return array<int, Component>
     */
=======
>>>>>>> 54cbe5d (.)
    #[Override]
    protected function getInfolistSchema(): array
    {
        $log = $this->getRecord()->getModel();

        return [
<<<<<<< HEAD
            Section::make('Informazioni Log')->schema([
                Grid::make(['default' => 3])->schema([
                    TextEntry::make('id'),
                    TextEntry::make('message'),
                    TextEntry::make('level'),
                    TextEntry::make('level_name'),
                    TextEntry::make('channel'),
                    TextEntry::make('datetime')->dateTime(),
                    TextEntry::make('context')->formatStateUsing(
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    TextEntry::make('extra')->formatStateUsing(
<<<<<<< HEAD
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
=======
=======
            'log_info' => Section::make('Informazioni Log')->schema([
                'log_grid' => Grid::make(['default' => 3])->schema([
                    'id' => TextEntry::make('id'),
                    'message' => TextEntry::make('message'),
                    'level' => TextEntry::make('level'),
                    'level_name' => TextEntry::make('level_name'),
                    'channel' => TextEntry::make('channel'),
                    'datetime' => TextEntry::make('datetime')->dateTime(),
                    'context' => TextEntry::make('context')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
>>>>>>> 54cbe5d (.)
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
>>>>>>> 3df5f27e (.)
                    ),
                ]),
            ]),
        ];
    }
}
