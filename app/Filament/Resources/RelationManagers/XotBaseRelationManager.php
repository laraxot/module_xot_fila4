<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

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
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Override;
use Filament\Schemas\Schema;
use Override;
use Override;
use Filament\Actions\EditAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\AttachAction;
use Filament\Actions\CreateAction;
use Filament\Actions\CreateAction;
use Filament\Actions\CreateAction;
use Filament\Actions\CreateAction;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager as FilamentRelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
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

    public static function getModuleName(): string
    {
        $class = static::class;
        $arr = explode('\\', $class);

        return $arr[1];

        return $arr[1];
        $module_name = $arr[1];

        return $module_name;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
        return $schema->components(
            $this->getFormSchema()
        );
        return $schema->components(
            $this->getFormSchema()
        );
        return $schema->components(
            $this->getFormSchema()
        );
        return $schema->components($this->getFormSchema());
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
        return $schema->components(
            $this->getFormSchema()
        );
        return $schema->components(
            $this->getFormSchema()
        );
        return $schema->components(
            $this->getFormSchema()
        );
        return $schema->components($this->getFormSchema());
    final public function form(Form $form): Form
    {
        return $form->schema(
            $this->getFormSchema()
        );
        return $schema->components($this->getFormSchema());
        return $schema->components($this->getFormSchema());
<<<<<<< HEAD
        return $schema->components($this->getFormSchema());
    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
    }

    /**
     * @return list<\Illuminate\Contracts\Support\Htmlable|string>
     */
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
    }

    /**
     * @return list<\Illuminate\Contracts\Support\Htmlable|string>
     */
        return $schema->components($this->getFormSchema());
        return $schema->components($this->getFormSchema());
        return $schema->components($this->getFormSchema());
    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
    }

    /**
     * @return list<\Illuminate\Contracts\Support\Htmlable|string>
     */
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
        return $schema->components($this->getFormSchema());
    final public function form(Form $form): Form
    {
        return $form->schema(
            $this->getFormSchema()
        );
    }

    /**
     * @return list<\Illuminate\Contracts\Support\Htmlable|string>
     */
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
    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
>>>>>>> 53d6a6ba (.)
    }

