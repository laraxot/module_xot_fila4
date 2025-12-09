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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Error;
use Filament\Schemas\Components\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Override;
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
use Webmozart\Assert\Assert;

<<<<<<< HEAD
=======
=======
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
use Error;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Webmozart\Assert\Assert;

>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use Illuminate\Support\Facades\Cache;
use Modules\Xot\Contracts\StateContract;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Widget per la panoramica degli appuntamenti per stato.
 * Mostra statistiche compatte degli appuntamenti raggruppati per stato.
 */
class StateOverviewWidget extends XotBaseWidget
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * Vista del widget.
     */
<<<<<<< HEAD
    protected string $view = 'xot::filament.widgets.state-overview';

=======
<<<<<<< HEAD
    protected string $view = 'xot::filament.widgets.state-overview';
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    protected static string $view = 'xot::filament.widgets.state-overview';
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
     * Titolo del widget.
     */
    public string $title = '';

<<<<<<< HEAD
    public string $stateClass;

    public string $model;

    public string $cacheKey = '';

=======
>>>>>>> 3fbbf1f5 (.)
    /**
=======
>>>>>>> 5a14301c (.)
     * Vista del widget.
     */
    protected string $view = 'xot::filament.widgets.state-overview';

    /**
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * Titolo del widget.
     */
    public string $title = '';
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Occupa tutta la larghezza disponibile.
     */
    protected int|string|array $columnSpan = 'full';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    /**
     * Intervallo di polling disabilitato per performance.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $pollingInterval = null;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
    protected static null|string $pollingInterval = null;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    /**
     * Intervallo di polling disabilitato per performance.
     */
    protected static ?string $pollingInterval = null;


<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /**
     * Intervallo di polling disabilitato per performance.
     */
    protected static null|string $pollingInterval = null;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    public string $stateClass;
    public string $model;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public string $cacheKey = '';
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, Component>
     */
    #[Override]
<<<<<<< HEAD
=======
=======
    public string $cacheKey='';
=======
    public string $cacheKey = '';

>>>>>>> b93ef594b4 (.)
    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, Component>
     */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
    public string $cacheKey='';
    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function getFormSchema(): array
    {
        return [];
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Dati da passare alla vista.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return [
            'states' => $this->getStates(),
<<<<<<< HEAD
<<<<<<< HEAD
            // 'title' => $this->getWidgetTitle(),
=======
            //'title' => $this->getWidgetTitle(),
>>>>>>> 5a14301c (.)
=======
            //'title' => $this->getWidgetTitle(),
>>>>>>> 5a14301c (.)
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    protected function getCacheKey(): string
    {
        try {
<<<<<<< HEAD
<<<<<<< HEAD
            $cacheKey = 'states-'.class_basename($this->model).'-'.class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;

=======
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
>>>>>>> 5a14301c (.)
=======
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
>>>>>>> 5a14301c (.)
            return $cacheKey;
        } catch (Error $e) {
            if ($this->cacheKey === '') {
<<<<<<< HEAD
=======
=======
    
    

=======
>>>>>>> b93ef594b4 (.)

    protected function getCacheKey(): string
    {
        try {
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            return $cacheKey;
<<<<<<< HEAD
        }catch(Error $e){
            if($this->cacheKey==''){
>>>>>>> a12f125f4a (.)
=======
        } catch (Error $e) {
            if ($this->cacheKey === '') {
>>>>>>> b93ef594b4 (.)
=======
    
    


    protected function getCacheKey(): string
    {
        try{
            $cacheKey = 'states-' . class_basename($this->model).'-'.class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            return $cacheKey;
        }catch(\Error $e){
            if($this->cacheKey==''){
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $this->cacheKey = Str::uuid()->toString();
            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $this->cacheKey;
        }
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Ottiene gli stati degli appuntamenti con statistiche.
     *
     * @return array<int, array<string, mixed>>
     */
    protected function getStates(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        /** @var array<int, array<string, mixed>> $res */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
        return $res;
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
       
        
        $res= Cache::remember(
            $this->getCacheKey(),
            now()->addMinutes(5),
            fn () => $this->calculateStates()
        );
<<<<<<< HEAD
=======
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));
>>>>>>> b93ef594b4 (.)

        Assert::isArray($res);
        return $res;
    }
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======

        Assert::isArray($res);
        return $res;
        
    }
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Calcola le statistiche degli stati degli appuntamenti.
     *
     * @return array<int, array<string, mixed>>
     */
    protected function calculateStates(): array
    {
        $states = [];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $modelInstance = app($this->model);

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
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
            ];
        }

        return $states;
    }

<<<<<<< HEAD
=======
=======
        
        
=======

>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
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
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Ottiene il conteggio degli appuntamenti per uno stato specifico.
     * IMPORTANTE: Mostra TUTTI gli appuntamenti, non filtrati per utente.
     * Questo è un widget di panoramica generale per dashboard amministrativa.
     */
    protected function getCountForState(string $stateName): int
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Builder<Model> $query */
        $query = $this->model::where('state', $stateName);
        $count = $query->count();

        return is_int($count) ? $count : (int) $count;
=======
        return $this->model::where('state', $stateName)->count();
>>>>>>> 5a14301c (.)
=======
        return $this->model::where('state', $stateName)->count();
>>>>>>> 5a14301c (.)
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Pulisce il nome dell'icona rimuovendo prefissi non necessari.
     */
    protected function cleanIconName(string $iconName): string
    {
        // Rimuove prefissi comuni come 'heroicon-o-' se presenti
        return str_replace(['heroicon-o-', 'heroicon-s-'], '', $iconName);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
