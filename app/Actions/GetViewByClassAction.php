<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use InvalidArgumentException;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

/**
 * Classe per ottenere una vista basata su una classe.
 */
class GetViewByClassAction
{
    use QueueableAction;

    /**
     * Ottiene una vista basata su una classe.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $class  Nome della classe
     * @param  array<string, mixed>  $params  Parametri da passare alla vista
     * @param  string|null  $viewName  Nome personalizzato della vista
     */
    public function execute(string $class, array $params = [], ?string $viewName = null): View
=======
=======
>>>>>>> 5a14301c (.)
     * @param string $class Nome della classe
     * @param array<string, mixed> $params Parametri da passare alla vista
     * @param string|null $viewName Nome personalizzato della vista
     *
     * @return View
     */
<<<<<<< HEAD
    public function execute(string $class, array $params = [], null|string $viewName = null): View
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    {
        $viewName ??= $this->getViewNameFromClass($class);

=======
    public function execute(string $class, array $params = [], ?string $viewName = null): View
    {
        $viewName = $viewName ?? $this->getViewNameFromClass($class);
        
>>>>>>> f1d4085 (.)
        /** @var view-string $viewName */
        return view($viewName, $params);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Risolve il percorso della view basato sul namespace della classe.
     *
     * @param  string  $class  Il nome completo della classe
=======
=======
>>>>>>> 5a14301c (.)
     * Ottiene il nome della vista dal nome della classe.
     *
     * @param string $class Nome della classe
     *
     * @return string
     */
    protected function getViewNameFromClass(string $class): string
    {
        $parts = explode('\\', $class);
        $className = end($parts);
        return Str::kebab($className);
    }

    /**
     * Risolve il percorso della view basato sul namespace della classe.
     *
     * @param string $class Il nome completo della classe
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @return string Il percorso della view
     */
    public function executeOld(string $class): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var list<string> $arr PHPStan knows explode always returns array */
        $arr = explode('\\', $class);

        // Verifica che la classe sia nel namespace Modules
        if ($arr[0] !== 'Modules') {
=======
=======
>>>>>>> 5a14301c (.)
        $arr = explode('\\', $class);
        Assert::isArray($arr);

        // Verifica che la classe sia nel namespace Modules
        if ('Modules' !== $arr[0]) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
            throw new InvalidArgumentException('Class must be in Modules namespace');
        }

        $module = $arr[1];
        $module_low = Str::lower($module);

        // Estrai il nome della classe e convertilo in kebab-case
        $class_name = Str::kebab(class_basename($class));

        // Costruisci il percorso della view
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $module_low.'::pages.'.$class_name;
    }

    /**
     * Ottiene il nome della vista dal nome della classe.
     *
     * @param  string  $class  Nome della classe
     */
    protected function getViewNameFromClass(string $class): string
    {
        $parts = explode('\\', $class);
        $className = end($parts);

        return Str::kebab($className);
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 5a14301c (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 3fbbf1f5 (.)
=======
        return $module_low . '::pages.' . $class_name;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $module_low . '::pages.' . $class_name;
=======
        return $module_low.'::pages.'.$class_name;
>>>>>>> a12f125f4a (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> b93ef594b4 (.)
=======
        return $module_low.'::pages.'.$class_name;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> ca9324a4 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 5a14301c (.)
=======
        return $module_low . '::pages.' . $class_name;
=======
        return $module_low.'::pages.'.$class_name;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    }
}
