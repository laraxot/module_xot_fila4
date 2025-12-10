<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
use Filament\Support\RawJs;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
use Filament\Widgets\ChartWidget as FilamentChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 551c768c4 (.)
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\ChartWidget as FilamentChartWidget;
use Filament\Widgets\ChartWidget as FilamentChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Modules\Xot\Filament\Traits\TransTrait;
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\ChartWidget as FilamentChartWidget;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

/**
 * Widget per visualizzare il trend delle registrazioni pazienti.
 *
 * Mostra un grafico a linee con il numero di pazienti registrati nel tempo.
 * I dati sono cacheati per 5 minuti per ottimizzare le performance.
 */
abstract class XotBaseChartWidget extends FilamentChartWidget
{
    use InteractsWithPageFilters;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    use TransTrait;

    protected ?string $heading = null;

    protected static ?int $sort = 1;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)

    protected static bool $isLazy = true;

    protected ?string $pollingInterval = null;
<<<<<<< HEAD
    use TransTrait;
    use InteractsWithPageFilters;
    use TransTrait;
    use InteractsWithPageFilters;

    protected null|string $heading = null;
    protected static null|int $sort = 1;
    protected static bool $isLazy = true;
    protected null|string $pollingInterval = null;

    /**
     * Restituisce il titolo del widget.
     *
     * CRITICO: Deve essere public per rispettare il contratto ChartWidget
     */
    public function getHeading(): ?string
    public function getHeading(): ?string
    public function getHeading(): ?string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    {
        return static::trans('navigation.heading');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
    protected ?string $heading = null;
    protected static ?int $sort = 1;
=======

    protected null|string $heading = null;
    protected static null|int $sort = 1;
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
    protected static bool $isLazy = true;
    protected null|string $pollingInterval = null;
=======
>>>>>>> 551c768c4 (.)

    /**
     * Restituisce il titolo del widget.
     *
     * CRITICO: Deve essere public per rispettare il contratto ChartWidget
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
    public function getHeading(): ?string
    public function getHeading(): ?string
=======
=======
>>>>>>> 53d6a6ba (.)
=======
    public function getHeading(): ?string
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    public function getHeading(): ?string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
    public function getHeading(): null|string
=======
    public function getHeading(): ?string
>>>>>>> 551c768c4 (.)
    {
        return static::trans('navigation.heading');
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> 7468a7d2 (.)
=======
    public function getHeading(): null|string
=======
=======
    public function getHeading(): null|string
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
    {
        return static::trans('navigation.heading');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
    protected static ?string $heading = null;
    protected static ?int $sort = 1;
    protected static bool $isLazy = true;
    protected static ?string $pollingInterval = null;
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
    protected ?string $heading = null;
    protected static ?int $sort = 1;
    protected static bool $isLazy = true;
    protected ?string $pollingInterval = null;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)

    /**
     * Restituisce il titolo del widget.
     * 
     * CRITICO: Deve essere public per rispettare il contratto ChartWidget
     */
    public function getHeading(): ?string
    {
        return static::trans('navigation.heading');
        
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
     * @return array<string, mixed>|RawJs|null
     */
    protected function getOptions(): array|RawJs|null
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                        'label' =>

                                'function(context) {
                            return "' .
                                __('salutemo::widgets.patient_registration_trend.total_registrations') .
                                '".replace(":count", context.parsed.y);
                        }'
                            ,
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
                        'label' => 'function(context) {
                            return "'.
                                __('<nome modulo>::widgets.patient_registration_trend.total_registrations').
                                '".replace(":count", context.parsed.y);
                        }',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
                        'label' =>

                                'function(context) {
                            return "' .
                                __('salutemo::widgets.patient_registration_trend.total_registrations') .
                                '".replace(":count", context.parsed.y);
                        }'
                            ,
<<<<<<< HEAD
                        'label' => 'function(context) {
                            return "'.
                                __('<nome modulo>::widgets.patient_registration_trend.total_registrations').
                                '".replace(":count", context.parsed.y);
                        }',
                        'label' =>

                                'function(context) {
                            return "' .
                                __('salutemo::widgets.patient_registration_trend.total_registrations') .
                                '".replace(":count", context.parsed.y);
                        }'
                            ,
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
                        'label' => 'function(context) {
                            return "'.
                                __('salutemo::widgets.patient_registration_trend.total_registrations').
                                '".replace(":count", context.parsed.y);
                        }',
                        'label' =>

                                'function(context) {
                            return "' .
                                __('salutemo::widgets.patient_registration_trend.total_registrations') .
                                '".replace(":count", context.parsed.y);
                        }'
                            ,
                        'label' => 'function(context) {
                            return "'.
                                __('salutemo::widgets.patient_registration_trend.total_registrations').
                                '".replace(":count", context.parsed.y);
                        }',
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
                        'label' => 'function(context) {
                            return "' . __('salutemo::widgets.patient_registration_trend.total_registrations') . '".replace(":count", context.parsed.y);
                        }',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> d2b0a27 (.)
                        'label' => 'function(context) {
                            return "'.
                                __('salutemo::widgets.patient_registration_trend.total_registrations').
                                '".replace(":count", context.parsed.y);
                        }',
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
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
=======
>>>>>>> 551c768c4 (.)
                    ],
                ],
            ],
            'scales' => [
                'x' => [
                    'display' => true,
                    'title' => [
                        'display' => true,
                        'text' => __('<nome modulo>::widgets.patient_registration_trend.period.label'),
<<<<<<< HEAD
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('<nome modulo>::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
                        'text' => __('salutemo::widgets.patient_registration_trend.period.label'),
=======
>>>>>>> 551c768c4 (.)
                    ],
                    'grid' => [
                        'display' => false,
                    ],
                ],
                'y' => [
                    'display' => true,
                    'title' => [
                        'display' => true,
                        'text' => __('<nome modulo>::widgets.patient_registration_trend.total_registrations'),
<<<<<<< HEAD
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('<nome modulo>::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
                        'text' => __('salutemo::widgets.patient_registration_trend.total_registrations'),
=======
>>>>>>> 551c768c4 (.)
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
    protected function getHeight(): ?string
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
    protected function getHeight(): ?string
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
    protected function getHeight(): null|string
    protected function getHeight(): null|string
    protected function getHeight(): null|string
    protected function getHeight(): null|string
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    protected function getHeight(): null|string
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    protected function getHeight(): null|string
    protected function getHeight(): null|string
    protected function getHeight(): null|string
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    protected function getHeight(): null|string
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    {
        return '300px';
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    protected function getHeight(): ?string
    {
        return '300px';
    }


<<<<<<< HEAD
} 
<<<<<<< HEAD
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
    protected function getHeight(): ?string
    protected function getHeight(): null|string
    {
        return '300px';
    }
}
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    protected function getHeight(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    protected function getHeight(): null|string
>>>>>>> a6ef6dc7 (.)
    {
        return '300px';
    }
}
<<<<<<< HEAD
} 
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
<<<<<<< HEAD
} 
>>>>>>> a12f125f4a (.)
=======
    protected function getHeight(): null|string
=======
    protected function getHeight(): ?string
>>>>>>> 551c768c4 (.)
    {
        return '300px';
    }
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> d2b0a27 (.)
    protected function getHeight(): ?string
    {
        return '300px';
    }
<<<<<<< HEAD
}
=======


} 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
