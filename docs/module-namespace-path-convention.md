# convenzioni per namespace e percorsi dei moduli

## struttura corretta del percorso

uno degli errori più comuni è la confusione tra il namespace nel codice php e il percorso fisico dei file nel filesystem.

### percorso fisico corretto

i file dei moduli devono sempre seguire questa struttura:

```
<<<<<<< HEAD
/var/www/html/<directory progetto>/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/<directory progetto>/laravel/Modules/<main module>/app/Filament/Resources/...`
- `/var/www/html/<directory progetto>/laravel/Modules/<main module>/app/Models/...`
- `/var/www/html/<directory progetto>/laravel/Modules/<main module>/app/Http/Controllers/...`
=======
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Models/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Http/Controllers/...`
>>>>>>> laraxot/develop

### namespace corretto

i namespace nei file php devono seguire questa struttura:

```php
namespace Modules\{NomeModulo}\{Tipo}\...;
```

per esempio:
<<<<<<< HEAD
- `namespace Modules\<main module>\Filament\Resources;`
- `namespace Modules\<main module>\Models;`
- `namespace Modules\<main module>\Http\Controllers;`
=======
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
>>>>>>> laraxot/develop

## errore comune

spesso si confonde il percorso fisico con il namespace, cercando file in:

```
<<<<<<< HEAD
/var/www/html/<directory progetto>/laravel/Modules/{NomeModulo}/{Tipo}/...
=======
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
>>>>>>> laraxot/develop
```

questo è **errato** perché omette la directory `app/` nel percorso fisico.

## verifiche rapide

1. percorso fisico: deve contenere `/app/` dopo il nome del modulo
2. namespace: non deve contenere `app` nel namespace

## esempi corretti

| namespace | percorso fisico |
|-----------|----------------|
<<<<<<< HEAD
| `Modules\<main module>\Filament\Resources\DoctorResource` | `/var/www/html/<directory progetto>/laravel/Modules/<main module>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/<directory progetto>/laravel/Modules/User/app/Models/User.php` |
=======
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
>>>>>>> laraxot/develop

## come evitare l'errore

1. usa sempre strumenti come `find_by_name` per verificare il percorso effettivo
2. controlla sempre la corrispondenza tra il namespace e il percorso fisico
3. considera sempre che il percorso fisico contiene `/app/` mentre il namespace no

## linkback

<<<<<<< HEAD
- [convenzioni di codice](/var/www/html/<directory progetto>/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/<directory progetto>/laravel/docs/project-structure.md)
=======
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
>>>>>>> laraxot/develop
