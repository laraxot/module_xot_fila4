<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
use Carbon\Carbon;
use Exception;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Override;
use Carbon\Carbon;
use Exception;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

class ModelTrendChartWidget extends XotBaseChartWidget
{
    protected null|string $heading = null;
    protected static null|int $sort = 5;
    protected static bool $isLazy = true;
    protected null|string $pollingInterval = '300s'; // 5 minuti

    public string $model;

    #[Override]
    public function getHeading(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Carbon\Carbon;
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Modules\SaluteOra\Models\Appointment;
>>>>>>> d2b0a27 (.)

class ModelTrendChartWidget extends XotBaseChartWidget
{
    protected ?string $heading = null;

    protected static ?int $sort = 5;

    protected static bool $isLazy = true;

    protected ?string $pollingInterval = '300s'; // 5 minuti

    public string $model;

    #[Override]
    public function getHeading(): ?string
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    {
        return static::transClass($this->model, 'widgets.model_trend_chart.heading');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
    protected function getData(): array
    {
        try {
            $data = Trend::model($this->model)
                ->between(
                    start: now()->subDays(30),
                    end: now(),
                )
                ->perDay()
                ->count();

            return [
                'datasets' => [
                    [
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
<<<<<<< HEAD
<<<<<<< HEAD
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
=======
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? $value->aggregate : 0),
>>>>>>> f1d4085 (.)
=======
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
>>>>>>> 300ef70 (.)
                        'backgroundColor' => 'rgba(139, 92, 246, 0.5)',
                        'borderColor' => 'rgb(139, 92, 246)',
                        'borderWidth' => 2,
                        'tension' => 0.4,
                    ],
                ],
<<<<<<< HEAD
<<<<<<< HEAD
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
=======
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? Carbon::parse($value->date)->format('d/m') : ''),
>>>>>>> f1d4085 (.)
=======
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
>>>>>>> 300ef70 (.)
            ];
        } catch (Exception $e) {
            // Fallback appropriato senza logging inutile
            return [
                'datasets' => [
                    [
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => [],
                        'backgroundColor' => 'rgba(139, 92, 246, 0.5)',
                        'borderColor' => 'rgb(139, 92, 246)',
                        'borderWidth' => 2,
                        'tension' => 0.4,
                    ],
                ],
                'labels' => [],
            ];
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
    protected function getType(): string
    {
        return 'line';
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> f1d4085 (.)
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
}
>>>>>>> 300ef70 (.)
