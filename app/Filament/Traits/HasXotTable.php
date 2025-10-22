<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\CreateAction;
>>>>>>> d2b0a27 (.)
use Filament\Actions\AssociateAction;
use Filament\Actions\AttachAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\DetachAction;
use Filament\Actions\EditAction;
use Filament\Actions\ReplicateAction;
use Filament\Actions\ViewAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Filament\Actions;
>>>>>>> d2b0a27 (.)
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Enums\RecordActionsPosition;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Actions\Model\TableExistsByModelClassActions;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Tables;
use Filament\Actions;
use Filament\Tables\Table;
use Webmozart\Assert\Assert;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Xot\Actions\Model\TableExistsByModelClassActions;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

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
     * @return array<int|string, \Filament\Actions\Action|\Filament\Actions\ActionGroup>
     */
    public function getTableHeaderActions(): array
    {
        $actions = [];

<<<<<<< HEAD
<<<<<<< HEAD
        $actions[] = CreateAction::make();
=======
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
>>>>>>> f1d4085 (.)
=======
        $actions['create'] = CreateAction::make();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $actions['create'] = CreateAction::make();
>>>>>>> 300ef70 (.)

        if ($this->shouldShowAssociateAction()) {
            $actions[] = AssociateAction::make()
                ->label('')
                ->icon('heroicon-o-paper-clip')
                ->tooltip(__('user::actions.associate_user'));
        }

        if ($this->shouldShowAttachAction()) {
            $actions[] = AttachAction::make()
                ->label('')
                ->icon('heroicon-o-link')
                ->tooltip(__('user::actions.attach_user'))
                ->preloadRecordSelect();
        }

        $actions[] = TableLayoutToggleTableAction::make('layout');

        return $actions;
    }

    protected function shouldShowAssociateAction(): bool
    {
        return false;
    }

    protected function shouldShowAttachAction(): bool
    {
        return $this instanceof \Filament\Resources\RelationManagers\RelationManager;
    }

    protected function shouldShowDetachAction(): bool
    {
        return $this instanceof \Filament\Resources\RelationManagers\RelationManager;
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
     * @return array<string, Action>
     */
    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
=======
            'create' => CreateAction::make()
                ->icon('heroicon-o-plus'),
>>>>>>> f1d4085 (.)
=======
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

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
<<<<<<< HEAD
    public function getTableHeading(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTableHeading(): null|string
=======
    public function getTableHeading(): ?string
>>>>>>> f1d4085 (.)
=======
    public function getTableHeading(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function getTableHeading(): null|string
>>>>>>> 300ef70 (.)
    {
        $key = static::getKeyTrans('table.heading');
        $trans = trans($key);

<<<<<<< HEAD
<<<<<<< HEAD
        return is_string($trans) && $trans !== $key ? $trans : null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return is_string($trans) && $trans !== $key ? $trans : null;
=======
        return (is_string($trans) && $trans !== $key) ? $trans : null;
>>>>>>> f1d4085 (.)
=======
        return is_string($trans) && $trans !== $key ? $trans : null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return is_string($trans) && $trans !== $key ? $trans : null;
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
=======
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
>>>>>>> f1d4085 (.)
=======
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
=======
            ->columns($this->layoutView->getTableColumns(
                $this->getTableColumns(),
                $this->getGridTableColumns()
            ))
>>>>>>> f1d4085 (.)
=======
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
>>>>>>> 300ef70 (.)
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->filters(/** @phpstan-ignore-line argument.type */ array_values($this->getTableFilters()))
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions(/** @phpstan-ignore-line argument.type */ array_values($this->getTableHeaderActions()))
            ->recordActions($this->getTableActions())
            ->toolbarActions(/** @phpstan-ignore-line argument.type */ array_values($this->getTableBulkActions()))
            ->recordActionsPosition(RecordActionsPosition::BeforeColumns)
            ->emptyStateActions($this->getTableEmptyStateActions())
            ->striped()
            ->paginated($this->getTablePaginated());

        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
         * ->defaultSort(
         * column: $this->getDefaultTableSortColumn(),
         * direction: $this->getDefaultTableSortDirection(),
         * );
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            ->defaultSort(
                column: $this->getDefaultTableSortColumn(),
                direction: $this->getDefaultTableSortDirection(),
            );
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
    protected function getDefaultTableSortColumn(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getDefaultTableSortColumn(): null|string
=======
    protected function getDefaultTableSortColumn(): ?string
>>>>>>> f1d4085 (.)
=======
    protected function getDefaultTableSortColumn(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    protected function getDefaultTableSortColumn(): null|string
>>>>>>> 300ef70 (.)
    {

        try {
            $modelClass = $this->getModelClass();
            /** @var Model $model */
            $model = app($modelClass);
            Assert::isInstanceOf($model, Model::class);

<<<<<<< HEAD
<<<<<<< HEAD
            return $model->getTable().'.id';
        } catch (\Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
            return $model->getTable() . '.id';
        } catch (Exception $e) {
>>>>>>> d2b0a27 (.)
            return null;
        }
    }

    /**
     * Get default table sort direction.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getDefaultTableSortDirection(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getDefaultTableSortDirection(): null|string
=======
    protected function getDefaultTableSortDirection(): ?string
>>>>>>> f1d4085 (.)
=======
    protected function getDefaultTableSortDirection(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    protected function getDefaultTableSortDirection(): null|string
>>>>>>> 300ef70 (.)
    {
        return 'desc';
    }

    /**
     * Get table filters.
     *
     * @return array<int|string, \Filament\Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [];
    }

    /**
     * Get table actions.
     *
     * @return array<Action|ActionGroup>
     */
    public function getTableActions(): array
    {
        $actions = [];
        $resource = $this->getResource();
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
        if (method_exists($resource, 'canView')) {
            $actions[] = ViewAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.view'))
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible($resource::canView(...));
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible($resource::canView(...));
=======
                ->visible(fn (Model $record): bool => $resource::canView($record));
>>>>>>> f1d4085 (.)
=======
                ->visible($resource::canView(...));
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                ->visible($resource::canView(...));
>>>>>>> 300ef70 (.)
        }

        if (method_exists($resource, 'canEdit')) {
            $actions[] = EditAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.edit'))
<<<<<<< HEAD
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
        
>>>>>>> f1d4085 (.)
=======
                ->visible($resource::canEdit(...));
        }

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                ->visible($resource::canEdit(...));
        }

>>>>>>> 300ef70 (.)
        if (method_exists($resource, 'canDelete')) {
            $actions[] = DeleteAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.delete'))
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible($resource::canDelete(...));
        }

=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->visible($resource::canDelete(...));
        }

=======
                ->visible(fn (Model $record): bool => $resource::canDelete($record));
        }
        
>>>>>>> f1d4085 (.)
=======
                ->visible($resource::canDelete(...));
        }

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                ->visible($resource::canDelete(...));
        }

>>>>>>> 300ef70 (.)
        if ($this->shouldShowReplicateAction()) {
            $actions[] = ReplicateAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.replicate'));
        }

        // Only relation managers support detach on pivot relations
        if ($this instanceof \Filament\Resources\RelationManagers\RelationManager) {
            /** @var \Illuminate\Database\Eloquent\Relations\Relation $relationship */
            $relationship = $this->getRelationship();
            if ($relationship instanceof \Illuminate\Database\Eloquent\Relations\BelongsToMany) {
                $actions[] = DetachAction::make()
                    ->iconButton()
                    ->tooltip(__('user::actions.detach'));
            }
        }

        return $actions;
    }

    /**
     * Get table bulk actions.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int|string, \Filament\Actions\Action|\Filament\Actions\ActionGroup>
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
=======
     * @return array<string, BulkAction>
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @return array<string, BulkAction>
>>>>>>> 300ef70 (.)
     */
    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make()
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get model class.
     *
     *
     * @return class-string<Model>
     *
     * @throws \Exception Se non viene trovata una classe modello valida
     */
    public function getModelClass(): string
    {
        if ($this instanceof \Filament\Resources\RelationManagers\RelationManager) {
            $relationship = $this->getRelationship();
            if ($relationship instanceof Relation) {
                $model = $relationship->getModel();

                /** @var class-string<Model> */
                return get_class($model);
            }
        }

        if (method_exists($this, 'getModel')) {
            $model = $this->getModel();
            // If getModel() returns a string, it's already a class name
            Assert::classExists($model);

            /** @var class-string<Model> */
            return $model;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
=======
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
>>>>>>> f1d4085 (.)
=======
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
=======
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')
                    ->default(__('user::fields.message.default'))
                    ->html(),
>>>>>>> f1d4085 (.)
=======
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
>>>>>>> 300ef70 (.)
            ])
            ->headerActions([])
            ->actions([]);
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
