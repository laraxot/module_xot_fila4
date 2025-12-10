<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Spatie\Health\Enums\Status;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Spatie\Health\Enums\Status;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Health\Enums\Status;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
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
        if (null === $checkResults) {
        if (null === $checkResults) {
        if (null === $checkResults) {
        if (null === $checkResults) {
        if ($checkResults === null) {
        if (null === $checkResults) {
        if (null === $checkResults) {
        if (null === $checkResults) {
        if (null === $checkResults) {
        if (null === $checkResults) {
            return $stats;
        }
        foreach ($checkResults->storedCheckResults as $result) {
            $label = $result->label;
            $value = $result->shortSummary;
            $stats[] = Stat::make($label, $value)
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
                ->description($result->notificationMessage.' '.$result->status)
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 17684f52 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 399f46d3 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
                ->description($result->notificationMessage.' '.$result->status)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
                ->description($result->notificationMessage . ' ' . $result->status)
=======
                ->description($result->notificationMessage.' '.$result->status)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage.' '.$result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
                ->description($result->notificationMessage . ' ' . $result->status)
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
                ->description($result->notificationMessage . ' ' . $result->status)
=======
                ->description($result->notificationMessage.' '.$result->status)
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                ->description($result->notificationMessage . ' ' . $result->status)
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
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
                ->description($result->notificationMessage . ' ' . $result->status)
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
                // ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color($this->iconColor($result->status));
        }

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
         * return [
         * Stat::make('Unique views', '192.1k'),
         * Stat::make('Bounce rate', '21%'),
         * Stat::make('Average time on page', '3:12'),
         * ];
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
        */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        return $stats;
    }
}
