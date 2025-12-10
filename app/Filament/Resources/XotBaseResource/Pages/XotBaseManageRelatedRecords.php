<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\XotBaseResource\Pages;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Contracts\Support\Htmlable;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Actions\AttachAction;
=======
use Filament\Schemas\Components\Component;
use Override;
use Filament\Actions\CreateAction;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
use Filament\Actions\AttachAction;
=======
use Filament\Schemas\Components\Component;
use Override;
use Filament\Actions\CreateAction;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
use Filament\Actions\AttachAction;
use Filament\Actions\Action;
use Filament\Actions\DetachAction;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\CreateAction;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Filament\Traits\HasXotTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)

/**
 * Classe base per la gestione delle relazioni nelle risorse Filament.
 * Estende la classe ManageRelatedRecords di Filament e fornisce funzionalità aggiuntive
 * specifiche per il framework Laraxot.
 *
 * @template TModel of Model
 */
abstract class XotBaseManageRelatedRecords extends FilamentManageRelatedRecords
{
    use HasXotTable;
    use InteractsWithForms;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    use NavigationLabelTrait {
        NavigationLabelTrait::trans insteadof HasXotTable;
        NavigationLabelTrait::getKeyTrans insteadof HasXotTable;
        NavigationLabelTrait::getKeyTransFunc insteadof HasXotTable;
        NavigationLabelTrait::getKeyTransClass insteadof HasXotTable;
        NavigationLabelTrait::transClass insteadof HasXotTable;
        NavigationLabelTrait::transFunc insteadof HasXotTable;
        NavigationLabelTrait::transChoice insteadof HasXotTable;
    }
=======
    use NavigationLabelTrait;
>>>>>>> 5a14301c (.)
=======
    use NavigationLabelTrait;
>>>>>>> 5a14301c (.)
=======
    use NavigationLabelTrait;
>>>>>>> 5a14301c (.)
=======
    use NavigationLabelTrait;
>>>>>>> 5a14301c (.)
=======
    use NavigationLabelTrait;
>>>>>>> 5a14301c (.)

    // protected static string $resource;

    /**
     * Restituisce il gruppo di navigazione (override opzionale).
     */
    public static function getNavigationGroup(): string
    {
        return '';
    }

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
    /**
     * Restituisce lo schema del form per i record correlati.
     *
     * @return array<\Filament\Schemas\Components\Component>
=======
    /*
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<\Filament\Forms\Components\Component>
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> 5a14301c (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
=======
>>>>>>> fb8add77 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> 5a14301c (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> 5a14301c (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
=======
>>>>>>> fb8add77 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> 53d6a6ba (.)
=======
    /*
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<\Filament\Schemas\Components\Component>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> c84488b (.)
>>>>>>> 5bd842e3 (.)
=======
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> f3f26717 (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> 5a14301c (.)
     */
    // abstract public static function getFormSchema(): array;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Configura lo schema del form per i record correlati.
     */
    public function form(Schema $schema): Schema
    {
        // getFormSchema() sempre ritorna array per definizione
        $formSchema = $this->getFormSchema();

        return $schema->components($formSchema);
    }

    /**
     * Restituisce lo schema del form per i record correlati.
     *
     * @return array<Component>
     */
    public function getFormSchema(): array
    {
        return [];
    }

