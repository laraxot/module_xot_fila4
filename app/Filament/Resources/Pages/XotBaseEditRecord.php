<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
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
use Modules\Xot\Filament\Traits\TransTrait;
=======
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
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> laraxot/develop

abstract class XotBaseEditRecord extends FilamentEditRecord
{
    use TransTrait;

<<<<<<< HEAD
    /**
     * Configure the form.
     *
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
     */
    public function form(Schema $form): Schema
    {
        $schema = $this->getFormSchema();
<<<<<<< HEAD

=======
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
>>>>>>> laraxot/develop
        if (empty($schema)) {
            $resource = $this->getResource();
            $schema = $resource::getFormSchema();
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, Component>|array<Component> $validSchema */
        $validSchema = $schema;

        return $form->components($validSchema);
    }

    /**
     * Get the form schema.
     *
<<<<<<< HEAD
     * @return array<int, \Filament\Support\Components\Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, \Filament\Support\Components\Component>
=======
     * @return array<string|int, Component>|array<Component>
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> laraxot/develop
        
        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component> $validSchema */
        $validSchema = $schema;
        
        return $form->components($validSchema);
<<<<<<< HEAD
        

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> laraxot/develop
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
     * @return array<string|int, Component>|array<Component>
=======
<<<<<<< HEAD
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string|int, Component>|array<Component>
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> laraxot/develop
        
        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component> $validSchema */
        $validSchema = $schema;
        
        return $form->schema($validSchema);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
    }
    
    /**
     * Get the form schema.
     *
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @return array<string|int, Component>|array<Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @return array<string|int, Component>|array<Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @return array<string|int, Component>|array<Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @return array<string|int, Component>|array<Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
     * @return array<string|int, \Filament\Forms\Components\Component>|array<\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
     */
    protected function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function getNavigationIcon(): string
    {
        return static::transFunc(__FUNCTION__);
    }
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop

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
<<<<<<< HEAD







    public static function canDelete(Model $record): bool
    {
        $resource = static::$resource;

        $result = $resource::canDelete($record);
=======
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

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
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======

>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======

>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======

>>>>>>> f1d4085 (.)
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
    public static function canDelete(Model $record): bool
    {
        $resource = static::$resource;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $result = $resource::canDelete($record);
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop

        $result = $resource::canDelete($record);

        return is_bool($result) ? $result : false;
    }

    public static function canForceDelete(Model $record): bool
    {
        $resource = static::$resource;
<<<<<<< HEAD

        $result = $resource::canForceDelete($record);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $result = $resource::canForceDelete($record);
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop

        $result = $resource::canForceDelete($record);

        return is_bool($result) ? $result : false;
    }

    public static function canRestore(Model $record): bool
    {
        $resource = static::$resource;
<<<<<<< HEAD

        $result = $resource::canRestore($record);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $result = $resource::canRestore($record);
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
>>>>>>> laraxot/develop

        $result = $resource::canRestore($record);

        return is_bool($result) ? $result : false;
    }
<<<<<<< HEAD


=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 5a14301c (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======

>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
}
