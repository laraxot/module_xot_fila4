# XotBaseWidget

La classe astratta `XotBaseWidget` fornisce una base comune per tutti i widget Filament nel modulo Xot.

## Caratteristiche Principali

- Estende `Filament\Widgets\Widget`
- Integra funzionalità per i form tramite `InteractsWithForms`
- Supporta filtri di pagina tramite `InteractsWithPageFilters`
- Gestione automatica delle viste
- Configurazione flessibile

## Struttura Corretta dei File

### Posizionamento

I widget Filament **DEVONO** essere posizionati nella directory `app/Filament/Widgets/` del modulo:

```
Modules/NomeModulo/app/Filament/Widgets/NomeWidget.php
```

### Namespace

Il namespace corretto è `Modules\NomeModulo\Filament\Widgets` (senza il segmento `app`):

```php
namespace Modules\User\Filament\Widgets;

// NON usare: namespace Modules\User\App\Filament\Widgets;
```

## Proprietà

```php
public string $title = '';        // Titolo del widget
public string $icon = '';         // Icona del widget
protected int|string|array $columnSpan = 'full';  // Larghezza del widget
```

## Traits Integrati

- `\Filament\Widgets\Concerns\InteractsWithPageFilters`: Gestione dei filtri di pagina
- `\Filament\Forms\Concerns\InteractsWithForms`: Interazione con i form

> **IMPORTANTE**: Utilizzare sempre il namespace completo per i traits, incluso il namespace `\Filament\` iniziale

## Form Schema

Ogni widget deve implementare il proprio schema di form:

```php
abstract public function getFormSchema(): array;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
final public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
final public function form(Form $form): Form
>>>>>>> 67be6ac0 (.)
=======
final public function form(Form $form): Form
>>>>>>> 88ee35c4e (.)
=======
final public function form(Form $form): Form
>>>>>>> 92cca5ade (.)
=======
final public function form(Form $form): Form
>>>>>>> 6a52563d6 (.)
=======
final public function form(Form $form): Form
>>>>>>> 317b552da (.)
=======
final public function form(Form $form): Form
>>>>>>> 80bc07e81 (.)
{
    return $form
        ->schema($this->getFormSchema())
        ->columns(2)
        ->statePath('data');
}
```

## Best Practices

1. **Estensione della Classe**
   ```php
   namespace Modules\User\Filament\Widgets;
   
   use Modules\Xot\Filament\Widgets\XotBaseWidget;

   class RegistrationWidget extends XotBaseWidget
   {
       protected int | string | array $columnSpan = 'full';
       public string $type;
       public string $resource;
       protected static string $view = 'pub_theme::filament.widgets.registration';

       public function mount(string $type): void
       {
           $this->type = $type;
           $this->resource = 'Modules\\' . ucfirst($type) . '\\Models\\User';
       }

       public function getFormSchema(): array
       {
           return $this->resource::getFormSchemaWidget();
       }
   }
   ```

2. **Mai Usare `->label()` nei Componenti Filament**
   - Le etichette sono gestite automaticamente dal LangServiceProvider
   - Utilizzare la struttura espansa per i campi nei file di traduzione
   - Seguire la convenzione di naming per le chiavi di traduzione: `modulo::risorsa.fields.campo.label`

3. **Struttura Corretta per getFormSchema()**
   ```php
   public function getFormSchema(): array
   {
       return [
           'title' => Forms\Components\TextInput::make('title'),
           'content' => Forms\Components\RichEditor::make('content'),
       ];
   }
   ```

4. **Gestione delle Viste**
   - Le viste vengono risolte automaticamente
   - Utilizzare il namespace del modulo per le viste
   - Seguire le convenzioni di naming

5. **Configurazione**
   - Personalizzare titolo e icona
   - Definire la larghezza appropriata
   - Implementare azioni di salvataggio quando necessario

6. **Filtri**
   - Utilizzare i metodi di `InteractsWithPageFilters`
   - Gestire gli aggiornamenti dei filtri
   - Mantenere la coerenza nella struttura

## Dipendenze

- Filament Widgets
- Filament Forms
- Modules Xot

## Eventi

```php
public array $listener = [
    'filters-updated' => 'filtersUpdated',
];
```

## Note di Sviluppo

- La classe è astratta e deve essere estesa
- Le viste vengono risolte automaticamente tramite `GetViewByClassAction`
- Supporta la personalizzazione completa del form
- Integra gestione cache per ottimizzazione

## Integrazione con CanPoll

Per implementare il polling automatico nei widget Filament, utilizzare il trait `CanPoll`:

```php
use Filament\Widgets\Concerns\CanPoll;

class DashboardStatsWidget extends XotBaseWidget
{
    use CanPoll;
    
    // Personalizzare l'intervallo di polling (default: 5s)
    protected static ?string $pollingInterval = '10s';
    
    protected function getPollingInterval(): ?string
    {
        return static::$pollingInterval;
    }
}
```

Questo trait permette al widget di aggiornarsi automaticamente a intervalli regolari senza richiedere l'intervento dell'utente.

## Collegamenti Bidirezionali

- [README.md](../../README.md) - Indice principale della documentazione
- [DIRECTORY-CASE-SENSITIVITY.md](../../DIRECTORY-CASE-SENSITIVITY.md) - Regole per la case sensitivity delle directory
- [NAMESPACE-RULES.md](../../NAMESPACE-RULES.md) - Regole per i namespace nei moduli
- [FOLIO_VOLT_FILAMENT_INTEGRATION.md](../../FOLIO_VOLT_FILAMENT_INTEGRATION.md) - Integrazione Folio, Volt e Filament
- [MODULE_STRUCTURE.md](../../MODULE_STRUCTURE.md) - Struttura standard dei moduli
<<<<<<< HEAD
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
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
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 85cdef688 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
=======
- [Documentazione Filament](https://filamentphp.com/project_docs/3.x/widgets/installation) 
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 091f883c (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> ecd5ec32 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 59259b43 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> aba62c408 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 5e6aa70fe (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 5cb992cc6 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> e39b54ba7 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 3c8d62b79 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> ba7efc23f (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 60f0a1820 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> a5dccfe (.)
>>>>>>> d9f43fce9 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 5df5c7505 (.)
=======
- [Documentazione Filament](https://filamentphp.com/docs/3.x/widgets/installation) 
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)
