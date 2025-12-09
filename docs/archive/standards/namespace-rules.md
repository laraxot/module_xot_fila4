# Regole di Namespace 

## Struttura dei Namespace

, tutti i namespace dei moduli seguono questa convenzione:

```
Modules\{NomeModulo}\{Categoria}
```

### Importante

Nonostante le classi possano risiedere fisicamente nella sottodirectory `app/` di un modulo, il namespace NON deve includere il segmento "app".

## Esempi Corretti

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
// File in: /var/www/html/<nome progetto>/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/<nome progetto>/laravel/Modules/Dental/app/Services/AppointmentService.php
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
// File in: /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Dental/app/Services/AppointmentService.php
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
// File in: /var/www/html/saluteora/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/saluteora/laravel/Modules/Dental/app/Services/AppointmentService.php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
// File in: /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Dental/app/Services/AppointmentService.php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
// File in: /var/www/html/<nome progetto>/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/<nome progetto>/laravel/Modules/Dental/app/Services/AppointmentService.php
// File in: /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Dental/app/Services/AppointmentService.php
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
// File in: /var/www/html/saluteora/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/saluteora/laravel/Modules/Dental/app/Services/AppointmentService.php
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
// File in: /var/www/html/saluteora/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/saluteora/laravel/Modules/Dental/app/Services/AppointmentService.php
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
// File in: /var/www/html/saluteora/laravel/Modules/Patient/app/Models/Patient.php
namespace Modules\Patient\Models;

// File in: /var/www/html/saluteora/laravel/Modules/Dental/app/Services/AppointmentService.php
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
namespace Modules\Dental\Services;
```

## Esempi Errati

```php
// ❌ NON UTILIZZARE
namespace Modules\Patient\app\Models;
namespace Modules\Dental\App\Services;
```

## Mapping PSR-4 nei file composer.json

Il mapping PSR-4 nei file `composer.json` dei moduli è configurato come:

```json
"autoload": {
    "psr-4": {
        "Modules\\NomeModulo\\": "app/"
    }
}
```

## Validazione dei Namespace

Quando si sviluppano nuove classi o si modificano classi esistenti:

1. Verificare che il namespace sia nel formato `Modules\NomeModulo\{Categoria}`
2. Assicurarsi che non sia presente il segmento "app" o "App" nel namespace
3. Controllare che tutti i riferimenti alle classi (use statements) seguano la stessa convenzione

## Strumenti di Validazione

Per verificare la conformità dei namespace, utilizzare:

```bash
php artisan module:check-namespaces {NomeModulo}
```

Questo comando analizzerà tutti i file PHP nel modulo e segnalerà eventuali namespace non conformi.

## Riferimento a Classi di Altri Moduli

Quando si fa riferimento a classi di altri moduli, utilizzare sempre il namespace completo:

```php
// Corretto
use Modules\Patient\Models\Patient;

// Errato
use Modules\Patient\app\Models\Patient;
```

## Troubleshooting

Se si verificano errori "Class not found" o problemi di autoloading:

1. Verificare che il namespace della classe corrisponda alla convenzione (senza "app")
2. Controllare che i riferimenti alla classe (use statements) utilizzino il namespace corretto
3. Eseguire `composer dump-autoload` per ricaricare il mapping delle classi

## Collegamenti Correlati

- [Convenzioni](../../../docs/conventions.md)
- [Naming Conventions](../../../docs/naming-conventions.md)
- [Documentazione Xot](../CODE-STANDARDS.md)
- [Collegamenti Documentazione](../../../../docs/collegamenti-documentazione.md)

Ultima modifica: 31/03/2025 
