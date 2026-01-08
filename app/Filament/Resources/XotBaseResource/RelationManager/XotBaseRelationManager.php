<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\XotBaseResource\RelationManager;

<<<<<<< HEAD
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
use Filament\Support\Components\Component;
>>>>>>> 285375c74 (.)
use Exception;
use Filament\Resources\RelationManagers\RelationManager;
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
>>>>>>> dc2130a7c (.)
use Filament\Support\Components\Component;
use Filament\Tables;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Schema;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
>>>>>>> 3fbbf1f5 (.)
use Exception;
=======
>>>>>>> cc7fb225 (.)
=======
use Exception;
use Filament\Forms\Components\Component;
>>>>>>> 53d6a6ba (.)
=======
use Exception;
use Filament\Forms\Components\Component;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> dc2130a7c (.)

/**
 * @property class-string<XotBaseResource> $resource
 */
abstract class XotBaseRelationManager extends RelationManager
{
    use HasXotTable;

    protected static string $relationship = '';

    /**
     * @var class-string<XotBaseResource>
     */
    protected static string $resource;

    public static function getModuleName(): string
    {
        return Str::between(static::class, 'Modules\\', '\Filament');
    }

    public static function getNavigationLabel(): string
    {
        return __(static::class.'.navigation.label');
    }

    public static function getNavigationGroup(): string
    {
        return __(static::class.'.navigation.group');
    }

    // final public function form(Schema $schema): Schema
    // {
    //     return $schema->components($this->getFormSchema());
    // }
    /**
     * Get form schema.
     *
     * @return array<string|int, \Filament\Schemas\Components\Component>
     */
    final public function getFormSchema(): array
    {
        /** @var array<string|int, \Filament\Schemas\Components\Component> */
        return $this->getResource()::getFormSchema();
    }

    /**
     * Get table columns.
     *
     * @return array<string, Tables\Columns\Column>
     */
    #[\Override]
    /**
     * @return array<string, mixed>
     */
    public function getTableColumns(): array
    {
        return [];

        // return $this->getResource()::getTableColumns();
    }

    protected static function getPluralModelLabel(): string
    {
        return __(static::class.'.plural_model_label');
    }

    // public function table(Table $table): Table
    // {
    //     /** @var class-string<Model> $resource */
    //     $resource = $this->getResource();
    //     Assert::classExists($resource);
    //     if (method_exists($resource, 'getTableColumns')) {
    //         /** @var array<string, Tables\Columns\Column> $columns */
    //         $columns = $resource::getTableColumns();
    //         return $table->columns($columns);
    //     }
    //     return $table->columns($this->getTableColumns());
    // }
    // /**
    //  * Get table columns.
    //  *
    //  * @return array<string, Tables\Columns\Column>
    //  */
    // protected function getTableColumns(): array
    // {
    //     return [];
    // }
    /**
     * Get the resource class.
     *
     * @return class-string<XotBaseResource>
     */
    protected function getResource(): string
    {
        // Use static property if available
        if (isset(static::$resource) && is_string(static::$resource)) {
            if (is_subclass_of(static::$resource, XotBaseResource::class)) {
                /** @var class-string<XotBaseResource> */
                return static::$resource;
            }
        }

        // Fallback: derive the resource class name from the relation manager name
        $class = static::class;
        $resourceName = Str::of(class_basename($this))
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
        // Get the resource class via parent method first
        try {
            // @phpstan-ignore staticMethod.notFound
            $parentResource = parent::getResource();
            if (is_string($parentResource) && is_subclass_of($parentResource, XotBaseResource::class)) {
                /* @var class-string<XotBaseResource> $parentResource */
                return $parentResource;
            }
        } catch (\Exception $e) {
            // Fallback if parent method fails
        }

        // Fallback: derive the resource class name from the relation manager name
        $class = get_class($this);
        $resource_name = Str::of(class_basename($this))
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 8b18e4bff (.)
            ->beforeLast('RelationManager')
            ->singular()
            ->append('Resource')
            ->toString();
        $ns = Str::of($class)
            ->before('Resources\\')
            ->append('Resources\\')
            ->toString();
        $resourceClass = $ns.$resourceName;

        if (! class_exists($resourceClass)) {
<<<<<<< HEAD
            throw new Exception("Cannot find resource class {$resourceClass}");
        }

        if (! is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
=======
            throw new \Exception("Cannot find resource class {$resourceClass}");
        }

        if (! is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new \Exception("{$resourceClass} must extend XotBaseResource");
>>>>>>> a6ef6dc7 (.)
        }

        /** @var class-string<XotBaseResource> $resourceClass */
        return $resourceClass;
    }
}
