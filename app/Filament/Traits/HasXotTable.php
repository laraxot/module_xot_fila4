<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

<<<<<<< HEAD
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Filament\Actions\CreateAction;
use Filament\Actions\AssociateAction;
use Filament\Actions\AttachAction;
use Filament\Tables\Enums\RecordActionsPosition;
use Exception;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ReplicateAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DeleteBulkAction;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\BaseFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Actions\Model\TableExistsByModelClassActions;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Tables;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\BaseFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Actions\Model\TableExistsByModelClassActions;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables;
use Filament\Actions;
use Filament\Tables\Table;
use Webmozart\Assert\Assert;
use Filament\Tables\Actions\Action;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Xot\Actions\Model\TableExistsByModelClassActions;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Trait HasXotTable.
 *
 * Provides enhanced table functionality with translations and optimized structure.
 *
 * @property TableLayoutEnum $layoutView
 */
trait HasXotTable
{
    use TransTrait;

    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static bool $canReplicate = false;
    protected static bool $canView = true;
    protected static bool $canEdit = true;

    /**
     * Get table header actions.
     *
<<<<<<< HEAD
     * @return array<string, Action|ActionGroup>
=======
<<<<<<< HEAD
     * @return array<string, Action|ActionGroup>
=======
     * @return array<string, \Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableHeaderActions(): array
    {
        $actions = [];

<<<<<<< HEAD
        $actions['create'] = CreateAction::make();

        if ($this->shouldShowAssociateAction()) {
            $actions['associate'] = AssociateAction::make()
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $actions['create'] = CreateAction::make();
=======
        $resource = $this->getResource();
        
        if (method_exists($resource, 'canCreate')) {
            $actions['create'] = CreateAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.create'))
                ->visible(fn (?Model $record): bool => $resource::canCreate());
        }
>>>>>>> a12f125f4a (.)
=======
        $actions['create'] = CreateAction::make();
>>>>>>> b93ef594b4 (.)

        if ($this->shouldShowAssociateAction()) {
            $actions['associate'] = AssociateAction::make()
=======
        $actions['create'] = Tables\Actions\CreateAction::make();

        if ($this->shouldShowAssociateAction()) {
            $actions['associate'] = Tables\Actions\AssociateAction::make()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                ->label('')
                ->icon('heroicon-o-paper-clip')
                ->tooltip(__('user::actions.associate_user'));
        }

        if ($this->shouldShowAttachAction()) {
<<<<<<< HEAD
            $actions['attach'] = AttachAction::make()
=======
<<<<<<< HEAD
            $actions['attach'] = AttachAction::make()
=======
            $actions['attach'] = Tables\Actions\AttachAction::make()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                ->label('')
                ->icon('heroicon-o-link')
                ->tooltip(__('user::actions.attach_user'))
                ->preloadRecordSelect();
        }

        $actions['layout'] = TableLayoutToggleTableAction::make('layout');

        return $actions;
    }

    protected function shouldShowAssociateAction(): bool
    {
        return false;
    }

    protected function shouldShowAttachAction(): bool
    {
        //@phpstan-ignore-next-line
        return method_exists($this, 'getRelationship');
    }

    protected function shouldShowDetachAction(): bool
    {
        //@phpstan-ignore-next-line
        return method_exists($this, 'getRelationship');
    }

    protected function shouldShowReplicateAction(): bool
    {
        return static::$canReplicate;
    }

    protected function shouldShowViewAction(): bool
    {
        return static::$canView;
    }

    protected function shouldShowEditAction(): bool
    {
        return static::$canEdit;
    }

    /**
     * Get header actions.
     *
     * @return array<string, Actions\Action>
     */
    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
=======
            'create' => CreateAction::make()
                ->icon('heroicon-o-plus'),
>>>>>>> a12f125f4a (.)
=======
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
>>>>>>> b93ef594b4 (.)
=======
            'create' => Actions\CreateAction::make()
                ->icon('heroicon-o-plus'),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }

    /**
     * Get grid table columns.
     *
     * @return array<int, Tables\Columns\Column|Stack>
     */
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getTableColumns()),
        ];
    }

    /**
     * Get list table columns.
     *
     * @return array<string, Tables\Columns\Column>
     */
    abstract public function getTableColumns(): array;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Get table filters form columns.
     */
    public function getTableFiltersFormColumns(): int
    {
        $count = count($this->getTableFilters()) + 1;

        return min($count, 6);
    }

    /**
     * Get table record title attribute.
     */
    public function getTableRecordTitleAttribute(): string
    {
        return 'name';
    }

    /**
     * Get table heading.
     */
