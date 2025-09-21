<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
use Spatie\Health\Enums\Status;
=======
<<<<<<< HEAD
use Spatie\Health\Enums\Status;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\ResultStores\ResultStore;

class HealthOverviewWidget extends BaseWidget
{
    public function iconColor(string $status): string
    {
        return match ($status) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            Status::ok()->value => 'success',
            Status::warning()->value => 'warning',
            Status::skipped()->value => 'warning',
            Status::failed()->value, Status::crashed()->value => 'danger',
<<<<<<< HEAD
=======
=======
            \Spatie\Health\Enums\Status::ok()->value => 'success',
            \Spatie\Health\Enums\Status::warning()->value => 'warning',
            \Spatie\Health\Enums\Status::skipped()->value => 'warning',
            \Spatie\Health\Enums\Status::failed()->value, \Spatie\Health\Enums\Status::crashed()->value => 'danger',
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            default => 'secondary',
        };
    }

    protected function getStats(): array
    {
        $stats = [];

        $checkResults = app(ResultStore::class)->latestResults();
        if (null === $checkResults) {
            return $stats;
        }
        foreach ($checkResults->storedCheckResults as $result) {
            $label = $result->label;
            $value = $result->shortSummary;
            $stats[] = Stat::make($label, $value)
<<<<<<< HEAD
                ->description($result->notificationMessage . ' ' . $result->status)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->description($result->notificationMessage . ' ' . $result->status)
=======
                ->description($result->notificationMessage.' '.$result->status)
>>>>>>> a12f125f4a (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> b93ef594b4 (.)
=======
                ->description($result->notificationMessage.' '.$result->status)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                // ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color($this->iconColor($result->status));
        }

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
         * return [
         * Stat::make('Unique views', '192.1k'),
         * Stat::make('Bounce rate', '21%'),
         * Stat::make('Average time on page', '3:12'),
         * ];
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $stats;
    }
}
