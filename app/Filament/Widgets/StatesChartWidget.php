<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Override;
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

class StatesChartWidget extends XotBaseChartWidget
{
    protected null|string $heading = null;
    protected static null|int $sort = 4;
<<<<<<< HEAD
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

class StatesChartWidget extends XotBaseChartWidget
{
<<<<<<< HEAD
    protected ?string $heading = null;
    protected static ?int $sort = 4;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $heading = null;
    protected static null|int $sort = 4;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;


class StatesChartWidget extends XotBaseChartWidget
{
    protected static ?string $heading = null;
    protected static ?int $sort = 4;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    protected static bool $isLazy = true;

    public string $stateClass;
    public string $model;

<<<<<<< HEAD
    #[Override]
    public function getHeading(): null|string
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
    {
        return static::transClass($this->model, 'widgets.states_chart.heading');
    }

<<<<<<< HEAD
    #[Override]
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
    protected function getData(): array
    {
        $label = static::transClass($this->model, 'widgets.states_chart.label');
        try {
            $states = $this->model::selectRaw('state, COUNT(*) as count')
                ->groupBy('state')
                ->get()
                ->keyBy('state');

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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                        'backgroundColor' => $states
                            ->keys()
                            ->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states
                    ->keys()
                    ->map(fn($state) => static::transClass($this->model, 'states.' . $state . '.label'))
                    ->toArray(),
<<<<<<< HEAD
            ];
        } catch (Exception $e) {
=======
=======
=======
>>>>>>> origin/develop
                        'backgroundColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states->keys()->map(fn($state) => static::transClass($this->model, 'states.'.$state.'.label'))->toArray(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states
                    ->keys()
                    ->map(fn($state) => static::transClass($this->model, 'states.' . $state . '.label'))
                    ->toArray(),
>>>>>>> b93ef594b4 (.)
            ];
        } catch (Exception $e) {
=======
            ];
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
    #[Override]
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
    protected function getType(): string
    {
        return 'bar';
    }
<<<<<<< HEAD
}
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
