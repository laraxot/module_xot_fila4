<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

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
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
<<<<<<< HEAD
=======
=======
use Filament\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Grid;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Modules\Xot\Filament\Resources\LogResource;
>>>>>>> 5a14301c (.)

use function Safe\json_encode;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
class ViewLog extends XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
class ViewLog extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    protected function getInfolistSchema(): array
    {
        $log = $this->getRecord()->getModel();
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
=======
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
>>>>>>> 5a14301c (.)
                    ),
<<<<<<< HEAD
                ]),
            ]),
=======
<<<<<<< HEAD
                ]),
            ]),
=======
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                ]),
            ]),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }
}
