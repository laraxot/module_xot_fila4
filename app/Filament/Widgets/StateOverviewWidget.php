<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Error;
use Filament\Schemas\Components\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract;
use Override;
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
use Filament\Schemas\Components\Component;
use Override;
use Error;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
use Webmozart\Assert\Assert;

use Error;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
use Error;
>>>>>>> 2f3197ab (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use Illuminate\Support\Facades\Cache;
use Modules\Xot\Contracts\StateContract;
use Modules\SaluteOra\Models\Appointment;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
     * Vista del widget.
     */
    protected string $view = 'xot::filament.widgets.state-overview';

    protected string $view = 'xot::filament.widgets.state-overview';


    protected static string $view = 'xot::filament.widgets.state-overview';
    
    /**
     * Titolo del widget.
     */
    public string $title = '';

    public string $stateClass;

    public string $model;

    public string $cacheKey = '';

    /**
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
    /** @var class-string */
    protected static ?string $pollingInterval = null;
    protected static null|string $pollingInterval = null;

    /** @var class-string */


    public string $stateClass;
    protected static ?string $pollingInterval = null;
    protected static ?string $pollingInterval = null;


    public string $stateClass;

    public string $stateClass;

    protected static ?string $pollingInterval = null;
    /** @var class-string */
    protected static ?string $pollingInterval = null;
    protected static null|string $pollingInterval = null;

    /** @var class-string */


    public string $stateClass;
    protected static ?string $pollingInterval = null;
    protected static ?string $pollingInterval = null;


    public string $stateClass;

    public string $stateClass;

    protected static ?string $pollingInterval = null;
    protected static ?string $pollingInterval = null;

    public string $stateClass;

    public string $stateClass;

    public string $model;

    public string $cacheKey = '';
    protected static null|string $pollingInterval = null;
    public string $stateClass;

    public string $model;

    public string $cacheKey = '';
    protected static null|string $pollingInterval = null;
    
    /**
     * Intervallo di polling disabilitato per performance.
     */
    protected static ?string $pollingInterval = null;



    /**
     * Intervallo di polling disabilitato per performance.
     */
    protected static null|string $pollingInterval = null;

    public string $stateClass;
    public string $model;

    public string $cacheKey = '';
    public string $cacheKey = '';

    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, Component>
     */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[\Override]
    public string $cacheKey='';
    /**
     * @return array<string, mixed>
     */
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    public string $cacheKey='';
    public string $cacheKey = '';

    #[Override]
    #[\Override]
    public string $cacheKey='';
    /**
     * @return array<string, mixed>
     */
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    public string $cacheKey='';
    public string $cacheKey = '';

    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, Component>
     */
    #[Override]
    #[Override]
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
    public string $cacheKey='';
    /**
     * Schema del form (vuoto per questo widget).
     *
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
<<<<<<< HEAD
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
    #[Override]
    #[Override]
    #[Override]
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
    #[Override]
    #[Override]
    #[Override]
    #[Override]
     * @return array<int|string, \Filament\Schemas\Components\Component>
     */
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    public function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD



    
=======
=======
    
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
            //'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
        ];
    }
        
        return [
            'states' => $this->getStates(),
            // 'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
            //'title' => $this->getWidgetTitle(),
        ];
    }

    protected function getCacheKey(): string
    {
        try {
            $cacheKey = 'states-'.class_basename($this->model).'-'.class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;

            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            return $cacheKey;
        } catch (Error $e) {
            if ($this->cacheKey === '') {

    protected function getCacheKey(): string
    {
        try {
            $cacheKey = 'states-' . class_basename($this->model) . '-' . class_basename($this->stateClass);
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

<<<<<<< HEAD
<<<<<<< HEAD
        }catch(Error $e){
            if($this->cacheKey==''){
        } catch (Error $e) {
            if ($this->cacheKey === '') {
    
    


    protected function getCacheKey(): string
    {
        try{
            $cacheKey = 'states-' . class_basename($this->model).'-'.class_basename($this->stateClass);
            $cacheKey = Str::slug($cacheKey);
            $this->cacheKey = $cacheKey;
            return $cacheKey;
        }catch(\Error $e){
            if($this->cacheKey==''){
                $this->cacheKey = Str::uuid()->toString();
            }

            return $this->cacheKey;
        }
    }



    
=======
=======
    
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
        /** @var array<int, array<string, mixed>> $res */
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);

        /** @var array<int, array<string, mixed>> $res */
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);
        return $res;
    }

<<<<<<< HEAD
        /** @var array<int, array<string, mixed>> $res */
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);

        /** @var array<int, array<string, mixed>> $res */
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);
        $res = Cache::remember($this->getCacheKey(), now()->addMinutes(5), $this->calculateStates(...));

        Assert::isArray($res);
        return $res;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
       
        
        $res= Cache::remember(
            $this->getCacheKey(),
            now()->addMinutes(5),
            fn () => $this->calculateStates()
        );

        Assert::isArray($res);
        return $res;
<<<<<<< HEAD
    }
    


        Assert::isArray($res);
        return $res;
        
    }
    
