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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use RuntimeException;
use Illuminate\Database\Eloquent\Model;
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
=======
>>>>>>> 71586de2 (.)
use Exception;
use Override;
=======
=======
>>>>>>> 6dcebf8a (.)
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Override;
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;
=======
use Exception;
use Override;
>>>>>>> 249a0067 (.)

class StatesChartWidget extends XotBaseChartWidget
{
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
use Exception;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
use Exception;
use Override;
>>>>>>> 53d6a6ba (.)

class StatesChartWidget extends XotBaseChartWidget
{
    public string $stateClass;

    public string $model;

=======

class StatesChartWidget extends XotBaseChartWidget
{
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
    protected ?string $heading = null;

    protected static ?int $sort = 4;

    protected static bool $isLazy = true;

<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> 399f46d3 (.)
=======
    #[Override]
    public function getHeading(): null|string
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
<<<<<<< HEAD
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
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
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

    #[Override]
    public function getHeading(): ?string
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
=======
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
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
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    #[Override]
    public function getHeading(): null|string
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
    #[Override]
    public function getHeading(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> ca9324a4 (.)
=======
    #[Override]
    public function getHeading(): null|string
=======
    public function getHeading(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    #[Override]
    public function getHeading(): null|string
>>>>>>> 9db27d12 (.)
    {
        return static::transClass($this->model, 'widgets.states_chart.heading');
    }

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
    #[Override]
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
    #[\Override]
=======
=======
    #[Override]
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
    #[Override]
>>>>>>> 71586de2 (.)
=======
    #[Override]
>>>>>>> 249a0067 (.)
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
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
    protected function getData(): array
    {
        $label = static::transClass($this->model, 'widgets.states_chart.label');
        try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
            $states = $this->model::selectRaw('state, COUNT(*) as count')
                ->groupBy('state')
                ->get()
                ->keyBy('state');
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
=======
            /** @var class-string<\Illuminate\Database\Eloquent\Model> $modelClass */
            $modelClass = $this->model;
>>>>>>> 249a0067 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
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
                        'backgroundColor' => $states
                            ->keys()
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
>>>>>>> 249a0067 (.)
                            ->map(fn ($state) => $colors[(string) $state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn ($state) => $colors[(string) $state] ?? 'rgb(156, 163, 175)')
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                            ->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
                            ->map(fn ($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
                            ->toArray(),
                        'borderColor' => $states
                            ->keys()
                            ->map(fn ($state) => $colors[$state] ?? 'rgb(156, 163, 175)')
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
                    ->map(fn($state) => static::transClass($this->model, 'states.' . $state . '.label'))
>>>>>>> 5a14301c (.)
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
=======
                    ->map(fn ($state) => static::transClass($this->model, 'states.'.$state.'.label'))
>>>>>>> 71586de2 (.)
=======
                    ->map(fn ($state) => static::transClass($this->model, 'states.'.((string) $state).'.label'))
>>>>>>> 249a0067 (.)
=======
                    ->map(fn($state) => static::transClass($this->model, 'states.' . $state . '.label'))
>>>>>>> 5a14301c (.)
                    ->toArray(),
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
    #[Override]
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
    #[\Override]
=======
=======
    #[Override]
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
    #[Override]
>>>>>>> 71586de2 (.)
=======
    #[Override]
>>>>>>> 249a0067 (.)
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
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
    protected function getType(): string
    {
        return 'bar';
    }
}
