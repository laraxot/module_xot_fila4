<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Forms\Form;
use Filament\Forms\Form;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Forms\Form;
use Filament\Forms\Form;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
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
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
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
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
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
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
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
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
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
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
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
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Exception;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Exception;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;

/**
 * Classe base astratta per tutti i widget Filament.
 * Fornisce funzionalità comuni e standardizzate per la gestione dei widget.
 *
 * @property bool $shouldRender Indica se il widget deve essere renderizzato
 * @property string $title Titolo del widget
 * @property string $icon Icona del widget
 * @property array<string, mixed>|null $data Dati del form
 * @property bool                      $shouldRender Indica se il widget deve essere renderizzato
 * @property string                    $title        Titolo del widget
 * @property string                    $icon         Icona del widget
 * @property array<string, mixed>|null $data         Dati del form
 * @property Schema $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasActions, HasForms
{
    use InteractsWithActions;

    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use TransTrait;

    public string $title = '';

    public string $icon = '';
 * @property bool                      $shouldRender Indica se il widget deve essere renderizzato
 * @property string                    $title        Titolo del widget
 * @property string                    $icon         Icona del widget
 * @property array<string, mixed>|null $data         Dati del form
 * @property Schema $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasActions, HasForms
{
    use InteractsWithActions;

    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use TransTrait;

    public string $title = '';

    public string $icon = '';








    protected int|string|array $columnSpan = 'full';








    protected int|string|array $columnSpan = 'full';
 * @property Schema $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasActions, HasForms
{
    use InteractsWithActions;

    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use TransTrait;

    public string $title = '';

    public string $icon = '';

    protected int|string|array $columnSpan = 'full';
 * @property Schema $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasActions, HasForms
{
    use InteractsWithActions;

    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use TransTrait;

    public string $title = '';

    public string $icon = '';

    protected int|string|array $columnSpan = 'full';
 * @property Schema $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasActions, HasForms
{
    use InteractsWithActions;

    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use TransTrait;

    public string $title = '';

    public string $icon = '';

    protected int|string|array $columnSpan = 'full';
 * @property Schema $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasActions, HasForms
{
    use InteractsWithActions;

    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use TransTrait;

    public string $title = '';

    public string $icon = '';

    protected int|string|array $columnSpan = 'full';
 * @property Schema $form
 * @property Schema $form
 * @property Schema $form
 * @property ComponentContainer        $form
 */
abstract class XotBaseWidget extends FilamentWidget implements HasForms, HasActions
{
    use TransTrait;
    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
    use InteractsWithPageFilters;
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use InteractsWithActions;

    public string $title = '';
    public string $icon = '';
    protected int|string|array $columnSpan = 'full';

    /**
     * Lista degli eventi ascoltati dal widget.
     *
     * @var array<string, string>
     */
    public array $listener = [
        // 'filters-updated' => 'filtersUpdated', // Rimosso per compatibilità Filament v4
        // 'filters-updated' => 'filtersUpdated', // Rimosso per compatibilità Filament v4
        // 'filters-updated' => 'filtersUpdated', // Rimosso per compatibilità Filament v4
        // 'filters-updated' => 'filtersUpdated', // Rimosso per compatibilità Filament v4
        'filters-updated' => 'filtersUpdated',
    ];

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
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public ?array $data = [];
    public null|array $data = [];

    /*
     * public function __construct()
     * {
     * //parent::__construct();//Cannot call constructor
     * $view = app(GetViewByClassAction::class)->execute(static::class);
     * if(view()->exists($view)){
     * $this->view = $view;
     * }
     * }
     */
    /*
     * public function mount(): void
     * {
     * $this->form->fill();
     * }
     */

    /*
     * public function __construct()
     * {
     * //parent::__construct();//Cannot call constructor
     * $view = app(GetViewByClassAction::class)->execute(static::class);
     * if(view()->exists($view)){
     * $this->view = $view;
     * }
     * }
     */
    /*
    public function mount(): void
    {
        $this->form->fill();
    }
    */
     * public function mount(): void
     * {
     * $this->form->fill();
     * }
     */

