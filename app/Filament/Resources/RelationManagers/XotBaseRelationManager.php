<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\RelationManagers;

use Override;
use Filament\Actions\AttachAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager as FilamentRelationManager;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Layout\Component as LayoutComponent;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Traits\HasXotTable;
use stdClass;
use Webmozart\Assert\Assert;

/**
 * @property class-string<Model> $resource
 */
abstract class XotBaseRelationManager extends FilamentRelationManager
{
    use HasXotTable;

    protected static string $relationship = '';

    /** @var class-string<XotBaseResource> */
    protected static string $resource;

    /**
     * Resolve the parent Resource class for this RelationManager.
     *
     * @return class-string<XotBaseResource>
     */
    public function getResource(): string
    {
<<<<<<< HEAD
        if (isset(static::$resource) && \is_string(static::$resource) && static::$resource !== '') {
=======
        if (isset(static::$resource) && \is_string(static::$resource) && '' !== static::$resource) {
>>>>>>> 8ab8fd81a (.)
            return static::$resource;
        }

        $relationManagerClass = static::class;

        // Expect namespace like: Modules\\{Module}\\Filament\\Resources\\{ResourceName}\\RelationManagers\\{This}
        $parts = explode('\\', $relationManagerClass);
        $resourcesIndex = array_search('Resources', $parts, true);

        Assert::integer($resourcesIndex, 'Unable to locate Resources segment in class: '.$relationManagerClass);

        // Build resource class parts: Modules\\{Module}\\Filament\\Resources\\{ResourceName}
        $resourceParts = \array_slice($parts, 0, $resourcesIndex + 2);
        $resource = implode('\\', $resourceParts);

        Assert::true(class_exists($resource), 'Resource class does not exist: '.$resource);
        Assert::true(is_subclass_of($resource, XotBaseResource::class), 'Resource must extend XotBaseResource: '.$resource);

        /* @var class-string<XotBaseResource> $resource */
        static::$resource = $resource;

        return static::$resource;
    }

    public static function getModuleName(): string
    {
        $class = static::class;
        $arr = explode('\\', $class);

        return $arr[1];
    }

<<<<<<< HEAD
    final public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
        /** @var array<string, Component> $formSchema */
        $formSchema = $this->getFormSchema();

        // Cast to Htmlable|string to match Schema::components() signature
        // Component implements Htmlable, so this is type-safe
        /** @var array<string, Htmlable|string> $components */
        $components = $formSchema;

        return $schema->components($components);
=======
        return $schema->components($this->getFormSchema());
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
<<<<<<< HEAD
    final public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema());
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
        return $schema->components(
            $this->getFormSchema()
        );
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
    }

    public function getFormSchema(): array
    {
        return $this->getResource()::getFormSchema();
    }

    /**
     * @return array<int|string, Column|LayoutComponent>
     */
<<<<<<< HEAD
    #[Override]
=======
    #[\Override]
