<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\XotBaseResource\Pages;

use Filament\Schemas\Components\Component;
<<<<<<< HEAD
=======
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
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
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
>>>>>>> 5cf46378 (.)
use Filament\Schemas\Components\Component;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Contracts\Support\Htmlable;
use Override;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Override;
use Webmozart\Assert\Assert;
use Override;
use Webmozart\Assert\Assert;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
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
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
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
>>>>>>> 5cf46378 (.)

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
    use NavigationLabelTrait {
        NavigationLabelTrait::trans insteadof HasXotTable;
        NavigationLabelTrait::getKeyTrans insteadof HasXotTable;
        NavigationLabelTrait::getKeyTransFunc insteadof HasXotTable;
        NavigationLabelTrait::getKeyTransClass insteadof HasXotTable;
        NavigationLabelTrait::transClass insteadof HasXotTable;
        NavigationLabelTrait::transFunc insteadof HasXotTable;
        NavigationLabelTrait::transChoice insteadof HasXotTable;
    }
    use NavigationLabelTrait;
    use NavigationLabelTrait;
    use NavigationLabelTrait;
    use NavigationLabelTrait;
    use NavigationLabelTrait;
    use NavigationLabelTrait;
    use NavigationLabelTrait;
    use NavigationLabelTrait;
    use NavigationLabelTrait;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 5cf46378 (.)
    /**
     * Restituisce lo schema del form per i record correlati.
     *
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
    /*
<<<<<<< HEAD
     * @return array<\Filament\Forms\Components\Component>
<<<<<<< HEAD
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 62cc8443 (.)
    /*
<<<<<<< HEAD
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 88e745db5 (.)
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
    /*
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
     * @return array<\Filament\Schemas\Components\Component>
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
    /*
     * @return array<\Filament\Forms\Components\Component>
=======
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
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> fb8add77 (.)
<<<<<<< HEAD
>>>>>>> e6745a06 (.)
=======
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
<<<<<<< HEAD
>>>>>>> 01502290 (.)
=======
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> 53d6a6ba (.)
=======
    /*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<\Filament\Forms\Components\Component>
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 309cf3180 (.)
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
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> f3f26717 (.)
<<<<<<< HEAD
>>>>>>> 309cf3180 (.)
=======
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
>>>>>>> 88e745db5 (.)
     */
    // abstract public static function getFormSchema(): array;

    /**
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
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->label('ID')
                ->sortable(),

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
        return [
            'create' => CreateAction::make()->label('Crea Nuovo')->disableCreateAnother(),
        ];
        return [
            'create' => CreateAction::make()->label('Crea Nuovo')->disableCreateAnother(),
        ];
        return [
            'create' => CreateAction::make()->label('Crea Nuovo')->disableCreateAnother(),
        ];
        return [
            'create' => CreateAction::make()
                ->label('Crea Nuovo')
                ->disableCreateAnother(),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                ->url(function (Model $record): string {
                    $url = static::getResource()::getUrl('edit', ['record' => $record]);

                    return is_string($url) ? $url : (string) $url;
                }),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                
            'detach' => DetachAction::make(),
            

                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
<<<<<<< HEAD
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
>>>>>>> 53d6a6ba (.)
=======
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
>>>>>>> 5cf46378 (.)
                ->url(function (Model $record): string {
                    $url = static::getResource()::getUrl('edit', ['record' => $record]);
                    Assert::string($url);

                    return $url;
                }),
<<<<<<< HEAD
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn (Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
                ->url(fn(Model $record): string => static::getResource()::getUrl('edit', ['record' => $record])),
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
     * ]);
     * }
     */
     * ]);
     * }
     */
     
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
    /**
     * Configura il form per la creazione/modifica dei record correlati.
     */
    public function form(Schema $form): Schema
    {
        /** @var array<Component> $schema */
        $schema = $this->getFormSchema();
        return $form->components($schema);
    }
        /** @var array<Component> $schema */
        $schema = $this->getFormSchema();
        return $form->components($schema);
        /** @var array<Component> $schema */
        /** @var array<Component> $schema */
        $schema = $this->getFormSchema();
        return $form->components($schema);
    /**
     * Configura il form per la creazione/modifica dei record correlati.
     */
    public function form(Form $form): Form
    {
        /** @var array<\Filament\Forms\Components\Component> $schema */
        $schema = $this->getFormSchema();
        return $form->schema($schema);
    }

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
        if ($recordTitle instanceof Htmlable) {
        if ($recordTitle instanceof Htmlable) {
            $titleString = $recordTitle->toHtml();
        } else {
            $titleString = (string) $recordTitle;
        }

        return Str::of($relationship)
            ->title()
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString.' - ')
            ->prepend($titleString . ' - ')
            ->prepend($titleString . ' - ')
            ->toString();
    }
}
