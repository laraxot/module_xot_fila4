<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Modules\Xot\Filament\Resources\LogResource;

use function Safe\json_encode;

class ViewLog extends XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
    protected function getInfolistSchema(): array
    {
        $log = $this->getRecord()->getModel();
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                ]),
            ]),
<<<<<<< HEAD
=======
            'log_info' => Section::make('Informazioni Log')
                ->schema([
                    'log_grid' => Grid::make(['default' => 3])
                        ->schema([
                            'id' => TextEntry::make('id'),
                            'message' => TextEntry::make('message'),
                            'level' => TextEntry::make('level'),
                            'level_name' => TextEntry::make('level_name'),
                            'channel' => TextEntry::make('channel'),
                            'datetime' => TextEntry::make('datetime')
                                ->dateTime(),
                            'context' => TextEntry::make('context')
                                ->formatStateUsing(fn ($state) => json_encode($state, JSON_PRETTY_PRINT)),
                            'extra' => TextEntry::make('extra')
                                ->formatStateUsing(fn ($state) => json_encode($state, JSON_PRETTY_PRINT)),
                        ]),
                ]),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        ];
    }
}
