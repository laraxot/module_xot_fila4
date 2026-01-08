<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;

/**
 * Classe per ottenere una vista basata su una classe.
 */
class GetViewByClassAction
{
    use QueueableAction;

    /**
     * Ottiene una vista basata su una classe.
     *
     * @param  string  $class  Nome della classe
     * @param  array<string, mixed>  $params  Parametri da passare alla vista
     * @param  string|null  $viewName  Nome personalizzato della vista
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function execute(string $class, array $params = [], ?string $viewName = null): View
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function execute(string $class, array $params = [], null|string $viewName = null): View
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
    public function execute(string $class, array $params = [], ?string $viewName = null): View
    {
        $viewName ??= $this->getViewNameFromClass($class);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
    public function execute(string $class, array $params = [], null|string $viewName = null): View
=======
=======
>>>>>>> 300ef70 (.)
    public function execute(string $class, array $params = [], null|string $viewName = null): View
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
    {
        $viewName ??= $this->getViewNameFromClass($class);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
=======
    public function execute(string $class, array $params = [], ?string $viewName = null): View
    {
        $viewName = $viewName ?? $this->getViewNameFromClass($class);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        /** @var view-string $viewName */
        return view($viewName, $params);
    }

    /**
     * Risolve il percorso della view basato sul namespace della classe.
     *
     * @param  string  $class  Il nome completo della classe
     * @return string Il percorso della view
     */
    public function executeOld(string $class): string
    {
        /** @var list<string> $arr PHPStan knows explode always returns array */
        $arr = explode('\\', $class);

        // Verifica che la classe sia nel namespace Modules
        if ($arr[0] !== 'Modules') {
            throw new InvalidArgumentException('Class must be in Modules namespace');
        }

        $module = $arr[1];
        $module_low = Str::lower($module);

        // Estrai il nome della classe e convertilo in kebab-case
        $class_name = Str::kebab(class_basename($class));

        // Costruisci il percorso della view
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 5a14301c (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 3fbbf1f5 (.)
=======
        return $module_low . '::pages.' . $class_name;
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 399f46d3 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> ca9324a4 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    }

    /**
     * Risolve il percorso della view basato sul namespace della classe.
     *
     * @param  string  $class  Il nome completo della classe
     * @return string Il percorso della view
     */
    public function executeOld(string $class): string
    {
        $arr = explode('\\', $class);
        Assert::isArray($arr);

        // Verifica che la classe sia nel namespace Modules
        if ($arr[0] !== 'Modules') {
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
=======
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
        return $module_low.'::pages.'.$class_name;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $module_low.'::pages.'.$class_name;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return $module_low . '::pages.' . $class_name;
=======
        return $module_low.'::pages.'.$class_name;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> ca9324a4 (.)
=======
        return $module_low . '::pages.' . $class_name;
=======
        return $module_low.'::pages.'.$class_name;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    }
}
