<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

<<<<<<< HEAD
use Filament\Support\Components\Component;
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
>>>>>>> 2850177 (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Modules\Xot\Filament\Resources\LogResource;

use function Safe\json_encode;

class ViewLog extends XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

<<<<<<< HEAD
    /**
     * @return array<int, Component>
     */
=======
>>>>>>> 2850177 (.)
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
>>>>>>> 2850177 (.)
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    TextEntry::make('extra')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                ]),
            ]),
        ];
    }
}
