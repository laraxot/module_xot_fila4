<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
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
<<<<<<< HEAD
=======
=======
=======
use Modules\Xot\Console\Commands\OptimizeFilamentMemoryCommand;
use Override;
>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;

use function Safe\realpath;
>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Class XotServiceProvider.
 */
class XotServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Xot';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function boot(): void
    {
        parent::boot();
        $this->redirectSSL();
        $this->registerViewComposers();
        $this->registerEvents();
        //$this->registerExceptionHandler(); // guardare come fa sentry
        $this->registerTimezone();
        $this->registerFilamentMacros();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $this->registerXotLivewireComponents();
        $this->registerProviders();
    }

    #[Override]
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $this->registerProviders();
    }

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $this->registerProviders();
    }

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function register(): void
    {
        parent::register();
        $this->registerConfig();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        $this->registerCommands();
<<<<<<< HEAD
=======
=======
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        //$this->registerCommands();
>>>>>>> a12f125f4a (.)
=======

        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        $this->registerCommands();
>>>>>>> b93ef594b4 (.)
=======
        //$this->registerExceptionHandlersRepository();
        //$this->extendExceptionHandler();
        //$this->registerCommands();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function registerProviders(): void
    {
        // $this->app->register(Filament\ModulesServiceProvider::class);
    }

    public function registerTimezone(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::string(
            $timezone = config('app.timezone') ?? 'Europe/Berlin',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::string(
            $date_format = config('app.date_format') ?? 'd/m/Y',
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::string($locale = config('app.locale') ?? 'it', '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::string($timezone = config('app.timezone') ?? 'Europe/Berlin', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($date_format = config('app.date_format') ?? 'd/m/Y', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($timezone = config('app.timezone') ?? 'Europe/Berlin', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($date_format = config('app.date_format') ?? 'd/m/Y', '['.__LINE__.']['.class_basename($this).']');
        Assert::string($locale = config('app.locale') ?? 'it', '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        app()->setLocale($locale);
        Carbon::setLocale($locale);
        date_default_timezone_set($timezone);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        DateTimePicker::configureUsing(fn(DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(
            fn(DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format),
        );
        TimePicker::configureUsing(fn(TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn(TextColumn $column) => $column->timezone($timezone));
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        DateTimePicker::configureUsing(fn (DateTimePicker $component) => $component->timezone($timezone));
        DatePicker::configureUsing(fn (DatePicker $component) => $component->timezone($timezone)->displayFormat($date_format));
        TimePicker::configureUsing(fn (TimePicker $component) => $component->timezone($timezone));
        TextColumn::configureUsing(fn (TextColumn $column) => $column->timezone($timezone));

<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function registerFilamentMacros(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
                if ($operation === 'create') {
                    return;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        TextInput::macro('generateSlug',function (){
            /** @phpstan-ignore-next-line */
            $this
            ->live(onBlur: true)
            ->afterStateUpdated(function (string $operation, string $state,Set $set){
                if($operation === 'create'){
                    return ;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        TextInput::macro('generateSlug', function () {
            /** @phpstan-ignore-next-line */
            $this->live(onBlur: true)->afterStateUpdated(function (string $operation, string $state, Set $set) {
                if ($operation === 'create') {
                    return;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                }
                $set('slug', Str::slug($state));
            });
            return $this;
        });
    }

    /*
     * @see https://github.com/cerbero90/exception-handler
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD

    #[Override]
=======
<<<<<<< HEAD

    #[Override]
=======
=======
>>>>>>> origin/develop
     --  guardare come fa sentry 
    public function registerExceptionHandler(): void
    {
        $exceptionHandler = $this->app->make(ExceptionHandler::class);
        if ($exceptionHandler instanceof HandlerDecorator) {
            $exceptionHandler->reporter(
                static function (\Throwable $e): void {
                    $data = (new WebhookErrorFormatter($e))->format();
                    if ($e instanceof AuthenticationException || $e instanceof NotFoundHttpException) {
                        return;
                    }

                    if (is_string(config('logging.channels.slack_errors.url'))
                        && mb_strlen(config('logging.channels.slack_errors.url')) > 5) {
                        Log::channel('slack_errors')
                            ->error($e->getMessage(), $data);
                    }
                }
            );
        }
    }
        */

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function registerConfig(): void
    {
        // $config_file = realpath(__DIR__.'/../config/metatag.php');
        // $this->mergeConfigFrom($config_file, 'metatag');
    }

    public function loadHelpersFrom(string $path): void
    {
        $files = File::files($path);
        foreach ($files as $file) {
            if ('php' !== $file->getExtension()) {
                continue;
            }

            $realPath = $file->getRealPath();
            if (false === $realPath) {
                continue;
            }

            include_once $realPath;
        }
    }

    protected function translatableComponents(): void
    {
        $components = [Field::class, BaseFilter::class, Placeholder::class, Column::class, Entry::class];
        foreach ($components as $component) {
            /* @var Configurable $component */
            $component::configureUsing(function (Component $translatable): void {
                /* @phpstan-ignore method.notFound */
                $translatable->translateLabel();
            });
        }
    }

    /*
     * Register the custom exception handlers repository.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     * -- guardare come fa sentry
     * private function registerExceptionHandlersRepository(): void
     * {
     * $this->app->singleton(HandlersRepository::class, HandlersRepository::class);
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
     -- guardare come fa sentry
    private function registerExceptionHandlersRepository(): void
    {
        $this->app->singleton(HandlersRepository::class, HandlersRepository::class);
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /*
     * Extend the Laravel default exception handler.
     *
     * @see https://github.com/cerbero90/exception-handler/blob/master/src/Providers/ExceptionHandlerServiceProvider.php
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    private function redirectSSL(): void
    {
        if (app()->runningInConsole()) {
            return;
        }

<<<<<<< HEAD
        // --- meglio ficcare un controllo anche sull'env

=======
=======
=======
>>>>>>> origin/develop
     -- guardare come fa sentry
    private function extendExceptionHandler(): void
    {
        $this->app->extend(
            ExceptionHandler::class,
            static function (ExceptionHandler $handler, $app) {
                return new HandlerDecorator($handler, $app[HandlersRepository::class]);
            }
        );
    }
    */
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
    private function redirectSSL(): void
    {
        if (app()->runningInConsole()) {
            return;
<<<<<<< HEAD
        };
>>>>>>> a12f125f4a (.)
=======
        }

>>>>>>> b93ef594b4 (.)
        // --- meglio ficcare un controllo anche sull'env

=======
    private function redirectSSL(): void
    {
        if(app()->runningInConsole()){
            return;
        };
        // --- meglio ficcare un controllo anche sull'env
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if (
            //config('xra.forcessl') && (isset($_SERVER['SERVER_NAME']) && 'localhost' !== $_SERVER['SERVER_NAME']
            //&& isset($_SERVER['REQUEST_SCHEME']) && 'http' === $_SERVER['REQUEST_SCHEME'])
            XotData::make()->forceSSL()
        ) {
            URL::forceScheme('https');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            /*
             * da fare in htaccess
             */
<<<<<<< HEAD
=======
=======
            /*
             * da fare in htaccess
             */

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
            //if (! request()->secure() /* && in_array(env('APP_ENV'), ['stage', 'production']) */) {
            //    exit(redirect()->secure(request()->getRequestUri()));
            //}
        }
    }

    /**
     * Undocumented function.
     *
     * @see https://medium.com/@dobron/running-laravel-ide-helper-generator-automatically-b909e75849d0
     */
    private function registerEvents(): void
    {
<<<<<<< HEAD
        Event::listen(MigrationsEnded::class, static function (): void {
            // Artisan::call('ide-helper:models -r -W');
        });
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Event::listen(MigrationsEnded::class, static function (): void {
            // Artisan::call('ide-helper:models -r -W');
        });
=======
=======
>>>>>>> origin/develop
        Event::listen(
            MigrationsEnded::class,
            static function (): void {
                // Artisan::call('ide-helper:models -r -W');
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        Event::listen(MigrationsEnded::class, static function (): void {
            // Artisan::call('ide-helper:models -r -W');
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    private function registerViewComposers(): void
    {
        View::composer('*', XotComposer::class);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    /**
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
=======
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
} // end class
