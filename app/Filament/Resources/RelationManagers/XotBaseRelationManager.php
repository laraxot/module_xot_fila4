<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

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
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Layout\Component;
use Filament\Actions\AttachAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager as FilamentRelationManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use Filament\Schemas\Schema;
use Override;
use Filament\Actions\EditAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\AttachAction;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager as FilamentRelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
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
use Webmozart\Assert\Assert;

/**
 * @property class-string<Model> $resource
 */
abstract class XotBaseRelationManager extends FilamentRelationManager
{
    use HasXotTable;

    protected static string $relationship = '';

    /** @var class-string<XotBaseResource> */
    protected static string $resourceClass;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Resolve the parent Resource class for this RelationManager.
     *
     * @return class-string<XotBaseResource>
     */
    public function getResource(): string
    {
        if (isset(static::$resourceClass) && is_string(static::$resourceClass) && static::$resourceClass !== '') {
            return static::$resourceClass;
        }

        $relationManagerClass = static::class;

        // Expect namespace like: Modules\\{Module}\\Filament\\Resources\\{ResourceName}\\RelationManagers\\{This}
        $parts = explode('\\', $relationManagerClass);
        $resourcesIndex = array_search('Resources', $parts, true);

        Assert::integer($resourcesIndex, 'Unable to locate Resources segment in class: '.$relationManagerClass);

        // Build resource class parts: Modules\\{Module}\\Filament\\Resources\\{ResourceName}
        $resourceClassParts = array_slice($parts, 0, $resourcesIndex + 2);
        $resourceClass = implode('\\', $resourceClassParts);

        Assert::true(class_exists($resourceClass), 'Resource class does not exist: '.$resourceClass);
        Assert::true(is_subclass_of($resourceClass, XotBaseResource::class), 'Resource must extend XotBaseResource: '.$resourceClass);

        /** @var class-string<XotBaseResource> $resourceClass */
        static::$resourceClass = $resourceClass;

        return static::$resourceClass;
    }

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    public static function getModuleName(): string
    {
        $class = static::class;
        $arr = explode('\\', $class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return $arr[1];
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $module_name = $arr[1];

        return $module_name;
    }

    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
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
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
    final public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema());
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
        return $schema->components(
            $this->getFormSchema()
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $schema->components(
            $this->getFormSchema()
        );
>>>>>>> 399f46d3 (.)
=======
        return $schema->components(
            $this->getFormSchema()
        );
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getFormSchema());
>>>>>>> b93ef594b4 (.)
=======
    final public function form(Form $form): Form
    {
        return $form->schema(
            $this->getFormSchema()
        );
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $schema->components($this->getFormSchema());
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
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $schema->components($this->getFormSchema());
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
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $schema->components($this->getFormSchema());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
    }

    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // *
=======
    //*
>>>>>>> 5a14301c (.)
=======
    //*
>>>>>>> 5a14301c (.)
=======
    //*
>>>>>>> 5a14301c (.)
=======
    //*
>>>>>>> 5a14301c (.)
    #[Override]
    public function getTableColumns(): array
    {
        $index = Arr::get($this->getResource()::getPages(), 'index');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $index) {
            // throw new \Exception('Index page not found');
            return [];
        }

        if (! is_object($index) || ! method_exists($index, 'getPage')) {
            return [];
        }

        $index_page = $index->getPage();

        if (! is_object($index_page) && ! is_string($index_page)) {
            return [];
        }

        if (! method_exists($index_page, 'getTableColumns')) {
            // throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }

        $instance = is_string($index_page) ? app($index_page) : $index_page;
        if (! is_object($instance) || ! method_exists($instance, 'getTableColumns')) {
            return [];
        }

        $res = $instance->getTableColumns();

        if (! is_array($res)) {
            return [];
        }

        // Ensure string keys always
        /** @var array<string, Column|Component> $assoc */
        $assoc = [];
        foreach ($res as $key => $column) {
            if (is_string($key)) {
                $assoc[$key] = $column;

                continue;
            }

            if (is_object($column)) {
                $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
                $nameStr = is_string($name) ? $name : (string) $name;
                $assoc[$nameStr] = $column;
            }
        }

        /** @var array<string, Column|Component> $assoc */
        return $assoc;
    }

