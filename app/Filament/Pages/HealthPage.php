<?php

/**
 * @see https://github.com/shuvroroy/filament-spatie-laravel-health/tree/main
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

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
use Filament\Widgets\WidgetConfiguration;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Artisan;
use Laraxot\SmtpHealthCheck\SmtpCheck;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Widgets\HealthOverviewWidget;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
use Spatie\Health\Checks\Check;
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
=======
use Spatie\Health\Checks\Check;
=======
use Spatie\Health\Checks\Check;
>>>>>>> 3fbbf1f5 (.)
=======
use Spatie\Health\Checks\Check;
=======
use Spatie\Health\Checks\Check;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\Health\Checks\Check;
=======
>>>>>>> a12f125f4a (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> ca9324a4 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 5a14301c (.)
=======
use Spatie\Health\Checks\Check;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Spatie\Health\Checks\Check;
=======
>>>>>>> f1d4085 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> ca9324a4 (.)
=======
use Spatie\Health\Checks\Check;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
use Spatie\Health\Checks\Check;
=======
>>>>>>> f1d4085 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
use Spatie\Health\Checks\Check;
>>>>>>> 3310e9c6 (.)
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<int, Check> $checks */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            // Checks\MeiliSearchCheck::new(),
=======
            //Checks\MeiliSearchCheck::new(),
>>>>>>> 5a14301c (.)
=======
            //Checks\MeiliSearchCheck::new(),
>>>>>>> 5a14301c (.)
            QueueCheck::new(),
            RedisCheck::new(),
            ScheduleCheck::new(),
            RedisMemoryUsageCheck::new(),
            // Checks\PingCheck::new()->url('https://google.com')->name('Google'),
        ];
        if (class_exists(CpuLoadCheck::class)) {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
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
        /** @var array<Check> $checks */
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
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        Health::checks($checks);
        Artisan::call(RunHealthChecksCommand::class);
        $this->dispatch('refresh-component');
        Notification::make()
            ->title('Health check results refreshed')
            ->success()
            ->send();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<int, Action>
     */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    protected function getHeaderActions(): array
    {
        return [
            Action::make('refresh')
                ->tooltip('refresh')
                ->icon('heroicon-o-arrow-path')
                ->button()
                ->action('refresh'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<int, WidgetConfiguration>
     */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    protected function getHeaderWidgets(): array
    {
        return [
            HealthOverviewWidget::make(),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    protected function getViewData(): array
    {
        $checkResults = app(ResultStore::class)->latestResults();

        return [
            'lastRanAt' => $checkResults?->finishedAt,
            'checkResults' => $checkResults,
        ];
    }
}
