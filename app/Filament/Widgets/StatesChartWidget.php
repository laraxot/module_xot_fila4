<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use RuntimeException;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Override;

class StatesChartWidget extends XotBaseChartWidget
{
    public string $stateClass;

    public string $model;

    protected ?string $heading = null;

    protected static ?int $sort = 4;

    protected static bool $isLazy = true;

    #[Override]
    public function getHeading(): ?string
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
use Override;
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

class StatesChartWidget extends XotBaseChartWidget
{
    protected null|string $heading = null;
    protected static null|int $sort = 4;
=======
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;


class StatesChartWidget extends XotBaseChartWidget
{
    protected ?string $heading = null;
    protected static ?int $sort = 4;
>>>>>>> f1d4085 (.)
    protected static bool $isLazy = true;

    public string $stateClass;
    public string $model;

<<<<<<< HEAD
    #[Override]
    public function getHeading(): null|string
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    {
        return static::transClass($this->model, 'widgets.states_chart.heading');
    }

<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
    protected function getData(): array
    {
        $label = static::transClass($this->model, 'widgets.states_chart.label');
        try {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
            $states = $this->model::selectRaw('state, COUNT(*) as count')
                ->groupBy('state')
                ->get()
                ->keyBy('state');

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
                        'backgroundColor' => $states
                            ->keys()
<<<<<<< HEAD
<<<<<<< HEAD
                            ->map(fn ($state) => $colors[(string) $state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn ($state) => $colors[(string) $state] ?? 'rgb(156, 163, 175)')
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
                            ->toArray(),
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states
                    ->keys()
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
                    ->toArray(),
=======
                        'backgroundColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderColor' => $states->keys()->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')->toArray(),
                        'borderWidth' => 1,
                    ],
                ],
                'labels' => $states->keys()->map(fn($state) => static::transClass($this->model, 'states.'.$state.'.label'))->toArray(),
>>>>>>> f1d4085 (.)
            ];
        } catch (Exception $e) {
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
>>>>>>> f1d4085 (.)
    protected function getType(): string
    {
        return 'bar';
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> f1d4085 (.)
