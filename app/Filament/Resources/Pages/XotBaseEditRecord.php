<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Support\Components\Component;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
=======
>>>>>>> 551c768c4 (.)
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Modules\Xot\Filament\Traits\TransTrait;

use Filament\Forms\Form;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;

abstract class XotBaseEditRecord extends FilamentEditRecord
{
    use TransTrait;

<<<<<<< HEAD
    /**
     * Configure the form.
     *
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
    /**
     * Configure the form.
     *
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
     */
    public function form(Schema $form): Schema
    {
        $schema = $this->getFormSchema();




     * @param Form $form The form instance to configure
     * @return Form The configured form
     */
    public function form(Form $form): Form
    {
        $schema = $this->getFormSchema();
        
        if (empty($schema)) {
            $resource = $this->getResource();
            $schema = $resource::getFormSchema();
        }

        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, Component>|array<Component> $validSchema */
        $validSchema = $schema;

        return $form->components($validSchema);
    }

    /**
     * Get the form schema.
     *
     * @return array<int, \Filament\Support\Components\Component>
     * @return array<int, \Filament\Support\Components\Component>
        
        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component> $validSchema */
        $validSchema = $schema;
        
        return $form->components($validSchema);
        

        

        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, Component>|array<Component> $validSchema */
        $validSchema = $schema;

        return $form->components($validSchema);
    }

    /**
     * Get the form schema.
     *
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, Component>|array<Component>
        
        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component> $validSchema */
        $validSchema = $schema;
        
        return $form->schema($validSchema);
    }
    
    /**
     * Get the form schema.
     *
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     * @return array<string|int, Component>|array<Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
     */
    protected function getFormSchema(): array
    {
        return [];
    }

=======
>>>>>>> 551c768c4 (.)
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function getNavigationIcon(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function canDelete(Model $record): bool
    {
        $resource = static::$resource;

        $result = $resource::canDelete($record);

        return is_bool($result) ? $result : false;
    }

    public static function canForceDelete(Model $record): bool
    {
        $resource = static::$resource;

        $result = $resource::canForceDelete($record);

        return is_bool($result) ? $result : false;
    }

    public static function canRestore(Model $record): bool
    {
        $resource = static::$resource;

        $result = $resource::canRestore($record);

        return is_bool($result) ? $result : false;
    }

    /**
     * Get the form schema.
     *
     * @return array<int, Component>
     */
    protected function getFormSchema(): array
    {
        return [];
    }

    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
=======

>>>>>>> a6ef6dc7 (.)
        return [
            'delete' => DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->visible(fn (Model $record) => static::canDelete($record)),
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
<<<<<<< HEAD







    public static function canDelete(Model $record): bool
    {
        $resource = static::$resource;
<<<<<<< HEAD

<<<<<<< HEAD
        $result = $resource::canDelete($record);







    public static function canDelete(Model $record): bool
    {
        $resource = static::$resource;

        $result = $resource::canDelete($record);

        $result = $resource::canDelete($record);

        return is_bool($result) ? $result : false;
=======
        return $resource::canDelete($record);
=======
        $result = $resource::canDelete($record);

        return is_bool($result) ? $result : false;
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    }

    public static function canForceDelete(Model $record): bool
    {
        $resource = static::$resource;
<<<<<<< HEAD

<<<<<<< HEAD
        $result = $resource::canForceDelete($record);

        $result = $resource::canForceDelete($record);

        $result = $resource::canForceDelete($record);

        return is_bool($result) ? $result : false;
=======
        return $resource::canForceDelete($record);
=======
        $result = $resource::canForceDelete($record);

        return is_bool($result) ? $result : false;
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    }

    public static function canRestore(Model $record): bool
    {
        $resource = static::$resource;
<<<<<<< HEAD

<<<<<<< HEAD
        $result = $resource::canRestore($record);

        $result = $resource::canRestore($record);

        $result = $resource::canRestore($record);

        return is_bool($result) ? $result : false;
=======
        return $resource::canRestore($record);
=======
        $result = $resource::canRestore($record);

        return is_bool($result) ? $result : false;
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    }






=======
>>>>>>> 551c768c4 (.)
}
