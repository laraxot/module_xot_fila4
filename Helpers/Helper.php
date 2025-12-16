<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Actions\File\FixPathAction;
use function Safe\preg_match;
use function Safe\realpath;

/**
 * Verifica se l'applicazione è in esecuzione in un ambiente di test (TestBench).
 *
 * @return bool True se siamo in ambiente di test, false altrimenti
 */
if (! function_exists('isRunningTestBench')) {
    function isRunningTestBench(): bool
    {
        $path = app(FixPathAction::class)->execute('\vendor\orchestra\testbench-core\laravel');

        return file_exists($path);
    }
}

/**
 * Converte una stringa in formato snake_case.
 * Compatibilità con Laravel < 6.0.
 *
 * @param string $str La stringa da convertire
 * @return string La stringa in formato snake_case
 */
if (! function_exists('snake_case')) {
    function snake_case(string $str): string
    {
        return Str::snake($str);
    }
}

/**
 * Genera uno slug da una stringa.
 * Compatibilità con Laravel < 6.0.
 *
 * @param string $str La stringa da convertire in slug
 * @return string Lo slug generato
 */
if (! function_exists('str_slug')) {
    function str_slug(string $str): string
    {
        return Str::slug($str);
    }
}

/**
 * Debug esteso: logga i dati e ritorna JSON formattato.
 *
 * @param mixed $params I dati da debuggare
 * @return string JSON formattato dei dati
 */
if (! function_exists('dddx')) {
    function dddx(mixed $params): string
    {
        $data = is_array($params) ? $params : ['value' => $params];

        \Illuminate\Support\Facades\Log::debug('Xot Helper dddx', ['data' => $data]);

        return \Safe\json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}

/**
 * Estrae il nome del file da un path o da un array di parametri.
 *
 * @param string|array<string, mixed> $params Path del file o array con 'name' o 'path'
 * @return string Il nome del file estratto
 */
if (! function_exists('getFilename')) {
    function getFilename(string|array $params): string
    {
        if (is_string($params)) {
            return basename($params);
        }

        $name = $params['name'] ?? $params['path'] ?? '';

        return is_string($name) ? basename($name) : '';
    }
}

/**
 * Ritorna l'ID dell'utente autenticato o null se non autenticato.
 *
 * @return string|int|null L'ID dell'utente autenticato o null
 */
if (! function_exists('authId')) {
    function authId(): string|int|null
    {
        $user = Auth::user();

        return $user?->id;
    }
}

/**
 * Verifica se l'utente è in modalità amministrazione (admin panel).
 *
 * Wrapper per RouteService::inAdmin() che verifica il contesto admin
 * basandosi su URL segments e sessione Livewire.
 *
 * @param  array<string,string|int|bool|null>  $params  Parametri opzionali
 * @return bool True se in contesto admin, false altrimenti
 */
if (! function_exists('inAdmin')) {
    function inAdmin(array $params = []): bool
    {
        return \Modules\Xot\Services\RouteService::inAdmin($params);
    }
}

/**
 * Ottiene tutti i modelli Eloquent di un modulo specifico.
 *
 * Wrapper per GetAllModelsByModuleNameAction che scansiona
 * la directory Models/ del modulo e ritorna array di class-string.
 *
 * @param  string  $moduleName  Nome del modulo (es. 'User', 'Rating')
 * @return array<string, class-string> Array associativo [nome => class-string]
 */
if (! function_exists('getModuleModels')) {
    function getModuleModels(string $moduleName): array
    {
        /** @var \Modules\Xot\Actions\Model\GetAllModelsByModuleNameAction $action */
        $action = app(\Modules\Xot\Actions\Model\GetAllModelsByModuleNameAction::class);

        return $action->execute($moduleName);
    }
}

/**
 * Ottiene i parametri della route corrente.
 *
 * @return array<string, mixed> Array associativo dei parametri della route
 */
if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = request()->route();
        if (! ($route instanceof \Illuminate\Routing\Route)) {
            return [];
        }

        return $route->parameters();
    }
}

/**
 * Ottiene i parametri della route corrente.
 *
 * Ritorna array associativo dei parametri di route binding della richiesta corrente.
 * Usato per mantenere contesto durante navigazione (es. anno, stabi, repar).
 *
 * @return array<string, mixed> Array parametri route ['anno' => 2025, 'stabi' => 1, ...]
 */
if (! function_exists('getRouteParameters')) {
    function getRouteParameters(): array
    {
        $route = \Illuminate\Support\Facades\Route::current();
        
        if ($route === null) {
            return [];
        }

        /** @var array<string, mixed> $parameters */
        $parameters = $route->parameters();

        return $parameters;
    }
}

/**
 * Converte parametri route in array di containers e items.
 *
 * Pattern utilizzato per nested resources routing.
 * Separa parametri tipo 'container0', 'item0' in array distinti.
 *
 * @param  array<string, mixed>  $params  Parametri route
 * @return array{0: array<int, string>, 1: array<int, mixed>} [containers, items]
 */
if (! function_exists('params2ContainerItem')) {
    function params2ContainerItem(array $params): array
    {
        $containers = [];
        $items = [];
        
        $i = 0;
        while (isset($params['container'.$i])) {
            $containers[$i] = $params['container'.$i];
            $items[$i] = $params['item'.$i] ?? null;
            $i++;
        }
        
        return [$containers, $items];
    }
}

/**
 * Converte un query builder Eloquent in SQL con bindings sostituiti.
 *
 * Utile per debugging query SQL.
 *
 * @param  \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder  $query
 * @return string SQL query con bindings sostituiti
 */
if (! function_exists('rowsToSql')) {
    function rowsToSql(\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder $query): string
    {
        /** @var array<int|string, string> $bindings */
        $bindings = $query->getBindings();
        $sql = $query->toSql();

        return Str::replaceArray('?', $bindings, $sql);
    }
}

