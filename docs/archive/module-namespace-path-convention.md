# convenzioni per namespace e percorsi dei moduli

## struttura corretta del percorso

uno degli errori più comuni è la confusione tra il namespace nel codice php e il percorso fisico dei file nel filesystem.

### percorso fisico corretto

i file dei moduli devono sempre seguire questa struttura:

```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Models/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Http/Controllers/...`
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Filament/Resources/...`
- `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Models/...`
- `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Http/Controllers/...`
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Models/...`
- `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Http/Controllers/...`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d86d643a (.)
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
<<<<<<< HEAD
- `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/SaluteOra/app/Filament/Resources/...`
- `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/SaluteOra/app/Models/...`
- `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/SaluteOra/app/Http/Controllers/...`
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
- `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Filament/Resources/...`
- `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Models/...`
- `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Http/Controllers/...`
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Models/...`
- `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Http/Controllers/...`
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/{NomeModulo}/app/{Tipo}/...
```

per esempio:
- `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/<nome progetto>/app/Filament/Resources/...`
- `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/<nome progetto>/app/Models/...`
- `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/<nome progetto>/app/Http/Controllers/...`
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)

### namespace corretto

i namespace nei file php devono seguire questa struttura:

```php
namespace Modules\{NomeModulo}\{Tipo}\...;
```

per esempio:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- `namespace Modules\<nome progetto>\Filament\Resources;`
- `namespace Modules\<nome progetto>\Models;`
- `namespace Modules\<nome progetto>\Http\Controllers;`
=======
- `namespace Modules\<nome modulo>\Filament\Resources;`
- `namespace Modules\<nome modulo>\Models;`
- `namespace Modules\<nome modulo>\Http\Controllers;`
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
>>>>>>> 5a14301c (.)
=======
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
>>>>>>> 399f46d3 (.)
=======
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
=======
- `namespace Modules\<nome modulo>\Filament\Resources;`
- `namespace Modules\<nome modulo>\Models;`
- `namespace Modules\<nome modulo>\Http\Controllers;`
- `namespace Modules\<nome modulo>\Filament\Resources;`
- `namespace Modules\<nome modulo>\Models;`
- `namespace Modules\<nome modulo>\Http\Controllers;`
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- `namespace Modules\SaluteOra\Filament\Resources;`
- `namespace Modules\SaluteOra\Models;`
- `namespace Modules\SaluteOra\Http\Controllers;`
>>>>>>> 43d67f21 (.)

## errore comune

spesso si confonde il percorso fisico con il namespace, cercando file in:

```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/{Tipo}/...
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/{NomeModulo}/{Tipo}/...
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
>>>>>>> 399f46d3 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_<nome progetto>/laravel/Modules/{NomeModulo}/{Tipo}/...
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/{NomeModulo}/{Tipo}/...
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/laravel/Modules/{NomeModulo}/{Tipo}/...
>>>>>>> 43d67f21 (.)
```

questo è **errato** perché omette la directory `app/` nel percorso fisico.

## verifiche rapide

1. percorso fisico: deve contenere `/app/` dopo il nome del modulo
2. namespace: non deve contenere `app` nel namespace

## esempi corretti

| namespace | percorso fisico |
|-----------|----------------|
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
| `Modules\<nome progetto>\Filament\Resources\DoctorResource` | `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_<nome progetto>/laravel/Modules/User/app/Models/User.php` |
=======
| `Modules\<nome modulo>\Filament\Resources\DoctorResource` | `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/User/app/Models/User.php` |
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/User.php` |
>>>>>>> 5a14301c (.)
=======
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
>>>>>>> 399f46d3 (.)
=======
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
=======
| `Modules\<nome modulo>\Filament\Resources\DoctorResource` | `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_ptvx_fila3_mono/laravel/Modules/User/app/Models/User.php` |
| `Modules\<nome modulo>\Filament\Resources\DoctorResource` | `/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_<nome progetto>/laravel/Modules/User/app/Models/User.php` |
| `Modules\<nome modulo>\Filament\Resources\DoctorResource` | `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/<nome progetto>/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_techplanner_fila3_mono/laravel/Modules/User/app/Models/User.php` |
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
| `Modules\SaluteOra\Filament\Resources\DoctorResource` | `/var/www/html/base_saluteora/laravel/Modules/SaluteOra/app/Filament/Resources/DoctorResource.php` |
| `Modules\User\Models\User` | `/var/www/html/base_saluteora/laravel/Modules/User/app/Models/User.php` |
>>>>>>> 43d67f21 (.)

## come evitare l'errore

1. usa sempre strumenti come `find_by_name` per verificare il percorso effettivo
2. controlla sempre la corrispondenza tra il namespace e il percorso fisico
3. considera sempre che il percorso fisico contiene `/app/` mentre il namespace no

## linkback

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [convenzioni di codice](/var/www/html/base_<nome progetto>/laravel/project_docs/conventions.md)
- [struttura progetto](/var/www/html/base_<nome progetto>/laravel/project_docs/project-structure.md)
=======
- [convenzioni di codice](/var/www/html/base_techplanner_fila3_mono/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_techplanner_fila3_mono/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_techplanner_fila3_mono/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_techplanner_fila3_mono/laravel/docs/project-structure.md)
>>>>>>> 5a14301c (.)
=======
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/project_docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/project_docs/project-structure.md)
>>>>>>> 399f46d3 (.)
=======
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/docs/project-structure.md)

=======
- [convenzioni di codice](/var/www/html/base_techplanner_fila3_mono/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_techplanner_fila3_mono/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_<nome progetto>/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_<nome progetto>/laravel/docs/project-structure.md)
- [convenzioni di codice](/var/www/html/base_techplanner_fila3_mono/laravel/docs/conventions.md)
- [struttura progetto](/var/www/html/base_techplanner_fila3_mono/laravel/docs/project-structure.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [convenzioni di codice](/var/www/html/base_saluteora/laravel/project_docs/conventions.md)
- [struttura progetto](/var/www/html/base_saluteora/laravel/project_docs/project-structure.md)
>>>>>>> 43d67f21 (.)
