<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

use Filament\Schemas\Schema;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Filament\Actions\EditAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\AttachAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> f1d4085 (.)
=======
use Filament\Actions\CreateAction;
>>>>>>> 73eab74 (.)
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

    final public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema());
=======
        return $schema->components(
            $this->getFormSchema()
        );
>>>>>>> f1d4085 (.)
=======
        return $schema->components($this->getFormSchema());
>>>>>>> 73eab74 (.)
    }

    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

    //*
    #[Override]
    public function getTableColumns(): array
    {
        $index = Arr::get($this->getResource()::getPages(), 'index');
        if (!$index) {
<<<<<<< HEAD
=======
//*
    public function getTableColumns(): array
    {
        $index=Arr::get($this->getResource()::getPages(),'index');
        if(!$index){
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            //throw new \Exception('Index page not found');
            return [];
        }
        /** @phpstan-ignore method.nonObject */
<<<<<<< HEAD
<<<<<<< HEAD
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
=======
        $index_page=$index->getPage();
        
        if(!method_exists($index_page,'getTableColumns')){
>>>>>>> f1d4085 (.)
=======
        $index_page = $index->getPage();

        if (!method_exists($index_page, 'getTableColumns')) {
>>>>>>> 73eab74 (.)
            //throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
        /** @phpstan-ignore argument.type */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $res = app($index_page)->getTableColumns();

        return $res;
    }

    //*/
<<<<<<< HEAD
=======
        $res= app($index_page)->getTableColumns();

        return $res;
    }
//*/
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    public function getTableActions(): array
    {
        return [
            EditAction::make(),
            //Tables\Actions\DeleteAction::make(),
            DetachAction::make(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            //Tables\Actions\DeleteBulkAction::make(),
            DetachBulkAction::make(),
        ];
    }

    public function getTableHeaderActions(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
        return [
            AttachAction::make(),
        ];
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    }

    public function getTableFilters(): array
    {
        return [];
    }

    public function getResource(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
=======
        $resource = static::$resourceClass;
>>>>>>> f1d4085 (.)
=======
        // @phpstan-ignore property.staticAccess
        $resource = static::$resource;
>>>>>>> 73eab74 (.)
        Assert::classExists($resource);
        Assert::isAOf($resource, XotBaseResource::class);

        return $resource;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    //public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    //{
    //    return parent::getRelationship();
    //}
<<<<<<< HEAD
=======
    public function getRelationship(): Relation|Builder
    {
        return parent::getRelationship();
    }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
}
