<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Modules\Xot\Filament\Resources\LogResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
use Override;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Modules\Xot\Filament\Resources\LogResource;

use function Safe\json_encode;

use Modules\Xot\Filament\Resources\LogResource;

use function Safe\json_encode;

class ViewLog extends XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

    /**
     * @return array<int, \Filament\Support\Components\Component>
     */
    #[Override]
    protected function getInfolistSchema(): array
    {
        $log = $this->getRecord()->getModel();

        return [
        return [
        return [
        return [
        return [
    /**
     * @return array<int, \Filament\Support\Components\Component>
     */
    #[Override]
    #[Override]
    #[Override]
class ViewLog extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

    protected function getInfolistSchema(): array
    {
        $log = $this->getRecord()->getModel();

        return [
        return [
        return [
        return [
        return [
        return [
            'log_info' => Section::make('Informazioni Log')->schema([
                'log_grid' => Grid::make(['default' => 3])->schema([
                    'id' => TextEntry::make('id'),
                    'message' => TextEntry::make('message'),
                    'level' => TextEntry::make('level'),
                    'level_name' => TextEntry::make('level_name'),
                    'channel' => TextEntry::make('channel'),
                    'datetime' => TextEntry::make('datetime')->dateTime(),
                    'context' => TextEntry::make('context')->formatStateUsing(
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
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
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
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
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                ]),
            ]),
                ]),
            ]),
                ]),
            ]),
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
                ]),
            ]),
        ];
    }
}
