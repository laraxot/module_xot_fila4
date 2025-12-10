<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

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
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Support\Components\Component;
use Modules\Xot\Filament\Infolists\Components\FileContentEntry;
use Modules\Xot\Filament\Resources\LogResource\Pages\CreateLog;
use Modules\Xot\Filament\Resources\LogResource\Pages\ListLogs;
use Modules\Xot\Filament\Resources\LogResource\Pages\ViewLog;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Override;
=======
use Override;
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Override;
=======
=======
use Override;
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
use Filament\Schemas\Schema;
use Modules\Xot\Filament\Resources\LogResource\Pages\ListLogs;
use Modules\Xot\Filament\Resources\LogResource\Pages\CreateLog;
use Modules\Xot\Filament\Resources\LogResource\Pages\ViewLog;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
<<<<<<< HEAD
use Modules\Xot\Filament\Infolists\Components\FileContentEntry;
use Modules\Xot\Filament\Resources\LogResource\Pages;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Infolists\Components\FileContentEntry;
use Modules\Xot\Filament\Resources\LogResource\Pages;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 399f46d3 (.)
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Infolists\Infolist;
use Modules\Xot\Filament\Infolists\Components\FileContentEntry;
use Modules\Xot\Filament\Resources\LogResource\Pages;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)

class LogResource extends XotBaseResource
{
    use NavigationLabelTrait;

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
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $model = Log::class;

    /**
     * @return array<string, Component>
     */
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    protected static null|string $model = Log::class;

>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = Log::class;

>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = Log::class;

>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = Log::class;

>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = Log::class;

>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = Log::class;

>>>>>>> 5a14301c (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required()->maxLength(255),
            'path' => TextInput::make('path')->required()->maxLength(255),
            'content' => Textarea::make('content')->columnSpanFull(),
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Log::class;
=======
    protected static null|string $model = Log::class;
>>>>>>> b93ef594b4 (.)

    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
    protected static ?string $model = Log::class;

    public static function getFormSchema(): array
    {
        return [
>>>>>>> origin/develop
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),

            'path' => TextInput::make('path')
                ->required()
                ->maxLength(255),

            'content' => Textarea::make('content')
                ->columnSpanFull(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'name' => TextInput::make('name')->required()->maxLength(255),
            'path' => TextInput::make('path')->required()->maxLength(255),
            'content' => Textarea::make('content')->columnSpanFull(),
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getInfolistSchema(): array
    {
        return [
            'name' => TextEntry::make('name')->columnSpanFull(),
=======
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
    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            TextEntry::make('name')->columnSpanFull(),
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
            /*
             * Infolists\Components\TextEntry::make('email')
             * ->columnSpanFull(),
             *
             * Infolists\Components\TextEntry::make('message')
             * ->formatStateUsing(static fn ($state) => new HtmlString(nl2br($state)))
             * ->columnSpanFull(),
             */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'file-content' => FileContentEntry::make('file-content'),
=======
            FileContentEntry::make('file-content'),
>>>>>>> 5a14301c (.)
=======
            FileContentEntry::make('file-content'),
>>>>>>> 5a14301c (.)
=======
            FileContentEntry::make('file-content'),
>>>>>>> 5a14301c (.)
=======
            FileContentEntry::make('file-content'),
>>>>>>> 5a14301c (.)
=======
            FileContentEntry::make('file-content'),
>>>>>>> 5a14301c (.)
=======
            FileContentEntry::make('file-content'),
>>>>>>> 5a14301c (.)
            /*
             * RepeatableEntry::make('lines')
             * ->schema([
             * TextEntry::make('txt'),
             * ])
             */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ];
=======
        ]);
>>>>>>> 5a14301c (.)
=======
        ]);
>>>>>>> 5a14301c (.)
=======
        ]);
>>>>>>> 5a14301c (.)
=======
        ]);
>>>>>>> 5a14301c (.)
=======
        ]);
>>>>>>> 5a14301c (.)
=======
        ]);
>>>>>>> 5a14301c (.)
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
=======
=======
            TextEntry::make('name')
                ->columnSpanFull(),
=======
            TextEntry::make('name')->columnSpanFull(),
>>>>>>> b93ef594b4 (.)
            /*
             * Infolists\Components\TextEntry::make('email')
             * ->columnSpanFull(),
             *
             * Infolists\Components\TextEntry::make('message')
             * ->formatStateUsing(static fn ($state) => new HtmlString(nl2br($state)))
             * ->columnSpanFull(),
             */
            FileContentEntry::make('file-content'),
            /*
             * RepeatableEntry::make('lines')
             * ->schema([
             * TextEntry::make('txt'),
             * ])
             */
        ]);
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public static function getPages(): array
    {
        return [
            'index' => ListLogs::route('/'),
            'create' => CreateLog::route('/create'),
            // 'edit' => Pages\EditLog::route('/{record}/edit'),
            'view' => ViewLog::route('/{record}'),
<<<<<<< HEAD
=======
=======
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make('name')
                ->columnSpanFull(),
            /*
            Infolists\Components\TextEntry::make('email')
                ->columnSpanFull(),

            Infolists\Components\TextEntry::make('message')
                ->formatStateUsing(static fn ($state) => new HtmlString(nl2br($state)))
                ->columnSpanFull(),
            */
            FileContentEntry::make('file-content'),
            /*
            RepeatableEntry::make('lines')
                ->schema([
                    TextEntry::make('txt'),
                ])
            */
        ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLogs::route('/'),
            'create' => Pages\CreateLog::route('/create'),
            // 'edit' => Pages\EditLog::route('/{record}/edit'),
            'view' => Pages\ViewLog::route('/{record}'),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }
}
