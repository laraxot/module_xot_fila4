<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use LogicException;
use Filament\Schemas\Schema;
use RuntimeException;
use Illuminate\Auth\Access\AuthorizationException;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page as FilamentPage;
use Filament\Schemas\Schema;
use Illuminate\Auth\Access\AuthorizationException;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Filament\Schemas\Schema;
use Illuminate\Auth\Access\AuthorizationException;
use Filament\Pages\Page as FilamentPage;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use LogicException;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use RuntimeException;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Filament\Forms\Form;
use Filament\Pages\Page as FilamentPage;
use Webmozart\Assert\Assert;
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
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

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
 * @property ?string $model Il modello associato alla pagina
 * @property array<string, mixed> $data I dati del form
<<<<<<< HEAD
<<<<<<< HEAD
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string $model Il modello associato alla pagina
 * @property array<string, mixed> $data I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
 *
 * @see \Modules\Xot\docs\xotbasepage_implementation.md Documentazione completa
 */
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use InteractsWithForms;
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
    use TransTrait;
    use InteractsWithForms;

    use InteractsWithForms;
    use TransTrait;
    use TransTrait;
    use InteractsWithForms;

    
    /**
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected string $view = '';
    protected string $view = '';
    protected string $view = '';
    protected string $view = '';
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

    /**
     * Modello associato alla pagina.
     * Se non specificato, verrà dedotto automaticamente dal nome della classe.
     *
     * @var class-string<Model>|null
     */
    public static ?string $model = null;
