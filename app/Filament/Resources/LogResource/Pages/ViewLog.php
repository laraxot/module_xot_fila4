<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Modules\Xot\Filament\Resources\LogResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> laraxot/develop
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\LogResource;

use function Safe\json_encode;

=======
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

use function Safe\json_encode;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
class ViewLog extends XotBaseViewRecord
{
    protected static string $resource = LogResource::class;

<<<<<<< HEAD
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
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
=======
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
=======
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
=======
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
        return [
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
=======
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return [
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
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return [
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return [
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
        return [
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
        return [
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
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn ($state) => json_encode($state, JSON_PRETTY_PRINT),
<<<<<<< HEAD
=======
=======
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
=======
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
=======
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
                    'extra' => TextEntry::make('extra')->formatStateUsing(
                        fn($state) => json_encode($state, JSON_PRETTY_PRINT),
                    ),
<<<<<<< HEAD
                ]),
            ]),
=======
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
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> laraxot/develop
        ];
    }
}