    /**
     * Ottiene lo schema del form.
     * Deve essere implementato nelle classi figlie.
     *
     * @return array<int|string, Component>
     * @return array<int|string, Component>
     * @return array<int|string, Component>
     * @return array<int|string, Component>
     * @return array<int|string, Forms\Components\Component>
     */
    abstract public function getFormSchema(): array;

    /**
     * Configura il form del widget.
     *
     * @param  Schema  $schema  Il form da configurare
     * @param Schema $schema Il form da configurare
     *
     * @return Form Il form configurato
     */
    public function form(Form $form): Form
     * @param Schema $schema Il form da configurare
     *
     * @param  Schema  $schema  Il form da configurare
     * @param Schema $schema Il form da configurare
     *
     * @return Form Il form configurato
     */
    public function form(Form $form): Form
     * @param Schema $schema Il form da configurare
     *
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param Schema $schema Il form da configurare
     *
     * @param Schema $schema Il form da configurare
     *
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param Schema $schema Il form da configurare
     *
     * @param Schema $schema Il form da configurare
     *
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param Schema $schema Il form da configurare
     *
     * @param Schema $schema Il form da configurare
     *
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param Schema $schema Il form da configurare
     *
     * @param Schema $schema Il form da configurare
     *
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
     * @param Schema $schema Il form da configurare
     *
     * @return Schema Il form configurato
     * @param Schema $schema Il form da configurare
     *
     * @return Schema Il form configurato
     * @param Schema $schema Il form da configurare
     *
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
    {
        $schema = $schema->components($this->getFormSchema());
        $schema->statePath('data');
        $data = $this->getFormFill();

        $model = $this->getFormModel();
        if ($model !== null) {
            // Ensure model is compatible with Schema::model()
            if (is_string($model)) {
                if (class_exists($model) && is_subclass_of($model, Model::class)) {
                    /** @var class-string<Model> $model */
                    $schema->model($model);
                }
            } else {
                // $model is an instance of Model
                $schema->model($model);
            }
        }
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
     * @param FilamentForm $form Il form da configurare
     *
     * @return FilamentForm Il form configurato
     */
    public function form(FilamentForm $form): FilamentForm
    {
        $form = $form->schema($this->getFormSchema());
        $form->statePath('data');
        $data = $this->getFormFill();

        $form->model($this->getFormModel());
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        $schema->model($this->getFormModel());
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        $schema->model($this->getFormModel());
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
        if (! empty($data)) {
        if (!empty($data)) {
            // $form->fill($data);
            // $this->data=$data;
        }

        return $schema;
        return $schema;
        return $schema;
    }

    public function getFormFill(): array
    {
        $model = $this->getFormModel();
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if ($model === null) {
        if (null === $model) {
        if ($model === null) {
        if (null === $model) {
        if (null === $model) {
        if (null == $model) {
        if (null === $model) {
        if (null === $model) {
            return [];
        }
        if (is_string($model)) {
            Assert::isInstanceOf($model = app($model), Model::class);
        }

        // Se il modello ha un ID, significa che è stato trovato nel database
        if ($model->exists) {
            try {
                // dddx($model->getArrayableRelations());
                $res = $model->toArray();

                if (method_exists($model, 'getDataDefaults')) {
                    /** @var array<string, mixed> $defaults */
                    $defaults = $model->getDataDefaults();
                    $merge1 = array_merge($defaults, $res);
                    $merge1 = Arr::map($merge1, function ($value, string|int $key) use ($defaults) {
                        if ($value === null) {
                        if (null === $value) {
                        if (null === $value) {
                        if (null === $value) {
                        if (null === $value) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if (null === $value) {
                        if (null === $value) {
                        if (null === $value) {
                        if (null === $value) {
                        if (null === $value) {
                    $defaults = $model->getDataDefaults();
                    $merge1 = array_merge($defaults, $res);
                    $merge1 = Arr::map($merge1, function ($value, $key) use ($defaults) {
                        if (null == $value) {
                    /** @var array<string, mixed> $defaults */
                    $defaults = $model->getDataDefaults();
                    $merge1 = array_merge($defaults, $res);
                    $merge1 = Arr::map($merge1, function ($value, string|int $key) use ($defaults) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if ($value === null) {
                        if (null === $value) {
                        if ($value === null) {
                        if (null === $value) {
                            $value = Arr::get($defaults, $key, null);
                        }

                        return $value;
                    });
                    $res = $merge1;
                }

                return $res;

                // dddx($model->with('studio')->relationsToArray());
            } catch (Exception $e) {
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
                // Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
                return $model->getAttributes();

                // dddx($model->with('studio')->relationsToArray());
            } catch (Exception $e) {


                // dddx($model->with('studio')->relationsToArray());
            } catch (Exception $e) {
                // dddx($model->with('studio')->relationsToArray());
            } catch (\Exception $e) {
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
                // Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
                return $model->getAttributes();
                $attributes = $model->getAttributes();

                // Gestisci specificamente gli enum se presenti
                // if (isset($attributes['type']) && $model->type instanceof \BackedEnum) {
                //    $attributes['type'] = $model->type->value;
                // }

                return $attributes;
            }
        }

        // Se è un nuovo modello, restituisci solo i campi fillable con valori null
        $fillable = $model->getFillable();
        $appends = $model->getAppends();
        $attributes = $model->attributesToArray();

        $fields = array_merge($fillable, $appends);
        $fields = array_fill_keys($fields, null);
        $fields = array_merge($fields, $attributes);
        if (method_exists($model, 'getDataDefaults')) {
            /** @var array<string, mixed> $defaults */
            /** @var array<string, mixed> $defaults */
            /** @var array<string, mixed> $defaults */
            /** @var array<string, mixed> $defaults */
            $defaults = $model->getDataDefaults();
            $fields = array_merge($fields, $defaults);
        }

        return $fieldsWithNull;
        /** @var array<string, mixed> */
        return $fieldsWithNull;
        return $fields;
        return $fields;
        return $fields;
        return $fields;
        return $fields;
    }

    /**
        return $fieldsWithNull;
        /** @var array<string, mixed> */
        return $fieldsWithNull;
        return $fields;
        return $fields;
        return $fields;
        return $fields;
        return $fields;
    }

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
     * Rimosso per compatibilità Filament v4 - da reimplementare se necessario
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
        return $fields;
        /** @var array<string, mixed> */
        return $fieldsWithNull;
    }

    /**
        return $fields;
        /** @var array<string, mixed> */
        return $fieldsWithNull;
    }

    /**
        return $fields;
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
     * Rimosso per compatibilità Filament v4 - da reimplementare se necessario
     */
    // public function filtersUpdated(): void
    // {
    //     $this->reset('data');
    // }
     */
    public function filtersUpdated(): void
    {
        $this->reset('data');
    }
     * Rimosso per compatibilità Filament v4 - da reimplementare se necessario
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

    protected function getStepByName(string $name): Step
    {
         * return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
         * ->headline());
         */
         * return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
         * ->headline());
         */
         * return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
         * ->headline());
         */
        return static::transFunc(__FUNCTION__);
    }

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
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);

        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        return Step::make($name)->schema($schemaComponents);
    }
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        return Step::make($name)->schema($schemaComponents);
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
        return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
            ->headline());
        */
        return static::transFunc(__FUNCTION__);
    }

    protected function getStepByName(string $name): Forms\Components\Wizard\Step
    {
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Forms\Components\Wizard\Step::make($name)
            ->schema($this->$schema());
    }

    public function getWizardSubmitAction(): Action
    {
        /** @var view-string $submit_view */
        $submit_view = 'pub_theme::filament.wizard.submit-button';

        /** @var view-string $submit_view */
        $submit_view = 'pub_theme::filament.wizard.submit-button';

        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->view((string) $submit_view);
    }
        $submit_view = 'pub_theme::filament.wizard.submit-button';

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->view($submit_view);
            ->view((string) $submit_view);
        $submit_view = 'pub_theme::filament.wizard.submit-button';

        // if(!view()->exists($submit_view)){
        //    throw new \Exception("View {$submit_view} does not exist");
        // }
        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->view($submit_view);
    }
}
