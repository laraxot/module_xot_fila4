<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Filament\Schemas\Schema;
use Modules\Xot\Filament\Resources\LogResource\Pages\ListLogs;
use Modules\Xot\Filament\Resources\LogResource\Pages\CreateLog;
use Modules\Xot\Filament\Resources\LogResource\Pages\ViewLog;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Modules\Xot\Filament\Infolists\Components\FileContentEntry;
use Modules\Xot\Filament\Resources\LogResource\Pages;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> f1d4085 (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
>>>>>>> 73eab74 (.)

class LogResource extends XotBaseResource
{
    use NavigationLabelTrait;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    protected static null|string $model = Log::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required()->maxLength(255),
            'path' => TextInput::make('path')->required()->maxLength(255),
            'content' => Textarea::make('content')->columnSpanFull(),
<<<<<<< HEAD
=======
    protected static ?string $model = Log::class;

    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),

            'path' => TextInput::make('path')
                ->required()
                ->maxLength(255),

            'content' => Textarea::make('content')
                ->columnSpanFull(),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        ];
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            TextEntry::make('name')->columnSpanFull(),
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

    #[Override]
<<<<<<< HEAD
=======
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

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListLogs::route('/'),
            'create' => CreateLog::route('/create'),
            // 'edit' => Pages\EditLog::route('/{record}/edit'),
            'view' => ViewLog::route('/{record}'),
        ];
    }
}
