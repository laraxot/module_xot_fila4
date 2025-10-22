<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Support\Components\Component;
use Modules\Xot\Filament\Infolists\Components\FileContentEntry;
use Modules\Xot\Filament\Resources\LogResource\Pages;
use Modules\Xot\Filament\Resources\LogResource\Pages\CreateLog;
use Modules\Xot\Filament\Resources\LogResource\Pages\ListLogs;
use Modules\Xot\Filament\Resources\LogResource\Pages\ViewLog;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;
use Override;

class LogResource extends XotBaseResource
{
    use NavigationLabelTrait;

    protected static ?string $model = Log::class;

    /**
<<<<<<< HEAD
     * @return array<string, Component>
=======
     * @return array<int, Component>
>>>>>>> 754c528 (.)
     */
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'name' => TextInput::make('name')->required()->maxLength(255),
            'path' => TextInput::make('path')->required()->maxLength(255),
            'content' => Textarea::make('content')->columnSpanFull(),
=======
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('path')->required()->maxLength(255),
            Textarea::make('content')->columnSpanFull(),
>>>>>>> 754c528 (.)
        ];
    }

    public static function getInfolistSchema(): array
    {
        return [
<<<<<<< HEAD
            'name' => TextEntry::make('name')->columnSpanFull(),
=======
            TextEntry::make('name')->columnSpanFull(),
>>>>>>> 754c528 (.)
            /*
             * Infolists\Components\TextEntry::make('email')
             * ->columnSpanFull(),
             *
             * Infolists\Components\TextEntry::make('message')
             * ->formatStateUsing(static fn ($state) => new HtmlString(nl2br($state)))
             * ->columnSpanFull(),
             */
<<<<<<< HEAD
            'file-content' => FileContentEntry::make('file-content'),
=======
            FileContentEntry::make('file-content'),
>>>>>>> 754c528 (.)
            /*
             * RepeatableEntry::make('lines')
             * ->schema([
             * TextEntry::make('txt'),
             * ])
             */
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
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
