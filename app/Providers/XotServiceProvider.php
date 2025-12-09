<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

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
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
>>>>>>> 5a14301c (.)
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Support\Concerns\Configurable;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Modules\Xot\Console\Commands\GenerateFilamentResources;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Modules\Xot\Datas\XotData;
use Modules\Xot\View\Composers\XotComposer;
use Override;
use Webmozart\Assert\Assert;

=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Exceptions\Formatters\WebhookErrorFormatter;
use Modules\Xot\Exceptions\Handlers\HandlerDecorator;
use Modules\Xot\Exceptions\Handlers\HandlersRepository;
use Modules\Xot\View\Composers\XotComposer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

use function Safe\realpath;
>>>>>>> 3fbbf1f5 (.)

use function Safe\realpath;

>>>>>>> 5a14301c (.)
=======

use function Safe\realpath;

>>>>>>> 5a14301c (.)
=======

use function Safe\realpath;

>>>>>>> 5a14301c (.)
/**
 * Class XotServiceProvider.
 */
class XotServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Xot';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    #[Override]
    public function boot(): void
    {
        parent::boot();
        $this->redirectSSL();
        $this->registerViewComposers();
        $this->registerEvents();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $this->registerExceptionHandler(); // guardare come fa sentry
=======
        //$this->registerExceptionHandler(); // guardare come fa sentry
>>>>>>> 5a14301c (.)
=======
        //$this->registerExceptionHandler(); // guardare come fa sentry
>>>>>>> 5a14301c (.)
=======
        //$this->registerExceptionHandler(); // guardare come fa sentry
>>>>>>> 5a14301c (.)
        $this->registerTimezone();
        $this->registerFilamentMacros();
        $this->registerXotLivewireComponents();
        $this->registerProviders();
    }

    #[Override]
    public function register(): void
    {
        parent::register();
        $this->registerConfig();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $this->registerExceptionHandlersRepository();
        // $this->extendExceptionHandler();
=======
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
>>>>>>> 5a14301c (.)
=======
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
>>>>>>> 3fbbf1f5 (.)
=======
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
>>>>>>> 5a14301c (.)
=======
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
>>>>>>> 5a14301c (.)
        $this->registerCommands();
    }

    public function registerProviders(): void
    {
        // $this->app->register(Filament\ModulesServiceProvider::class);
    }

    public function registerTimezone(): void
    {
        Assert::string(
            $timezone = config('app.timezone') ?? 'Europe/Berlin',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
        );
        Assert::string(
            $date_format = config('app.date_format') ?? 'd/m/Y',
            '['.__LINE__.']['.class_basename($this).']',
        );
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::string(
            $date_format = config('app.date_format') ?? 'd/m/Y',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::string($locale = config('app.locale') ?? 'it', '[' . __LINE__ . '][' . class_basename($this) . ']');
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
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::string($timezone = config('app.timezone') ?? 'Europe/Berlin', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($date_format = config('app.date_format') ?? 'd/m/Y', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($timezone = config('app.timezone') ?? 'Europe/Berlin', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($date_format = config('app.date_format') ?? 'd/m/Y', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)

        app()->setLocale($locale);
        Carbon::setLocale($locale);
        date_default_timezone_set($timezone);

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
        DateTimePicker::configureUsing(fn (DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(
            fn (DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format),
        );
        TimePicker::configureUsing(fn (TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn (TextColumn $column) => $column->timezone($timezone));
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
        DateTimePicker::configureUsing(fn(DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(
            fn(DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format),
        );
        TimePicker::configureUsing(fn(TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn(TextColumn $column) => $column->timezone($timezone));
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
        DateTimePicker::configureUsing(fn (DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(fn (DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format));
        TimePicker::configureUsing(fn (TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn (TextColumn $column) => $column->timezone($timezone));

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
    }

    public function registerFilamentMacros(): void
    {
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
        // Macro temporarily disabled due to compatibility issues with Filament version
        // TODO: Re-implement when compatible with current Filament version
        /*
        TextInput::macro('generateSlug', function () {
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set): void {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
>>>>>>> 5a14301c (.)
=======
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
>>>>>>> 5a14301c (.)
=======
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
>>>>>>> 5a14301c (.)
                if ($operation === 'create') {
                    return;
                }
                $set('slug', Str::slug($state));
            });
            return $this;
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    }

    /*
     * @see https://github.com/cerbero90/exception-handler
     * --  guardare come fa sentry
     * public function registerExceptionHandler(): void
     * {
     * $exceptionHandler = $this->app->make(ExceptionHandler::class);
     * if ($exceptionHandler instanceof HandlerDecorator) {
     * $exceptionHandler->reporter(
     * static function (\Throwable $e): void {
     * $data = (new WebhookErrorFormatter($e))->format();
     * if ($e instanceof AuthenticationException || $e instanceof NotFoundHttpException) {
     * return;
     * }
     *
     * if (is_string(config('logging.channels.slack_errors.url'))
     * && mb_strlen(config('logging.channels.slack_errors.url')) > 5) {
     * Log::channel('slack_errors')
     * ->error($e->getMessage(), $data);
     * }
     * }
     * );
     * }
     * }
     */

    #[Override]
    public function registerConfig(): void
    {
        // $config_file = realpath(__DIR__.'/../config/metatag.php');
        // $this->mergeConfigFrom($config_file, 'metatag');
    }

    public function loadHelpersFrom(string $path): void
    {
        $files = File::files($path);
        foreach ($files as $file) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if ($file->getExtension() !== 'php') {
=======
            if ('php' !== $file->getExtension()) {
>>>>>>> 5a14301c (.)
=======
            if ('php' !== $file->getExtension()) {
>>>>>>> 5a14301c (.)
=======
            if ('php' !== $file->getExtension()) {
>>>>>>> 5a14301c (.)
                continue;
            }

            $realPath = $file->getRealPath();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if ($realPath === false) {
=======
            if (false === $realPath) {
>>>>>>> 5a14301c (.)
=======
            if (false === $realPath) {
>>>>>>> 5a14301c (.)
=======
            if (false === $realPath) {
>>>>>>> 5a14301c (.)
                continue;
            }

            include_once $realPath;
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Register console commands.
     */
    public function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateFilamentResources::class,
                // \Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand::class,
            ]);
        }
    }

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    protected function translatableComponents(): void
    {
        $components = [Field::class, BaseFilter::class, Placeholder::class, Column::class, Entry::class];
        foreach ($components as $component) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            /* @var Configurable $component */
>>>>>>> 5a14301c (.)
=======
            /* @var Configurable $component */
>>>>>>> 5a14301c (.)
=======
            /* @var Configurable $component */
>>>>>>> 5a14301c (.)
            $component::configureUsing(function (Component $translatable): void {
                /* @phpstan-ignore method.notFound */
                $translatable->translateLabel();
            });
        }
    }

    /*
     * Register the custom exception handlers repository.
     * -- guardare come fa sentry
     * private function registerExceptionHandlersRepository(): void
     * {
     * $this->app->singleton(HandlersRepository::class, HandlersRepository::class);
     * }
     */
    /*
     * Extend the Laravel default exception handler.
     *
     * @see https://github.com/cerbero90/exception-handler/blob/master/src/Providers/ExceptionHandlerServiceProvider.php
     * -- guardare come fa sentry
     * private function extendExceptionHandler(): void
     * {
     * $this->app->extend(
     * ExceptionHandler::class,
     * static function (ExceptionHandler $handler, $app) {
     * return new HandlerDecorator($handler, $app[HandlersRepository::class]);
     * }
     * );
     * }
     */
    private function redirectSSL(): void
    {
        if (app()->runningInConsole()) {
            return;
        }

        // --- meglio ficcare un controllo anche sull'env

        if (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            // && isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
=======
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
>>>>>>> 5a14301c (.)
=======
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
>>>>>>> 5a14301c (.)
=======
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
>>>>>>> 5a14301c (.)
            XotData::make()->forceSSL()
        ) {
            URL::forceScheme('https');

            /*
             * da fare in htaccess
             */
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
            // if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            // }
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
=======
=======
>>>>>>> 399f46d3 (.)
            /*
             * da fare in htaccess
             */

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======

            /*
             * da fare in htaccess
             */
>>>>>>> b93ef594b4 (.)
=======
            /*
             * da fare in htaccess
             */
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
>>>>>>> 5a14301c (.)
=======
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
>>>>>>> 5a14301c (.)
=======
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
>>>>>>> 5a14301c (.)
        }
    }

    /**
     * Undocumented function.
     *
     * @see https://medium.com/@dobron/running-laravel-ide-helper-generator-automatically-b909e75849d0
     */
    private function registerEvents(): void
    {
        Event::listen(MigrationsEnded::class, static function (): void {
            // Artisan::call('ide-helper:models -r -W');
        });
    }

    private function registerViewComposers(): void
    {
        View::composer('*', XotComposer::class);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Register console commands.
     */
    public function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                //\Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand::class,
            ]);
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Register optimization console commands.
     */
    private function registerOptimizationCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                OptimizeFilamentMemoryCommand::class,
            ]);
        }
    }

    /**
     * Register Xot specific Livewire components.
     */
    private function registerXotLivewireComponents(): void
    {
        // Temporaneamente disabilitato per debug
        // if (class_exists(\Livewire\Livewire::class)) {
        //     try {
        //         \Livewire\Livewire::component(
        //             'modules.xot.filament.widgets.modules-overview-widget',
        //             \Modules\Xot\Filament\Widgets\ModulesOverviewWidget::class
        //         );
        //         \Log::info('ModulesOverviewWidget registrato correttamente');
        //     } catch (\Exception $e) {
        //         \Log::error('Errore nella registrazione ModulesOverviewWidget: ' . $e->getMessage());
        //     }
        // }
    }
} // end class
