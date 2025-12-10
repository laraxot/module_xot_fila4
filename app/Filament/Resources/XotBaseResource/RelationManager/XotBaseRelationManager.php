<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\XotBaseResource\RelationManager;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Components\Component;
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
=======
use Exception;
use Filament\Forms\Components\Component;
>>>>>>> 71586de2 (.)
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
<<<<<<< HEAD
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
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
>>>>>>> ed734516 (.)
=======
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
=======
use Exception;
use Filament\Forms\Components\Component;
>>>>>>> 71586de2 (.)
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
=======
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Exception;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
=======
use Filament\Schemas\Schema;
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
>>>>>>> b93ef594b4 (.)
use Exception;
=======
use Filament\Forms\Form;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 53d6a6ba (.)
use Webmozart\Assert\Assert;
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
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)

/**
<<<<<<< HEAD
 * @property class-string<XotBaseResource> $resource
=======
<<<<<<< HEAD
 * @property class-string<XotBaseResource> $resource
=======
 * @property class-string<\Modules\Xot\Filament\Resources\XotBaseResource> $resource
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 */
abstract class XotBaseRelationManager extends RelationManager
{
    use HasXotTable;

    protected static string $relationship = '';

    /**
<<<<<<< HEAD
     * @var class-string<XotBaseResource>
=======
<<<<<<< HEAD
     * @var class-string<XotBaseResource>
=======
     * @var class-string<\Modules\Xot\Filament\Resources\XotBaseResource>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    protected static string $resource;

    public static function getModuleName(): string
    {
        return Str::between(static::class, 'Modules\\', '\Filament');
    }

    public static function getNavigationLabel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return __(static::class.'.navigation.label');
=======
        return static::transFunc(__FUNCTION__);
>>>>>>> 5a14301c (.)
=======
        return static::transFunc(__FUNCTION__);
>>>>>>> 5a14301c (.)
=======
        return static::transFunc(__FUNCTION__);
>>>>>>> 5a14301c (.)
=======
        return static::transFunc(__FUNCTION__);
>>>>>>> 5a14301c (.)
=======
        return static::transFunc(__FUNCTION__);
>>>>>>> 5a14301c (.)
=======
        return static::transFunc(__FUNCTION__);
>>>>>>> 5a14301c (.)
    }

    public static function getNavigationGroup(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return __(static::class.'.navigation.group');
    }

    // final public function form(Schema $schema): Schema
    // {
    //     return $schema->components($this->getFormSchema());
    // }
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
        return static::transFunc(__FUNCTION__);
    }

    protected static function getPluralModelLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

<<<<<<< HEAD
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
=======
<<<<<<< HEAD
    final public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema());
=======
        return $schema
            ->components($this->getFormSchema());
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getFormSchema());
>>>>>>> b93ef594b4 (.)
=======
    final public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

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
    /**
     * Get form schema.
     *
<<<<<<< HEAD
     * @return array<string|int, Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string|int, Component>
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string|int, Component>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string|int, \Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    final public function getFormSchema(): array
=======
    public function getFormSchema(): array
>>>>>>> 5a14301c (.)
=======
    public function getFormSchema(): array
>>>>>>> 5a14301c (.)
=======
    public function getFormSchema(): array
>>>>>>> 5a14301c (.)
=======
    public function getFormSchema(): array
>>>>>>> 5a14301c (.)
=======
    public function getFormSchema(): array
>>>>>>> 5a14301c (.)
=======
    public function getFormSchema(): array
>>>>>>> 5a14301c (.)
    {
        return $this->getResource()::getFormSchema();
    }

    /**
     * Get table columns.
     *
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [];

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
        // return $this->getResource()::getTableColumns();
    }

    protected static function getPluralModelLabel(): string
    {
        return __(static::class.'.plural_model_label');
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function getTableColumns(): array
    {
        return [];
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function getTableColumns(): array
    {
        return [];
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        //return $this->getResource()::getTableColumns();
>>>>>>> 5a14301c (.)
=======
        //return $this->getResource()::getTableColumns();
>>>>>>> 5a14301c (.)
=======
        //return $this->getResource()::getTableColumns();
>>>>>>> 5a14301c (.)
=======
        //return $this->getResource()::getTableColumns();
>>>>>>> 5a14301c (.)
=======
        //return $this->getResource()::getTableColumns();
>>>>>>> 5a14301c (.)
=======
        //return $this->getResource()::getTableColumns();
>>>>>>> 5a14301c (.)
    }

    // public function table(Table $table): Table
    // {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
=======

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

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    // /**
    //  * Get table columns.
    //  *
    //  * @return array<string, Tables\Columns\Column>
    //  */
    // protected function getTableColumns(): array
    // {
    //     return [];
    // }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    /**
     * Get the resource class.
     *
     * @return class-string<XotBaseResource>
<<<<<<< HEAD
=======
=======


    /**
     * Get the resource class.
     *
     * @return class-string<\Modules\Xot\Filament\Resources\XotBaseResource>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    protected function getResource(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        // Get the resource class via parent method first
        try {
            // @phpstan-ignore staticMethod.notFound
            $parentResource = parent::getResource();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            if (is_subclass_of($parentResource, XotBaseResource::class)) {
                /** @var class-string<XotBaseResource> $parentResource */
                return $parentResource;
            }
        } catch (Exception $e) {
            // Fallback if parent method fails
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            if (is_subclass_of($parentResource, \Modules\Xot\Filament\Resources\XotBaseResource::class)) {
                /** @var class-string<\Modules\Xot\Filament\Resources\XotBaseResource> $parentResource */
                return $parentResource;
            }
        } catch (\Exception $e) {
            // Fallback if parent method fails
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Fallback: derive the resource class name from the relation manager name
        $class = get_class($this);
        $resource_name = Str::of(class_basename($this))
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
            ->beforeLast('RelationManager')
            ->singular()
            ->append('Resource')
            ->toString();
        $ns = Str::of($class)
            ->before('Resources\\')
            ->append('Resources\\')
            ->toString();
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
        $resourceClass = $ns.$resourceName;

        if (! class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }

        if (! is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
        }

        /** @var class-string<XotBaseResource> $resourceClass */
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
        $resourceClass = $ns . '\\' . $resource_name;

        if (!class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }

<<<<<<< HEAD
        if (!is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
=======
=======
        $resourceClass = $ns.'\\'.$resource_name;
        
        if (!class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }
        
>>>>>>> a12f125f4a (.)
=======
        $resourceClass = $ns . '\\' . $resource_name;

        if (!class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }

>>>>>>> b93ef594b4 (.)
        if (!is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
=======
        $resourceClass = $ns.'\\'.$resource_name;
        
        if (!class_exists($resourceClass)) {
            throw new \Exception("Cannot find resource class {$resourceClass}");
        }
        
        if (!is_subclass_of($resourceClass, \Modules\Xot\Filament\Resources\XotBaseResource::class)) {
            throw new \Exception("{$resourceClass} must extend XotBaseResource");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

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
        return $resourceClass;
    }
}
