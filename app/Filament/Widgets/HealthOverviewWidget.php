<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
use Spatie\Health\Enums\Status;
=======
<<<<<<< HEAD
use Spatie\Health\Enums\Status;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
>>>>>>> 5a14301c (.)
=======
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        if ($checkResults === null) {
=======
        if (null === $checkResults) {
>>>>>>> 5a14301c (.)
=======
        if (null === $checkResults) {
>>>>>>> 5a14301c (.)
            return $stats;
        }
        foreach ($checkResults->storedCheckResults as $result) {
            $label = $result->label;
            $value = $result->shortSummary;
            $stats[] = Stat::make($label, $value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->description($result->notificationMessage.' '.$result->status)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 5a14301c (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 3fbbf1f5 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> ca9324a4 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
                ->description($result->notificationMessage . ' ' . $result->status)
=======
                ->description($result->notificationMessage.' '.$result->status)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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
