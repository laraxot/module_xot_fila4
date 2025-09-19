<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\XotBaseResource\RelationManager;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
=======
use Filament\Schemas\Schema;
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
>>>>>>> 73eab74 (.)
use Exception;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use Webmozart\Assert\Assert;

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
        return static::transFunc(__FUNCTION__);
    }

    public static function getNavigationGroup(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    protected static function getPluralModelLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    final public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema());
=======
        return $schema
            ->components($this->getFormSchema());
>>>>>>> f1d4085 (.)
=======
        return $schema->components($this->getFormSchema());
>>>>>>> 73eab74 (.)
    }

    /**
     * Get form schema.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string|int, Component>
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 73eab74 (.)
     */
    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
    }

    /**
     * Get table columns.
     *
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [];

<<<<<<< HEAD
=======
    public function getTableColumns(): array
    {
        return [];
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        //return $this->getResource()::getTableColumns();
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
        // Get the resource class via parent method first
        try {
            // @phpstan-ignore staticMethod.notFound
            $parentResource = parent::getResource();
            if (is_subclass_of($parentResource, XotBaseResource::class)) {
                /** @var class-string<XotBaseResource> $parentResource */
                return $parentResource;
            }
        } catch (Exception $e) {
            // Fallback if parent method fails
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        // Fallback: derive the resource class name from the relation manager name
        $class = get_class($this);
        $resource_name = Str::of(class_basename($this))
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
=======
>>>>>>> 73eab74 (.)
        $resourceClass = $ns . '\\' . $resource_name;

        if (!class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }

<<<<<<< HEAD
=======
        $resourceClass = $ns.'\\'.$resource_name;
        
        if (!class_exists($resourceClass)) {
            throw new Exception("Cannot find resource class {$resourceClass}");
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        if (!is_subclass_of($resourceClass, XotBaseResource::class)) {
            throw new Exception("{$resourceClass} must extend XotBaseResource");
        }

        return $resourceClass;
    }
}
