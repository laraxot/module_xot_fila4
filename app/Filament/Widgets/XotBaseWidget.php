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
=======
=======
>>>>>>> d86d643a (.)
use Filament\Forms\Form;
use Filament\Forms\Form;
=======
=======
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> a5dccfe (.)
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 43d67f21 (.)
>>>>>>> 285375c74 (.)
use Exception;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
<<<<<<< HEAD
=======
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
use Exception;
=======
>>>>>>> a6ef6dc7 (.)
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
use Filament\Schemas\Components\Component;
=======
>>>>>>> f1d4085 (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
=======
>>>>>>> ca9324a4 (.)
use Exception;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 285375c74 (.)
use Illuminate\Support\Str;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;

/**
 * Classe base astratta per tutti i widget Filament.
 * Fornisce funzionalità comuni e standardizzate per la gestione dei widget.
 *
 * @property bool                      $shouldRender Indica se il widget deve essere renderizzato
 * @property string                    $title        Titolo del widget
 * @property string                    $icon         Icona del widget
 * @property array<string, mixed>|null $data         Dati del form
 * @property Schema                    $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;
    use TransTrait;

    public string $title = '';

    public string $icon = '';

    /**
     * Lista degli eventi ascoltati dal widget.
     *
     * @var array<string, string>
     */
    public array $listener = [];

    /**
     * Dati del form.
     *
     * @var array<string, mixed>
     */
    public ?array $data = [];

    /**
     * Vista predefinita per widget che estendono XotBaseWidget.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected string $view = 'xot::filament.widgets.base';

    protected int|string|array $columnSpan = 'full';

    public function __construct()
    {
<<<<<<< HEAD
        $this->resolveView();
    }

=======
        // parent::__construct();//Cannot call constructor
        $this->resolveView();
    }

    /*
     * public function mount(): void
     * {
     * $this->form->fill();
     * }
     */
>>>>>>> 8ab8fd81a (.)
    /**
     * Ottiene lo schema del form.
     * Deve essere implementato nelle classi figlie.
     *
     * @return array<int|string, Component>
     */
    abstract public function getFormSchema(): array;

    /**
     * Configura il form del widget.
     *
     * @param Schema $schema Il form da configurare
     *
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
    {
        $schema = $schema->components($this->getFormSchema());
        $schema->statePath('data');

        $model = $this->getFormModel();
        if (null !== $model) {
            // Ensure model is compatible with Schema::model()
            if (\is_string($model)) {
                if (class_exists($model) && is_subclass_of($model, Model::class)) {
                    /* @var class-string<Model> $model */
                    $schema->model($model);
                }
            } else {
                // $model is an instance of Model
                $schema->model($model);
            }
        }

        return $schema;
    }

    /**
     * @return array<string, mixed>
     */
    public function getFormFill(): array
    {
        $model = $this->getFormModel();
        if (null === $model) {
            return [];
        }
        if (\is_string($model)) {
            Assert::isInstanceOf($model = app($model), Model::class);
        }

        // Se il modello ha un ID, significa che è stato trovato nel database
        if ($model->exists) {
            try {
                $res = $model->toArray();

                if (method_exists($model, 'getDataDefaults')) {
                    /** @var array<string, mixed> $defaults */
                    $defaults = $model->getDataDefaults();
                    $merge1 = array_merge($defaults, $res);
                    $merge1 = Arr::map($merge1, static function ($value, string|int $key) use ($defaults) {
<<<<<<< HEAD
                        if ($value === null) {
=======
                        if (null === $value) {
>>>>>>> 8ab8fd81a (.)
                            $value = Arr::get($defaults, $key, null);
                        }

                        return $value;
                    });
                    $res = $merge1;
                }

                /** @var array<string, mixed> */
                return $res;

<<<<<<< HEAD
            } catch (Exception $e) {
=======
                // dddx($model->with('studio')->relationsToArray());
            } catch (\Exception $e) {
>>>>>>> 8b18e4bff (.)
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
                return $model->getAttributes();
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
                $attributes = $model->getAttributes();

                // Gestisci specificamente gli enum se presenti
                // if (isset($attributes['type']) && $model->type instanceof \BackedEnum) {
                //    $attributes['type'] = $model->type->value;
                // }

                /** @var array<string, mixed> */
                return $attributes;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 14dafc3ba (.)
            }
        }

        // Se è un nuovo modello, restituisci solo i campi fillable con valori null
        $fillable = $model->getFillable();
        $appends = $model->getAppends();
        $attributes = $model->attributesToArray();

        $fields = array_merge($fillable, $appends);
        /** @var array<string, mixed> $fieldsWithNull */
        $fieldsWithNull = array_fill_keys($fields, null);
        $fieldsWithNull = array_merge($fieldsWithNull, $attributes);
        if (method_exists($model, 'getDataDefaults')) {
            /** @var array<string, mixed> $defaults */
            $defaults = $model->getDataDefaults();
            $fieldsWithNull = array_merge($fieldsWithNull, $defaults);
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return $fieldsWithNull;
=======
        return $fields;
>>>>>>> 53d6a6ba (.)
=======
        /** @var array<string, mixed> */
        return $fieldsWithNull;
>>>>>>> b7afadf9 (.)
    }

    /**
     * Salva i dati del form.
     * Override nelle classi figlie se necessario.
     */
    public function save(): void
    {
        // Implementare nelle classi figlie
    }

<<<<<<< HEAD
=======
    /**
     * Eseguito quando i filtri vengono aggiornati.
     * Rimosso per compatibilità Filament v4 - da reimplementare se necessario
     */
    // public function filtersUpdated(): void
    // {
    //     $this->reset('data');
    // }

>>>>>>> 285375c74 (.)
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public function getWizardSubmitAction(): Action
    {
        /** @var view-string $submit_view */
        $submit_view = 'pub_theme::filament.wizard.submit-button';

        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->view((string) $submit_view);
    }

    /**
     * Ottiene le azioni del form.
     *
     * @return array<int|string, Action>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    /**
     * Ottiene il modello per il form.
     * Può essere sovrascritto nelle classi figlie per fornire un modello specifico.
     */
    protected function getFormModel(): Model|string|null
    {
        return null;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
    /**
     * Salva i dati del form.
     * Override nelle classi figlie se necessario.
     */
    public function save(): void
    {
        // Implementare nelle classi figlie
    }

    /**
     * Eseguito quando i filtri vengono aggiornati.
     * Rimosso per compatibilità Filament v4 - da reimplementare se necessario.
     */
    // public function filtersUpdated(): void
    // {
    //     $this->reset('data');
    // }

    public static function getNavigationLabel(): string
    {
        /*
         * return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
         * ->headline());
         */
        return static::transFunc(__FUNCTION__);
    }

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 8b18e4bff (.)
    protected function getStepByName(string $name): Step
    {
        $schema = Str::of($name)
            ->snake()
            ->studly()
            ->prepend('get')
            ->append('Schema')
            ->toString();

        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        return Step::make($name)->schema($schemaComponents);
    }

    private function resolveView(): void
    {
        $defaultView = 'xot::filament.widgets.base';

<<<<<<< HEAD
        if ($this->view !== $defaultView && view()->exists($this->view)) {
            return;
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
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
        if (! view()->exists($submit_view)) {
            throw new \Exception("View {$submit_view} does not exist");
>>>>>>> 8b18e4bff (.)
        }

        try {
            $view = app(GetViewByClassAction::class)->execute(static::class);
            if (view()->exists($view)) {
                $this->view = $view;
            }
        } catch (Exception $e) {
            /* @phpstan-ignore identical.alwaysTrue */
            if ($this->view === $defaultView) {
                throw $e;
            }
        }
    }
}
