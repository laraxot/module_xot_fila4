# Guida alla Struttura Corretta delle Directory nei Moduli Laraxot <nome progetto>

## Panoramica

In Laraxot <nome progetto>, la struttura delle directory di ogni modulo è cruciale per il corretto funzionamento dell'autoloading, la compatibilità con PHPStan e la manutenibilità del codice.

## Regola Fondamentale

**Tutto il codice PHP deve essere posizionato all'interno della sottodirectory `app` del modulo.**

Questa regola non è solo una convenzione di Laraxot, ma segue la struttura standard di Laravel, dove tutto il codice dell'applicazione si trova nella directory `app`.

## Struttura Corretta

```
Modules/NomeModulo/
├── app/                         # TUTTO il codice PHP deve essere qui
│   ├── Actions/                 # Azioni (QueueableAction)
│   ├── Console/                 # Comandi Artisan
│   │   └── Commands/
│   ├── Datas/                   # Data Objects (Spatie Laravel Data)
│   ├── Enums/                   # Classi Enum
│   ├── Events/                  # Eventi
│   ├── Filament/               
│   │   ├── Pages/
│   │   └── Resources/
│   ├── Http/                    
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/                  # Modelli Eloquent
│   ├── Providers/               # Service Providers
│   └── ...                      # Altre directory di codice
├── config/                      # File di configurazione
├── database/                    # Migrazioni, seeder e factories
├── docs/                        # Documentazione specifica del modulo
├── resources/                   # Risorse frontend (viste, assets, ecc.)
└── routes/                      # Route del modulo
```

## Errori Comuni

### Posizionamento di Codice nella Radice del Modulo

#### ❌ ERRATO
```
Modules/Rating/Enums/SupportedLocale.php
Modules/Rating/Models/User.php
Modules/Rating/Http/Controllers/UserController.php
```

#### ✅ CORRETTO
```
Modules/Rating/app/Enums/SupportedLocale.php
Modules/Rating/app/Models/User.php
Modules/Rating/app/Http/Controllers/UserController.php
```

### Namespace non Corrispondente alla Struttura

Ricordare che il namespace deve seguire la struttura del modulo **senza** includere il segmento `app`:

#### ❌ ERRATO
```php
namespace Modules\Rating\App\Models;

class User extends Model
{
    // ...
}
```

#### ✅ CORRETTO
```php
namespace Modules\Rating\Models;

class User extends Model
{
    // ...
}
```

## Eccezioni alla Regola

Alcune directory sono escluse da questa regola:

1. **config/**: File di configurazione
2. **database/**: Migrazioni, seeder e factories
3. **routes/**: Definizioni delle route
4. **resources/**: Viste, traduzioni, assets
5. **docs/**: Documentazione

## Verifica della Struttura

Prima di eseguire PHPStan o fare commit, verifica la correttezza della struttura del tuo modulo:

```bash
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
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 85cdef688 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 6ca989d8 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/project_docs/"
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 091f883c (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 67be6ac0 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/project_docs/"
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 59259b43 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 88ee35c4e (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/project_docs/"
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> aba62c408 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 92cca5ade (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/project_docs/"
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 5cb992cc6 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 6a52563d6 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/project_docs/"
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 3c8d62b79 (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 317b552da (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/project_docs/"
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
find Modules/NomeModulo -type f -name "*.php" | grep -v "/app/" | grep -v "/config/" | grep -v "/database/" | grep -v "/routes/" | grep -v "/resources/" | grep -v "/docs/"
>>>>>>> 60f0a1820 (.)
```

Se questo comando restituisce dei file, significa che sono posizionati in modo errato.

## Correzione Automatica

Per correggere automaticamente la struttura delle directory, utilizza lo script fornito:

```bash
./bashscripts/fix_directory_structure.sh NomeModulo
```

## Checklist Pre-PHPStan

1. ☐ Verifica che tutti i file PHP siano nella directory `app`
2. ☐ Assicurati che i namespace non includano il segmento `app`
3. ☐ Controlla che le relazioni tra classi e directory siano corrette
4. ☐ Esegui gli script di correzione automatica se necessario

## Perché Questa Struttura è Importante

1. **Compatibilità con Laravel**: Segue le convenzioni standard di Laravel
2. **Autoloading Corretto**: Il PSR-4 autoloader è configurato per cercare le classi in `app/`
3. **Compatibilità con PHPStan**: Evita errori di classi non trovate durante l'analisi statica
4. **Manutenibilità**: Struttura coerente e prevedibile per tutti i moduli
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
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> 85cdef688 (.)
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 59259b43 (.)
=======
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> 317b552da (.)
=======
>>>>>>> 60f0a1820 (.)
=======
=======
5. **Chiarezza**: Separazione netta tra codice applicativo e supporto (config, routes, ecc.) 
>>>>>>> a5dccfe (.)
>>>>>>> d9f43fce9 (.)
