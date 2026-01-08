<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
use Error;
use Filament\Schemas\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Error;
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
use Error;
>>>>>>> 53d6a6ba (.)
use Filament\Schemas\Components\Component;
>>>>>>> 48515e368 (.)
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Override;
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
use Filament\Schemas\Components\Component;
use Override;
use Error;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Webmozart\Assert\Assert;

/**
 * Widget per la panoramica degli appuntamenti per stato.
 * Mostra statistiche compatte degli appuntamenti raggruppati per stato.
 */
class StateOverviewWidget extends XotBaseWidget
{
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * Vista del widget.
     */
    protected string $view = 'xot::filament.widgets.state-overview';

    /**
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
>>>>>>> 48515e368 (.)
     * Titolo del widget.
     */
    public string $title = '';

    public string $stateClass;

    public string $model;

    public string $cacheKey = '';

    /**
     * Vista del widget.
     */
    protected string $view = 'xot::filament.widgets.state-overview';

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * Titolo del widget.
     */
    public string $title = '';

    /**
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
     * Occupa tutta la larghezza disponibile.
     */
    protected int|string|array $columnSpan = 'full';

    /**
     * Intervallo di polling disabilitato per performance.
     */
<<<<<<< HEAD
    protected static ?string $pollingInterval = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected static ?string $pollingInterval = null;

    /** @var class-string */
=======
    protected static null|string $pollingInterval = null;
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
    /**
     * Intervallo di polling disabilitato per performance.
     */
>>>>>>> ab8cc3f3 (.)
    protected static ?string $pollingInterval = null;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
    protected static null|string $pollingInterval = null;

<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 6dcebf8a (.)

>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
    public string $stateClass;
=======
    protected static ?string $pollingInterval = null;

    public string $stateClass;

>>>>>>> 53d6a6ba (.)
    public string $model;

    public string $cacheKey = '';
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)

    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, Component>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $cacheKey='';
>>>>>>> d2b0a27 (.)
    /**
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    #[Override]
>>>>>>> 53d6a6ba (.)
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
        } catch (Error $e) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
        /** @var array<int, array<string, mixed>> $res */
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
        Assert::isArray($states);

        if (! class_exists($this->model) || ! class_exists($this->stateClass)) {
            return $states;
        }
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)

        $modelInstance = app($this->model);

        $stateMappingCollection = $this->stateClass::getStateMapping();
        if (! is_object($stateMappingCollection) || ! method_exists($stateMappingCollection, 'toArray')) {
            return [];
        }

        /** @var array<string, class-string> $stateMapping */
        $stateMapping = $stateMappingCollection->toArray();

        foreach ($stateMapping as $name => $stateClass) {
            $stateName = is_string($name) ? $name : (string) $name;
            $state = new $stateClass($modelInstance);
            Assert::isInstanceOf($state, StateContract::class);
            $states[] = [
                'name' => $stateName,
                'label' => $state->label(),
                'icon' => $this->cleanIconName($state->icon()),
                'color' => $state->bgColor(),
                'count' => $this->getCountForState($stateName),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======

        $modelInstance = app($this->model);

>>>>>>> 53d6a6ba (.)
        $stateMapping = $this->stateClass::getStateMapping()->toArray();

        foreach ($stateMapping as $name => $stateClass) {
            $state = new $stateClass($modelInstance);
            Assert::isInstanceOf($state, StateContract::class);
            $states[] = [
                'name' => $name,
                'label' => $state->label(),
                'icon' => $this->cleanIconName($state->icon()),
                'color' => $state->bgColor(),
                'count' => $this->getCountForState($name),
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 285375c74 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 285375c74 (.)
        /** @var Builder<Model> $query */
=======
>>>>>>> ab8cc3f3 (.)
        $query = $this->model::where('state', $stateName);
        $count = $query->count();

        return is_int($count) ? $count : (int) $count;
    }

=======
=======
>>>>>>> 53d6a6ba (.)
        return $this->model::where('state', $stateName)->count();
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
