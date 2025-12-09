<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

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
use Filament\Schemas\Schema;
use Override;
=======
<<<<<<< HEAD
use Filament\Schemas\Schema;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Filament\Actions\EditAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\AttachAction;
<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions\CreateAction;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Form;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Resources\RelationManagers\RelationManager as FilamentRelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
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
    public static function getModuleName(): string
    {
        $class = static::class;
        $arr = explode('\\', $class);
<<<<<<< HEAD

        return $arr[1];
=======
        $module_name = $arr[1];

        return $module_name;
    }

<<<<<<< HEAD
    final public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
    final public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema());
=======
        return $schema->components(
            $this->getFormSchema()
        );
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
>>>>>>> 399f46d3 (.)
    }

    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

<<<<<<< HEAD
    // *
=======
    //*
>>>>>>> 5a14301c (.)
    #[Override]
    public function getTableColumns(): array
    {
        $index = Arr::get($this->getResource()::getPages(), 'index');
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
        if (!$index) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
//*
    public function getTableColumns(): array
    {
        $index=Arr::get($this->getResource()::getPages(),'index');
        if(!$index){
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    //*
    #[Override]
    public function getTableColumns(): array
    {
        $index = Arr::get($this->getResource()::getPages(), 'index');
        if (!$index) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            //throw new \Exception('Index page not found');
            return [];
        }
        /** @phpstan-ignore method.nonObject */
<<<<<<< HEAD
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
=======
        $index_page=$index->getPage();
        
        if(!method_exists($index_page,'getTableColumns')){
>>>>>>> a12f125f4a (.)
=======
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
>>>>>>> b93ef594b4 (.)
=======
        $index_page=$index->getPage();
        
        if(!method_exists($index_page,'getTableColumns')){
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            //throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
        /** @phpstan-ignore argument.type */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $res = app($index_page)->getTableColumns();

        return $res;
    }

    //*/
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $res= app($index_page)->getTableColumns();

        return $res;
    }
//*/
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $res = app($index_page)->getTableColumns();

        return $res;
    }

    //*/
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function getTableActions(): array
    {
        return [
            EditAction::make(),
            //Tables\Actions\DeleteAction::make(),
            DetachAction::make(),
<<<<<<< HEAD
=======
=======
    public function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make(),
            //Tables\Actions\DeleteAction::make(),
            Tables\Actions\DetachAction::make(),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
>>>>>>> 5a14301c (.)
    }

    public function getTableBulkActions(): array
    {
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
        return [
            //Tables\Actions\DeleteBulkAction::make(),
<<<<<<< HEAD
            DetachBulkAction::make(),
=======
<<<<<<< HEAD
            DetachBulkAction::make(),
=======
            Tables\Actions\DetachBulkAction::make(),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
>>>>>>> 5a14301c (.)
    }

    public function getTableHeaderActions(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $actions = [];
        $resource = static::class;
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($resource, 'canAttach')) {
            $actions['attach'] = AttachAction::make()
                ->icon('heroicon-o-link')
                ->iconButton()
                ->tooltip(__('user::actions.attach.label'))
<<<<<<< HEAD
                ->visible(fn (?Model $_record): bool => $resource::canAttach());
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
                ->visible(fn (?Model $_record): bool => $resource::canCreate());
        }

=======
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
>>>>>>> 5a14301c (.)
        return $actions;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return [
            AttachAction::make(),
        ];
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        return [
            Tables\Actions\AttachAction::make(),
        ];
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function getTableFilters(): array
    {
        return [];
    }

<<<<<<< HEAD
    // public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    // {
    //    return parent::getRelationship();
    // }
=======
    public function getResource(): string
    {
<<<<<<< HEAD
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
=======
        $resource = static::$resourceClass;
>>>>>>> a12f125f4a (.)
=======
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
>>>>>>> b93ef594b4 (.)
=======
        $resource = static::$resourceClass;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        Assert::classExists($resource);
        Assert::isAOf($resource, XotBaseResource::class);

        return $resource;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    //public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    //{
    //    return parent::getRelationship();
    //}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
    public function getRelationship(): Relation|Builder
    {
        return parent::getRelationship();
    }
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
>>>>>>> 399f46d3 (.)
}
