# convenzioni per namespace e percorsi dei moduli

## struttura corretta del percorso

uno degli errori più comuni è la confusione tra il namespace nel codice php e il percorso fisico dei file nel filesystem.

### percorso fisico corretto

i file dei moduli devono sempre seguire questa struttura:

```
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 851793957 (.)
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Models/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Http/Controllers/...`
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Models/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Http/Controllers/...`
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Models/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Http/Controllers/...`
<<<<<<< HEAD
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Models/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Http/Controllers/...`
=======
>>>>>>> 53d6a6ba (.)
=======
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Models/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Http/Controllers/...`
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)

### namespace corretto

i namespace nei file php devono seguire questa struttura:

```php
namespace Modules\{NomeModulo}\{Tipo}\...;
```

per esempio:
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- `namespace Modules\<nome progetto>\Filament\Resources;`
- `namespace Modules\<nome progetto>\Models;`
- `namespace Modules\<nome progetto>\Http\Controllers;`
=======
>>>>>>> 851793957 (.)
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
<<<<<<< HEAD
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
=======
>>>>>>> 53d6a6ba (.)
=======
- `namespace Modules\<nome progetto>\Filament\Resources;`
- `namespace Modules\<nome progetto>\Models;`
- `namespace Modules\<nome progetto>\Http\Controllers;`
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)

## errore comune

spesso si confonde il percorso fisico con il namespace, cercando file in:

```
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/{Tipo}/...
=======
>>>>>>> 851793957 (.)
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
<<<<<<< HEAD
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
=======
>>>>>>> 53d6a6ba (.)
=======
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/{Tipo}/...
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)
```

questo è **errato** perché omette la directory `app/` nel percorso fisico.

## verifiche rapide

1. percorso fisico: deve contenere `/app/` dopo il nome del modulo
2. namespace: non deve contenere `app` nel namespace

## esempi corretti

| namespace | percorso fisico |
|-----------|----------------|
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
| `Modules\<nome progetto>\Filament\Resources\DoctorResource` | `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_<nome progetto>/laravel/Modules/User/app/Models/User.php` |
=======
>>>>>>> 851793957 (.)
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
<<<<<<< HEAD
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
=======
>>>>>>> 53d6a6ba (.)
=======
| `Modules\<nome progetto>\Filament\Resources\DoctorResource` | `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_<nome progetto>/laravel/Modules/User/app/Models/User.php` |
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)

## come evitare l'errore

1. usa sempre strumenti come `find_by_name` per verificare il percorso effettivo
2. controlla sempre la corrispondenza tra il namespace e il percorso fisico
3. considera sempre che il percorso fisico contiene `/app/` mentre il namespace no

## linkback

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [convenzioni di codice](/var/www/html/base_<nome progetto>/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_<nome progetto>/laravel/docs/project-structure.md)
=======
>>>>>>> 851793957 (.)
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
<<<<<<< HEAD
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
=======
>>>>>>> 53d6a6ba (.)
=======
- [convenzioni di codice](/var/www/html/base_<nome progetto>/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_<nome progetto>/laravel/docs/project-structure.md)
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)
