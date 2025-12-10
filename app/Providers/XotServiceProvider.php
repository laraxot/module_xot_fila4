<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
use Filament\Schemas\Components\Utilities\Set;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
>>>>>>> 414a4ffcb (.)
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Modules\Xot\Console\Commands\GenerateFilamentResources;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Modules\Xot\Datas\XotData;
use Modules\Xot\View\Composers\XotComposer;
use Override;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
use function Safe\realpath;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
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
use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;
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

use function Safe\realpath;
use Filament\Forms\Set;
use function Safe\realpath;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Carbon;
use Modules\Xot\Datas\XotData;
use Filament\Tables\Columns\Column;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Filament\Forms\Components\Field;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Event;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Entry;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Support\Components\Component;
use Filament\Support\Concerns\Configurable;
use Modules\Xot\View\Composers\XotComposer;
use Illuminate\Auth\AuthenticationException;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Contracts\Debug\ExceptionHandler;

use Modules\Xot\Exceptions\Handlers\HandlerDecorator;
use Modules\Xot\Exceptions\Handlers\HandlersRepository;
use Modules\Xot\Exceptions\Formatters\WebhookErrorFormatter;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


use function Safe\realpath;


use function Safe\realpath;


use function Safe\realpath;


use function Safe\realpath;


use function Safe\realpath;

=======
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Modules\Xot\Console\Commands\GenerateFilamentResources;
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Modules\Xot\Datas\XotData;
use Modules\Xot\View\Composers\XotComposer;
use Override;
use Webmozart\Assert\Assert;

>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
        //$this->registerExceptionHandler(); // guardare come fa sentry
        //$this->registerExceptionHandler(); // guardare come fa sentry
        //$this->registerExceptionHandler(); // guardare come fa sentry
        //$this->registerExceptionHandler(); // guardare come fa sentry
        //$this->registerExceptionHandler(); // guardare come fa sentry
=======
        // $this->registerExceptionHandler(); // guardare come fa sentry
>>>>>>> 551c768c4 (.)
=======
        // $this->registerExceptionHandler(); // guardare come fa sentry
>>>>>>> 414a4ffcb (.)
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
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
=======
        // $this->registerExceptionHandlersRepository();
        // $this->extendExceptionHandler();
>>>>>>> 551c768c4 (.)
=======
        // $this->registerExceptionHandlersRepository();
        // $this->extendExceptionHandler();
>>>>>>> 414a4ffcb (.)
        $this->registerCommands();
    }

    public function registerProviders(): void
    {
        // $this->app->register(Filament\ModulesServiceProvider::class);
    }

    public function registerTimezone(): void
    {
<<<<<<< HEAD
        Assert::string(
            $timezone = config('app.timezone') ?? 'Europe/Berlin',
            '['.__LINE__.']['.class_basename($this).']',
        );
        Assert::string(
            $date_format = config('app.date_format') ?? 'd/m/Y',
            '['.__LINE__.']['.class_basename($this).']',
        );
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 5cf46378 (.)
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::string(
            $date_format = config('app.date_format') ?? 'd/m/Y',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::string($locale = config('app.locale') ?? 'it', '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($timezone = config('app.timezone') ?? 'Europe/Berlin', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($date_format = config('app.date_format') ?? 'd/m/Y', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($timezone = config('app.timezone') ?? 'Europe/Berlin', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($date_format = config('app.date_format') ?? 'd/m/Y', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 5cf46378 (.)
        $timezone = config('app.timezone') ?? 'Europe/Berlin';
        $date_format = config('app.date_format') ?? 'd/m/Y';
        $locale = config('app.locale') ?? 'it';

        Assert::string($timezone, '['.__LINE__.']['.class_basename($this).']');
        Assert::string($date_format, '['.__LINE__.']['.class_basename($this).']');
        Assert::string($locale, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

        app()->setLocale($locale);
        Carbon::setLocale($locale);
        date_default_timezone_set($timezone);

        DateTimePicker::configureUsing(fn (DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(
            fn (DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format),
        );
        TimePicker::configureUsing(fn (TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn (TextColumn $column) => $column->timezone($timezone));
<<<<<<< HEAD
<<<<<<< HEAD
        DateTimePicker::configureUsing(fn(DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(
            fn(DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format),
        );
        TimePicker::configureUsing(fn(TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn(TextColumn $column) => $column->timezone($timezone));
        DateTimePicker::configureUsing(fn (DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(fn (DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format));
        TimePicker::configureUsing(fn (TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn (TextColumn $column) => $column->timezone($timezone));


        





=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    }

    public function registerFilamentMacros(): void
    {
        // Macro temporarily disabled due to compatibility issues with Filament version
        // TODO: Re-implement when compatible with current Filament version
        /*
        TextInput::macro('generateSlug', function () {
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set): void {
<<<<<<< HEAD
<<<<<<< HEAD
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
                if ($operation === 'create') {
                    return;
        TextInput::macro('generateSlug',function (){
            /** @phpstan-ignore-next-line */
            $this
            ->live(onBlur: true)
            ->afterStateUpdated(function (string $operation, string $state,Set $set){
                if($operation === 'create'){
                    return ;
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                if ($operation === 'create') {
                    return;
                }
                $set('slug', Str::slug($state));
            });
            return $this;
        });
<<<<<<< HEAD
<<<<<<< HEAD
=======
        */
>>>>>>> 551c768c4 (.)
=======
        */
>>>>>>> 414a4ffcb (.)
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
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
=======
            if ($file->getExtension() !== 'php') {
>>>>>>> 551c768c4 (.)
=======
            if ($file->getExtension() !== 'php') {
>>>>>>> 414a4ffcb (.)
                continue;
            }

            $realPath = $file->getRealPath();
<<<<<<< HEAD
<<<<<<< HEAD
            if (false === $realPath) {
            if (false === $realPath) {
            if (false === $realPath) {
            if (false === $realPath) {
            if (false === $realPath) {
=======
            if ($realPath === false) {
>>>>>>> 551c768c4 (.)
=======
            if ($realPath === false) {
>>>>>>> 414a4ffcb (.)
                continue;
            }

            include_once $realPath;
        }
    }

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

    protected function translatableComponents(): void
    {
        $components = [Field::class, BaseFilter::class, Placeholder::class, Column::class, Entry::class];
        foreach ($components as $component) {
<<<<<<< HEAD
<<<<<<< HEAD
            /* @var Configurable $component */
            /* @var Configurable $component */
            /* @var Configurable $component */
            /* @var Configurable $component */
            /* @var Configurable $component */
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
=======
            // config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            // && isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
>>>>>>> 551c768c4 (.)
=======
            // config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            // && isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
>>>>>>> 414a4ffcb (.)
            XotData::make()->forceSSL()
        ) {
            URL::forceScheme('https');

            /*
             * da fare in htaccess
             */
<<<<<<< HEAD
<<<<<<< HEAD
            /*
             * da fare in htaccess
             */


            /*
             * da fare in htaccess
             */
            /*
             * da fare in htaccess
             */
            
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
=======
            // if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            // }
>>>>>>> 551c768c4 (.)
=======
            // if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            // }
>>>>>>> 414a4ffcb (.)
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
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 414a4ffcb (.)
} // end class
=======
} // end class
>>>>>>> 5cf46378 (.)
