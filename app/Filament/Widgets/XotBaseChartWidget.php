<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Widgets\ChartWidget as FilamentChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
>>>>>>> 5a14301c (.)
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Widget per visualizzare il trend delle registrazioni pazienti.
 *
 * Mostra un grafico a linee con il numero di pazienti registrati nel tempo.
 * I dati sono cacheati per 5 minuti per ottimizzare le performance.
 */
abstract class XotBaseChartWidget extends FilamentChartWidget
{
<<<<<<< HEAD
<<<<<<< HEAD
    use InteractsWithPageFilters;
    use TransTrait;

    protected ?string $heading = null;

    protected static ?int $sort = 1;

    protected static bool $isLazy = true;

    protected ?string $pollingInterval = null;
=======
=======
>>>>>>> 5a14301c (.)
    use TransTrait;
    use InteractsWithPageFilters;

    protected null|string $heading = null;
    protected static null|int $sort = 1;
    protected static bool $isLazy = true;
    protected null|string $pollingInterval = null;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Restituisce il titolo del widget.
     *
     * CRITICO: Deve essere public per rispettare il contratto ChartWidget
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getHeading(): ?string
=======
    public function getHeading(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getHeading(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
    public function getHeading(): null|string
>>>>>>> 5a14301c (.)
    {
        return static::trans('navigation.heading');
    }

    /**
     * Restituisce i dati per il grafico.
     *
     * @return array<string, mixed>
     */
    protected function getData(): array
    {
        return [];
    }

    /**
     * Restituisce il tipo di grafico.
     */
    protected function getType(): string
    {
        return 'line';
    }

    /**
     * Restituisce le opzioni del grafico.
     *
     * @return array<string, mixed>
     */
    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
                'tooltip' => [
                    'mode' => 'index',
                    'intersect' => false,
                    'callbacks' => [
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
                        'label' => 'function(context) {
                            return "'.
                                __('<nome modulo>::widgets.patient_registration_trend.total_registrations').
                                '".replace(":count", context.parsed.y);
                        }',
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
                        'label' =>

                                'function(context) {
                            return "' .
                                __('salutemo::widgets.patient_registration_trend.total_registrations') .
                                '".replace(":count", context.parsed.y);
                        }'
                            ,
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
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
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
                    ],
                ],
            ],
            'scales' => [
                'x' => [
                    'display' => true,
                    'title' => [
                        'display' => true,
<<<<<<< HEAD
<<<<<<< HEAD
                        'text' => __('<nome modulo>::widgets.patient_registration_trend.period.label'),
=======
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
>>>>>>> 5a14301c (.)
=======
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
>>>>>>> 5a14301c (.)
                    ],
                    'grid' => [
                        'display' => false,
                    ],
                ],
                'y' => [
                    'display' => true,
                    'title' => [
                        'display' => true,
<<<<<<< HEAD
<<<<<<< HEAD
                        'text' => __('<nome modulo>::widgets.patient_registration_trend.total_registrations'),
=======
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
>>>>>>> 5a14301c (.)
=======
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
>>>>>>> 5a14301c (.)
                    ],
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                    ],
                ],
            ],
            'interaction' => [
                'mode' => 'nearest',
                'axis' => 'x',
                'intersect' => false,
            ],
        ];
    }

    /**
     * Restituisce l'altezza del widget.
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
    protected function getHeight(): ?string
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
    protected function getHeight(): null|string
>>>>>>> 5a14301c (.)
=======
    protected function getHeight(): null|string
>>>>>>> 5a14301c (.)
    {
        return '300px';
    }
}