=======
    /**
     * @return list<\Illuminate\Contracts\Support\Htmlable|string>
     */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    public function getFormSchema(): array
    {
        return array_values($this->getResource()::getFormSchema());
    }

    // *
    //*
    //*
    //*
    //*

    // *
    //*
    //*
    //*
    //*
    //*
    #[Override]
    /**
     * @return array<string, mixed>
     */
    public function getTableColumns(): array
    {
        /** @var \Filament\Resources\Pages\PageRegistration $index */
        $index = Arr::get($this->getResource()::getPages(), 'index');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (! $index) {
=======
        if (! $index instanceof \Filament\Resources\Pages\PageRegistration) {
>>>>>>> a6ef6dc7 (.)
            // throw new \Exception('Index page not found');
            return [];
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

        if (! is_object($index) || ! method_exists($index, 'getPage')) {
            return [];
        }

        $index_page = $index->getPage();

        if (! is_object($index_page) && ! is_string($index_page)) {
            return [];
        }

        /** @var class-string<\Filament\Resources\Pages\Page> $index_page */
        $index_page = $index->getPage();

        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

        /** @var class-string<\Filament\Resources\Pages\Page> $index_page */
        $index_page = $index->getPage();

        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

        /** @var class-string<\Filament\Resources\Pages\Page> $index_page */
        $index_page = $index->getPage();

        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

        /** @var class-string<\Filament\Resources\Pages\Page> $index_page */
        $index_page = $index->getPage();

        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
        /** @var class-string<\Filament\Resources\Pages\Page> $index_page */
        $index_page = $index->getPage();

<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (! method_exists($index_page, 'getTableColumns')) {
=======
        if (! is_string($index_page) || ! class_exists($index_page) || ! method_exists($index_page, 'getTableColumns')) {
>>>>>>> a6ef6dc7 (.)
            // throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

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
        // @phpstan-ignore-next-line
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
        /** @phpstan-ignore argument.type */
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
        /** @phpstan-ignore argument.type */
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
        // @phpstan-ignore-next-line
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
        /** @phpstan-ignore argument.type */
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
        // @phpstan-ignore-next-line
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $assoc = [];
=======
        /** @var array<string, \Filament\Tables\Columns\Column|\Filament\Tables\Columns\Layout\Component> $assoc */
        $assoc = [];
        /** @var array<int|string, \Filament\Tables\Columns\Column|\Filament\Tables\Columns\Layout\Component> $res */
>>>>>>> a6ef6dc7 (.)
        foreach ($res as $key => $column) {
            if (is_string($key)) {
                $assoc[$key] = $column;

                continue;
            }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            if (is_object($column)) {
                $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
                $nameStr = is_string($name) ? $name : (string) $name;
                $assoc[$nameStr] = $column;
            }
<<<<<<< HEAD
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
=======
            if (is_object($column) && method_exists($column, 'getName')) {
                $name = $column->getName();
                Assert::string($name, 'Column name must be string');
            } else {
                $name = (string) spl_object_hash($column);
            }
>>>>>>> a6ef6dc7 (.)
            $assoc[$name] = $column;
            $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
            $assoc[$name] = $column;
        }

        /** @var array<string, Column|Component> $assoc */
        return $assoc;
    }

    // */
    public function getTableActions(): array
    {
        $actions = [];
        $resource = static::class;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (method_exists($resource, 'canEdit')) {
            $actions['edit'] = EditAction::make()
                ->iconButton()
                ->visible(fn (?Model $record): bool => $resource::canEdit($record));
        }
        if (method_exists($resource, 'canDetach')) {
            $actions['detach'] = DetachAction::make()
                ->iconButton()
                ->visible(fn (?Model $record): bool => $resource::canDetach($record));
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 5cf46378 (.)
        $actions['edit'] = EditAction::make()
            ->iconButton()
            ->visible(fn (?Model $record): bool => $record !== null && $resource::canEdit($record));
        $actions['detach'] = DetachAction::make()
            ->iconButton()
            ->visible(fn (?Model $record): bool => $record !== null && $resource::canDetach($record));
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

        return $actions;
        if (!$index) {

        return $actions;
        if (!$index) {
//*
    public function getTableColumns(): array
    {
        $index=Arr::get($this->getResource()::getPages(),'index');
        if(!$index){

    //*
    #[Override]
    public function getTableColumns(): array
    {
        $index = Arr::get($this->getResource()::getPages(), 'index');
        if (!$index) {
            //throw new \Exception('Index page not found');
            return [];
        }
        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
        $index_page=$index->getPage();
        
        if(!method_exists($index_page,'getTableColumns')){
            //throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
        /** @phpstan-ignore argument.type */
        $res = app($index_page)->getTableColumns();

        return $res;
    }

    //*/
        $res= app($index_page)->getTableColumns();

        return $res;
    }
//*/
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
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function getTableBulkActions(): array
    {
        $actions = [];
        $resource = static::class;

        if (method_exists($resource, 'canDeleteBulk')) {
            $actions['delete_bulk'] = DeleteBulkAction::make()
                ->iconButton()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                ->visible(function (?Model $record) use ($resource): bool {
                    if ($record === null) {
                        return false;
                    }
                    $result = $resource::canDeleteBulk($record);

                    return is_bool($result) ? $result : (bool) $result;
                });
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
<<<<<<< HEAD
                ->visible(fn (?Model $record): bool => (bool) $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => (bool) $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => (bool) $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => (bool) $resource::canDeleteBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
=======
>>>>>>> 53d6a6ba (.)
=======
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
=======
                ->visible(fn (?Model $record): bool => (bool) $resource::canDeleteBulk($record));
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        }

        if (method_exists($resource, 'canDetachBulk')) {
            $actions['detach_bulk'] = DetachBulkAction::make()
                ->iconButton()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                ->visible(function (?Model $record) use ($resource): bool {
                    if ($record === null) {
                        return false;
                    }
                    $result = $resource::canDetachBulk($record);

                    return is_bool($result) ? $result : (bool) $result;
                });
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
<<<<<<< HEAD
                ->visible(fn (?Model $record): bool => (bool) $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => (bool) $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
=======
>>>>>>> 53d6a6ba (.)
=======
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
=======
                ->visible(fn (?Model $record): bool => (bool) $resource::canDetachBulk($record));
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        }

        return $actions;
        return [
            //Tables\Actions\DeleteBulkAction::make(),
            DetachBulkAction::make(),
        ];
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => (bool) $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => (bool) $resource::canDetachBulk($record));
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
        }

        return $actions;
        return [
            //Tables\Actions\DeleteBulkAction::make(),
            DetachBulkAction::make(),
            DetachBulkAction::make(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
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
                ->visible(fn (?Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn (?Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
        }
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($resource, 'canCreate')) {
            $actions['create'] = CreateAction::make()
                ->icon('heroicon-o-plus')
                ->iconButton()
                ->tooltip(static::trans('actions.create.tooltip'))
                ->visible(fn (?Model $_record): bool => $resource::canCreate());
        }

                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
        return $actions;
                ->visible(fn (?Model $_record): bool => $resource::canCreate());
        }

                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
        return $actions;
        return [
            Tables\Actions\AttachAction::make(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function getTableFilters(): array
    {
        return [];
    }

    // public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    // {
    //    return parent::getRelationship();
    // }
    public function getResource(): string
    {
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
    public function getResource(): string
    {
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
        $resource = static::$resourceClass;
        Assert::classExists($resource);
        Assert::isAOf($resource, XotBaseResource::class);

        return $resource;
    }

    //public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    //{
    //    return parent::getRelationship();
    //}
    public function getRelationship(): Relation|Builder
    {
        return parent::getRelationship();
    }
    public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    {
        return parent::getRelationship();
    }
}
