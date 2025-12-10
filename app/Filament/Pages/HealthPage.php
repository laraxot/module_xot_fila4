<?php

/**
 * @see https://github.com/shuvroroy/filament-spatie-laravel-health/tree/main
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

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
use Filament\Widgets\WidgetConfiguration;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Filament\Widgets\WidgetConfiguration;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
=======
use Filament\Widgets\WidgetConfiguration;
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\WidgetConfiguration;
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\Health\Checks\Check;
=======
>>>>>>> f1d4085 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseSizeCheck;
use Spatie\Health\Checks\Checks\DatabaseTableSizeCheck;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;
use Spatie\Health\Checks\Checks\FlareErrorOccurrenceCountCheck;
use Spatie\Health\Checks\Checks\HorizonCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\RedisMemoryUsageCheck;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;
use Laraxot\SmtpHealthCheck\SmtpCheck;
use Modules\Xot\Filament\Widgets\HealthOverviewWidget;
<<<<<<< HEAD
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spatie\Health\Checks\Check;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Artisan;
use Laraxot\SmtpHealthCheck\SmtpCheck;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Widgets\HealthOverviewWidget;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
<<<<<<< HEAD
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Checks;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
=======
>>>>>>> 53d6a6ba (.)
=======
use Spatie\Health\Checks\Check;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use Spatie\Health\Checks\Checks;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;
use Spatie\Health\Checks\Checks\DatabaseSizeCheck;
use Spatie\Health\Checks\Checks\DatabaseTableSizeCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\FlareErrorOccurrenceCountCheck;
use Spatie\Health\Checks\Checks\HorizonCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\RedisMemoryUsageCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Commands\RunHealthChecksCommand;
use Spatie\Health\Facades\Health;
use Spatie\Health\ResultStores\ResultStore;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
<<<<<<< HEAD
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
=======
>>>>>>> 399f46d3 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
=======
>>>>>>> ca9324a4 (.)
=======
use Spatie\Health\Checks\Check;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Spatie\Health\Checks\Check;
=======
>>>>>>> f1d4085 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
use Spatie\Health\Checks\Check;
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
use Spatie\Health\Checks\Check;
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseSizeCheck;
use Spatie\Health\Checks\Checks\DatabaseTableSizeCheck;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;
use Spatie\Health\Checks\Checks\FlareErrorOccurrenceCountCheck;
use Spatie\Health\Checks\Checks\HorizonCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\RedisMemoryUsageCheck;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;
use Laraxot\SmtpHealthCheck\SmtpCheck;
use Modules\Xot\Filament\Widgets\HealthOverviewWidget;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Check;
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
use Spatie\Health\Checks\Check;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spatie\Health\Checks\Check;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Widgets;
use Spatie\Health\Checks\Checks;
use Spatie\Health\Commands\RunHealthChecksCommand;
use Spatie\Health\Facades\Health;
use Spatie\Health\ResultStores\ResultStore;

class HealthPage extends Page
{
    use NavigationLabelTrait;

    /**
     * @var array<string, string>
     */
    protected $listeners = ['refresh-component' => '$refresh'];

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-heart';

    protected string $view = 'xot::filament.pages.health';

    public function refresh(): void
    {
        /** @var array<int, Check> $checks */
        $checks = [
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-heart';

    protected string $view = 'xot::filament.pages.health';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-heart';

    protected string $view = 'xot::filament.pages.health';

    public function refresh(): void
    {
        /** @var array<int, Check> $checks */
        $checks = [
            OptimizedAppCheck::new(),
            DebugModeCheck::new(),
            EnvironmentCheck::new(),
            UsedDiskSpaceCheck::new(),
            DatabaseCheck::new(),
            DatabaseSizeCheck::new(),
            DatabaseTableSizeCheck::new(),
            CacheCheck::new(),
            DatabaseConnectionCountCheck::new(),
            FlareErrorOccurrenceCountCheck::new(),
            HorizonCheck::new(),
            // Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            // Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            QueueCheck::new(),
            RedisCheck::new(),
            ScheduleCheck::new(),
            RedisMemoryUsageCheck::new(),
            // Checks\PingCheck::new()->url('https://google.com')->name('Google'),
        ];
        if (class_exists(CpuLoadCheck::class)) {
            $checks[] = CpuLoadCheck::new();
        }
        if (class_exists(SecurityAdvisoriesCheck::class)) {
            $checks[] = SecurityAdvisoriesCheck::new();
        }
        if (class_exists(SmtpCheck::class)) {
            $checks[] = SmtpCheck::new();
        }

        /**
         * PHPStan Level 10: CpuLoadCheck, SecurityAdvisoriesCheck, and SmtpCheck
         * all extend Check, but their types are not recognized due to dynamic loading.
         * We suppress this specific error as the runtime type is guaranteed to be correct.
         *
         * @phpstan-ignore-next-line argument.type
         */
            /** @var CpuLoadCheck $check */
            $check = CpuLoadCheck::new();
            $checks[] = $check;
        }
        if (class_exists(SecurityAdvisoriesCheck::class)) {
            /** @var \Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck $check */
            $check = SecurityAdvisoriesCheck::new();
            $checks[] = $check;
        }
        if (class_exists(SmtpCheck::class)) {
            /** @var \Laraxot\SmtpHealthCheck\SmtpCheck $check */
            $check = SmtpCheck::new();
            $checks[] = $check;
        }
<<<<<<< HEAD
        /** @var array<Check> $checks */
<<<<<<< HEAD
        /** @var array<Check> $checks */
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ce6fc085 (.)
            Checks\OptimizedAppCheck::new(),
            Checks\DebugModeCheck::new(),
            Checks\EnvironmentCheck::new(),
            Checks\UsedDiskSpaceCheck::new(),
            Checks\DatabaseCheck::new(),
            Checks\DatabaseSizeCheck::new(),
            Checks\DatabaseTableSizeCheck::new(),
            Checks\CacheCheck::new(),
            Checks\DatabaseConnectionCountCheck::new(),
            Checks\FlareErrorOccurrenceCountCheck::new(),
            Checks\HorizonCheck::new(),
            //Checks\MeiliSearchCheck::new(),
            Checks\QueueCheck::new(),
            Checks\RedisCheck::new(),
            Checks\ScheduleCheck::new(),
            Checks\RedisMemoryUsageCheck::new(),
            // Checks\PingCheck::new()->url('https://google.com')->name('Google'),
        ];
        if (class_exists(\Spatie\CpuLoadHealthCheck\CpuLoadCheck::class)) {
            /** @var \Spatie\CpuLoadHealthCheck\CpuLoadCheck $check */
            $check = \Spatie\CpuLoadHealthCheck\CpuLoadCheck::new();
            $checks[] = $check;
        }
        if (class_exists(\Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck::class)) {
            /** @var \Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck $check */
            $check = \Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck::new();
            $checks[] = $check;
        }
        if (class_exists(\Laraxot\SmtpHealthCheck\SmtpCheck::class)) {
            /** @var \Laraxot\SmtpHealthCheck\SmtpCheck $check */
            $check = \Laraxot\SmtpHealthCheck\SmtpCheck::new();
            $checks[] = $check;
        }
        /** @var array<\Spatie\Health\Checks\Check> $checks */
<<<<<<< HEAD
        /** @var array<int, \Spatie\Health\Checks\Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<int, \Spatie\Health\Checks\Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<int, \Spatie\Health\Checks\Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<int, \Spatie\Health\Checks\Check> $checks */
        /** @var array<Check> $checks */
        /** @var array<Check> $checks */
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
        /** @var array<int, \Spatie\Health\Checks\Check> $checks */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        Health::checks($checks);
        Artisan::call(RunHealthChecksCommand::class);
        $this->dispatch('refresh-component');
        Notification::make()
            ->title('Health check results refreshed')
            ->success()
            ->send();
    }

    /**
     * @return array<int, Action>
     */
    /**
     * @return array<int, Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            Action::make('refresh')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
                
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
                ->tooltip('refresh')
                ->icon('heroicon-o-arrow-path')
                ->button()
                ->action('refresh'),
        ];
    }

    /**
     * @return array<int, WidgetConfiguration>
     */
    protected function getHeaderWidgets(): array
    {
        return [
            HealthOverviewWidget::make(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    /**
     * @return array<int, WidgetConfiguration>
     */
    protected function getHeaderWidgets(): array
    {
        return [
            HealthOverviewWidget::make(),
            HealthOverviewWidget::make(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        $checkResults = app(ResultStore::class)->latestResults();

        return [
            'lastRanAt' => $checkResults?->finishedAt,
            'checkResults' => $checkResults,
        ];
    }
}
