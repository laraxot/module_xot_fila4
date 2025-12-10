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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
use Filament\Support\Components\Component;
use Exception;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Exception;
use Exception;
use Filament\Forms\Components\Component;
<<<<<<< HEAD
use Exception;
use Filament\Forms\Components\Component;
use Exception;
use Filament\Forms\Components\Component;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Exception;
use Exception;
use Filament\Forms\Components\Component;
use Exception;
use Filament\Forms\Components\Component;
use Exception;
use Filament\Forms\Components\Component;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Exception;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
use Exception;
use Filament\Forms\Form;
=======
>>>>>>> 53d6a6ba (.)
=======
use Exception;
use Filament\Forms\Components\Component;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
use Webmozart\Assert\Assert;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transFunc(__FUNCTION__);
        return static::transFunc(__FUNCTION__);
        return static::transFunc(__FUNCTION__);
        return static::transFunc(__FUNCTION__);
        return __(static::class.'.navigation.label');
        return static::transFunc(__FUNCTION__);
        return static::transFunc(__FUNCTION__);
        return static::transFunc(__FUNCTION__);
        return static::transFunc(__FUNCTION__);
        return static::transFunc(__FUNCTION__);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    }

    public static function getNavigationGroup(): string
    {
        return __(static::class.'.navigation.group');
    }

    // final public function form(Schema $schema): Schema
    // {
    //     return $schema->components($this->getFormSchema());
    // }
<<<<<<< HEAD
<<<<<<< HEAD
        return static::transFunc(__FUNCTION__);
    }

    protected static function getPluralModelLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
    }

=======
>>>>>>> 414a4ffcb (.)
    /**
     * Get form schema.
     *
     * @return array<string|int, \Filament\Schemas\Components\Component>
     */
    final public function getFormSchema(): array
<<<<<<< HEAD
    public function getFormSchema(): array
    public function getFormSchema(): array
    public function getFormSchema(): array
    public function getFormSchema(): array
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
        return $schema->components($this->getFormSchema());
    final public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema());
    }

=======
>>>>>>> 551c768c4 (.)
    /**
     * Get form schema.
     *
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Forms\Components\Component>
     */
    final public function getFormSchema(): array
<<<<<<< HEAD
    public function getFormSchema(): array
    public function getFormSchema(): array
    public function getFormSchema(): array
    public function getFormSchema(): array
    public function getFormSchema(): array
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTableColumns(): array
    {
        return [];
    public function getTableColumns(): array
    {
        return [];
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
    public function getTableColumns(): array
    {
        return [];
    public function getTableColumns(): array
    {
        return [];
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
        //return $this->getResource()::getTableColumns();
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     */
    protected function getResource(): string
    {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
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



            if (is_subclass_of($parentResource, \Modules\Xot\Filament\Resources\XotBaseResource::class)) {
                /** @var class-string<\Modules\Xot\Filament\Resources\XotBaseResource> $parentResource */
                return $parentResource;
            }
        } catch (\Exception $e) {
            // Fallback if parent method fails
        }
        
        // Fallback: derive the resource class name from the relation manager name
        $class = get_class($this);
        $resource_name = Str::of(class_basename($this))
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        $resourceClass = $ns . '\\' . $resource_name;

        if (!class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }

        if (!is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
        }

        if (!is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
        $resourceClass = $ns . '\\' . $resource_name;

        if (!class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }

        if (!is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
        $resourceClass = $ns.'\\'.$resource_name;
        
        if (!class_exists($resourceClass)) {
            throw new \Exception("Cannot find resource class {$resourceClass}");
        }
        
        if (!is_subclass_of($resourceClass, \Modules\Xot\Filament\Resources\XotBaseResource::class)) {
            throw new \Exception("{$resourceClass} must extend XotBaseResource");
        }

=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        return $resourceClass;
    }
}
