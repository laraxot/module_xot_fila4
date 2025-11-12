<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Schemas\Components\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Webmozart\Assert\Assert;

/**
 * Widget per la panoramica degli appuntamenti per stato.
 * Mostra statistiche compatte degli appuntamenti raggruppati per stato.
 */
class StateOverviewWidget extends XotBaseWidget
{
    /**
     * Vista del widget.
     */
    protected string $view = 'xot::filament.widgets.state-overview';

    /**
     * Titolo del widget.
     */
    public string $title = '';

    /**
     * Occupa tutta la larghezza disponibile.
     */
    protected int|string|array $columnSpan = 'full';

    /**
     * Intervallo di polling disabilitato per performance.
     */
    protected static ?string $pollingInterval = null;

    /** @var class-string */
    public string $stateClass;

    /** @var class-string<\Illuminate\Database\Eloquent\Model> */
    public string $model;

    public string $cacheKey = '';

    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, Component>
     */
    #[\Override]
    /**
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        return [];
    }

    /**
     * Dati da passare alla vista.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'states' => $this->getStates(),
            // 'title' => $this->getWidgetTitle(),
        ];
    }

    protected function getCacheKey(): string
    {
        try {
            $cacheKey = 'states-'.class_basename($this->model).'-'.class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;

            return $cacheKey;
        } catch (\Error $e) {
            if ($this->cacheKey === '') {
                $this->cacheKey = Str::uuid()->toString();
            }

            return $this->cacheKey;
        }
    }

    /**
     * Ottiene gli stati degli appuntamenti con statistiche.
     *
     * @return array<int, array<string, mixed>>
     */
    protected function getStates(): array
    {
        /** @var array<int, array<string, mixed>> $res */
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);

        /** @var array<int, array<string, mixed>> $res */
        return $res;
    }

    /**
     * Calcola le statistiche degli stati degli appuntamenti.
     *
     * @return array<int, array<string, mixed>>
     */
    protected function calculateStates(): array
    {
        $states = [];
        Assert::isArray($states);

        if (! class_exists($this->model) || ! class_exists($this->stateClass)) {
            return $states;
        }

        $modelInstance = app($this->model);

<<<<<<< HEAD
        $stateMappingCollection = $this->stateClass::getStateMapping();
        if (! is_object($stateMappingCollection) || ! method_exists($stateMappingCollection, 'toArray')) {
            return [];
        }

        /** @var array<string, class-string> $stateMapping */
        $stateMapping = $stateMappingCollection->toArray();

        foreach ($stateMapping as $name => $stateClass) {
            $stateName = is_string($name) ? $name : (string) $name;
=======
        $stateMappingResult = $this->stateClass::getStateMapping();
        if (! is_object($stateMappingResult) || ! method_exists($stateMappingResult, 'toArray')) {
            return $states;
        }

        $stateMapping = $stateMappingResult->toArray();
        Assert::isArray($stateMapping);

        foreach ($stateMapping as $name => $stateClass) {
            Assert::string($name);
>>>>>>> eeaa032 (.)
            $state = new $stateClass($modelInstance);
            Assert::isInstanceOf($state, StateContract::class);
            $states[] = [
                'name' => $stateName,
                'label' => $state->label(),
                'icon' => $this->cleanIconName($state->icon()),
                'color' => $state->bgColor(),
                'count' => $this->getCountForState($stateName),
            ];
        }

        return $states;
    }

    /**
     * Ottiene il conteggio degli appuntamenti per uno stato specifico.
     * IMPORTANTE: Mostra TUTTI gli appuntamenti, non filtrati per utente.
     * Questo è un widget di panoramica generale per dashboard amministrativa.
     */
    protected function getCountForState(string $stateName): int
    {
<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Builder<\Illuminate\Database\Eloquent\Model> $query */
        $query = $this->model::where('state', $stateName);
        $count = $query->count();

        return is_int($count) ? $count : (int) $count;
=======
        $query = $this->model::where('state', $stateName);
        if (! is_object($query) || ! method_exists($query, 'count')) {
            return 0;
        }

        $count = $query->count();
        Assert::integer($count);

        return $count;
>>>>>>> eeaa032 (.)
    }

    /**
     * Pulisce il nome dell'icona rimuovendo prefissi non necessari.
     */
    protected function cleanIconName(string $iconName): string
    {
        // Rimuove prefissi comuni come 'heroicon-o-' se presenti
        return str_replace(['heroicon-o-', 'heroicon-s-'], '', $iconName);
    }
}
