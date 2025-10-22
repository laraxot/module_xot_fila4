<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
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
    protected null|string $heading = null;
    protected static null|int $sort = 4;
<<<<<<< HEAD
=======
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

>>>>>>> d2b0a27 (.)

class StatesChartWidget extends XotBaseChartWidget
{
    protected ?string $heading = null;

    protected static ?int $sort = 4;
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    protected static bool $isLazy = true;

    public string $stateClass;

    public string $model;

<<<<<<< HEAD
    #[\Override]
    public function getHeading(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    public function getHeading(): null|string
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        return static::transClass($this->model, 'widgets.states_chart.heading');
    }

<<<<<<< HEAD
    #[\Override]
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
    protected function getData(): array
    {
        $label = static::transClass($this->model, 'widgets.states_chart.label');
        try {
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
                        'backgroundColor' => $states
                            ->keys()
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
                            ->toArray(),
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states
                    ->keys()
                    ->map(function ($state) {
                        Assert::string($state);

                        return static::transClass($this->model, 'states.'.$state.'.label');
                    })
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
    #[\Override]
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
    protected function getType(): string
    {
        return 'bar';
    }
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
