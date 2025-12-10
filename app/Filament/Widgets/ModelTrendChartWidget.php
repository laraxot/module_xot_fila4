<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Carbon\Carbon;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
<<<<<<< HEAD
use Carbon\Carbon;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Carbon\Carbon;
use Exception;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Override;
use Override;
use Override;
use Carbon\Carbon;
use Exception;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Override;
use Override;
use Override;
use Override;
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> ab8cc3f3 (.)
use Carbon\Carbon;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
<<<<<<< HEAD
=======
use Override;
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
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
    public function getHeading(): null|string

class ModelTrendChartWidget extends XotBaseChartWidget
{
    protected null|string $heading = null;
    protected static null|int $sort = 5;
    protected static bool $isLazy = true;
    protected null|string $pollingInterval = '300s'; // 5 minuti

    public string $model;

    #[Override]
    public function getHeading(): null|string
    public function getHeading(): null|string
=======
>>>>>>> 7468a7d2 (.)

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
>>>>>>> 7468a7d2 (.)
=======
use Carbon\Carbon;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

class ModelTrendChartWidget extends XotBaseChartWidget
{
    public string $model;

    protected ?string $heading = null;

    protected static ?int $sort = 5;

    protected static bool $isLazy = true;

    protected ?string $pollingInterval = '300s'; // 5 minuti

