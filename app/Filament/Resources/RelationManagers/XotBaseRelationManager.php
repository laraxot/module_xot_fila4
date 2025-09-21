<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

<<<<<<< HEAD
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

    public static function getModuleName(): string
    {
        $class = static::class;
        $arr = explode('\\', $class);
        $module_name = $arr[1];

        return $module_name;
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

    //*
    #[Override]
    public function getTableColumns(): array
    {
        $index = Arr::get($this->getResource()::getPages(), 'index');
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
    }

    public function getTableBulkActions(): array
    {
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
                ->visible(fn(null|Model $_record): bool => $resource::canAttach());
        }
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($resource, 'canCreate')) {
            $actions['create'] = CreateAction::make()
                ->icon('heroicon-o-plus')
                ->iconButton()
                ->tooltip(static::trans('actions.create.tooltip'))
                ->visible(fn(null|Model $_record): bool => $resource::canCreate());
        }
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
}
