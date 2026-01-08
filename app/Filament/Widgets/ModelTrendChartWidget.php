<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
use Override;
use Exception;
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Carbon\Carbon;
use Exception;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
=======
use Override;
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Carbon\Carbon;
use Exception;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Override;
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Override;
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
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
=======
use Carbon\Carbon;
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Modules\SaluteOra\Models\Appointment;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

class ModelTrendChartWidget extends XotBaseChartWidget
{
    public string $model;

    protected ?string $heading = null;

    protected static ?int $sort = 5;

    protected static bool $isLazy = true;

    protected ?string $pollingInterval = '300s'; // 5 minuti

    #[Override]
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function getHeading(): null|string
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
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

<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
    public function getHeading(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 285375c74 (.)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
use Carbon\Carbon;
use Exception;
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
use Carbon\Carbon;
use Exception;
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
    public function getHeading(): ?string
=======
    public function getHeading(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Carbon\Carbon;
use Exception;
>>>>>>> b7afadf9 (.)
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Modules\SaluteOra\Models\Appointment;
<<<<<<< HEAD

class ModelTrendChartWidget extends XotBaseChartWidget
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
    protected static ?string $heading = null;
    protected static ?int $sort = 5;
    protected static bool $isLazy = true;
    protected static ?string $pollingInterval = '300s'; // 5 minuti
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7131bd09 (.)
    protected ?string $heading = null;
    protected static ?int $sort = 5;
    protected static bool $isLazy = true;
    protected ?string $pollingInterval = '300s'; // 5 minuti
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)

    public string $model;

    public function getHeading(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
<<<<<<< HEAD
=======
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    {
        return static::transClass($this->model, 'widgets.model_trend_chart.heading');
    }

<<<<<<< HEAD
    #[Override]
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
    #[\Override]
=======
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
    #[Override]
=======
    #[Override]
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> ca9324a4 (.)
=======
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> ca9324a4 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    #[Override]
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    #[Override]
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
                        'label' => __('<nome modulo>::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue
<<<<<<< HEAD
=======
=======
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
>>>>>>> 5a14301c (.)
=======
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
                            ? $value->aggregate
                            : 0),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
                        'backgroundColor' => 'rgba(139, 92, 246, 0.5)',
                        'borderColor' => 'rgb(139, 92, 246)',
                        'borderWidth' => 2,
                        'tension' => 0.4,
                    ],
                ],
<<<<<<< HEAD
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue
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
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue
=======
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 9db27d12 (.)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
>>>>>>> 399f46d3 (.)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
            ];
        } catch (\Exception $e) {
=======
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
=======
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
>>>>>>> 3fbbf1f5 (.)
            ];
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
=======
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? Carbon::parse($value->date)->format('d/m') : ''),
>>>>>>> a12f125f4a (.)
=======
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
>>>>>>> b93ef594b4 (.)
            ];
        } catch (Exception $e) {
=======
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? \Carbon\Carbon::parse($value->date)->format('d/m') : ''),
            ];
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
>>>>>>> a6ef6dc7 (.)
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
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
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
>>>>>>> 285375c74 (.)
            ];
        } catch (Exception $e) {
            // Fallback appropriato senza logging inutile
            return [
                'datasets' => [
                    [
                        'label' => __('<nome modulo>::widgets.appointment_creation_chart.label'),
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
    #[Override]
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
    #[\Override]
=======
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
    #[Override]
=======
    #[Override]
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> ca9324a4 (.)
=======
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> ca9324a4 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    #[Override]
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    #[Override]
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
