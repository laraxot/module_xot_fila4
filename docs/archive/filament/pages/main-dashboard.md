# MainDashboard

La classe `MainDashboard` è una pagina Filament che estende la dashboard predefinita per fornire funzionalità di reindirizzamento basate sui ruoli dell'utente.

## Caratteristiche Principali

- Estende `Filament\Pages\Dashboard`
- Gestisce il reindirizzamento automatico basato sui ruoli dell'utente
- Supporta la navigazione multi-modulo
- Integrazione con il sistema di autorizzazioni

## Configurazione

```php
protected static ?string $navigationIcon = 'heroicon-o-home';
protected static string $view = 'xot::filament.pages.dashboard';
protected static ?string $title = 'Main Dashboard';
protected static ?int $navigationSort = 1;
```

## Logica di Reindirizzamento

Il metodo `mount()` implementa la seguente logica:

1. Se l'utente ha un solo ruolo admin:
   - Estrae il nome del modulo dal ruolo
   - Reindirizza all'area admin del modulo specifico

2. Se l'utente non ha ruoli admin:
   - Reindirizza alla homepage nella lingua corrente

## Best Practices

- Utilizzare sempre `Assert` per validare gli oggetti null-safe
- Mantenere la coerenza nella struttura dei ruoli (formato: `{module}::admin`)
- Gestire correttamente i casi edge di autorizzazione

## Dipendenze

- Filament Pages
- Illuminate Support
- Webmozart Assert

## Esempio di Utilizzo

```php
use Modules\Xot\Filament\Pages\MainDashboard;

// La dashboard viene registrata automaticamente in Filament
// e gestisce i reindirizzamenti in base ai ruoli dell'utente
```

## Note di Sviluppo

- La vista associata deve essere definita in `xot::filament.pages.dashboard`
- L'icona di navigazione utilizza Heroicons
- La priorità di navigazione è impostata a 1 per massima visibilità

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 85cdef688 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
<<<<<<< HEAD
- [Gestione Ruoli](../../../docs/auth/roles.md) 
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 2bad128c (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Filament](../../../project_docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../project_docs/auth/index.md)
- [Gestione Ruoli](../../../project_docs/auth/roles.md) 
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 091f883c (.)
=======
=======
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 59259b43 (.)
=======
=======
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> aba62c408 (.)
=======
=======
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 5cb992cc6 (.)
=======
=======
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 3c8d62b79 (.)
=======
=======
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Sistema di Autorizzazioni](../../../docs/auth/index.md)
- [Gestione Ruoli](../../../docs/auth/roles.md) 
>>>>>>> 317b552da (.)
