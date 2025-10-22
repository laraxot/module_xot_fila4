<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
use Filament\Schemas\Components\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Error;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use Illuminate\Support\Facades\Cache;
use Modules\Xot\Contracts\StateContract;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
    /**
     * Titolo del widget.
     */
    public string $title = '';
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
    /**
     * Occupa tutta la larghezza disponibile.
     */
    protected int|string|array $columnSpan = 'full';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

    /**
     * Intervallo di polling disabilitato per performance.
     */
<<<<<<< HEAD
    protected static ?string $pollingInterval = null;

    /** @var class-string */
=======
    protected static null|string $pollingInterval = null;

>>>>>>> d2b0a27 (.)
    public string $stateClass;

    /** @var class-string<\Illuminate\Database\Eloquent\Model> */
    public string $model;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    public string $cacheKey = '';

    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, Component>
     */
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
=======
>>>>>>> 300ef70 (.)
    public function getFormSchema(): array
    {
        return [];
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
    /**
     * Dati da passare alla vista.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return [
            'states' => $this->getStates(),
            // 'title' => $this->getWidgetTitle(),
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

    protected function getCacheKey(): string
    {
        try {
            $cacheKey = 'states-'.class_basename($this->model).'-'.class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;

            return $cacheKey;
        } catch (\Error $e) {
            if ($this->cacheKey === '') {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
    


    protected function getCacheKey(): string
    {
        try{
            $cacheKey = 'states-' . class_basename($this->model).'-'.class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            return $cacheKey;
        }catch(Error $e){
            if($this->cacheKey==''){
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                $this->cacheKey = Str::uuid()->toString();
            }

            return $this->cacheKey;
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
    /**
     * Ottiene gli stati degli appuntamenti con statistiche.
     *
     * @return array<int, array<string, mixed>>
     */
    protected function getStates(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<int, array<string, mixed>> $res */
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);

        return $res;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
       
        
        $res= Cache::remember(
            $this->getCacheKey(),
            now()->addMinutes(5),
            fn () => $this->calculateStates()
        );

        Assert::isArray($res);
        return $res;
        
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
=======
>>>>>>> 300ef70 (.)

        $modelInstance = app($this->model);

        $stateMappingResult = $this->stateClass::getStateMapping();
        if (! is_object($stateMappingResult) || ! method_exists($stateMappingResult, 'toArray')) {
            return $states;
        }

        $stateMapping = $stateMappingResult->toArray();
        Assert::isArray($stateMapping);

        foreach ($stateMapping as $name => $stateClass) {
            Assert::string($name);
            $state = new $stateClass($modelInstance);
            Assert::isInstanceOf($state, StateContract::class);
            $states[] = [
                'name' => $name,
                'label' => $state->label(),
                'icon' => $this->cleanIconName($state->icon()),
                'color' => $state->bgColor(),
                'count' => $this->getCountForState($name),
            ];
        }

        return $states;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        
        $modelInstance = app($this->model);
        
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
                ];
           
        }
        
        return $states;
    }
    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
     * Ottiene il conteggio degli appuntamenti per uno stato specifico.
     * IMPORTANTE: Mostra TUTTI gli appuntamenti, non filtrati per utente.
     * Questo è un widget di panoramica generale per dashboard amministrativa.
     */
    protected function getCountForState(string $stateName): int
    {
<<<<<<< HEAD
        $query = $this->model::where('state', $stateName);
        if (! is_object($query) || ! method_exists($query, 'count')) {
            return 0;
        }

        $count = $query->count();
        Assert::integer($count);

        return $count;
    }

=======
        return $this->model::where('state', $stateName)->count();
    }

<<<<<<< HEAD
=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
     * Pulisce il nome dell'icona rimuovendo prefissi non necessari.
     */
    protected function cleanIconName(string $iconName): string
    {
        // Rimuove prefissi comuni come 'heroicon-o-' se presenti
        return str_replace(['heroicon-o-', 'heroicon-s-'], '', $iconName);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
