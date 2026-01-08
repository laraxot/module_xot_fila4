<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

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
use RuntimeException;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Override;
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
use Override;
<<<<<<< HEAD
use RuntimeException;
=======
=======
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Override;
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

class StatesChartWidget extends XotBaseChartWidget
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    protected ?string $heading = null;

    protected static ?int $sort = 4;

=======
>>>>>>> b7afadf9 (.)
    protected null|string $heading = null;
    protected static null|int $sort = 4;
<<<<<<< HEAD
=======
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
use Exception;
use Override;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

class StatesChartWidget extends XotBaseChartWidget
{
    public string $stateClass;

    public string $model;

=======

class StatesChartWidget extends XotBaseChartWidget
{
>>>>>>> b7afadf9 (.)
    protected ?string $heading = null;

    protected static ?int $sort = 4;
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
    protected static bool $isLazy = true;

<<<<<<< HEAD
    #[Override]
    public function getHeading(): ?string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
use Override;
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

class StatesChartWidget extends XotBaseChartWidget
{
    protected null|string $heading = null;
    protected static null|int $sort = 4;
    protected static bool $isLazy = true;

    public string $stateClass;
    public string $model;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
    #[Override]
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    public function getHeading(): null|string
=======
    public function getHeading(): ?string
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getHeading(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
    #[\Override]
    public function getHeading(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
    public string $stateClass;

    public string $model;

<<<<<<< HEAD
<<<<<<< HEAD
    #[\Override]
    public function getHeading(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
<<<<<<< HEAD
    public function getHeading(): ?string
=======
>>>>>>> b7afadf9 (.)
    public function getHeading(): null|string
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
    public function getHeading(): ?string
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    {
        return static::transClass($this->model, 'widgets.states_chart.heading');
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
    #[Override]
=======
<<<<<<< HEAD
    #[\Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
=======
    #[\Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
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
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    protected function getData(): array
    {
        $label = static::transClass($this->model, 'widgets.states_chart.label');
        try {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
            /** @var class-string<Model> $modelClass */
            $modelClass = $this->model;

            $queryResult = $modelClass::selectRaw('state, COUNT(*) as count')
                ->groupBy('state')
                ->get();

            if (! is_object($queryResult) || ! method_exists($queryResult, 'keyBy')) {
                throw new RuntimeException('Invalid query result');
            }

            $states = $queryResult->keyBy('state');

            /** @var array<string, string> $colors */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
            $states = $this->model::selectRaw('state, COUNT(*) as count')
                ->groupBy('state')
                ->get()
                ->keyBy('state');
=======
            $selectQuery = $this->model::selectRaw('state, COUNT(*) as count');
            if (! is_object($selectQuery) || ! method_exists($selectQuery, 'groupBy')) {
                return [
                    'datasets' => [],
                    'labels' => [],
                ];
            }

            $query = $selectQuery->groupBy('state');
            if (! is_object($query) || ! method_exists($query, 'get')) {
                return [
                    'datasets' => [],
                    'labels' => [],
                ];
            }

            $result = $query->get();
            if (! $result instanceof \Illuminate\Database\Eloquent\Collection) {
                return [
                    'datasets' => [],
                    'labels' => [],
                ];
            }

            /** @var \Illuminate\Support\Collection<int|string, mixed> $states */
            $states = $result->keyBy('state');
>>>>>>> b7afadf9 (.)

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 285375c74 (.)
            $colors = [
                'active' => 'rgb(34, 197, 94)',
                'pending' => 'rgb(234, 179, 8)',
                'integration_requested' => 'rgb(107, 114, 128)',
            ];

            return [
                'datasets' => [
                    [
                        'label' => $label,
                        'data' => $states->pluck('count')->toArray(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
                        'backgroundColor' => $states
                            ->keys()
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
                        'backgroundColor' => $states
                            ->keys()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
                            ->map(fn ($state) => $colors[(string) $state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn ($state) => $colors[(string) $state] ?? 'rgb(156, 163, 175)')
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
                            ->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> b7afadf9 (.)
                            ->map(fn ($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn ($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
                            ->map(function ($state) use ($colors) {
                                Assert::string($state);
                                if (isset($colors[$state])) {
                                    return $colors[$state];
                                }

                                return 'rgb(156, 163, 175)';
                            })
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(function ($state) use ($colors) {
                                Assert::string($state);
                                if (isset($colors[$state])) {
                                    return $colors[$state];
                                }

                                return 'rgb(156, 163, 175)';
                            })
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                            ->toArray(),
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states
                    ->keys()
<<<<<<< HEAD
                    ->map(fn ($state) => static::transClass($this->model, 'states.'.((string) $state).'.label'))
                    ->toArray(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                        'backgroundColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states->keys()->map(fn($state) => static::transClass($this->model, 'states.'.$state.'.label'))->toArray(),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    ->map(fn ($state) => static::transClass($this->model, 'states.'.((string) $state).'.label'))
=======
                    ->map(fn($state) => static::transClass($this->model, 'states.' . $state . '.label'))
>>>>>>> 5a14301c (.)
=======
                    ->map(fn($state) => static::transClass($this->model, 'states.' . $state . '.label'))
>>>>>>> 3fbbf1f5 (.)
=======
                    ->map(fn($state) => static::transClass($this->model, 'states.' . $state . '.label'))
>>>>>>> 5a14301c (.)
=======
                    ->map(fn ($state) => static::transClass($this->model, 'states.'.$state.'.label'))
>>>>>>> 53d6a6ba (.)
=======
                    ->map(fn ($state) => static::transClass($this->model, 'states.'.$state.'.label'))
=======
                    ->map(function ($state) {
                        Assert::string($state);

                        return static::transClass($this->model, 'states.'.$state.'.label');
                    })
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
                    ->toArray(),
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                        'backgroundColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states->keys()->map(fn($state) => static::transClass($this->model, 'states.'.$state.'.label'))->toArray(),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            ];
        } catch (\Exception $e) {
            // Fallback appropriato senza logging inutile
            return [
                'datasets' => [
                    [
                        'label' => $label,
                        'data' => [],
                        'backgroundColor' => [],
                        'borderColor' => [],
                        'borderWidth' => 1,
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
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
    #[Override]
=======
<<<<<<< HEAD
    #[\Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
=======
    #[\Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
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
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    protected function getType(): string
    {
        return 'bar';
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
