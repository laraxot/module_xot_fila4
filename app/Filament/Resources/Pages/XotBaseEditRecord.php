<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

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
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;
use Filament\Support\Components\Component;
use Illuminate\Database\Eloquent\Model;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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

abstract class XotBaseEditRecord extends FilamentEditRecord
{
    use TransTrait;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    /**
     * Configure the form.
     *
     * @param Schema $form The form instance to configure
     * @return Schema The configured form
     */
    public function form(Schema $form): Schema
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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
        
        // Ensure schema is properly typed for PHPStan level 10
        /** @var array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component> $validSchema */
        $validSchema = $schema;
        
        return $form->components($validSchema);
=======
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
>>>>>>> 399f46d3 (.)
    }
    
    /**
     * Get the form schema.
     *
<<<<<<< HEAD
     * @return array<string|int, \Filament\Schemas\Components\Component>|array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
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
     */
    protected function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
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
}
