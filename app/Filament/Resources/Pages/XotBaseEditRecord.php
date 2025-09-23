<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Forms\Components\Component;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Modules\Xot\Filament\Traits\TransTrait;

abstract class XotBaseEditRecord extends FilamentEditRecord
{
    use TransTrait;

    /**
     * Get the form schema.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string|int, Component>|array<Component>
=======
     * @return array<int, \Filament\Support\Components\Component>
>>>>>>> 518e053 (.)
=======
     * @return array<int, \Filament\Support\Components\Component>
>>>>>>> 6163c49 (.)
     */
    protected function getFormSchema(): array
    {
        return [];
    }

    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function getNavigationIcon(): string
    {
        return static::transFunc(__FUNCTION__);
    }
}