<<<<<<< HEAD
    public function getTableHeading(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTableHeading(): null|string
=======
    public function getTableHeading(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getTableHeading(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getTableHeading(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        $key = static::getKeyTrans('table.heading');
        /** @var string|array<int|string,mixed>|null $trans */
        //@phpstan-ignore-next-line
        $trans = trans($key);

<<<<<<< HEAD
        return is_string($trans) && $trans !== $key ? $trans : null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return is_string($trans) && $trans !== $key ? $trans : null;
=======
        return (is_string($trans) && $trans !== $key) ? $trans : null;
>>>>>>> a12f125f4a (.)
=======
        return is_string($trans) && $trans !== $key ? $trans : null;
>>>>>>> b93ef594b4 (.)
=======
        return (is_string($trans) && $trans !== $key) ? $trans : null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Get table empty state actions.
     *
     * @return array<string, Action>
     */
    public function getTableEmptyStateActions(): array
    {
        return [];
    }

    /**
     * Configura una tabella Filament.
     *
     * Nota: Questo metodo è stato modificato per risolvere l'errore
     * "Method Filament\Actions\Action::table does not exist" in Filament 3.
     * La soluzione verifica l'esistenza dei metodi getTableHeaderActions(),
     * getTableActions() e getTableBulkActions() prima di chiamarli,
     * garantendo la compatibilità con diverse versioni di Filament.
     *
     * Problema: Il trait chiamava direttamente metodi che potrebbero non esistere
     * nelle classi che lo utilizzano, causando errori in Filament 3.
     *
     * Soluzione: Verifica condizionale dell'esistenza dei metodi prima di chiamarli,
     * mantenendo la retrocompatibilità e prevenendo errori.
     *
     * Ultimo aggiornamento: 10/2023
     */
    public function table(Table $table): Table
    {
        $modelClass = $this->getModelClass();
<<<<<<< HEAD
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
=======
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
>>>>>>> a12f125f4a (.)
=======
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $this->notifyTableMissing();
            return $this->configureEmptyTable($table);
        }

        /** @var Model $model */
        $model = app($modelClass);
        Assert::isInstanceOf($model, Model::class);

        // Configurazione base della tabella
        $table = $table
            ->recordTitleAttribute($this->getTableRecordTitleAttribute())
            ->heading($this->getTableHeading())
<<<<<<< HEAD
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
=======
=======
>>>>>>> origin/develop
            ->columns($this->layoutView->getTableColumns(
                $this->getTableColumns(),
                $this->getGridTableColumns()
            ))
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions($this->getTableHeaderActions())
<<<<<<< HEAD
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->recordActionsPosition(RecordActionsPosition::BeforeColumns)
=======
<<<<<<< HEAD
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->recordActionsPosition(RecordActionsPosition::BeforeColumns)
=======
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            ->emptyStateActions($this->getTableEmptyStateActions())
            ->striped()
            ->paginated($this->getTablePaginated());
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * ->defaultSort(
         * column: $this->getDefaultTableSortColumn(),
         * direction: $this->getDefaultTableSortDirection(),
         * );
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            ->defaultSort(
                column: $this->getDefaultTableSortColumn(),
                direction: $this->getDefaultTableSortDirection(),
            );
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $table;
    }

    protected function getTablePaginated(): bool
    {
        return true;
    }

    /**
     * Get default table sort column.
     */
<<<<<<< HEAD
    protected function getDefaultTableSortColumn(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getDefaultTableSortColumn(): null|string
=======
    protected function getDefaultTableSortColumn(): ?string
>>>>>>> a12f125f4a (.)
=======
    protected function getDefaultTableSortColumn(): null|string
>>>>>>> b93ef594b4 (.)
=======
    protected function getDefaultTableSortColumn(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        try {
            $modelClass = $this->getModelClass();
            /** @var Model $model */
            $model = app($modelClass);
            Assert::isInstanceOf($model, Model::class);

<<<<<<< HEAD
            return $model->getTable() . '.id';
        } catch (Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return $model->getTable() . '.id';
=======
            return $model->getTable().'.id';
>>>>>>> a12f125f4a (.)
=======
            return $model->getTable() . '.id';
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
=======
            return $model->getTable().'.id';
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return null;
        }
    }

    /**
     * Get default table sort direction.
     */
<<<<<<< HEAD
    protected function getDefaultTableSortDirection(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getDefaultTableSortDirection(): null|string
=======
    protected function getDefaultTableSortDirection(): ?string
>>>>>>> a12f125f4a (.)
=======
    protected function getDefaultTableSortDirection(): null|string
>>>>>>> b93ef594b4 (.)
=======
    protected function getDefaultTableSortDirection(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return 'desc';
    }

    /**
     * Get table filters.
     *
     * @return array<string|int, Tables\Filters\Filter|TernaryFilter|BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [];
    }

    /**
     * Get table actions.
     *
     * @return array<string, Action|ActionGroup>
     */
    public function getTableActions(): array
    {
        $actions = [];
        $resource = $this->getResource();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        if (method_exists($resource, 'canView')) {
            $actions['view'] = ViewAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.view'))
<<<<<<< HEAD
                ->visible($resource::canView(...));
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible($resource::canView(...));
=======
                ->visible(fn (Model $record): bool => $resource::canView($record));
>>>>>>> a12f125f4a (.)
=======
                ->visible($resource::canView(...));
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        }

        if (method_exists($resource, 'canEdit')) {
            $actions['edit'] = EditAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.edit'))
<<<<<<< HEAD
                ->visible($resource::canEdit(...));
        }

=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible($resource::canEdit(...));
        }

=======
                ->visible(fn (Model $record): bool => $resource::canEdit($record));
        }
        
>>>>>>> a12f125f4a (.)
=======
                ->visible($resource::canEdit(...));
        }

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        if (method_exists($resource, 'canDelete')) {
            $actions['delete'] = DeleteAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.delete'))
<<<<<<< HEAD
                ->visible($resource::canDelete(...));
        }

        if ($this->shouldShowReplicateAction()) {
            $actions['replicate'] = ReplicateAction::make()
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible($resource::canDelete(...));
        }

=======
                ->visible(fn (Model $record): bool => $resource::canDelete($record));
        }
        
>>>>>>> a12f125f4a (.)
=======
                ->visible($resource::canDelete(...));
        }

>>>>>>> b93ef594b4 (.)
        if ($this->shouldShowReplicateAction()) {
            $actions['replicate'] = ReplicateAction::make()
=======
        
        if (method_exists($resource, 'canView')) {
            $actions['view'] = Tables\Actions\ViewAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.view'))
                ->visible(fn (Model $record): bool => $resource::canView($record));
        }

        if (method_exists($resource, 'canEdit')) {
            $actions['edit'] = Tables\Actions\EditAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.edit'))
                ->visible(fn (Model $record): bool => $resource::canEdit($record));
        }
        
        if (method_exists($resource, 'canDelete')) {
            $actions['delete'] = Tables\Actions\DeleteAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.delete'))
                ->visible(fn (Model $record): bool => $resource::canDelete($record));
        }
        
        if ($this->shouldShowReplicateAction()) {
            $actions['replicate'] = Tables\Actions\ReplicateAction::make()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                ->iconButton()
                ->tooltip(__('user::actions.replicate'));
        }

        // Check if class has the getRelationship method
        if ($this->shouldShowDetachAction()) {
            //@phpstan-ignore-next-line
            if (method_exists($this, 'getRelationship')) {
                //@phpstan-ignore-next-line
                if (method_exists($this->getRelationship(), 'getTable')) {
                    //@phpstan-ignore-next-line
                    $pivotClass = $this->getRelationship()->getPivotClass();
                    if (method_exists($pivotClass, 'getKeyName')) {
<<<<<<< HEAD
                        $actions['detach'] = DetachAction::make()
=======
<<<<<<< HEAD
                        $actions['detach'] = DetachAction::make()
=======
                        $actions['detach'] = Tables\Actions\DetachAction::make()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                            ->iconButton()
                            ->tooltip(__('user::actions.detach'));
                    }
                }
            }
        }
        //@phpstan-ignore-next-line
        return $actions;
    }

    /**
     * Get table bulk actions.
     *
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, BulkAction>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, BulkAction>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make()
                ->label('')
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get model class.
     *
<<<<<<< HEAD
     * @throws Exception Se non viene trovata una classe modello valida
=======
<<<<<<< HEAD
     * @throws Exception Se non viene trovata una classe modello valida
=======
     * @throws \Exception Se non viene trovata una classe modello valida
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
     * @return class-string<Model>
     */
    public function getModelClass(): string
    {
        //@phpstan-ignore-next-line
        if (method_exists($this, 'getRelationship')) {
            $relationship = $this->getRelationship();
            if ($relationship instanceof Relation) {
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
            }
        }

        if (method_exists($this, 'getModel')) {
            $model = $this->getModel();
            //@phpstan-ignore-next-line
            if (is_string($model)) {
                Assert::classExists($model);
                //Assert::isAOf($model, Model::class);
                /* @var class-string<Model> */
                //@phpstan-ignore-next-line
                return $model;
            }
            //@phpstan-ignore-next-line
            if ($model instanceof Model) {
                /* @var class-string<Model> */
                //@phpstan-ignore-next-line
                return get_class($model);
            }
        }

<<<<<<< HEAD
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
=======
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
>>>>>>> a12f125f4a (.)
=======
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
>>>>>>> b93ef594b4 (.)
=======
        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Notify that table is missing.
     */
    protected function notifyTableMissing(): void
    {
        $modelClass = $this->getModelClass();
        /** @var Model $model */
        $model = app($modelClass);
        Assert::isInstanceOf($model, Model::class);

        Notification::make()
            ->title(__('user::notifications.table_missing.title'))
            ->body(__('user::notifications.table_missing.body', [
                'table' => $model->getTable(),
            ]))
            ->persistent()
            ->warning()
            ->send();
    }

    /**
     * Configure empty table.
     */
    protected function configureEmptyTable(Table $table): Table
    {
        return $table
<<<<<<< HEAD
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
            ])
            ->headerActions([])
            ->recordActions([]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
=======
=======
>>>>>>> origin/develop
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')
                    ->default(__('user::fields.message.default'))
                    ->html(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
>>>>>>> b93ef594b4 (.)
            ])
            ->headerActions([])
            ->recordActions([]);
=======
            ])
            ->headerActions([])
            ->actions([]);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Get searchable columns.
     *
     * @return array<string>
     */
    protected function getSearchableColumns(): array
    {
        return ['id', 'name'];
    }

    /**
     * Check if search is enabled.
     */
    protected function hasSearch(): bool
    {
        return true;
    }

    /**
     * Get table search query.
     */
    public function getTableSearch(): string
    {
        /* @var string */
        return $this->tableSearch ?? '';
    }
}
