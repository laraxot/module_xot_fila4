<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

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
    #[Override]
    public function getHeading(): null|string
>>>>>>> 73eab74 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
