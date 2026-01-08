<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\XotBaseResource\Pages;

use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Traits\TransTrait as XotTransTrait;
use Override;
<<<<<<< HEAD
=======
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
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

/**
 * Classe base per la gestione delle relazioni nelle risorse Filament.
 * Estende la classe ManageRelatedRecords di Filament e fornisce funzionalità aggiuntive
 * specifiche per il framework Laraxot.
 *
 * @template TModel of Model
 */
abstract class XotBaseManageRelatedRecords extends FilamentManageRelatedRecords
{
    use HasXotTable, InteractsWithForms;
    // protected static string $resource;

    /**
     * Restituisce il gruppo di navigazione (override opzionale).
     */
    public static function getNavigationGroup(): string
    {
        return '';
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
    /**
     * Restituisce lo schema del form per i record correlati.
     *
     * @return array<\Filament\Schemas\Components\Component>
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
    /*
<<<<<<< HEAD
     * @return array<\Filament\Forms\Components\Component>
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     */
    // abstract public static function getFormSchema(): array;

    /**
     * Configura lo schema per i record correlati.
     */
    public function schema(Schema $schema): Schema
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
     * Definisce le colonne della tabella per la visualizzazione dei record correlati.
     * Questo metodo può essere sovrascritto nelle classi figlie.
     *
     * @return array<string, TextColumn>
     */
    #[\Override]
    /**
     * @return array<string, mixed>
     */
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
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
                ->url(function (Model $record): string {
                    $url = static::getResource()::getUrl('edit', ['record' => $record]);

                    return is_string($url) ? $url : (string) $url;
                }),
<<<<<<< HEAD
=======
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
=======
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
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
>>>>>>> 8b18e4bff (.)
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
            ->prepend($titleString.' - ')
            ->toString();
    }
}
