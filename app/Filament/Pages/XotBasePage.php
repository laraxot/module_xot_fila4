<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use LogicException;
use Filament\Schemas\Schema;
use RuntimeException;
use Illuminate\Auth\Access\AuthorizationException;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
<<<<<<< HEAD
use Filament\Pages\Page as FilamentPage;
=======
<<<<<<< HEAD
use Filament\Pages\Page as FilamentPage;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Form;
use Filament\Pages\Page as FilamentPage;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Auth\Authenticatable;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 *
 * @see \Modules\Xot\docs\xotbasepage_implementation.md Documentazione completa
 */
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use TransTrait;
    use InteractsWithForms;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
<<<<<<< HEAD
    protected string $view = '';
=======
<<<<<<< HEAD
    protected string $view = '';
=======
    protected static string $view = '';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Modello associato alla pagina.
     * Se non specificato, verrà dedotto automaticamente dal nome della classe.
     *
     * @var class-string<Model>|null
     */
<<<<<<< HEAD
    public static null|string $model = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static null|string $model = null;
=======
    public static ?string $model = null;
>>>>>>> a12f125f4a (.)
=======
    public static null|string $model = null;
>>>>>>> b93ef594b4 (.)
=======
    public static ?string $model = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Dati del form.
     * Contiene i dati del form durante la gestione della pagina.
     *
     * @var array<string, mixed>
     */
    public array $data = [];

    /**
     * Cache timeout per operazioni di cache (in secondi).
     */
    protected static int $cacheTimeout = 3600;

    /**
     * Ottiene il nome del modulo dalla classe.
     * Estrae il nome del modulo dal namespace della classe.
     *
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     */
    public static function getModuleName(): string
    {
        $namespace = static::class;
        $moduleName = Str::between($namespace, 'Modules\\', '\\Filament');

        if ('' === $moduleName) {
<<<<<<< HEAD
            throw new LogicException(sprintf('Cannot extract module name from class %s', static::class));
=======
<<<<<<< HEAD
            throw new LogicException(sprintf('Cannot extract module name from class %s', static::class));
=======
            throw new \LogicException(sprintf('Cannot extract module name from class %s', static::class));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return $moduleName;
    }

    /**
     * Ottiene la chiave di traduzione per un dato key.
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
     * @param string $key La chiave di traduzione specifica
     * @param array<string, bool|float|int|string> $replace Parametri di sostituzione per la traduzione
     * @param string|null $locale Locale da utilizzare (null = locale corrente)
     * @param bool $useFallback Se true, utilizza la chiave come fallback se la traduzione non esiste
     *
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public static function trans(
        string $key,
        array $replace = [],
        null|string $locale = null,
        bool $useFallback = true,
    ): string {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(Str::kebab(...))->implode('.');

        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
<<<<<<< HEAD
=======
=======
    public static function trans(string $key, array $replace = [], ?string $locale = null, bool $useFallback = true): string
    {
=======
>>>>>>> b93ef594b4 (.)
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(Str::kebab(...))->implode('.');

<<<<<<< HEAD
        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
>>>>>>> a12f125f4a (.)
=======
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
>>>>>>> b93ef594b4 (.)
=======
    public static function trans(string $key, array $replace = [], ?string $locale = null, bool $useFallback = true): string
    {
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(static fn (string $item): string => Str::kebab($item))->implode('.');

        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $translation = __($translationKey, $replace, $locale);

        if ($translation === $translationKey && App::environment('local', 'development', 'testing')) {
            Log::warning("Traduzione mancante: {$translationKey}");

            return $useFallback ? $key : $translationKey;
        }

        return (string) $translation;
    }

    /**
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
            /** @var class-string<Model> $model */
            /** @phpstan-ignore property.staticAccess */
            $model = static::$model;

            return $model;
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

        if ('' === $modelName) {
<<<<<<< HEAD
            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

=======
<<<<<<< HEAD
            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $modelNamespace = 'Modules\\' . $moduleName . '\\Models\\' . $modelName;

        // Verifica che la classe del modello esista
        if (!class_exists($modelNamespace)) {
<<<<<<< HEAD
            throw new LogicException("Model class {$modelNamespace} does not exist");
=======
=======
=======
            throw new \LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

>>>>>>> origin/develop
        $modelNamespace = 'Modules\\'.$moduleName.'\\Models\\'.$modelName;

        // Verifica che la classe del modello esista
        if (! class_exists($modelNamespace)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $modelNamespace = 'Modules\\' . $moduleName . '\\Models\\' . $modelName;

        // Verifica che la classe del modello esista
        if (!class_exists($modelNamespace)) {
>>>>>>> b93ef594b4 (.)
            throw new LogicException("Model class {$modelNamespace} does not exist");
=======
            throw new \LogicException("Model class {$modelNamespace} does not exist");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
        Assert::classExists($modelNamespace);
        Assert::isInstanceOf($modelNamespace, Model::class);
        /* @var class-string<Model> $modelNamespace */
        return $modelNamespace;
    }

    /**
     * Configura il form della pagina.
     * Imposta lo schema e il percorso dello stato per il form.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @return \Filament\Schemas\Schema Il form configurato
     */
    public function form(Schema $schema): Schema
    {
        $schema = $schema->components($this->getFormSchema());

        $schema->statePath('data');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $debounce = $this->getAutosaveDebounce();
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
            $schema->autosaveDebounce($debounce);
        }

        return $schema;
<<<<<<< HEAD
=======
=======
     * @param Form $form Il form da configurare
     *
     * @return Form Il form configurato
     */
    public function form(Form $form): Form
    {
        $form = $form->schema($this->getFormSchema());

        $form->statePath('data');
        
        $debounce = $this->getAutosaveDebounce();
        if (null !== $debounce && method_exists($form, 'autosaveDebounce')) {
            $form->autosaveDebounce($debounce);
        }

        return $form;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Ottiene il tempo di debounce per l'autosave in millisecondi.
     * Sovrascrivere nelle classi figlie per modificare questo valore.
     *
     * @return int|null Il tempo di debounce in millisecondi o null per disabilitare l'autosave
     */
<<<<<<< HEAD
    protected function getAutosaveDebounce(): null|int
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getAutosaveDebounce(): null|int
=======
    protected function getAutosaveDebounce(): ?int
>>>>>>> a12f125f4a (.)
=======
    protected function getAutosaveDebounce(): null|int
>>>>>>> b93ef594b4 (.)
=======
    protected function getAutosaveDebounce(): ?int
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return null; // Disabilitato per default
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
    

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    
    

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Ottiene l'utente autenticato.
     * Verifica che l'utente sia un'istanza di Model per permettere aggiornamenti.
     *
<<<<<<< HEAD
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
=======
<<<<<<< HEAD
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
=======
     * @throws \RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
     * @return Authenticatable&Model L'utente autenticato
     */
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

        if (null === $user) {
<<<<<<< HEAD
            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

=======
<<<<<<< HEAD
            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        if (!($user instanceof Model)) {
            throw new RuntimeException(
                'L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.',
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (! $user instanceof Model) {
            throw new RuntimeException('L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            throw new \RuntimeException('Nessun utente autenticato trovato.');
        }

        if (! $user instanceof Model) {
            throw new \RuntimeException('L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        /* @var Authenticatable&Model $user */
        return $user;
    }

    /**
     * Verifica se l'utente ha l'accesso alla pagina.
     * Utilizza il sistema di autorizzazioni per controllare l'accesso.
     *
<<<<<<< HEAD
     * @throws AuthorizationException Se l'utente non è autorizzato
=======
<<<<<<< HEAD
     * @throws AuthorizationException Se l'utente non è autorizzato
=======
     * @throws \Illuminate\Auth\Access\AuthorizationException Se l'utente non è autorizzato
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    protected function authorizeAccess(): void
    {
        $this->authorize('view', static::class);
    }

    /**
     * Verifica se l'utente ha un permesso specifico.
     * Utile per controlli granulari all'interno delle pagine.
     *
     * @param string $permission Il permesso da verificare
     *
     * @return bool True se l'utente ha il permesso, false altrimenti
     */
    protected function hasPermissionTo(string $permission): bool
    {
        $user = $this->getUser();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        //@phpstan-ignore-next-line
        if (!method_exists($user, 'hasPermissionTo')) {
            throw new RuntimeException('Il modello utente deve implementare il metodo hasPermissionTo');
        }
<<<<<<< HEAD

        // Use method_exists to safely call hasPermissionTo
=======
<<<<<<< HEAD

        // Use method_exists to safely call hasPermissionTo
=======
=======
>>>>>>> origin/develop
        // Verifiamo che il metodo hasPermissionTo esista sull'utente
        //if (!method_exists($user, 'hasPermissionTo')) {
        //    throw new \RuntimeException('Il modello utente deve implementare il metodo hasPermissionTo');
        //}

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Use method_exists to safely call hasPermissionTo
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $user->hasPermissionTo($permission);
    }

    /**
     * Ottiene la vista associata alla pagina.
     *
     * @return string Il percorso della vista
     */
    public function getView(): string
    {
<<<<<<< HEAD
        if ('' === $this->view) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ('' === $this->view) {
=======
        if ('' === static::$view) {
>>>>>>> a12f125f4a (.)
=======
        if ('' === $this->view) {
>>>>>>> b93ef594b4 (.)
=======
        if ('' === static::$view) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $view = app(GetViewByClassAction::class)->execute(static::class);
            if (view()->exists($view)) {
                return (string) $view;
            }

            // Se non troviamo una vista, lanciamo un'eccezione
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            throw new RuntimeException('Nessuna vista trovata per la classe: ' . static::class);
        }

        return $this->view;
<<<<<<< HEAD
=======
=======
            throw new RuntimeException('Nessuna vista trovata per la classe: '.static::class);
        }

        return static::$view;
>>>>>>> a12f125f4a (.)
=======
            throw new RuntimeException('Nessuna vista trovata per la classe: ' . static::class);
        }

        return $this->view;
>>>>>>> b93ef594b4 (.)
=======
            throw new \RuntimeException('Nessuna vista trovata per la classe: '.static::class);
        }

        return static::$view;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Risolve il percorso della vista.
     *
<<<<<<< HEAD
     * @throws RuntimeException Se la vista non esiste
=======
<<<<<<< HEAD
     * @throws RuntimeException Se la vista non esiste
=======
     * @throws \RuntimeException Se la vista non esiste
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
     * @return string Il percorso della vista
     */
    protected function resolveViewPath(): string
    {
        $view = $this->getView();
        if (view()->exists($view)) {
            return $view;
        }

<<<<<<< HEAD
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
=======
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
>>>>>>> a12f125f4a (.)
=======
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
>>>>>>> b93ef594b4 (.)
=======
        throw new \RuntimeException("View [{$view}] not found for page: ".static::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Ottiene una query builder per il modello associato alla pagina.
     *
<<<<<<< HEAD
     * @throws LogicException Se il modello non è definito
=======
<<<<<<< HEAD
     * @throws LogicException Se il modello non è definito
=======
     * @throws \LogicException Se il modello non è definito
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
     * @return Builder<Model>
     */
    protected function getQuery(): Builder
    {
        $modelClass = $this->getModel();

<<<<<<< HEAD
        if (!class_exists($modelClass)) {
            throw new LogicException("Model class {$modelClass} does not exist");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> a12f125f4a (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> b93ef594b4 (.)
            throw new LogicException("Model class {$modelClass} does not exist");
=======
        if (! class_exists($modelClass)) {
            throw new \LogicException("Model class {$modelClass} does not exist");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        /** @var class-string<Model> $modelClass */
        $instance = new $modelClass();
<<<<<<< HEAD
        if (!($instance instanceof Model)) {
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($instance instanceof Model)) {
=======
        if (! $instance instanceof Model) {
>>>>>>> a12f125f4a (.)
=======
        if (!($instance instanceof Model)) {
>>>>>>> b93ef594b4 (.)
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
=======
        if (! $instance instanceof Model) {
            throw new \LogicException("Class {$modelClass} must extend Eloquent Model");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        /** @var Builder<Model> $query */
        $query = $modelClass::query();

        return $query;
    }

    /**
     * Invalida la cache per il modello specificato.
     *
     * @param class-string<Model>|null $modelClass
     */
<<<<<<< HEAD
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
=======
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
>>>>>>> a12f125f4a (.)
=======
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
>>>>>>> b93ef594b4 (.)
=======
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