=======
        
    }
    
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
        Assert::isArray($states);

        if (! class_exists($this->model) || ! class_exists($this->stateClass)) {
            return $states;
        }
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)

        $modelInstance = app($this->model);


        $modelInstance = app($this->model);


        $modelInstance = app($this->model);

=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

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

        $modelInstance = app($this->model);

        $stateMapping = $this->stateClass::getStateMapping()->toArray();

        $modelInstance = app($this->model);

        $stateMapping = $this->stateClass::getStateMapping()->toArray();

        $modelInstance = app($this->model);

        $stateMappingResult = $this->stateClass::getStateMapping();
        if (! is_object($stateMappingResult) || ! method_exists($stateMappingResult, 'toArray')) {
            return $states;
        }

        $stateMapping = $stateMappingResult->toArray();
        Assert::isArray($stateMapping);

        $modelInstance = app($this->model);

        $stateMapping = $this->stateClass::getStateMapping()->toArray();

        $modelInstance = app($this->model);

        $stateMapping = $this->stateClass::getStateMapping()->toArray();

        $modelInstance = app($this->model);

        $stateMappingResult = $this->stateClass::getStateMapping();
        if (! is_object($stateMappingResult) || ! method_exists($stateMappingResult, 'toArray')) {
            return $states;
        }

        $stateMapping = $stateMappingResult->toArray();
        Assert::isArray($stateMapping);

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
<<<<<<< HEAD
<<<<<<< HEAD
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

    

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        
        
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    /**
     * Ottiene il conteggio degli appuntamenti per uno stato specifico.
     * IMPORTANTE: Mostra TUTTI gli appuntamenti, non filtrati per utente.
     * Questo è un widget di panoramica generale per dashboard amministrativa.
     */
    protected function getCountForState(string $stateName): int
    {
        /** @var Builder<Model> $query */
        /** @var \Illuminate\Database\Eloquent\Builder<\Illuminate\Database\Eloquent\Model> $query */
        /** @var Builder<Model> $query */
        /** @var \Illuminate\Database\Eloquent\Builder<\Illuminate\Database\Eloquent\Model> $query */
        $query = $this->model::where('state', $stateName);
        $count = $query->count();

        return is_int($count) ? $count : (int) $count;
        return $this->model::where('state', $stateName)->count();
        return $this->model::where('state', $stateName)->count();
        return $this->model::where('state', $stateName)->count();
    }

<<<<<<< HEAD
<<<<<<< HEAD
        return $this->model::where('state', $stateName)->count();
        return $this->model::where('state', $stateName)->count();
        return $this->model::where('state', $stateName)->count();
    }

        $query = $this->model::where('state', $stateName);
        if (! is_object($query) || ! method_exists($query, 'count')) {
            return 0;
        }

        $count = $query->count();
        Assert::integer($count);

        return $count;
    }

        return $this->model::where('state', $stateName)->count();
        return $this->model::where('state', $stateName)->count();
    }

        return $this->model::where('state', $stateName)->count();
    }


        return $this->model::where('state', $stateName)->count();
    }

        return $this->model::where('state', $stateName)->count();
    }

    }

        return $this->model::where('state', $stateName)->count();
        return $this->model::where('state', $stateName)->count();
    }

        return $this->model::where('state', $stateName)->count();
    }


        return $this->model::where('state', $stateName)->count();
    }

        return $this->model::where('state', $stateName)->count();
    }

        return $this->model::where('state', $stateName)->count();
    }

    


    
=======
=======
    
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    /**
     * Pulisce il nome dell'icona rimuovendo prefissi non necessari.
     */
    protected function cleanIconName(string $iconName): string
    {
        // Rimuove prefissi comuni come 'heroicon-o-' se presenti
        return str_replace(['heroicon-o-', 'heroicon-s-'], '', $iconName);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
    }
}
