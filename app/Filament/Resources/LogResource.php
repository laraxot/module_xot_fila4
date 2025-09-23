<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Form;
=======
use Filament\Schemas\Schema;
>>>>>>> 518e053 (.)
use Override;
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
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Models\Log;

class LogResource extends XotBaseResource
{
    use NavigationLabelTrait;

    protected static null|string $model = Log::class;

<<<<<<< HEAD
=======
    /**
     * @return array<int, \Filament\Support\Components\Component>
     */
>>>>>>> 518e053 (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'name' => TextInput::make('name')->required()->maxLength(255),
            'path' => TextInput::make('path')->required()->maxLength(255),
            'content' => Textarea::make('content')->columnSpanFull(),
        ];
    }

    public static function infolist(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
    {
        return $form->components([
=======
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('path')->required()->maxLength(255),
            Textarea::make('content')->columnSpanFull(),
        ];
    }

    public static function getInfolistSchema(): array
    {
        return [
>>>>>>> 518e053 (.)
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
<<<<<<< HEAD
        ]);
    }

=======
        ];
    }


>>>>>>> 518e053 (.)
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