    #[\Override]
    public function getHeading(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
    public function getHeading(): null|string
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
>>>>>>> 5a14301c (.)
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
=======
=======
>>>>>>> 2f3197ab (.)
use Override;
    public function getHeading(): null|string
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

    public function getHeading(): ?string
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
    #[Override]
    public function getHeading(): null|string
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 218dfed3 (.)
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
<<<<<<< HEAD
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
    public function getHeading(): ?string
    public function getHeading(): null|string
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
    public function getHeading(): ?string
    #[Override]
    public function getHeading(): null|string
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
    public function getHeading(): ?string
    public function getHeading(): null|string
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
use Carbon\Carbon;
use Exception;
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
use Carbon\Carbon;
use Exception;
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
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
>>>>>>> 5cf46378 (.)
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Modules\SaluteOra\Models\Appointment;
<<<<<<< HEAD

class ModelTrendChartWidget extends XotBaseChartWidget
{
<<<<<<< HEAD

class ModelTrendChartWidget extends XotBaseChartWidget
{

class ModelTrendChartWidget extends XotBaseChartWidget
{

class ModelTrendChartWidget extends XotBaseChartWidget
{

class ModelTrendChartWidget extends XotBaseChartWidget
{

class ModelTrendChartWidget extends XotBaseChartWidget
{

class ModelTrendChartWidget extends XotBaseChartWidget
{
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    protected static ?string $heading = null;
    protected static ?int $sort = 5;
    protected static bool $isLazy = true;
    protected static ?string $pollingInterval = '300s'; // 5 minuti
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    protected ?string $heading = null;
    protected static ?int $sort = 5;
    protected static bool $isLazy = true;
    protected ?string $pollingInterval = '300s'; // 5 minuti
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

    public string $model;

    public function getHeading(): ?string
<<<<<<< HEAD

class ModelTrendChartWidget extends XotBaseChartWidget
{
    protected ?string $heading = null;

    protected static ?int $sort = 5;

    protected static bool $isLazy = true;

    protected static ?int $sort = 5;
    protected static bool $isLazy = true;
    protected static ?int $sort = 5;
    protected static bool $isLazy = true;
    protected static ?int $sort = 5;
    protected static bool $isLazy = true;
    protected ?string $pollingInterval = '300s'; // 5 minuti

    public string $model;

    #[Override]
    public function getHeading(): ?string
    #[Override]
    public function getHeading(): ?string
    public function getHeading(): ?string
    public function getHeading(): null|string
    public function getHeading(): ?string
    public function getHeading(): ?string
    public function getHeading(): ?string
    #[Override]
    public function getHeading(): ?string
    #[Override]
    public function getHeading(): ?string
    public function getHeading(): ?string
    public function getHeading(): null|string
    public function getHeading(): ?string
    public function getHeading(): ?string
    public function getHeading(): ?string
    public function getHeading(): null|string
    public function getHeading(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
>>>>>>> 414a4ffcb (.)
    {
        return static::transClass($this->model, 'widgets.model_trend_chart.heading');
    }

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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    #[\Override]
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
=======
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
    #[Override]
    #[Override]
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[\Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
=======
<<<<<<< HEAD
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
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> 7468a7d2 (.)
>>>>>>> ca9324a4 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    #[Override]
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
    #[Override]
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
    #[\Override]
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
                        'label' => __('<nome modulo>::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
<<<<<<< HEAD
                        'label' => __('<nome modulo>::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue
<<<<<<< HEAD
=======
=======
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> a67e542f (.)
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
<<<<<<< HEAD
                            ? $value->aggregate
                            : 0),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? $value->aggregate : 0),
=======
=======
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? $value->aggregate : 0),
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? $value->aggregate : 0),
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
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
>>>>>>> 5cf46378 (.)
                        'data' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
>>>>>>> ab8cc3f3 (.)
=======
                        'label' => __('<nome modulo>::widgets.appointment_creation_chart.label'),
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue
>>>>>>> 551c768c4 (.)
                            ? $value->aggregate
                            : 0),
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
                            ? $value->aggregate
                            : 0),
=======
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? $value->aggregate : 0),
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? $value->aggregate : 0),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
                            ? $value->aggregate
                            : 0),
>>>>>>> 414a4ffcb (.)
                        'backgroundColor' => 'rgba(139, 92, 246, 0.5)',
                        'borderColor' => 'rgb(139, 92, 246)',
                        'borderWidth' => 2,
                        'tension' => 0.4,
                    ],
                ],
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
>>>>>>> 2f3197ab (.)
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue
=======
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
=======
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
            ];
        } catch (\Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
            ];
        } catch (Exception $e) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 091f883c (.)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
            ];
        } catch (Exception $e) {
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? \Carbon\Carbon::parse($value->date)->format('d/m') : ''),
            ];
        } catch (\Exception $e) {
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
            ];
        } catch (Exception $e) {
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
            ];
        } catch (Exception $e) {
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? \Carbon\Carbon::parse($value->date)->format('d/m') : ''),
            ];
        } catch (\Exception $e) {
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
            ];
        } catch (Exception $e) {
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
            ];
        } catch (Exception $e) {
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? \Carbon\Carbon::parse($value->date)->format('d/m') : ''),
            ];
        } catch (\Exception $e) {
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
=======
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
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
>>>>>>> ce6fc085 (.)
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
                'labels' => $data->map(fn (mixed $value) => ($value instanceof TrendValue)
>>>>>>> ab8cc3f3 (.)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? Carbon::parse($value->date)->format('d/m')
                    : ''),
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
            ];
        } catch (Exception $e) {
<<<<<<< HEAD
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? \Carbon\Carbon::parse($value->date)->format('d/m') : ''),
            ];
        } catch (\Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            // Fallback appropriato senza logging inutile
            return [
                'datasets' => [
                    [
                        'label' => __('<nome modulo>::widgets.appointment_creation_chart.label'),
<<<<<<< HEAD
<<<<<<< HEAD
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('<nome modulo>::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
                        'label' => __('salutemo::widgets.appointment_creation_chart.label'),
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    #[\Override]
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
=======
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
    #[Override]
    #[Override]
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[\Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
=======
<<<<<<< HEAD
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
    #[Override]
>>>>>>> 5a14301c (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    #[Override]
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    #[Override]
>>>>>>> 7468a7d2 (.)
>>>>>>> ca9324a4 (.)
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    #[Override]
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
    #[Override]
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
    #[\Override]
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    protected function getType(): string
    {
        return 'line';
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
}
}
} 
=======
=======
} 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
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
}
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
}
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