    /**
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Definisce le colonne della tabella per la visualizzazione dei record correlati.
     * Questo metodo può essere sovrascritto nelle classi figlie.
     *
     * @return array<string, TextColumn>
     */
<<<<<<< HEAD
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->label('ID')->sortable(),
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->label('ID')
                ->sortable(),

>>>>>>> f1d4085 (.)
            'name' => TextColumn::make('name')
                ->label('Nome')
                ->searchable()
                ->sortable(),
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
            'created_at' => TextColumn::make('created_at')
                ->label('Data Creazione')
                ->dateTime('d/m/Y H:i')
                ->sortable(),
        ];
    }

    /**
     * Definisce le azioni dell'intestazione della tabella.
     * Questo metodo può essere sovrascritto nelle classi figlie.
     *
     * @return array<string, Action>
     */
    public function getTableHeaderActions(): array
    {
<<<<<<< HEAD
        return [
            'create' => CreateAction::make()->label('Crea Nuovo')->disableCreateAnother(),
        ];
=======
        $actions = [];
        $resource = static::class;
        // if (method_exists($resource, 'canCreate')) {
        //     $actions['create'] = Tables\Actions\CreateAction::make()
        //         ->iconButton()
        //         ->tooltip(__('user::actions.create'))
        //         ->visible(fn (?Model $record): bool => $resource::canCreate());
        // }

        // if (method_exists($resource, 'canAssociate')) {
        //     $actions['associate'] = Tables\Actions\AssociateAction::make()
        //         ->label('')
        //         ->icon('heroicon-o-paper-clip')
        //         ->tooltip(__('user::actions.associate_user'))
        //         ->visible(fn (?Model $record): bool => $resource::canAssociate());

        // }

        if (method_exists($resource, 'canAttach')) {
            $actions['attach'] = AttachAction::make()
                ->label('')
                ->icon('heroicon-o-link')
                ->tooltip(__('user::actions.attach_user'))
                ->visible(fn (?Model $record): bool => $resource::canAttach())
                // ->recordSelectOptionsQuery(fn (Builder $query) => 
                //     $query->addSelect(DB::raw("CONCAT(nome, ' ', cognome, ' (ID: ', matricola, ')') as display_name"))
                // )
            // ->recordTitleAttribute('display_name')
            ->preloadRecordSelect();
        }
        return $actions;
>>>>>>> f1d4085 (.)
    }

    /**
     * Definisce le azioni per ogni riga della tabella.
     * Questo metodo può essere sovrascritto nelle classi figlie.
     *
     * @return array<string, Action>
     */
    public function getTableActions(): array
    {
        return [
            'edit' => Action::make('edit')
                ->label('Modifica')
                ->icon('heroicon-o-pencil')
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->url(function (Model $record): string {
                    $url = static::getResource()::getUrl('edit', ['record' => $record]);

                    return is_string($url) ? $url : (string) $url;
                }),
=======
=======
>>>>>>> 21348520 (.)
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 5a14301c (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
>>>>>>> ed734516 (.)
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                
            'detach' => DetachAction::make(),
            

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> ca9324a4 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> ca9324a4 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> ca9324a4 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> ca9324a4 (.)
=======
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 53d6a6ba (.)
=======
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
                ->url(function (Model $record): string {
                    $url = static::getResource()::getUrl('edit', ['record' => $record]);
                    Assert::string($url);

                    return $url;
                }),
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 71586de2 (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
            // 'view' => Action::make('view')
            //     ->label('Visualizza')
            //     ->icon('heroicon-o-eye')
            //     ->url(fn (Model $record): string => static::getResource()::getUrl('view', ['record' => $record])),
        ];
    }

    /*
     * Configura la tabella per la visualizzazione dei record correlati.
     * public function table(Table $table): Table
     * {
     * return $table
     * ->columns($this->getTableColumns())
     * ->headerActions($this->getTableHeaderActions())
     * ->actions($this->getTableActions())
     * ->bulkActions([])
     * ->emptyStateActions([
     * 'create' => CreateAction::make()
     * ->label('Crea Nuovo')
     * ->disableCreateAnother(),
     * ]);
     * }.
<<<<<<< HEAD
     *
     * public function table(Table $table): Table
     * {
     * return $table
     * ->columns($this->getTableColumns())
     * ->headerActions($this->getTableHeaderActions())
     * ->actions($this->getTableActions())
     * ->bulkActions([])
     * ->emptyStateActions([
     * 'create' => CreateAction::make()
     * ->label('Crea Nuovo')
     * ->disableCreateAnother(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * ]);
     * }
     */
=======
     
    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->headerActions($this->getTableHeaderActions())
            ->actions($this->getTableActions())
            ->bulkActions([])
            ->emptyStateActions([
                'create' => CreateAction::make()
                    ->label('Crea Nuovo')
                    ->disableCreateAnother(),
            ]);
    }
    */
>>>>>>> f1d4085 (.)
    /**
     * Configura il form per la creazione/modifica dei record correlati.
     */
    public function form(Schema $form): Schema
    {
<<<<<<< HEAD
        /** @var array<Component> $schema */
=======
        /** @var array<\Filament\Schemas\Components\Component> $schema */
>>>>>>> f1d4085 (.)
        $schema = $this->getFormSchema();
        return $form->components($schema);
    }
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)

    /**
     * Restituisce il titolo della pagina.
     */
    public function getTitle(): string
    {
        $resource = static::getResource();
        $recordTitle = $this->getRecordTitle();
        $relationship = static::getRelationshipName();

        $titleString = '';
        if ($recordTitle instanceof Htmlable) {
            $titleString = $recordTitle->toHtml();
        } else {
            $titleString = (string) $recordTitle;
        }

        return Str::of($relationship)
            ->title()
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
<<<<<<< HEAD
<<<<<<< HEAD
            ->prepend($titleString.' - ')
=======
            ->prepend($titleString . ' - ')
>>>>>>> 5a14301c (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 3fbbf1f5 (.)
=======
            ->prepend($titleString . ' - ')
=======
            ->prepend($titleString . ' - ')
>>>>>>> 399f46d3 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 399f46d3 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->prepend($titleString . ' - ')
=======
            ->prepend($titleString.' - ')
>>>>>>> a12f125f4a (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> b93ef594b4 (.)
=======
            ->prepend($titleString.' - ')
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> ca9324a4 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
            ->prepend($titleString . ' - ')
=======
            ->prepend($titleString.' - ')
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            ->prepend($titleString . ' - ')
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> ca9324a4 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 5a14301c (.)
=======
            ->prepend($titleString . ' - ')
=======
            ->prepend($titleString.' - ')
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            ->prepend($titleString . ' - ')
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> ca9324a4 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 5a14301c (.)
=======
            ->prepend($titleString . ' - ')
=======
            ->prepend($titleString.' - ')
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            ->prepend($titleString . ' - ')
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> ca9324a4 (.)
=======
            ->prepend($titleString . ' - ')
>>>>>>> 5a14301c (.)
=======
            ->prepend($titleString . ' - ')
=======
            ->prepend($titleString.' - ')
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
            ->toString();
    }
}
