# xotbasepage: implementazione e best practices

## descrizione
la classe `XotBasePage` è una classe base astratta per tutte le pagine filament non collegate a risorse specifiche. fornisce funzionalità comuni come gestione delle traduzioni, integrazione con il sistema di autorizzazioni e utilità per l'accesso ai dati.

## struttura
la classe `XotBasePage` estende `Filament\Pages\Page` e si trova in:
```
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
/var/www/html/base_<nome progetto>/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 399f46d3 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 472bd9dc (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> d86d643a (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_<nome progetto>/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 43d67f21 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 43d67f21 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> b7ea1cd1 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Xot/app/Filament/Pages/XotBasePage.php
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
```

## namespace
```php
namespace Modules\Xot\Filament\Pages;
```

## utilizzo corretto

```php
// nel modulo esempio
namespace Modules\Example\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;

class SettingsPage extends XotBasePage
{
    // implementazione...
}
```

## funzionalità principali

1. **sistema di traduzioni integrato**
   - localizzazione automatica basata sul modulo
   - generazione di chiavi di traduzione standardizzate

2. **gestione autorizzazioni**
   - integrazione con policy e autorizzazioni

3. **integrazione con form**
   - gestione form standardizzata
   - supporto per validazione

4. **rilevamento intelligente modello**
   - rilevamento automatico del modello associato
   - gestione centralizzata dell'entità associata

## best practices

### 1. traduzioni
- non usare mai stringhe hardcoded per le etichette
- utilizzare il metodo `trans()` o il trait `TransTrait`
- organizzare le traduzioni nei file del modulo (`/Modules/NomeModulo/lang/`)

### 2. override di metodi
- implementare `getFormSchema()` per definire la struttura del form SOLO nelle classi figlie che ne hanno bisogno
- NON dichiarare mai abstract getFormSchema() in XotBasePage
- non sovrascrivere metodi dichiarati come `final`
- estendere i metodi hook dove possibile

### 3. viste
- utilizzare viste nel modulo specifico
- preferire component blade riutilizzabili

### 4. performance
- evitare query n+1 utilizzando eager loading
- minimizzare il caricamento di risorse non necessarie

## esempio completo

```php
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
namespace Modules\<nome progetto>\Filament\Pages;
=======
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 5a14301c (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 399f46d3 (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 472bd9dc (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> d86d643a (.)
=======
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\<nome modulo>\Filament\Pages;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 43d67f21 (.)
=======
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 5a14301c (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 43d67f21 (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> b7ea1cd1 (.)
=======
namespace Modules\<nome modulo>\Filament\Pages;
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 5a14301c (.)
=======
namespace Modules\SaluteOra\Filament\Pages;
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)

use Modules\Xot\Filament\Pages\XotBasePage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class DashboardSettings extends XotBasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    
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
    protected static string $view = '<nome progetto>::filament.pages.dashboard-settings';
<<<<<<< HEAD
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 5a14301c (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 399f46d3 (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> d86d643a (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 472bd9dc (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> d86d643a (.)
=======
    protected static string $view = '<nome progetto>::filament.pages.dashboard-settings';
    protected static string $view = '<nome progetto>::filament.pages.dashboard-settings';
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 43d67f21 (.)
=======
    protected static string $view = '<nome progetto>::filament.pages.dashboard-settings';
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 5a14301c (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 43d67f21 (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> b7ea1cd1 (.)
=======
    protected static string $view = '<nome progetto>::filament.pages.dashboard-settings';
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 5a14301c (.)
=======
    protected static string $view = 'saluteora::filament.pages.dashboard-settings';
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
    
    protected function getFormFields(): array
    {
        return [
            'title' => [
                'type' => TextInput::class,
                'label' => true,
                'tooltip' => true,
                'placeholder' => true,
                'required' => true,
            ],
            'refresh_interval' => [
                'type' => Select::class,
                'label' => true,
                'tooltip' => true,
                'options' => [
                    '30' => '30 secondi',
                    '60' => '1 minuto',
                    '300' => '5 minuti',
                ]
            ]
        ];
    }
    
    public function submit(): void
    {
        $this->form->validate();
        // logica di salvataggio
    }

    public function authorize(): bool
    {
        return auth()->user()->can('view', static::class);
    }
}
```

## traduzioni dei campi

Le traduzioni dei campi del form devono essere definite nei file di traduzione del modulo seguendo questa struttura:

```php
// /Modules/NomeModulo/lang/it/fields.php
return [
    'title' => [
        'label' => 'Titolo',
        'tooltip' => 'Inserisci il titolo della dashboard',
        'placeholder' => 'Es. Dashboard Principale',
    ],
    'refresh_interval' => [
        'label' => 'Intervallo di aggiornamento',
        'tooltip' => 'Seleziona ogni quanto aggiornare i dati',
        'placeholder' => 'Seleziona un intervallo',
    ],
];
```

## autorizzazioni

Per implementare le autorizzazioni, è necessario:

1. Definire una policy per la pagina
2. Implementare il metodo `authorize()` nella classe della pagina
3. Registrare la policy nel service provider del modulo

```php
// /Modules/NomeModulo/Policies/DashboardSettingsPolicy.php
namespace Modules\NomeModulo\Policies;

use App\Models\User;

class DashboardSettingsPolicy
{
    public function view(User $user): bool
    {
        return $user->hasRole('admin');
    }
}
```

## considerazioni di sicurezza
- validare sempre gli input dell'utente
- utilizzare `authorizeAccess()` per controllare gli accessi
- seguire il principio del privilegio minimo

## pattern comuni
- pagine di impostazioni
- dashboard specializzate
- pagine di reportistica
- wizard personalizzati

## collegamento ad altre documentazioni
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
- [pattern di estensione filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/project_docs/filament-best-practices.md)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
- [pattern di estensione filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/Xot/docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/docs/filament-best-practices.md)
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/docs/filament-best-practices.md)
- [pattern di estensione filament](../Xot/docs/filament_extension_pattern.md)
- [best practices filament](../SaluteOra/docs/filament-best-practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-best-practices.md)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/docs/filament-best-practices.md)

=======
- [pattern di estensione filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/Xot/docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/docs/filament-best-practices.md)
- [pattern di estensione filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/docs/filament-best-practices.md)
- [pattern di estensione filament](../Xot/docs/filament_extension_pattern.md)
- [best practices filament](../<nome progetto>/docs/filament-best-practices.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-best-practices.md)
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-best-practices.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-best-practices.md)
>>>>>>> 43d67f21 (.)
=======
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-best-practices.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-best-practices.md)
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
- [pattern di estensione filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [best practices filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-best-practices.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)

## ATTENZIONE: errori critici da evitare
- NON dichiarare mai abstract getFormSchema() in XotBasePage: la classe base Filament lo implementa già. Fornire sempre una implementazione di default (array vuoto).
- Se serve uno schema custom, sovrascrivere il metodo nella classe figlia.
