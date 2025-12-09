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
use Exception;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\Widget as FilamentWidget;
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
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
use Exception;
use Filament\Schemas\Components\Wizard\Step;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Contracts\Support\Htmlable;
=======
>>>>>>> 634583fb55 (.)
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
use Filament\Schemas\Schema;
use Exception;
use Filament\Schemas\Components\Wizard\Step;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
=======
<<<<<<< HEAD
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
=======
use Filament\Forms\ComponentContainer;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form as FilamentForm;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
>>>>>>> 5a14301c (.)
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;

/**
 * Classe base astratta per tutti i widget Filament.
 * Fornisce funzionalità comuni e standardizzate per la gestione dei widget.
 *
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
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
 * @property bool $shouldRender Indica se il widget deve essere renderizzato
 * @property string $title Titolo del widget
 * @property string $icon Icona del widget
 * @property array<string, mixed>|null $data Dati del form
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
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
 * @property bool                      $shouldRender Indica se il widget deve essere renderizzato
 * @property string                    $title        Titolo del widget
 * @property string                    $icon         Icona del widget
 * @property array<string, mixed>|null $data         Dati del form
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
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
 * @property bool                      $shouldRender Indica se il widget deve essere renderizzato
 * @property string                    $title        Titolo del widget
 * @property string                    $icon         Icona del widget
 * @property array<string, mixed>|null $data         Dati del form
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
    protected int|string|array $columnSpan = 'full';
>>>>>>> 5a14301c (.)
=======
=======
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
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
 * @property Schema $form
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $form
=======
 * @property \Filament\Schemas\Schema $form
>>>>>>> a12f125f4a (.)
=======
 * @property Schema $form
>>>>>>> b93ef594b4 (.)
=======
 * @property ComponentContainer        $form
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 */
abstract class XotBaseWidget extends FilamentWidget implements HasForms, HasActions
{
    use TransTrait;
<<<<<<< HEAD
    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
=======
    use InteractsWithPageFilters;
>>>>>>> a12f125f4a (.)
=======
    // use InteractsWithPageFilters; // Rimosso per evitare conflitto con InteractsWithForms in Filament v4
>>>>>>> b93ef594b4 (.)
=======
    use InteractsWithPageFilters;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    // use InteractsWithPageTable;
    use InteractsWithForms;
    use InteractsWithActions;

    public string $title = '';
    public string $icon = '';
    protected int|string|array $columnSpan = 'full';
>>>>>>> 5a14301c (.)

    /**
     * Lista degli eventi ascoltati dal widget.
     *
     * @var array<string, string>
     */
    public array $listener = [
<<<<<<< HEAD
        // 'filters-updated' => 'filtersUpdated', // Rimosso per compatibilità Filament v4
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // 'filters-updated' => 'filtersUpdated', // Rimosso per compatibilità Filament v4
=======
        'filters-updated' => 'filtersUpdated',
>>>>>>> a12f125f4a (.)
=======
        // 'filters-updated' => 'filtersUpdated', // Rimosso per compatibilità Filament v4
>>>>>>> b93ef594b4 (.)
=======
        'filters-updated' => 'filtersUpdated',
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    ];

    /**
     * Dati del form.
     *
     * @var array<string, mixed>
     */
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
    public ?array $data = [];

    /**
     * Vista predefinita per widget che estendono XotBaseWidget.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected string $view = 'xot::filament.widgets.base';

    protected int|string|array $columnSpan = 'full';
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    public null|array $data = [];
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    public ?array $data = [];
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
    public null|array $data = [];
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public ?array $data = [];
>>>>>>> 43d67f21 (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
    public ?array $data = [];
>>>>>>> ca9324a4 (.)
=======
=======
    public null|array $data = [];
>>>>>>> 0e51323 (.)
=======
    public null|array $data = [];
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public ?array $data = [];
>>>>>>> 43d67f21 (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
=======
=======
    public ?array $data = [];
=======
    public null|array $data = [];
>>>>>>> b93ef594b4 (.)

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
<<<<<<< HEAD
=======
    public ?array $data = [];

    /*
    public function __construct()
    {
        //parent::__construct();//Cannot call constructor
        $view = app(GetViewByClassAction::class)->execute(static::class);
        if(view()->exists($view)){
            $this->view = $view;
        }
    }
    */
    /*
>>>>>>> origin/develop
    public function mount(): void
    {
        $this->form->fill();
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * public function mount(): void
     * {
     * $this->form->fill();
     * }
     */
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Ottiene lo schema del form.
     * Deve essere implementato nelle classi figlie.
     *
<<<<<<< HEAD
     * @return array<int|string, Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int|string, Component>
=======
     * @return array<int|string, \Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<int|string, Component>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<int|string, Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    abstract public function getFormSchema(): array;

