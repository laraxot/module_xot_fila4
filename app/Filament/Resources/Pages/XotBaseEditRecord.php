<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Component;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;

abstract class XotBaseEditRecord extends FilamentEditRecord
{
    use TransTrait;

    /**
     * Get the form schema.
     *
     * @return array<int, \Filament\Support\Components\Component>
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

    protected function getHeaderActions(): array
    {
        
        return [
            'delete' => Actions\DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->visible(fn(Model $record) => static::canDelete($record)),
            /*
            'forceDelete' => Actions\ForceDeleteAction::make()
                ->icon('heroicon-o-trash')
                ->visible(fn(Model $record) => static::canForceDelete($record)),
            'restore' => Actions\RestoreAction::make()
                ->icon('heroicon-o-trash')
                ->visible(fn(Model $record) => static::canRestore($record)),
            // ...
            */
        ];
    }

    public static function canDelete(Model $record): bool
    {
        $resource=static::$resource;
        return $resource::canDelete($record);
    }
    
    public static function canForceDelete(Model $record): bool
    {
        $resource=static::$resource;
        return $resource::canForceDelete($record);
    }
    
    public static function canRestore(Model $record): bool
    {
        $resource=static::$resource;
        return $resource::canRestore($record);
    }
}
