# XotBasePage

## Panoramica
`XotBasePage` è una classe base astratta che estende `Filament\Pages\Page` e fornisce funzionalità comuni per tutte le pagine Filament nel sistema. Questa classe implementa pattern e best practices standardizzati per la gestione delle pagine.

## Caratteristiche Principali

### 1. Gestione delle View
- Risoluzione automatica delle view basata sul namespace della classe
- Supporto per view personalizzate
- Gestione delle view mancanti con messaggi di errore appropriati

### 2. Sistema di Traduzione
- Integrazione con il sistema di traduzioni di Laravel
- Generazione automatica delle chiavi di traduzione
- Supporto per etichette di navigazione e gruppi

### 3. Gestione dei Form
- Integrazione con il sistema di form di Filament
- Schema di form configurabile
- Gestione dello stato del form

### 4. Autorizzazioni
- Sistema di autorizzazioni integrato
- Verifica automatica dei permessi
- Supporto per politiche di accesso

## Utilizzo

```php
namespace Modules\YourModule\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;

class YourPage extends XotBasePage
{
    protected static string $view = 'your-module::pages.your-page';
    
    protected function getFormSchema(): array
    {
        return [
            // Schema del form
        ];
    }
}
```

## Best Practices

1. **View**
   - Definire sempre la proprietà `$view` nelle classi figlie
   - Utilizzare il namespace del modulo per le view
   - Seguire la convenzione di naming delle view

2. **Traduzioni**
   - Utilizzare il sistema di traduzioni per tutte le stringhe
   - Non hardcodare le stringhe nel codice
   - Mantenere i file di traduzione organizzati

3. **Form**
   - Implementare `getFormSchema()` per definire la struttura del form
   - Utilizzare i componenti Filament standard
   - Gestire correttamente lo stato del form

4. **Autorizzazioni**
   - Implementare le politiche di accesso appropriate
   - Utilizzare il sistema di autorizzazioni di Laravel
   - Documentare i requisiti di accesso

## Metodi Principali

### `getModuleName()`
Restituisce il nome del modulo dalla classe.

### `trans(string $key)`
Genera una chiave di traduzione basata sul namespace della classe.

### `getModel()`
Restituisce il modello associato alla pagina.

### `getFormSchema()`
Definisce lo schema del form della pagina.

### `authorizeAccess()`
Verifica se l'utente ha l'accesso alla pagina.

## Note Tecniche

1. **Namespace**
   - Le classi devono essere nel namespace `Modules\{ModuleName}\Filament\Pages`
   - Le view devono essere nel namespace `{module-name}::pages`

2. **Dipendenze**
   - Filament Pages
   - Filament Forms
   - Laravel Authorization

3. **Compatibilità**
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
   - Compatibile con Filament 3.x
>>>>>>> 85cdef688 (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 6ca989d8 (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 091f883c (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> ecd5ec32 (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 67be6ac0 (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 59259b43 (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 88ee35c4e (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> aba62c408 (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 5e6aa70fe (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 92cca5ade (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> 5cb992cc6 (.)
=======
   - Compatibile con Filament 4.x
=======
   - Compatibile con Filament 3.x
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
   - Compatibile con Filament 4.x
>>>>>>> e39b54ba7 (.)
   - Richiede PHP 8.1+

## Link Correlati

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
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 85cdef688 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
<<<<<<< HEAD
- [Guida Traduzioni](../../../docs/translations.md) 
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 2bad128c (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Filament](../../../project_docs/filament/index.md)
- [Best Practices](../../../project_docs/best-practices.md)
- [Guida Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 091f883c (.)
=======
=======
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 59259b43 (.)
=======
=======
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> aba62c408 (.)
=======
=======
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Best Practices](../../../docs/best-practices.md)
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> 5cb992cc6 (.)
=======
=======
- [Guida Traduzioni](../../../docs/translations.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
