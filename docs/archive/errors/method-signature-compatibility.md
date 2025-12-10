<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 551c768c4 (.)
# errore di compatibilità nelle firme dei metodi

## problema

quando si estende una classe in php, non è possibile modificare la firma dei metodi che si stanno sovrascrivendo. questo include:

- cambiare un metodo da non statico a statico (o viceversa)
- cambiare il tipo di ritorno in modo incompatibile
- cambiare i parametri (numero, tipo, o obbligatorietà)
- cambiare la visibilità (es. da public a protected)

esempi di errori comuni:

```
Cannot make non static method Filament\Pages\BasePage::getView() static in class Modules\Xot\Filament\Pages\XotBasePage
```

```
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Access level to Modules\<nome progetto>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
=======
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> ce6fc085 (.)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
<<<<<<< HEAD
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
=======
>>>>>>> d86d643a (.)
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 472bd9dc (.)
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 3bf39332 (.)
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> cf971011 (.)
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> e7da37af (.)
=======
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
<<<<<<< HEAD
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\<nome modulo>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
=======
>>>>>>> 43d67f21 (.)
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
Access level to Modules\SaluteOra\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 55fe1822 (.)
>>>>>>> e39b54ba7 (.)
=======
Access level to Modules\<nome progetto>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 551c768c4 (.)
=======
Access level to Modules\<nome progetto>\Filament\Resources\AppointmentWorkflowResource\Pages\WorkflowAppointment::getFormActionsAlignment() must be public (as in class Filament\Pages\BasePage)
>>>>>>> 414a4ffcb (.)
```

esempio di errore:
```
Cannot make non static method Filament\Pages\BasePage::getView() static in class Modules\Xot\Filament\Pages\XotBasePage
```

## causa

l'errore si verifica quando si tenta di sovrascrivere un metodo cambiando le sue caratteristiche fondamentali:

### esempio 1: cambiare da non statico a statico

```php
// Classe padre
class BasePage
{
    public function getView(): string
    {
        // implementazione
    }
}

// Classe figlia - ERRORE
class XotBasePage extends BasePage
{
    public static function getView(): string  // Errore: non può essere statico
    {
        // implementazione
    }
}
```

### esempio 2: cambiare da public a protected

```php
// Classe padre
class BasePage
{
    public function getFormActionsAlignment(): string
    {
        // implementazione
    }
}

// Classe figlia - ERRORE
class WorkflowAppointment extends BasePage
{
    protected function getFormActionsAlignment(): string  // Errore: non può essere protected
    {
        // implementazione
    }
}
```

## soluzione

1. **mantenere la stessa firma** del metodo nella classe padre:

```php
// Classe figlia - CORRETTO
class XotBasePage extends BasePage
{
    public function getView(): string  // Corretto: stessa firma del metodo padre
    {
        // implementazione
    }
}
```

2. se è necessario un metodo statico, **creare un nuovo metodo** con un nome diverso:

```php
class XotBasePage extends BasePage
{
    // Sovrascrive il metodo non statico del padre
    public function getView(): string
    {
        return $this->resolveView();
    }
    
    // Nuovo metodo statico con nome diverso
    public static function resolveViewPath(): string
    {
        // implementazione statica
    }
}
```

## prevenzione

prima di sovrascrivere un metodo:

1. controllare la firma del metodo nella classe padre utilizzando `reflection`
2. utilizzare gli ide che segnalano questi errori (phpstorm, vscode con php intelephense)
3. definire classi di test che verificano la compatibilità

```php
// Verifica la firma prima di implementare
$parentMethod = new \ReflectionMethod(BasePage::class, 'getView');
$isStatic = $parentMethod->isStatic();
$returnType = $parentMethod->getReturnType();
```

## collegamento ad altre risorse

<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [regole di ereditarietà in php](/var/www/html/base_<nome progetto>/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
- [regole di ereditarietà in php](/var/www/html/base_techplanner_fila3_mono/laravel/docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](../Xot/docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_techplanner_fila3_mono/laravel/docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](../Xot/docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> e7da37af (.)
>>>>>>> 7e4835b8e (.)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/filament_extension_pattern.md)

- [regole di ereditarietà in php](/var/www/html/base_techplanner_fila3_mono/laravel/docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](../Xot/docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_<nome progetto>/laravel/docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_techplanner_fila3_mono/laravel/docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](../Xot/docs/filament_extension_pattern.md)
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
<<<<<<< HEAD
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
=======
>>>>>>> 43d67f21 (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 43d67f21 (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
- [regole di ereditarietà in php](/var/www/html/base_saluteora/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 55fe1822 (.)
>>>>>>> e39b54ba7 (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_<nome progetto>/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 551c768c4 (.)
=======
- [regole di ereditarietà in php](/var/www/html/base_<nome progetto>/laravel/project_docs/standards/php-inheritance-rules.md)
- [estensione pattern filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/filament_extension_pattern.md)
>>>>>>> 414a4ffcb (.)
