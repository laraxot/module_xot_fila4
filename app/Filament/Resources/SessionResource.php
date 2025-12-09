<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Support\Components\Component;
use Modules\Xot\Models\Session;
use Override;

class SessionResource extends XotBaseResource
{
    protected static ?string $model = Session::class;

    /**
     * @return array<int, Component>
     */
=======
use Override;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Resources\SessionResource\Pages;
use Modules\Xot\Models\Session;

class SessionResource extends XotBaseResource
{
    protected static null|string $model = Session::class;

>>>>>>> 5a14301c (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            TextInput::make('id')->required()->maxLength(255),
            TextInput::make('user_id')->numeric(),
            TextInput::make('ip_address')->maxLength(45),
            TextInput::make('user_agent')->maxLength(255),
            KeyValue::make('payload')->columnSpanFull(),
            TextInput::make('last_activity')->required()->numeric(),
=======
            'id' => TextInput::make('id')->required()->maxLength(255),
            'user_id' => TextInput::make('user_id')->numeric(),
            'ip_address' => TextInput::make('ip_address')->maxLength(45),
            'user_agent' => TextInput::make('user_agent')->maxLength(255),
            'payload' => KeyValue::make('payload')->columnSpanFull(),
            'last_activity' => TextInput::make('last_activity')->required()->numeric(),
>>>>>>> 5a14301c (.)
        ];
    }
}
