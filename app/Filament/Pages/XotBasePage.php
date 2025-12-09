<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
use LogicException;
use Filament\Schemas\Schema;
use RuntimeException;
use Illuminate\Auth\Access\AuthorizationException;
>>>>>>> 5a14301c (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page as FilamentPage;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Schema;
use Illuminate\Auth\Access\AuthorizationException;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use LogicException;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use RuntimeException;
=======
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
>>>>>>> 3fbbf1f5 (.)

/**
 * Classe base astratta per tutte le pagine Filament non legate a risorse specifiche.
 * Fornisce funzionalità comuni e standardizzate per la gestione delle pagine.
 *
 * Implementa:
 * - Sistema di traduzioni integrato
 * - Gestione autorizzazioni
 * - Integrazione con form
 * - Rilevamento intelligente modello
 * - Metodi helper comuni
 *
<<<<<<< HEAD
 * @property ?string $model Il modello associato alla pagina
 * @property array<string, mixed> $data I dati del form
=======
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
>>>>>>> 5a14301c (.)
 *
 * @see \Modules\Xot\docs\xotbasepage_implementation.md Documentazione completa
 */
abstract class XotBasePage extends FilamentPage implements HasForms
{
<<<<<<< HEAD
    use InteractsWithForms;
    use TransTrait;
=======
    use TransTrait;
    use InteractsWithForms;

    /**
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected string $view = '';
>>>>>>> 5a14301c (.)

    /**
     * Modello associato alla pagina.
     * Se non specificato, verrà dedotto automaticamente dal nome della classe.
     *
     * @var class-string<Model>|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static ?string $model = null;
=======
    public static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    public static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)

    /**
     * Dati del form.
     * Contiene i dati del form durante la gestione della pagina.
     *
     * @var array<string, mixed>
     */
    public array $data = [];

    /**
<<<<<<< HEAD
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected string $view = '';

    /**
=======
>>>>>>> 5a14301c (.)
     * Cache timeout per operazioni di cache (in secondi).
     */
    protected static int $cacheTimeout = 3600;

    /**
     * Ottiene il nome del modulo dalla classe.
     * Estrae il nome del modulo dal namespace della classe.
     *
<<<<<<< HEAD
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
=======
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
>>>>>>> 5a14301c (.)
     */
    public static function getModuleName(): string
    {
        $namespace = static::class;
        $moduleName = Str::between($namespace, 'Modules\\', '\\Filament');

<<<<<<< HEAD
        if ($moduleName === '') {
=======
        if ('' === $moduleName) {
>>>>>>> 5a14301c (.)
            throw new LogicException(sprintf('Cannot extract module name from class %s', static::class));
        }

        return $moduleName;
    }

    /**
     * Ottiene la chiave di traduzione per un dato key.
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
<<<<<<< HEAD
     * @param  string  $key  La chiave di traduzione specifica
     * @param  array<string, bool|float|int|string>  $replace  Parametri di sostituzione per la traduzione
     * @param  string|null  $locale  Locale da utilizzare (null = locale corrente)
     * @param  bool  $useFallback  Se true, utilizza la chiave come fallback se la traduzione non esiste
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
    public static function getTranslatedString(
        string $key,
        array $replace = [],
        ?string $locale = null,
=======
     * @param string $key La chiave di traduzione specifica
     * @param array<string, bool|float|int|string> $replace Parametri di sostituzione per la traduzione
     * @param string|null $locale Locale da utilizzare (null = locale corrente)
     * @param bool $useFallback Se true, utilizza la chiave come fallback se la traduzione non esiste
     *
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
    public static function trans(
        string $key,
        array $replace = [],
        null|string $locale = null,
>>>>>>> 5a14301c (.)
        bool $useFallback = true,
    ): string {
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(Str::kebab(...))->implode('.');

<<<<<<< HEAD
<<<<<<< HEAD
        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
=======
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
>>>>>>> 5a14301c (.)
=======
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
>>>>>>> 3fbbf1f5 (.)
        $translation = __($translationKey, $replace, $locale);

        if ($translation === $translationKey && App::environment('local', 'development', 'testing')) {
            Log::warning("Traduzione mancante: {$translationKey}");

            return $useFallback ? $key : $translationKey;
        }

        return (string) $translation;
    }

    /**
<<<<<<< HEAD
     * Ottiene la chiave di traduzione per un dato key (alias per getTranslatedString).
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
     * @param  string  $key  La chiave di traduzione specifica
     * @param  array<string, bool|float|int|string>  $replace  Parametri di sostituzione per la traduzione
     * @param  string|null  $locale  Locale da utilizzare (null = locale corrente)
     * @param  bool  $useFallback  Se true, utilizza la chiave come fallback se la traduzione non esiste
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
    public static function trans(
        string $key,
        array $replace = [],
        ?string $locale = null,
        bool $useFallback = true,
    ): string {
        return static::getTranslatedString($key, $replace, $locale, $useFallback);
    }

    /**
=======
>>>>>>> 5a14301c (.)
     * Ottiene l'etichetta plurale del modello.
     *
     * @return string L'etichetta plurale del modello
     */
    public static function getPluralModelLabel(): string
    {
        return static::trans('plural_label');
    }

    /**
     * Ottiene il gruppo di navigazione.
     *
     * @return string Il gruppo di navigazione
     */
    public static function getNavigationGroup(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    /**
     * Ottiene il modello associato alla pagina.
     * Se non specificato esplicitamente, tenta di dedurlo dal nome della classe.
     *
     * @return class-string<Model> Il namespace completo della classe del modello
     */
    public function getModel(): string
    {
        /** @phpstan-ignore property.staticAccess */
        if (static::$model !== null) {
<<<<<<< HEAD
            /** @phpstan-ignore property.staticAccess */
            /** @var class-string<Model> $modelValue */
            $modelValue = static::$model;
            return $modelValue;
=======
            /** @var class-string<Model> $model */
            /** @phpstan-ignore property.staticAccess */
            $model = static::$model;

            return $model;
>>>>>>> 5a14301c (.)
        }

        $moduleName = static::getModuleName();
        $className = class_basename(static::class);

        // Rimuove suffissi comuni per ottenere il nome del modello
        $modelName = Str::of($className)
            ->before('Resource')
            ->before('Page')
            ->before('Dashboard')
            ->before('Report')
            ->trim()
            ->toString();

<<<<<<< HEAD
        if ($modelName === '') {
            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

<<<<<<< HEAD
        $modelNamespace = 'Modules\\'.$moduleName.'\\Models\\'.$modelName;

        // Verifica che la classe del modello esista
        if (! class_exists($modelNamespace)) {
            throw new LogicException("Model class {$modelNamespace} does not exist");
        }

        /** @var class-string<Model> $modelNamespace */
=======
        if ('' === $modelName) {
            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

=======
>>>>>>> 3fbbf1f5 (.)
        $modelNamespace = 'Modules\\' . $moduleName . '\\Models\\' . $modelName;

        // Verifica che la classe del modello esista
        if (!class_exists($modelNamespace)) {
            throw new LogicException("Model class {$modelNamespace} does not exist");
        }
        Assert::classExists($modelNamespace);
        Assert::isInstanceOf($modelNamespace, Model::class);
        /* @var class-string<Model> $modelNamespace */
>>>>>>> 5a14301c (.)
        return $modelNamespace;
    }

    /**
     * Configura il form della pagina.
     * Imposta lo schema e il percorso dello stato per il form.
     *
<<<<<<< HEAD
     * @param  \Filament\Schemas\Schema  $schema  Il form da configurare
=======
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
>>>>>>> 5a14301c (.)
     * @return \Filament\Schemas\Schema Il form configurato
     */
    public function form(Schema $schema): Schema
    {
        $schema = $schema->components($this->getFormSchema());

        $schema->statePath('data');

        $debounce = $this->getAutosaveDebounce();
<<<<<<< HEAD
        if ($debounce !== null && method_exists($schema, 'autosaveDebounce')) {
=======
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
>>>>>>> 5a14301c (.)
            $schema->autosaveDebounce($debounce);
        }

        return $schema;
    }

    /**
<<<<<<< HEAD
     * Ottiene la vista associata alla pagina.
     *
     * @return string Il percorso della vista
     */
    public function getView(): string
    {
        if ($this->view === '') {
            $view = app(GetViewByClassAction::class)->execute(static::class);
            if (view()->exists($view)) {
                return (string) $view;
            }

            // Se non troviamo una vista, lanciamo un'eccezione
            throw new RuntimeException('Nessuna vista trovata per la classe: '.static::class);
        }

        return $this->view;
    }

    /**
=======
>>>>>>> 5a14301c (.)
     * Ottiene il tempo di debounce per l'autosave in millisecondi.
     * Sovrascrivere nelle classi figlie per modificare questo valore.
     *
     * @return int|null Il tempo di debounce in millisecondi o null per disabilitare l'autosave
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getAutosaveDebounce(): ?int
=======
    protected function getAutosaveDebounce(): null|int
>>>>>>> 5a14301c (.)
=======
    protected function getAutosaveDebounce(): null|int
>>>>>>> 3fbbf1f5 (.)
    {
        return null; // Disabilitato per default
    }

    /**
     * Ottiene l'utente autenticato.
     * Verifica che l'utente sia un'istanza di Model per permettere aggiornamenti.
     *
<<<<<<< HEAD
     * @return Authenticatable&Model L'utente autenticato
     *
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
=======
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
>>>>>>> 5a14301c (.)
     */
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
        if ($user === null) {
            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

        if (! ($user instanceof Model)) {
=======
        if (null === $user) {
            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

        if (!($user instanceof Model)) {
>>>>>>> 5a14301c (.)
            throw new RuntimeException(
                'L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.',
            );
        }

<<<<<<< HEAD
        /** @var Authenticatable&Model $user */
=======
        /* @var Authenticatable&Model $user */
>>>>>>> 5a14301c (.)
        return $user;
    }

    /**
     * Verifica se l'utente ha l'accesso alla pagina.
     * Utilizza il sistema di autorizzazioni per controllare l'accesso.
     *
     * @throws AuthorizationException Se l'utente non è autorizzato
     */
    protected function authorizeAccess(): void
    {
        $this->authorize('view', static::class);
    }

    /**
     * Verifica se l'utente ha un permesso specifico.
     * Utile per controlli granulari all'interno delle pagine.
     *
<<<<<<< HEAD
     * @param  string  $permission  Il permesso da verificare
=======
     * @param string $permission Il permesso da verificare
     *
>>>>>>> 5a14301c (.)
     * @return bool True se l'utente ha il permesso, false altrimenti
     */
    protected function hasPermissionTo(string $permission): bool
    {
        $user = $this->getUser();

<<<<<<< HEAD
<<<<<<< HEAD
        // @phpstan-ignore-next-line
        if (! method_exists($user, 'hasPermissionTo')) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
        //@phpstan-ignore-next-line
        if (!method_exists($user, 'hasPermissionTo')) {
>>>>>>> 5a14301c (.)
            throw new RuntimeException('Il modello utente deve implementare il metodo hasPermissionTo');
        }

        // Use method_exists to safely call hasPermissionTo
        return $user->hasPermissionTo($permission);
    }

    /**
<<<<<<< HEAD
     * Risolve il percorso della vista.
     *
     * @return string Il percorso della vista
     *
     * @throws RuntimeException Se la vista non esiste
=======
     * Ottiene la vista associata alla pagina.
     *
     * @return string Il percorso della vista
     */
    public function getView(): string
    {
        if ('' === $this->view) {
            $view = app(GetViewByClassAction::class)->execute(static::class);
            if (view()->exists($view)) {
                return (string) $view;
            }

            // Se non troviamo una vista, lanciamo un'eccezione
            throw new RuntimeException('Nessuna vista trovata per la classe: ' . static::class);
        }

        return $this->view;
    }

    /**
     * Risolve il percorso della vista.
     *
     * @throws RuntimeException Se la vista non esiste
     *
     * @return string Il percorso della vista
>>>>>>> 5a14301c (.)
     */
    protected function resolveViewPath(): string
    {
        $view = $this->getView();
        if (view()->exists($view)) {
            return $view;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
=======
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
>>>>>>> 5a14301c (.)
=======
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
>>>>>>> 3fbbf1f5 (.)
    }

    /**
     * Ottiene una query builder per il modello associato alla pagina.
     *
<<<<<<< HEAD
     * @return Builder<Model>
     *
     * @throws LogicException Se il modello non è definito
=======
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
>>>>>>> 5a14301c (.)
     */
    protected function getQuery(): Builder
    {
        $modelClass = $this->getModel();

<<<<<<< HEAD
<<<<<<< HEAD
        if (! class_exists($modelClass)) {
=======
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 3fbbf1f5 (.)
            throw new LogicException("Model class {$modelClass} does not exist");
        }

        /** @var class-string<Model> $modelClass */
<<<<<<< HEAD
        $instance = new $modelClass;
        if (! ($instance instanceof Model)) {
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
        }

        return $modelClass::query();
=======
        $instance = new $modelClass();
        if (!($instance instanceof Model)) {
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
        }

        /** @var Builder<Model> $query */
        $query = $modelClass::query();

        return $query;
>>>>>>> 5a14301c (.)
    }

    /**
     * Invalida la cache per il modello specificato.
     *
<<<<<<< HEAD
     * @param  class-string<Model>|null  $modelClass
     */
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
=======
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
    {
        // Implementazione custom se necessaria
        // Per ora lasciamo vuoto, può essere implementato nelle classi figlie
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
}
