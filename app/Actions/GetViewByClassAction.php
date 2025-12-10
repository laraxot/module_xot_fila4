<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use InvalidArgumentException;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

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
    public function execute(string $class, array $params = [], ?string $viewName = null): View
     * @param string $class Nome della classe
     * @param array<string, mixed> $params Parametri da passare alla vista
     * @param string|null $viewName Nome personalizzato della vista
     *
     * @return View
     */
    public function execute(string $class, array $params = [], null|string $viewName = null): View
    {
        $viewName ??= $this->getViewNameFromClass($class);

    public function execute(string $class, array $params = [], ?string $viewName = null): View
    {
        $viewName = $viewName ?? $this->getViewNameFromClass($class);
        
    public function execute(string $class, array $params = [], null|string $viewName = null): View
    {
        $viewName ??= $this->getViewNameFromClass($class);

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function execute(string $class, array $params = [], null|string $viewName = null): View
    {
        $viewName ??= $this->getViewNameFromClass($class);

<<<<<<< HEAD
=======
    public function execute(string $class, array $params = [], ?string $viewName = null): View
    {
        $viewName = $viewName ?? $this->getViewNameFromClass($class);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        /** @var view-string $viewName */
        return view($viewName, $params);
    }

    /**
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
     * @return string Il percorso della view
     */
    public function executeOld(string $class): string
    {
        /** @var list<string> $arr PHPStan knows explode always returns array */
        $arr = explode('\\', $class);

        // Verifica che la classe sia nel namespace Modules
        if ($arr[0] !== 'Modules') {
        $arr = explode('\\', $class);
        Assert::isArray($arr);

        // Verifica che la classe sia nel namespace Modules
        if ('Modules' !== $arr[0]) {
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
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
            throw new InvalidArgumentException('Class must be in Modules namespace');
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
            throw new InvalidArgumentException('Class must be in Modules namespace');
        }

        $module = $arr[1];
        $module_low = Str::lower($module);

        // Estrai il nome della classe e convertilo in kebab-case
        $class_name = Str::kebab(class_basename($class));

        // Costruisci il percorso della view
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
>>>>>>> 7468a7d2 (.)
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
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
        return $module_low.'::pages.'.$class_name;
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
        return $module_low . '::pages.' . $class_name;
<<<<<<< HEAD
        return $module_low.'::pages.'.$class_name;
=======
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
        return $module_low.'::pages.'.$class_name;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        return $module_low . '::pages.' . $class_name;
=======
        return $module_low.'::pages.'.$class_name;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
<<<<<<< HEAD
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low.'::pages.'.$class_name;
        return $module_low . '::pages.' . $class_name;
        return $module_low . '::pages.' . $class_name;
=======
>>>>>>> ca9324a4 (.)
=======
        return $module_low . '::pages.' . $class_name;
=======
        return $module_low.'::pages.'.$class_name;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
        return $module_low . '::pages.' . $class_name;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    }
}
