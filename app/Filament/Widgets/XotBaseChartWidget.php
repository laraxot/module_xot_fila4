<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Filament\Widgets\ChartWidget as FilamentChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\ChartWidget as FilamentChartWidget;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Filament\Widgets\ChartWidget as FilamentChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Widget per visualizzare il trend delle registrazioni pazienti.
 *
 * Mostra un grafico a linee con il numero di pazienti registrati nel tempo.
 * I dati sono cacheati per 5 minuti per ottimizzare le performance.
 */
abstract class XotBaseChartWidget extends FilamentChartWidget
{
    use TransTrait;
    use InteractsWithPageFilters;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    protected null|string $heading = null;
    protected static null|int $sort = 1;
    protected static bool $isLazy = true;
    protected null|string $pollingInterval = null;

    /**
     * Restituisce il titolo del widget.
     *
     * CRITICO: Deve essere public per rispettare il contratto ChartWidget
     */
    public function getHeading(): null|string
    {
        return static::trans('navigation.heading');
<<<<<<< HEAD
=======
=======
    protected ?string $heading = null;
    protected static ?int $sort = 1;
=======

    protected null|string $heading = null;
    protected static null|int $sort = 1;
>>>>>>> b93ef594b4 (.)
    protected static bool $isLazy = true;
    protected null|string $pollingInterval = null;

    /**
     * Restituisce il titolo del widget.
     *
     * CRITICO: Deve essere public per rispettare il contratto ChartWidget
     */
    public function getHeading(): null|string
    {
        return static::trans('navigation.heading');
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $heading = null;
    protected static ?int $sort = 1;
    protected static bool $isLazy = true;
    protected static ?string $pollingInterval = null;

    /**
     * Restituisce il titolo del widget.
     * 
     * CRITICO: Deve essere public per rispettare il contratto ChartWidget
     */
    public function getHeading(): ?string
    {
        return static::trans('navigation.heading');
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                        'label' =>

                                'function(context) {
                            return "' .
                                __('salutemo::widgets.patient_registration_trend.total_registrations') .
                                '".replace(":count", context.parsed.y);
                        }'
                            ,
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                    ],
                ],
            ],
            'scales' => [
                'x' => [
                    'display' => true,
                    'title' => [
                        'display' => true,
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                    ],
                    'grid' => [
                        'display' => false,
                    ],
                ],
                'y' => [
                    'display' => true,
                    'title' => [
                        'display' => true,
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    protected function getHeight(): ?string
    {
        return '300px';
    }


<<<<<<< HEAD
} 
>>>>>>> a12f125f4a (.)
=======
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