<<<<<<< HEAD
<<<<<<< HEAD
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

    /**
     * Dati del form.
     * Contiene i dati del form durante la gestione della pagina.
     *
     * @var array<string, mixed>
     */
    public array $data = [];

    /**
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected string $view = '';

    /**
     * Cache timeout per operazioni di cache (in secondi).
     */
    protected static int $cacheTimeout = 3600;

    /**
     * Ottiene il nome del modulo dalla classe.
     * Estrae il nome del modulo dal namespace della classe.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
<<<<<<< HEAD
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
<<<<<<< HEAD
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
=======
>>>>>>> 53d6a6ba (.)
=======
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @return string Il nome del modulo (es. '<main module>', 'User', ecc.)
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     */
    public static function getModuleName(): string
    {
        $namespace = static::class;
        $moduleName = Str::between($namespace, 'Modules\\', '\\Filament');

        if ($moduleName === '') {
<<<<<<< HEAD
<<<<<<< HEAD
        if ('' === $moduleName) {
        if ('' === $moduleName) {
        if ('' === $moduleName) {
        if ('' === $moduleName) {
            throw new LogicException(sprintf('Cannot extract module name from class %s', static::class));
        if ($moduleName === '') {
        if ('' === $moduleName) {
        if ('' === $moduleName) {
        if ('' === $moduleName) {
        if ('' === $moduleName) {
        if ('' === $moduleName) {
            throw new LogicException(sprintf('Cannot extract module name from class %s', static::class));
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            throw new LogicException(sprintf('Cannot extract module name from class %s', static::class));
        }

        return $moduleName;
    }

    /**
     * Ottiene la chiave di traduzione per un dato key.
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
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
<<<<<<< HEAD
<<<<<<< HEAD
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
        bool $useFallback = true,
    ): string {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        bool $useFallback = true,
    ): string {
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(Str::kebab(...))->implode('.');

        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
<<<<<<< HEAD
<<<<<<< HEAD
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
    public static function trans(string $key, array $replace = [], ?string $locale = null, bool $useFallback = true): string
    {
        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
    public static function trans(string $key, array $replace = [], ?string $locale = null, bool $useFallback = true): string
    {
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(Str::kebab(...))->implode('.');

        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
    public static function trans(string $key, array $replace = [], ?string $locale = null, bool $useFallback = true): string
    {
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(static fn (string $item): string => Str::kebab($item))->implode('.');

        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
        $translationKey = $moduleNameLow . '::' . $slug . '.' . $key;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        $translation = __($translationKey, $replace, $locale);

        if ($translation === $translationKey && App::environment('local', 'development', 'testing')) {
            Log::warning("Traduzione mancante: {$translationKey}");

            return $useFallback ? $key : $translationKey;
        }

        return (string) $translation;
    }

    /**
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
            /** @phpstan-ignore property.staticAccess */
            /** @var class-string<Model> $modelValue */
            $modelValue = static::$model;
            return $modelValue;
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var class-string<Model> $model */
            /** @phpstan-ignore property.staticAccess */
            $model = static::$model;

            return $model;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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

        if ($modelName === '') {
            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

        $modelNamespace = 'Modules\\'.$moduleName.'\\Models\\'.$modelName;

        // Verifica che la classe del modello esista
        if (! class_exists($modelNamespace)) {
            throw new LogicException("Model class {$modelNamespace} does not exist");
        }

        /** @var class-string<Model> $modelNamespace */
<<<<<<< HEAD
<<<<<<< HEAD
        if ('' === $modelName) {
            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

        if ('' === $modelName) {
            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

            throw new LogicException(sprintf('Cannot determine model name from class %s', static::class));
        }

        $modelNamespace = 'Modules\\' . $moduleName . '\\Models\\' . $modelName;

        // Verifica che la classe del modello esista
        if (!class_exists($modelNamespace)) {
            throw new LogicException("Model class {$modelNamespace} does not exist");
            throw new LogicException("Model class {$modelNamespace} does not exist");
        $modelNamespace = 'Modules\\'.$moduleName.'\\Models\\'.$modelName;

        // Verifica che la classe del modello esista
        if (! class_exists($modelNamespace)) {
        $modelNamespace = 'Modules\\' . $moduleName . '\\Models\\' . $modelName;

        // Verifica che la classe del modello esista
        if (!class_exists($modelNamespace)) {
            throw new LogicException("Model class {$modelNamespace} does not exist");
            throw new \LogicException("Model class {$modelNamespace} does not exist");
        }
        Assert::classExists($modelNamespace);
        Assert::isInstanceOf($modelNamespace, Model::class);
        /* @var class-string<Model> $modelNamespace */
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        return $modelNamespace;
    }

    /**
     * Configura il form della pagina.
     * Imposta lo schema e il percorso dello stato per il form.
     *
     * @param  \Filament\Schemas\Schema  $schema  Il form da configurare
<<<<<<< HEAD
<<<<<<< HEAD
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param  \Filament\Schemas\Schema  $schema  Il form da configurare
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * @return \Filament\Schemas\Schema Il form configurato
     */
    public function form(Schema $schema): Schema
    {
        $schema = $schema->components($this->getFormSchema());

        $schema->statePath('data');

        $debounce = $this->getAutosaveDebounce();
        if ($debounce !== null && method_exists($schema, 'autosaveDebounce')) {
<<<<<<< HEAD
<<<<<<< HEAD
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {



        $debounce = $this->getAutosaveDebounce();
        if ($debounce !== null && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
        if (null !== $debounce && method_exists($schema, 'autosaveDebounce')) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            $schema->autosaveDebounce($debounce);
        }

        return $schema;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
    }

    /**
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
     * Ottiene il tempo di debounce per l'autosave in millisecondi.
     * Sovrascrivere nelle classi figlie per modificare questo valore.
     *
     * @return int|null Il tempo di debounce in millisecondi o null per disabilitare l'autosave
     */
    protected function getAutosaveDebounce(): ?int
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): ?int
    protected function getAutosaveDebounce(): null|int
    protected function getAutosaveDebounce(): null|int
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    {
        return null; // Disabilitato per default
    }

    /**
     * Ottiene l'utente autenticato.
     * Verifica che l'utente sia un'istanza di Model per permettere aggiornamenti.
     *
     * @return Authenticatable&Model L'utente autenticato
     *
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @return Authenticatable&Model L'utente autenticato
     *
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     */
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

        if ($user === null) {
            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

        if (! ($user instanceof Model)) {
<<<<<<< HEAD
<<<<<<< HEAD
        if (null === $user) {
            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

        if (!($user instanceof Model)) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            throw new RuntimeException(
                'L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.',
            );
        }

        /** @var Authenticatable&Model $user */
<<<<<<< HEAD
<<<<<<< HEAD
        /* @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
        if (null === $user) {
            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

            throw new RuntimeException('Nessun utente autenticato trovato.');
        }

        if (!($user instanceof Model)) {
            throw new RuntimeException(
                'L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.',
            );
            throw new \RuntimeException('Nessun utente autenticato trovato.');
        }

        if (! $user instanceof Model) {
            throw new \RuntimeException('L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.');
        }

        /** @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
        /* @var Authenticatable&Model $user */
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
     * @param  string  $permission  Il permesso da verificare
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $permission Il permesso da verificare
     *
     * @param string $permission Il permesso da verificare
     *
     * @param string $permission Il permesso da verificare
     *
     * @param string $permission Il permesso da verificare
     *
     * @param  string  $permission  Il permesso da verificare
     * @param string $permission Il permesso da verificare
     *
     * @param string $permission Il permesso da verificare
     *
     * @param string $permission Il permesso da verificare
     *
     * @param string $permission Il permesso da verificare
     *
     * @param string $permission Il permesso da verificare
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * @return bool True se l'utente ha il permesso, false altrimenti
     */
    protected function hasPermissionTo(string $permission): bool
    {
        $user = $this->getUser();

        // @phpstan-ignore-next-line
        if (! method_exists($user, 'hasPermissionTo')) {
<<<<<<< HEAD
<<<<<<< HEAD
        //@phpstan-ignore-next-line
        if (!method_exists($user, 'hasPermissionTo')) {
        //@phpstan-ignore-next-line
        if (!method_exists($user, 'hasPermissionTo')) {
        //@phpstan-ignore-next-line
        if (!method_exists($user, 'hasPermissionTo')) {
        //@phpstan-ignore-next-line
        if (!method_exists($user, 'hasPermissionTo')) {
        //@phpstan-ignore-next-line
        if (!method_exists($user, 'hasPermissionTo')) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            throw new RuntimeException('Il modello utente deve implementare il metodo hasPermissionTo');
        }

        // Use method_exists to safely call hasPermissionTo
        return $user->hasPermissionTo($permission);
    }

    /**
     * Risolve il percorso della vista.
     *
     * @return string Il percorso della vista
     *
     * @throws RuntimeException Se la vista non esiste
<<<<<<< HEAD
<<<<<<< HEAD
     * Ottiene la vista associata alla pagina.
     *
     * @return string Il percorso della vista
     */
    public function getView(): string
    {
        if ('' === $this->view) {
        if ('' === $this->view) {
        if ('' === $this->view) {
        if ('' === $this->view) {
        if ('' === static::$view) {
            $view = app(GetViewByClassAction::class)->execute(static::class);
            if (view()->exists($view)) {
                return (string) $view;
            }

            // Se non troviamo una vista, lanciamo un'eccezione
            throw new RuntimeException('Nessuna vista trovata per la classe: ' . static::class);
        }

        return $this->view;
            throw new RuntimeException('Nessuna vista trovata per la classe: ' . static::class);
        }

        return $this->view;
            throw new \RuntimeException('Nessuna vista trovata per la classe: '.static::class);
        }

        return static::$view;
    }

    /**
     * Risolve il percorso della vista.
     *
     * @throws RuntimeException Se la vista non esiste
     *
     * @return string Il percorso della vista
     * @throws RuntimeException Se la vista non esiste
     * @throws RuntimeException Se la vista non esiste
     *
     * @return string Il percorso della vista
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     */
    protected function resolveViewPath(): string
    {
        $view = $this->getView();
        if (view()->exists($view)) {
            return $view;
        }

        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
<<<<<<< HEAD
<<<<<<< HEAD
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new \RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new \RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: ".static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
        throw new RuntimeException("View [{$view}] not found for page: " . static::class);
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    }

    /**
     * Ottiene una query builder per il modello associato alla pagina.
     *
     * @return Builder<Model>
     *
     * @throws LogicException Se il modello non è definito
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @return Builder<Model>
     *
     * @throws LogicException Se il modello non è definito
     * @throws LogicException Se il modello non è definito
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
     * @throws LogicException Se il modello non è definito
     *
     * @return Builder<Model>
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     */
    protected function getQuery(): Builder
    {
        $modelClass = $this->getModel();

        if (! class_exists($modelClass)) {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            throw new LogicException("Model class {$modelClass} does not exist");
        }

        /** @var class-string<Model> $modelClass */
<<<<<<< HEAD
<<<<<<< HEAD
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
            throw new LogicException("Model class {$modelClass} does not exist");
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
            throw new LogicException("Model class {$modelClass} does not exist");
        if (! class_exists($modelClass)) {
            throw new \LogicException("Model class {$modelClass} does not exist");
        }

        /** @var class-string<Model> $modelClass */
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        $instance = new $modelClass;
        if (! ($instance instanceof Model)) {
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
        }

        return $modelClass::query();
<<<<<<< HEAD
<<<<<<< HEAD
        $instance = new $modelClass();
        if (!($instance instanceof Model)) {
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
        $instance = new $modelClass();
        if (!($instance instanceof Model)) {
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
        if (!($instance instanceof Model)) {
        if (!($instance instanceof Model)) {
            throw new LogicException("Class {$modelClass} must extend Eloquent Model");
        if (! $instance instanceof Model) {
            throw new \LogicException("Class {$modelClass} must extend Eloquent Model");
        }

        /** @var Builder<Model> $query */
        $query = $modelClass::query();

        return $query;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    }

    /**
     * Invalida la cache per il modello specificato.
     *
     * @param  class-string<Model>|null  $modelClass
     */
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
<<<<<<< HEAD
<<<<<<< HEAD
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param  class-string<Model>|null  $modelClass
     */
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
     * @param class-string<Model>|null $modelClass
     */
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    protected function invalidateCache(null|string $modelClass = null, int|string|null $id = null): void
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
