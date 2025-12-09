<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\XotBaseResource\Pages;

use Filament\Schemas\Components\Component;
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
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
use Webmozart\Assert\Assert;
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
=======
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
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
    /**
     * Restituisce lo schema del form per i record correlati.
     *
     * @return array<\Filament\Schemas\Components\Component>
=======
    /*
     * @return array<\Filament\Forms\Components\Component>
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
     */
    // abstract public static function getFormSchema(): array;

    /**
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
     * Definisce le colonne della tabella per la visualizzazione dei record correlati.
     * Questo metodo può essere sovrascritto nelle classi figlie.
     *
     * @return array<string, TextColumn>
     */
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->label('ID')->sortable(),
            'name' => TextColumn::make('name')
                ->label('Nome')
                ->searchable()
                ->sortable(),
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
        return [
            'create' => CreateAction::make()->label('Crea Nuovo')->disableCreateAnother(),
        ];
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
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
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
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 399f46d3 (.)
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                
            'detach' => DetachAction::make(),
            

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
=======
=======
>>>>>>> 5a14301c (.)
     * ]);
     * }
     */
    /**
     * Configura il form per la creazione/modifica dei record correlati.
     */
    public function form(Schema $form): Schema
    {
        /** @var array<Component> $schema */
        $schema = $this->getFormSchema();
        return $form->components($schema);
    }
<<<<<<< HEAD
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
            ->prepend($titleString . ' - ')
=======
            ->prepend($titleString.' - ')
>>>>>>> f1d4085 (.)
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
            ->toString();
    }
}
