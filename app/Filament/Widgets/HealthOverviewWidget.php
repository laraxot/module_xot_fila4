<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Spatie\Health\ResultStores\ResultStore;

class HealthOverviewWidget extends BaseWidget
{
    public function iconColor(string $status): string
    {
        return match ($status) {
            Status::ok()->value => 'success',
            Status::warning()->value => 'warning',
            Status::skipped()->value => 'warning',
            Status::failed()->value, Status::crashed()->value => 'danger',
            default => 'secondary',
        };
    }

    protected function getStats(): array
    {
        $stats = [];

        $checkResults = app(ResultStore::class)->latestResults();
        if ($checkResults === null) {
            return $stats;
        }
        foreach ($checkResults->storedCheckResults as $result) {
            $label = $result->label;
            $value = $result->shortSummary;
            $stats[] = Stat::make($label, $value)
<<<<<<< HEAD
<<<<<<< HEAD
                ->description($result->notificationMessage.' '.$result->status)
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->description($result->notificationMessage . ' ' . $result->status)
=======
                ->description($result->notificationMessage.' '.$result->status)
>>>>>>> f1d4085 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 300ef70 (.)
                // ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color($this->iconColor($result->status));
        }

        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
         * return [
         * Stat::make('Unique views', '192.1k'),
         * Stat::make('Bounce rate', '21%'),
         * Stat::make('Average time on page', '3:12'),
         * ];
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
        */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return $stats;
    }
}