    // */
    public function getTableActions(): array
    {
        $actions = [];
        $resource = static::class;

        $actions['edit'] = EditAction::make()
            ->iconButton()
            ->visible(function (?Model $record) use ($resource): bool {
                if ($record === null) {
                    return false;
                }
                $result = $resource::canEdit($record);

                return is_bool($result) ? $result : (bool) $result;
            });

        $actions['detach'] = DetachAction::make()
            ->iconButton()
            ->visible(function (?Model $record) use ($resource): bool {
                if ($record === null) {
                    return false;
                }
                $result = $resource::canDetach($record);

                return is_bool($result) ? $result : (bool) $result;
            });

        return $actions;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        if (!$index) {
            //throw new \Exception('Index page not found');
            return [];
        }
        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
            //throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
        /** @phpstan-ignore argument.type */
        $res = app($index_page)->getTableColumns();

        return $res;
    }

    //*/
    public function getTableActions(): array
    {
        return [
            EditAction::make(),
            //Tables\Actions\DeleteAction::make(),
            DetachAction::make(),
        ];
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
    }

    public function getTableBulkActions(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $actions = [];
        $resource = static::class;

        if (method_exists($resource, 'canDeleteBulk')) {
            $actions['delete_bulk'] = DeleteBulkAction::make()
                ->iconButton()
                ->visible(function (?Model $record) use ($resource): bool {
                    if ($record === null) {
                        return false;
                    }
                    $result = $resource::canDeleteBulk($record);

                    return is_bool($result) ? $result : (bool) $result;
                });
        }

        if (method_exists($resource, 'canDetachBulk')) {
            $actions['detach_bulk'] = DetachBulkAction::make()
                ->iconButton()
                ->visible(function (?Model $record) use ($resource): bool {
                    if ($record === null) {
                        return false;
                    }
                    $result = $resource::canDetachBulk($record);

                    return is_bool($result) ? $result : (bool) $result;
                });
        }

        return $actions;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return [
            //Tables\Actions\DeleteBulkAction::make(),
            DetachBulkAction::make(),
        ];
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
    }

    public function getTableHeaderActions(): array
    {
        $actions = [];
        $resource = static::class;
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($resource, 'canAttach')) {
            $actions['attach'] = AttachAction::make()
                ->icon('heroicon-o-link')
                ->iconButton()
                ->tooltip(__('user::actions.attach.label'))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible(fn (?Model $_record): bool => $resource::canAttach());
=======
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
>>>>>>> 5a14301c (.)
=======
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
>>>>>>> 5a14301c (.)
=======
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
>>>>>>> 5a14301c (.)
=======
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
>>>>>>> 5a14301c (.)
        }
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($resource, 'canCreate')) {
            $actions['create'] = CreateAction::make()
                ->icon('heroicon-o-plus')
                ->iconButton()
                ->tooltip(static::trans('actions.create.tooltip'))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible(fn (?Model $_record): bool => $resource::canCreate());
        }

=======
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
>>>>>>> 5a14301c (.)
=======
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
>>>>>>> 5a14301c (.)
=======
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
>>>>>>> 5a14301c (.)
=======
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
>>>>>>> 5a14301c (.)
        return $actions;
    }

    public function getTableFilters(): array
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    // {
    //    return parent::getRelationship();
    // }
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    public function getResource(): string
    {
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
        Assert::classExists($resource);
        Assert::isAOf($resource, XotBaseResource::class);

        return $resource;
    }

    //public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    //{
    //    return parent::getRelationship();
    //}
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
    public function getRelationship(): Relation|Builder
    {
        return parent::getRelationship();
    }
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    {
        return parent::getRelationship();
    }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
}
