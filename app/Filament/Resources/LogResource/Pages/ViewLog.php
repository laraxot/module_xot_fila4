<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Modules\Xot\Filament\Resources\LogResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Modules\Xot\Filament\Resources\LogResource;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

use function Safe\json_encode;

class ViewLog extends XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * @return array<int, \Filament\Support\Components\Component>
     */
>>>>>>> 518e053 (.)
=======
    /**
     * @return array<int, \Filament\Support\Components\Component>
     */
>>>>>>> 6163c49 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
    #[Override]
=======
>>>>>>> f1d4085 (.)
    protected function getInfolistSchema(): array
    {
        $log = $this->getRecord()->getModel();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return [
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
            'log_info' => Section::make('Informazioni Log')->schema([
                'log_grid' => Grid::make(['default' => 3])->schema([
                    'id' => TextEntry::make('id'),
                    'message' => TextEntry::make('message'),
                    'level' => TextEntry::make('level'),
                    'level_name' => TextEntry::make('level_name'),
                    'channel' => TextEntry::make('channel'),
                    'datetime' => TextEntry::make('datetime')->dateTime(),
                    'context' => TextEntry::make('context')->formatStateUsing(
<<<<<<< HEAD
<<<<<<< HEAD
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
=======
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
=======
            Section::make('Informazioni Log')->schema([
                Grid::make(['default' => 3])->schema([
                    TextEntry::make('id'),
                    TextEntry::make('message'),
                    TextEntry::make('level'),
                    TextEntry::make('level_name'),
                    TextEntry::make('channel'),
                    TextEntry::make('datetime')->dateTime(),
                    TextEntry::make('context')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    TextEntry::make('extra')->formatStateUsing(
>>>>>>> 518e053 (.)
=======
            Section::make('Informazioni Log')->schema([
                Grid::make(['default' => 3])->schema([
                    TextEntry::make('id'),
                    TextEntry::make('message'),
                    TextEntry::make('level'),
                    TextEntry::make('level_name'),
                    TextEntry::make('channel'),
                    TextEntry::make('datetime')->dateTime(),
                    TextEntry::make('context')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    TextEntry::make('extra')->formatStateUsing(
>>>>>>> 6163c49 (.)
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
>>>>>>> 5a14301c (.)
                    ),
=======
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
>>>>>>> 5a14301c (.)
                ]),
            ]),
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
        ];
    }
}