>>>>>>> 8ab8fd81a (.)
    public function getTableColumns(): array
    {
        $index = Arr::get($this->getResource()::getPages(), 'index');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        if (! $index) {
            // throw new \Exception('Index page not found');
            return [];
        }
<<<<<<< HEAD

        if (! \is_object($index) || ! method_exists($index, 'getPage')) {
            return [];
        }

        $index_page = $index->getPage();

        if (! \is_object($index_page) && ! \is_string($index_page)) {
            return [];
        }

=======
        /** @phpstan-ignore method.nonObject */
        $index_page = $index->getPage();

>>>>>>> 53d6a6ba (.)
        if (! method_exists($index_page, 'getTableColumns')) {
            // throw new \Exception('method  getTableColumns on '.print_r($index_page,true).' not found');
            return [];
        }
<<<<<<< HEAD

        $instance = \is_string($index_page) ? app($index_page) : $index_page;
        if (! \is_object($instance) || ! method_exists($instance, 'getTableColumns')) {
            return [];
        }

        $res = $instance->getTableColumns();

        if (! \is_array($res)) {
            return [];
        }

        // Ensure string keys always
<<<<<<< HEAD
        /** @var array<string, Column|LayoutComponent> $assoc */
=======
        /** @var array<string, Column|Component> $assoc */
=======
        /** @phpstan-ignore argument.type */
        $res = app($index_page)->getTableColumns();

        // Ensure string keys always
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        $assoc = [];
        foreach ($res as $key => $column) {
            // Verifica che $column sia del tipo corretto
            if (! ($column instanceof Column) && ! ($column instanceof LayoutComponent)) {
                continue;
            }

            if (\is_string($key)) {
                $assoc[$key] = $column;

                continue;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            // $column è già verificato come instance di Column|LayoutComponent sopra
            $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
            $nameStr = \is_string($name) ? $name : (string) $name;
            $assoc[$nameStr] = $column;
=======
            $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
            $nameStr = \is_string($name) ? $name : (string) $name;
            $assoc[$nameStr] = $column;

>>>>>>> 8ab8fd81a (.)
=======
            if (is_object($column)) {
                $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
                $nameStr = is_string($name) ? $name : (string) $name;
                $assoc[$nameStr] = $column;
            }
=======
            $name = method_exists($column, 'getName') ? $column->getName() : (string) spl_object_hash($column);
            $assoc[$name] = $column;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        }

        return $assoc;
    }

    // */
    public function getTableActions(): array
    {
        $actions = [];
<<<<<<< HEAD
        $me = $this;
=======
        $resource = static::class;
<<<<<<< HEAD

>>>>>>> 285375c74 (.)
        $actions['edit'] = EditAction::make()
            ->iconButton()
            ->visible(static function (?Model $record) use ($me): bool {
<<<<<<< HEAD
                if ($record === null) {
=======
                if (null === $record) {
>>>>>>> 8ab8fd81a (.)
                    return false;
                }

                return $me->canEdit($record);
            });

        $actions['detach'] = DetachAction::make()
            ->iconButton()
            ->visible(static function (?Model $record) use ($me): bool {
<<<<<<< HEAD
                if ($record === null) {
=======
                if (null === $record) {
>>>>>>> 8ab8fd81a (.)
                    return false;
                }

                return $me->canDetach($record);
            });
=======
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
>>>>>>> 53d6a6ba (.)

        return $actions;
    }

    public function getTableBulkActions(): array
    {
        $actions = [];

<<<<<<< HEAD
        $actions['delete_bulk'] = DeleteBulkAction::make()
            ->iconButton()
            ->visible(fn (?Model $record): bool => $this->canDeleteBulk($record));

        $actions['detach_bulk'] = DetachBulkAction::make()
            ->iconButton()
            ->visible(fn (?Model $record): bool => $this->canDetachBulk($record));
=======
        if (method_exists($resource, 'canDeleteBulk')) {
            $actions['delete_bulk'] = DeleteBulkAction::make()
                ->iconButton()
<<<<<<< HEAD
                ->visible(function (?Model $record) use ($resource): bool {
                    if ($record === null) {
                        return false;
                    }
                    $result = $resource::canDeleteBulk($record);

                    return is_bool($result) ? $result : (bool) $result;
                });
=======
                ->visible(fn (?Model $record): bool => $resource::canDeleteBulk($record));
>>>>>>> 53d6a6ba (.)
        }

        if (method_exists($resource, 'canDetachBulk')) {
            $actions['detach_bulk'] = DetachBulkAction::make()
                ->iconButton()
<<<<<<< HEAD
                ->visible(function (?Model $record) use ($resource): bool {
                    if ($record === null) {
                        return false;
                    }
                    $result = $resource::canDetachBulk($record);

                    return is_bool($result) ? $result : (bool) $result;
                });
=======
                ->visible(fn (?Model $record): bool => $resource::canDetachBulk($record));
>>>>>>> 53d6a6ba (.)
        }
>>>>>>> 285375c74 (.)

        return $actions;
    }

    public function getTableHeaderActions(): array
    {
        $actions = [];
        $me = $this;
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($me, 'canAttach')) {
            $actions['attach'] = AttachAction::make()
                ->icon('heroicon-o-link')
                ->iconButton()
                ->tooltip(__('user::actions.attach.label'))
                ->visible(static fn (?Model $_record): bool => $me->canAttach());
        }
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($me, 'canCreate')) {
            $actions['create'] = CreateAction::make()
                ->icon('heroicon-o-plus')
                ->iconButton()
                ->tooltip(static::trans('actions.create.tooltip'))
                ->visible(static fn (?Model $_record): bool => $me->canCreate());
        }

        return $actions;
    }

    public function getTableFilters(): array
    {
        return [];
    }

    // public function getRelationship(): \Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Eloquent\Builder
    // {
    //    return parent::getRelationship();
    // }

    /**
     * Determine if the bulk delete action can be performed on the given record.
     */
<<<<<<< HEAD
    public function canDeleteBulk(Model|stdClass|null $record): bool
    {
        if ($record instanceof stdClass) {
=======
    public function canDeleteBulk(Model|\stdClass|null $record): bool
    {
        if ($record instanceof \stdClass) {
>>>>>>> 8ab8fd81a (.)
            // For stdClass records (lightweight bulk operations), allow by default
            return true;
        }

        return true;
    }

    /**
     * Determine if the bulk detach action can be performed on the given record.
     */
<<<<<<< HEAD
    public function canDetachBulk(Model|stdClass|null $record): bool
    {
        if ($record instanceof stdClass) {
=======
    public function canDetachBulk(Model|\stdClass|null $record): bool
    {
        if ($record instanceof \stdClass) {
>>>>>>> 8ab8fd81a (.)
            // For stdClass records (lightweight bulk operations), allow by default
            return true;
        }

        return true;
    }
}
