<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Support\Components\Component;
use Illuminate\Database\Eloquent\Model;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
>>>>>>> 5a14301c (.)
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
=======
=======

=======
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> b93ef594b4 (.)
=======

use Filament\Forms\Form;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

abstract class XotBaseEditRecord extends FilamentEditRecord
{
    use TransTrait;

<<<<<<< HEAD
=======
    /**
     * Configure the form.
     *
<<<<<<< HEAD
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
=======
     * @param \Filament\Schemas\Schema $form The form instance to configure
     * @return \Filament\Schemas\Schema The configured form
>>>>>>> a12f125f4a (.)
=======
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     */
    public function form(Schema $form): Schema
    {
        $schema = $this->getFormSchema();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
     * @param Form $form The form instance to configure
     * @return Form The configured form
     */
    public function form(Form $form): Form
    {
        $schema = $this->getFormSchema();
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if (empty($schema)) {
            $resource = $this->getResource();
            $schema = $resource::getFormSchema();
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, Component>|array<Component> $validSchema */
        $validSchema = $schema;

        return $form->components($validSchema);
    }

    /**
     * Get the form schema.
     *
     * @return array<string|int, Component>|array<Component>
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, Component>|array<Component> $validSchema */
        $validSchema = $schema;

        return $form->components($validSchema);
    }

    /**
     * Get the form schema.
     *
<<<<<<< HEAD
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string|int, Component>|array<Component>
>>>>>>> b93ef594b4 (.)
=======
        
        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component> $validSchema */
        $validSchema = $schema;
        
        return $form->schema($validSchema);
    }
    
    /**
     * Get the form schema.
     *
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    protected function getFormSchema(): array
    {
        return [];
    }

>>>>>>> 5a14301c (.)
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function getNavigationIcon(): string
    {
        return static::transFunc(__FUNCTION__);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
}
