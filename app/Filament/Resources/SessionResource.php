<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Override;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Resources\SessionResource\Pages;
use Modules\Xot\Models\Session;

class SessionResource extends XotBaseResource
{
    protected static null|string $model = Session::class;

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
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'id' => TextInput::make('id')->required()->maxLength(255),
            'user_id' => TextInput::make('user_id')->numeric(),
            'ip_address' => TextInput::make('ip_address')->maxLength(45),
            'user_agent' => TextInput::make('user_agent')->maxLength(255),
            'payload' => KeyValue::make('payload')->columnSpanFull(),
            'last_activity' => TextInput::make('last_activity')->required()->numeric(),
=======
=======
>>>>>>> 6163c49 (.)
            TextInput::make('id')->required()->maxLength(255),
            TextInput::make('user_id')->numeric(),
            TextInput::make('ip_address')->maxLength(45),
            TextInput::make('user_agent')->maxLength(255),
            KeyValue::make('payload')->columnSpanFull(),
            TextInput::make('last_activity')->required()->numeric(),
<<<<<<< HEAD
>>>>>>> 518e053 (.)
=======
>>>>>>> 6163c49 (.)
        ];
    }
}
