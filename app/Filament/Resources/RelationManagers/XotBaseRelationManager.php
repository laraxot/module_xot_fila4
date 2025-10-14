<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

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

        /* @var class-string<XotBaseResource> $resourceClass */
        static::$resourceClass = $resourceClass;

        return static::$resourceClass;
    }

    public static function getModuleName(): string
    {
        $class = static::class;
        $arr = explode('\\', $class);
        $module_name = $arr[1];

        return $module_name;
    }

    /**
     * @return list<\Illuminate\Contracts\Support\Htmlable|string>
     */
    public function getFormSchema(): array
    {
        $schema = $this->getResource()::getFormSchema();
        return is_array($schema) ? array_values($schema) : [];
    }

    // *
    #[Override]
    public function getTableColumns(): array
    {
        /** @var \Filament\Resources\Pages\PageRegistration $index */
        $index = Arr::get($this->getResource()::getPages(), 'index');
        if (! $index instanceof \Filament\Resources\Pages\PageRegistration) {
            // throw new \Exception('Index page not found');
            return [];
        }
        /** @var class-string<\Filament\Resources\Pages\Page> $index_page */
        $index_page = $index->getPage();

        if (! is_string($index_page) || ! class_exists($index_page) || ! method_exists($index_page, 'getTableColumns')) {
            // throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
        // @phpstan-ignore-next-line
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
        /** @var array<string, \Filament\Tables\Columns\Column|\Filament\Tables\Columns\Layout\Component> $assoc */
        $assoc = [];
        /** @var array<int|string, \Filament\Tables\Columns\Column|\Filament\Tables\Columns\Layout\Component> $res */
        foreach ($res as $key => $column) {
            if (is_string($key)) {
                $assoc[$key] = $column;

                continue;
            }

            if (is_object($column) && method_exists($column, 'getName')) {
                $name = $column->getName();
                Assert::string($name, 'Column name must be string');
            } else {
                $name = (string) spl_object_hash($column);
            }
            $assoc[$name] = $column;
        }

        return $assoc;
    }

    // */
    public function getTableActions(): array
    {
        $actions = [];
        $resource = static::class;
        $actions['edit'] = EditAction::make()
            ->iconButton()
            ->visible(fn (?Model $record): bool => $record !== null && $resource::canEdit($record));
        $actions['detach'] = DetachAction::make()
            ->iconButton()
            ->visible(fn (?Model $record): bool => $record !== null && $resource::canDetach($record));

        return $actions;
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
                ->visible(fn (?Model $record): bool => (bool) $resource::canDeleteBulk($record));
        }
        if (method_exists($resource, 'canDetachBulk')) {
            $actions['detach_bulk'] = DetachBulkAction::make()
                ->iconButton()
                ->visible(fn (?Model $record): bool => (bool) $resource::canDetachBulk($record));
        }

        return $actions;
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
        }
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($resource, 'canCreate')) {
            $actions['create'] = CreateAction::make()
                ->icon('heroicon-o-plus')
                ->iconButton()
                ->tooltip(static::trans('actions.create.tooltip'))
                ->visible(fn (?Model $_record): bool => $resource::canCreate());
        }

        return $actions;
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
}