    /**
     * Configura il form del widget.
     *
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
     * @param  Schema  $schema  Il form da configurare
=======
=======
>>>>>>> 399f46d3 (.)
     * @param Schema $schema Il form da configurare
     *
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> d86d643a (.)
     * @return Form Il form configurato
     */
    public function form(Form $form): Form
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
     * @param Schema $schema Il form da configurare
     *
>>>>>>> 3fbbf1f5 (.)
=======
     * @param  Schema  $schema  Il form da configurare
>>>>>>> ca9324a4 (.)
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
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
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
     * @param Schema $schema Il form da configurare
     *
=======
     * @param  Schema  $schema  Il form da configurare
>>>>>>> ca9324a4 (.)
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
     * @param  Schema  $schema  Il form da configurare
     * @return Schema Il form configurato
     */
    public function form(Schema $schema): Schema
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
     * @param Schema $schema Il form da configurare
     *
     * @return Schema Il form configurato
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Schema $schema Il form da configurare
     *
     * @return Schema Il form configurato
=======
     * @param \Filament\Schemas\Schema $schema Il form da configurare
     *
     * @return \Filament\Schemas\Schema Il form configurato
>>>>>>> a12f125f4a (.)
=======
     * @param Schema $schema Il form da configurare
     *
     * @return Schema Il form configurato
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     */
    public function form(Schema $schema): Schema
>>>>>>> 5a14301c (.)
    {
        $schema = $schema->components($this->getFormSchema());
        $schema->statePath('data');
        $data = $this->getFormFill();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
        if (! empty($data)) {
=======
        if (!empty($data)) {
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
        if (!empty($data)) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
        $schema->model($this->getFormModel());
        if (! empty($data)) {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (! empty($data)) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
        if (!empty($data)) {
>>>>>>> 0e51323 (.)
=======
        if (!empty($data)) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if (! empty($data)) {
>>>>>>> 43d67f21 (.)
=======
        if (! empty($data)) {
=======
        if (!empty($data)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! empty($data)) {
>>>>>>> 5842a556 (.)
=======
        if (!empty($data)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $schema->model($this->getFormModel());
        if (! empty($data)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (! empty($data)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if (! empty($data)) {
>>>>>>> 43d67f21 (.)
=======
        if (! empty($data)) {
=======
        if (!empty($data)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if (! empty($data)) {
>>>>>>> 5842a556 (.)
=======
        if (! empty($data)) {
=======
        if (!empty($data)) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if (! empty($data)) {
>>>>>>> 16dc7ab0 (.)
=======
        if (!empty($data)) {
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
            // $form->fill($data);
            // $this->data=$data;
        }

<<<<<<< HEAD
        return $schema;
=======
<<<<<<< HEAD
        return $schema;
=======
        return $form;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function getFormFill(): array
    {
        $model = $this->getFormModel();
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
        if ($model === null) {
=======
        if (null === $model) {
>>>>>>> 5a14301c (.)
=======
        if (null === $model) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (null === $model) {
=======
        if (null === $model) {
>>>>>>> 399f46d3 (.)
=======
        if (null === $model) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (null === $model) {
=======
        if (null == $model) {
>>>>>>> a12f125f4a (.)
=======
        if (null === $model) {
>>>>>>> b93ef594b4 (.)
=======
        if (null == $model) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if ($model === null) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
        if (null === $model) {
>>>>>>> 0e51323 (.)
=======
        if (null === $model) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if ($model === null) {
>>>>>>> 43d67f21 (.)
=======
        if ($model === null) {
=======
        if (null === $model) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($model === null) {
>>>>>>> 5842a556 (.)
=======
        if (null === $model) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        if (null === $model) {
=======
        if (null == $model) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (null === $model) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (null === $model) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($model === null) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if ($model === null) {
>>>>>>> 43d67f21 (.)
=======
        if ($model === null) {
=======
        if (null === $model) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($model === null) {
>>>>>>> 5842a556 (.)
=======
        if ($model === null) {
=======
        if (null === $model) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if ($model === null) {
>>>>>>> 16dc7ab0 (.)
=======
        if (null === $model) {
>>>>>>> 5a14301c (.)
=======
        if (null === $model) {
=======
        if (null == $model) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (null === $model) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (null === $model) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                    /** @var array<string, mixed> $defaults */
                    $defaults = $model->getDataDefaults();
                    $merge1 = array_merge($defaults, $res);
                    $merge1 = Arr::map($merge1, function ($value, string|int $key) use ($defaults) {
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
                        if ($value === null) {
=======
                        if (null === $value) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
                        if (null === $value) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
                        if (null === $value) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                        if (null === $value) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
                    $defaults = $model->getDataDefaults();
                    $merge1 = array_merge($defaults, $res);
                    $merge1 = Arr::map($merge1, function ($value, $key) use ($defaults) {
                        if (null == $value) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                    /** @var array<string, mixed> $defaults */
                    $defaults = $model->getDataDefaults();
                    $merge1 = array_merge($defaults, $res);
                    $merge1 = Arr::map($merge1, function ($value, string|int $key) use ($defaults) {
                        if (null === $value) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                        if ($value === null) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
                        if (null === $value) {
>>>>>>> 0e51323 (.)
=======
                        if (null === $value) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                        if ($value === null) {
>>>>>>> 43d67f21 (.)
=======
                        if ($value === null) {
=======
                        if (null === $value) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                        if ($value === null) {
>>>>>>> 5842a556 (.)
=======
                        if (null === $value) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
                        if ($value === null) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                        if ($value === null) {
>>>>>>> 43d67f21 (.)
=======
                        if ($value === null) {
=======
                        if (null === $value) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                        if ($value === null) {
>>>>>>> 5842a556 (.)
=======
                        if ($value === null) {
=======
                        if (null === $value) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
                        if ($value === null) {
>>>>>>> 16dc7ab0 (.)
=======
                        if (null === $value) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
                            $value = Arr::get($defaults, $key, null);
                        }

                        return $value;
                    });
                    $res = $merge1;
                }

                return $res;
<<<<<<< HEAD

                // dddx($model->with('studio')->relationsToArray());
            } catch (Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
                // dddx($model->with('studio')->relationsToArray());
            } catch (Exception $e) {
=======
                // dddx($model->with('studio')->relationsToArray());
            } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
                // Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                return $model->getAttributes();
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                $attributes = $model->getAttributes();

                // Gestisci specificamente gli enum se presenti
                // if (isset($attributes['type']) && $model->type instanceof \BackedEnum) {
                //    $attributes['type'] = $model->type->value;
                // }

                return $attributes;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
            /** @var array<string, mixed> $defaults */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var array<string, mixed> $defaults */
=======
>>>>>>> a12f125f4a (.)
=======
            /** @var array<string, mixed> $defaults */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $defaults = $model->getDataDefaults();
            $fields = array_merge($fields, $defaults);
        }

        return $fields;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * Rimosso per compatibilità Filament v4 - da reimplementare se necessario
     */
    // public function filtersUpdated(): void
    // {
    //     $this->reset('data');
    // }
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     */
    public function filtersUpdated(): void
    {
        $this->reset('data');
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * Rimosso per compatibilità Filament v4 - da reimplementare se necessario
     */
    // public function filtersUpdated(): void
    // {
    //     $this->reset('data');
    // }
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    public static function getNavigationLabel(): string
    {
        /*
<<<<<<< HEAD
         * return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
         * ->headline());
         */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
         * return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
         * ->headline());
         */
=======
        return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
            ->headline());
        */
>>>>>>> a12f125f4a (.)
=======
         * return (string) (static::$navigationLabel ?? (string) str(static::getLabel())
         * ->headline());
         */
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        return static::transFunc(__FUNCTION__);
    }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    protected function getStepByName(string $name): Step
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $schema = Str::of($name)
            ->snake()
            ->studly()
            ->prepend('get')
            ->append('Schema')
            ->toString();
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
>>>>>>> d86d643a (.)
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

<<<<<<< HEAD
        return Step::make($name)->schema($schemaComponents);
    }
=======
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
<<<<<<< HEAD
=======
>>>>>>> 0e51323 (.)
=======
        /** @var array<Htmlable|string> $schemaComponents */
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
        $schemaComponents = $this->$schema();
=======
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();

>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
>>>>>>> 5a14301c (.)
        return Step::make($name)->schema($schemaComponents);
=======
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
>>>>>>> f1d4085 (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
=======
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
>>>>>>> 43d67f21 (.)

=======
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
>>>>>>> 5a14301c (.)
        return Step::make($name)->schema($schemaComponents);
=======
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
>>>>>>> f1d4085 (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
        /** @var array<Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
=======
<<<<<<< HEAD

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
=======
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema($this->$schema());
>>>>>>> a12f125f4a (.)
=======

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->$schema();
        return Step::make($name)->schema($schemaComponents);
>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function getWizardSubmitAction(): Action
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        /** @var view-string $submit_view */
        $submit_view = 'pub_theme::filament.wizard.submit-button';

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
            throw new Exception("View {$submit_view} does not exist");
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
>>>>>>> 0e51323 (.)
=======
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
>>>>>>> 5a14301c (.)
=======
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if (! view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }

>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
>>>>>>> 5a14301c (.)
        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->view((string) $submit_view);
<<<<<<< HEAD
=======
=======
=======
        /** @var view-string $submit_view */
>>>>>>> b93ef594b4 (.)
        $submit_view = 'pub_theme::filament.wizard.submit-button';

        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        }
        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
<<<<<<< HEAD
            ->view($submit_view);
>>>>>>> a12f125f4a (.)
=======
            ->view((string) $submit_view);
>>>>>>> b93ef594b4 (.)
=======
        $submit_view = 'pub_theme::filament.wizard.submit-button';

        // if(!view()->exists($submit_view)){
        //    throw new \Exception("View {$submit_view} does not exist");
        // }
        return Action::make('submit')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save')
            ->view($submit_view);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
}
