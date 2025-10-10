<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Webmozart\Assert\Assert;

class StatesChartWidget extends XotBaseChartWidget
{
    protected ?string $heading = null;

    protected static ?int $sort = 4;

    protected static bool $isLazy = true;

    public string $stateClass;

    public string $model;

    #[\Override]
    public function getHeading(): ?string
    {
        return static::transClass($this->model, 'widgets.states_chart.heading');
    }

    #[\Override]
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

    #[\Override]
    protected function getType(): string
    {
        return 'bar';
    }
}
