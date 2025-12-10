<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

<<<<<<< HEAD
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
use Exception;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\AssociateAction;
use Filament\Actions\AttachAction;
use Filament\Actions\BulkAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\EditAction;
use Filament\Actions\ReplicateAction;
use Filament\Actions\ViewAction;
<<<<<<< HEAD
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
<<<<<<< HEAD
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
use Filament\Actions;
use Filament\Actions;
use Filament\Actions;
use Filament\Actions;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Enums\RecordActionsPosition;
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
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Enums\RecordActionsPosition;
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
use Modules\Xot\Actions\Model\TableExistsByModelClassActions;
use Webmozart\Assert\Assert;
=======
=======
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
>>>>>>> 2f3197ab (.)
use Filament\Tables;
use Filament\Actions;
use Filament\Tables\Table;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use Filament\Tables\Actions\Action;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Actions\BulkAction;
=======
use Modules\UI\Enums\TableLayoutEnum;
>>>>>>> 2f3197ab (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
<<<<<<< HEAD
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
=======
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Xot\Actions\Model\TableExistsByModelClassActions;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

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

    protected static bool $canView = true;
    protected static bool $canView = true;
    protected static bool $canView = true;
    protected static bool $canView = true;

    protected static bool $canView = true;

    protected static bool $canView = true;
    protected static bool $canView = true;
    protected static bool $canView = true;
    protected static bool $canView = true;
    protected static bool $canView = true;
    protected static bool $canEdit = true;

    /**
     * Get table header actions.
     *
     * @return array<string, Action|ActionGroup>
     * @return array<string, Action|ActionGroup>
     * @return array<string, Action|ActionGroup>
     */
    public function getTableHeaderActions(): array
    {
        $actions = [];

<<<<<<< HEAD
        $actions['create'] = CreateAction::make();
<<<<<<< HEAD
        $actions[] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions[] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions[] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions[] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
=======
=======
>>>>>>> 2f3197ab (.)
        $resource = $this->getResource();
        
        if (method_exists($resource, 'canCreate')) {
            $actions['create'] = CreateAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.create'))
                ->visible(fn (?Model $record): bool => $resource::canCreate());
        }
<<<<<<< HEAD
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

        if ($this->shouldShowAssociateAction()) {
            $actions['associate'] = AssociateAction::make()
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();

        if ($this->shouldShowAssociateAction()) {
            $actions['associate'] = AssociateAction::make()
        $actions['create'] = CreateAction::make();
        $actions['create'] = CreateAction::make();

        if ($this->shouldShowAssociateAction()) {
            $actions['associate'] = AssociateAction::make()
        $actions['create'] = Tables\Actions\CreateAction::make();

        if ($this->shouldShowAssociateAction()) {
            $actions['associate'] = Tables\Actions\AssociateAction::make()
                ->label('')
                ->icon('heroicon-o-paper-clip')
                ->tooltip(__('user::actions.associate_user'));
        }

        if ($this->shouldShowAttachAction()) {
            $actions['attach'] = AttachAction::make()
            $actions['attach'] = AttachAction::make()
            $actions['attach'] = AttachAction::make()
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
        // @phpstan-ignore-next-line
        //@phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        //@phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        //@phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        //@phpstan-ignore-next-line
        return method_exists($this, 'getRelationship');
    }

    protected function shouldShowDetachAction(): bool
    {
        //@phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        //@phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        //@phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        //@phpstan-ignore-next-line
        // @phpstan-ignore-next-line
        // @phpstan-ignore-next-line
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
            'create' => CreateAction::make()
                ->icon('heroicon-o-plus'),
>>>>>>> f1d4085 (.)
        ];
    }

            'create' => CreateAction::make()->icon('heroicon-o-plus'),
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
            'create' => Actions\CreateAction::make()
                ->icon('heroicon-o-plus'),
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
=======
    
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

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
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
    public function getTableHeading(): ?string
    {
        $key = static::getKeyTrans('table.heading');
        /** @var string|array<int|string,mixed>|null $trans */
        // @phpstan-ignore-next-line
<<<<<<< HEAD
    public function getTableHeading(): null|string
    public function getTableHeading(): null|string
    public function getTableHeading(): null|string
    public function getTableHeading(): null|string
    public function getTableHeading(): ?string
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
    public function getTableHeading(): null|string
=======
    public function getTableHeading(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        $key = static::getKeyTrans('table.heading');
        /** @var string|array<int|string,mixed>|null $trans */
        //@phpstan-ignore-next-line
        $trans = trans($key);

<<<<<<< HEAD
        return is_string($trans) && $trans !== $key ? $trans : null;
<<<<<<< HEAD
        $trans = trans($key);

        return is_string($trans) && $trans !== $key ? $trans : null;
        return is_string($trans) && $trans !== $key ? $trans : null;
        return is_string($trans) && $trans !== $key ? $trans : null;
        return (is_string($trans) && $trans !== $key) ? $trans : null;
=======
=======
        return (is_string($trans) && $trans !== $key) ? $trans : null;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();

=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();

=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
=======
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
>>>>>>> f1d4085 (.)
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();

        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
        if (! app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
        if (!app(TableExistsByModelClassActions::class)->execute($modelClass)) {
            $this->notifyTableMissing();
            return $this->configureEmptyTable($table);
        }

        /** @var Model $model */
        $model = app($modelClass);
        Assert::isInstanceOf($model, Model::class);

        // Configurazione base della tabella
        return $table
        $table = $table
        $table = $table
        $table = $table
        $table = $table
            ->recordTitleAttribute($this->getTableRecordTitleAttribute())
            ->heading($this->getTableHeading())
<<<<<<< HEAD
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
=======
            ->columns($this->layoutView->getTableColumns(
                $this->getTableColumns(),
                $this->getGridTableColumns()
            ))
>>>>>>> f1d4085 (.)
            ->contentGrid($this->layoutView->getTableContentGrid())
        return $table
        $table = $table
        $table = $table
        $table = $table
        $table = $table
        $table = $table
            ->recordTitleAttribute($this->getTableRecordTitleAttribute())
            ->heading($this->getTableHeading())
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
            ->columns($this->layoutView->getTableColumns(
                $this->getTableColumns(),
                $this->getGridTableColumns()
            ))
            ->columns($this->layoutView->getTableColumns($this->getTableColumns(), $this->getGridTableColumns()))
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->filters(array_values($this->getTableFilters()))
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions(array_values($this->getTableHeaderActions()))
            ->recordActions($this->getTableActions())
            ->toolbarActions(array_values($this->getTableBulkActions()))
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions($this->getTableHeaderActions())
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->recordActionsPosition(RecordActionsPosition::BeforeColumns)
            ->emptyStateActions($this->getTableEmptyStateActions())
            ->striped()
            ->paginated($this->getTablePaginated());

        /*
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->recordActionsPosition(RecordActionsPosition::BeforeColumns)
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->recordActionsPosition(RecordActionsPosition::BeforeColumns)
            ->emptyStateActions($this->getTableEmptyStateActions())
            ->striped()
            ->paginated($this->getTablePaginated());

        /*
<<<<<<< HEAD
         * ->defaultSort(
         * column: $this->getDefaultTableSortColumn(),
         * direction: $this->getDefaultTableSortDirection(),
         * );
         */
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            ->defaultSort(
                column: $this->getDefaultTableSortColumn(),
                direction: $this->getDefaultTableSortDirection(),
            );
        */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
    protected function getDefaultTableSortColumn(): null|string
    protected function getDefaultTableSortColumn(): null|string
    protected function getDefaultTableSortColumn(): null|string
    protected function getDefaultTableSortColumn(): ?string
=======
=======
    protected function getDefaultTableSortColumn(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    {
        try {
            $modelClass = $this->getModelClass();
            /** @var Model $model */
            $model = app($modelClass);
            Assert::isInstanceOf($model, Model::class);

<<<<<<< HEAD
            return $model->getTable() . '.id';
=======
            return $model->getTable().'.id';
>>>>>>> f1d4085 (.)
        } catch (Exception $e) {
            return $model->getTable() . '.id';
        } catch (Exception $e) {
            return $model->getTable() . '.id';
            return $model->getTable() . '.id';
        } catch (Exception $e) {
            return $model->getTable().'.id';
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Get default table sort direction.
     */
<<<<<<< HEAD
    protected function getDefaultTableSortDirection(): null|string
=======
    protected function getDefaultTableSortDirection(): ?string
>>>>>>> f1d4085 (.)
    {
        return 'desc';
    protected function getDefaultTableSortDirection(): null|string
    protected function getDefaultTableSortDirection(): null|string
    protected function getDefaultTableSortDirection(): null|string
    protected function getDefaultTableSortDirection(): ?string
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

<<<<<<< HEAD



=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        if (method_exists($resource, 'canView')) {
            $actions['view'] = ViewAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.view'))
<<<<<<< HEAD
                ->visible($resource::canView(...));
<<<<<<< HEAD
                ->visible($resource::canView(...));
                ->visible($resource::canView(...));
                ->visible($resource::canView(...));
=======
=======
                ->visible(fn (Model $record): bool => $resource::canView($record));
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        }

        if (method_exists($resource, 'canEdit')) {
            $actions['edit'] = EditAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.edit'))
<<<<<<< HEAD
                ->visible($resource::canEdit(...));
        }

<<<<<<< HEAD
                ->visible($resource::canEdit(...));
        }

                ->visible($resource::canEdit(...));
        }

                ->visible($resource::canEdit(...));
        }

=======
=======
                ->visible(fn (Model $record): bool => $resource::canEdit($record));
        }
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        if (method_exists($resource, 'canDelete')) {
            $actions['delete'] = DeleteAction::make()
                ->iconButton()
                ->tooltip(__('user::actions.delete'))
<<<<<<< HEAD
                ->visible($resource::canDelete(...));
        }

=======
                ->visible(fn (Model $record): bool => $resource::canDelete($record));
        }
        
>>>>>>> f1d4085 (.)
        if ($this->shouldShowReplicateAction()) {
            $actions['replicate'] = ReplicateAction::make()
                ->visible($resource::canDelete(...));
        }

                ->visible($resource::canDelete(...));
        }

        if ($this->shouldShowReplicateAction()) {
            $actions['replicate'] = ReplicateAction::make()
        
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
                ->iconButton()
                ->tooltip(__('user::actions.replicate'));
        }

        // Check if class has the getRelationship method
        // Note: In some contexts (ListRecords), getRelationship() may not exist
        // @phpstan-ignore-next-line function.alreadyNarrowedType (needed for contexts where method doesn't exist)
        if ($this->shouldShowDetachAction() && method_exists($this, 'getRelationship')) {
            $relationship = $this->getRelationship();

            // Type guard: ensure relationship is an object with required methods
            // @phpstan-ignore-next-line function.alreadyNarrowedType (in RelationManager, always object; in ListRecords, may not be)
            if (! is_object($relationship)) {
                // Skip if not object
            } elseif (method_exists($relationship, 'getTable')
                && method_exists($relationship, 'getPivotClass')
            ) {
                /** @var mixed $pivotClass */
                $pivotClass = $relationship->getPivotClass();

                // Type guard: ensure pivotClass is object/string with getKeyName method
                if ((is_object($pivotClass) || is_string($pivotClass))
                    && method_exists($pivotClass, 'getKeyName')
                ) {
                    $actions['detach'] = DetachAction::make()
                        ->iconButton()
                        ->tooltip(__('user::actions.detach'));
                }
            }
        }

        if ($this->shouldShowDetachAction()) {
            //@phpstan-ignore-next-line
            if (method_exists($this, 'getRelationship')) {
                //@phpstan-ignore-next-line
                if (method_exists($this->getRelationship(), 'getTable')) {
                    //@phpstan-ignore-next-line
                    $pivotClass = $this->getRelationship()->getPivotClass();
                    if (method_exists($pivotClass, 'getKeyName')) {
                        $actions['detach'] = DetachAction::make()
                        $actions['detach'] = DetachAction::make()
                        $actions['detach'] = DetachAction::make()
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
<<<<<<< HEAD
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
=======
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
     * @return class-string<Model>
     *
     * @throws Exception Se non viene trovata una classe modello valida
     */
    public function getModelClass(): string
    {
        // @phpstan-ignore-next-line
        if (method_exists($this, 'getRelationship')) {
            $relationship = $this->getRelationship();
            if ($relationship instanceof Relation) {
                /** @var class-string<Model> */
     * @throws Exception Se non viene trovata una classe modello valida
     * @throws Exception Se non viene trovata una classe modello valida
     * @throws Exception Se non viene trovata una classe modello valida
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
            // @phpstan-ignore-next-line
            if (is_string($model)) {
                Assert::classExists($model);

                // Assert::isAOf($model, Model::class);
                /** @var class-string<Model> */
                // @phpstan-ignore-next-line
                return $model;
            }
            // @phpstan-ignore-next-line
            if ($model instanceof Model) {
                /** @var class-string<Model> */
                // @phpstan-ignore-next-line
                return $model::class;
            }
        }

        throw new Exception('No model found in '.class_basename(self::class).'::'.__FUNCTION__);
    }

    /**
     * Get table search query.
     */
    public function getTableSearch(): string
    {
        /** @var string */
        return $this->tableSearch ?? '';
    }

    protected function shouldShowAssociateAction(): bool
    {
        return false;
    }

    protected function shouldShowAttachAction(): bool
    {
        // @phpstan-ignore-next-line
        return method_exists($this, 'getRelationship');
    }

    protected function shouldShowDetachAction(): bool
    {
        // @phpstan-ignore-next-line
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
            'create' => CreateAction::make()->icon('heroicon-o-plus'),
        ];
    }

            ->filters(array_values($this->getTableFilters()))
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions(array_values($this->getTableHeaderActions()))
            ->recordActions($this->getTableActions())
            ->toolbarActions(array_values($this->getTableBulkActions()))
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions($this->getTableHeaderActions())
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions($this->getTableHeaderActions())
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions($this->getTableHeaderActions())
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->toolbarActions(/** @phpstan-ignore-line argument.type */ array_values($this->getTableBulkActions()))
            ->toolbarActions($this->getTableBulkActions())
            ->toolbarActions(/** @phpstan-ignore-line argument.type */ array_values($this->getTableBulkActions()))
            ->toolbarActions($this->getTableBulkActions())
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns($this->getTableFiltersFormColumns())
            ->persistFiltersInSession()
            ->headerActions($this->getTableHeaderActions())
            ->recordActions($this->getTableActions())
            ->toolbarActions($this->getTableBulkActions())
            ->recordActionsPosition(RecordActionsPosition::BeforeColumns)
            ->emptyStateActions($this->getTableEmptyStateActions())
            ->striped()
            ->paginated($this->getTablePaginated());

        /*
         * ->defaultSort(
         * column: $this->getDefaultTableSortColumn(),
         * direction: $this->getDefaultTableSortDirection(),
         * );
         */
        return $table;
    }

    protected function getTablePaginated(): bool
    {
        return true;
    }

    /**
     * Get default table sort column.
     */
    protected function getDefaultTableSortColumn(): ?string
    {
        try {
            $modelClass = $this->getModelClass();
            /** @var Model $model */
            $model = app($modelClass);
            Assert::isInstanceOf($model, Model::class);

            return $model->getTable().'.id';
        } catch (Exception $e) {
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
            return $model->getTable().'.id';
        } catch (\Exception $e) {
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
        } catch (Exception $e) {
            return $model->getTable() . '.id';
            return $model->getTable().'.id';
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
            return $model->getTable().'.id';
        } catch (\Exception $e) {
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
        } catch (Exception $e) {
        } catch (Exception $e) {
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
            return $model->getTable().'.id';
        } catch (\Exception $e) {
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
        } catch (Exception $e) {
            return $model->getTable() . '.id';
            return $model->getTable().'.id';
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
            return $model->getTable().'.id';
        } catch (\Exception $e) {
            return $model->getTable() . '.id';
        } catch (Exception $e) {
        } catch (Exception $e) {
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Get default table sort direction.
     */
    protected function getDefaultTableSortDirection(): ?string
    {
        return 'desc';
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
        // Note: In some contexts (ListRecords), getRelationship() may not exist
        // @phpstan-ignore-next-line function.alreadyNarrowedType (needed for contexts where method doesn't exist)
        if ($this->shouldShowDetachAction() && method_exists($this, 'getRelationship')) {
            $relationship = $this->getRelationship();

            // Type guard: ensure relationship is an object with required methods
            // @phpstan-ignore-next-line function.alreadyNarrowedType (in RelationManager, always object; in ListRecords, may not be)
            if (! is_object($relationship)) {
                // Skip if not object
            } elseif (method_exists($relationship, 'getTable')
                && method_exists($relationship, 'getPivotClass')
            ) {
                /** @var mixed $pivotClass */
                $pivotClass = $relationship->getPivotClass();

                // Type guard: ensure pivotClass is object/string with getKeyName method
                if ((is_object($pivotClass) || is_string($pivotClass))
                    && method_exists($pivotClass, 'getKeyName')
                ) {
                    $actions['detach'] = DetachAction::make()
                        ->iconButton()
                        ->tooltip(__('user::actions.detach'));
                }
            }
        }

        // @phpstan-ignore-next-line
        return $actions;
    }

    /**
     * Get table bulk actions.
     *
     * @return array<string, BulkAction>
     * @return array<int|string, \Filament\Actions\Action|\Filament\Actions\ActionGroup>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, \Filament\Actions\BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<int|string, \Filament\Actions\Action|\Filament\Actions\ActionGroup>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, \Filament\Actions\BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
     * @return array<string, BulkAction>
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
     *
     * @return class-string<Model>
     *
     * @throws Exception Se non viene trovata una classe modello valida
     */
    public function getModelClass(): string
    {
        // @phpstan-ignore-next-line
        if (method_exists($this, 'getRelationship')) {
            $relationship = $this->getRelationship();
            if ($relationship instanceof Relation) {
                $model = $relationship->getModel();

                /** @var class-string<Model> */
                return get_class($model);
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                $model = $relationship->getModel();

                /** @var class-string<Model> */
                return get_class($model);
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                $model = $relationship->getModel();

                /** @var class-string<Model> */
                return get_class($model);
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
            }
        }

<<<<<<< HEAD
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
<<<<<<< HEAD
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
<<<<<<< HEAD
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
                /* @var class-string<Model> */
                return get_class($relationship->getModel());
            }
        }

        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        if (method_exists($this, 'getModel')) {
            $model = $this->getModel();
            // @phpstan-ignore-next-line
            if (is_string($model)) {
                Assert::classExists($model);

                // Assert::isAOf($model, Model::class);
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return $model;
            }
            // @phpstan-ignore-next-line
            if ($model instanceof Model) {
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return get_class($model);
            }
        }

        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);

                // Assert::isAOf($model, Model::class);
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return $model;
            }
            // @phpstan-ignore-next-line
            if ($model instanceof Model) {
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return get_class($model);
            }
        }

        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
            // If getModel() returns a string, it's already a class name
            Assert::classExists($model);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);

                // Assert::isAOf($model, Model::class);
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return $model;
            }
            // @phpstan-ignore-next-line
            if ($model instanceof Model) {
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return get_class($model);
            }
        }

        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
            // If getModel() returns a string, it's already a class name
            Assert::classExists($model);

                // Assert::isAOf($model, Model::class);
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return $model;
            }
            // @phpstan-ignore-next-line
            if ($model instanceof Model) {
                /* @var class-string<Model> */
                // @phpstan-ignore-next-line
                return get_class($model);
            }
        }

        throw new \Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
        throw new Exception('No model found in ' . class_basename(__CLASS__) . '::' . __FUNCTION__);
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
=======
        throw new Exception('No model found in '.class_basename(__CLASS__).'::'.__FUNCTION__);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
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
            ])
            ->headerActions([])
            ->recordActions([]);
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
            ->modifyQueryUsing(static fn (Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')
                    ->default(__('user::fields.message.default'))
                    ->html(),
            ->modifyQueryUsing(static fn(Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')->default(__('user::fields.message.default'))->html(),
            ])
            ->headerActions([])
            ->recordActions([]);
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
