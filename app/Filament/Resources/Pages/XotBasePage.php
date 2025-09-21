<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Closure;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page as FilamentPage;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
=======
=======
=======
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
use Filament\Schemas\Schema;
use Closure;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page as FilamentPage;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;

>>>>>>> b93ef594b4 (.)
=======
use Closure;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Component;
use Filament\Pages\Page as FilamentPage;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Base class for all custom pages in the application.
 *
 * This class provides common functionality for custom pages,
 * following the architectural pattern of never extending Filament classes directly.
 *
 * @property ?string $model
 * @property ?array $data
<<<<<<< HEAD
 * @property Schema $form
 */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $form
 */
=======
 * @property \Filament\Schemas\Schema $form
*/
>>>>>>> a12f125f4a (.)
=======
 * @property Schema $form
 */
>>>>>>> b93ef594b4 (.)
=======
 * @property ComponentContainer $form
*/
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use InteractsWithForms;
    use NavigationLabelTrait;
    use TransTrait;
    use InteractsWithFormActions;

    /**
     * The model class associated with this page, if any.
     */
<<<<<<< HEAD
    public static null|string $model = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static null|string $model = null;
=======
    public static ?string $model = null;
>>>>>>> a12f125f4a (.)
=======
    public static null|string $model = null;
>>>>>>> b93ef594b4 (.)
=======
    public static ?string $model = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * The form data.
     *
     * @var array<string, mixed>
     */
<<<<<<< HEAD
    public null|array $data = [];

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $data = [];

=======
    public ?array $data = [];

    
>>>>>>> a12f125f4a (.)
=======
    public null|array $data = [];

>>>>>>> b93ef594b4 (.)
=======
    public ?array $data = [];

    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Get the view that should be used for the page.
     */
    public function getView(): string
    {
<<<<<<< HEAD
        if (isset($this->view)) {
            return $this->view;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($this->view)) {
            return $this->view;
=======
        if (isset(static::$view)) {
            return static::$view;
>>>>>>> a12f125f4a (.)
=======
        if (isset($this->view)) {
            return $this->view;
>>>>>>> b93ef594b4 (.)
=======
        if (isset(static::$view)) {
            return static::$view;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        $view = Str::of(static::class)
            ->after('Modules\\')
            ->before('\\Filament\\')
            ->lower()
            ->append('::filament.pages.')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            ->append(
                Str::of(static::class)
                    ->afterLast('\\')
                    ->kebab()
                    ->toString(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            ->append(Str::of(static::class)
                ->afterLast('\\')
                ->kebab()
                ->toString()
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            );

        return $view->toString();
    }

    /**
     * Get navigation label with automatic translation.
     */
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    /**
     * Get page title with automatic translation.
     */
    public function getTitle(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    /**
     * Get the heading with automatic translation.
     */
    public function getHeading(): string
    {
        return $this->getTitle();
    }

    /**
     * Configure the form.
     */
<<<<<<< HEAD
    public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema())->statePath('data');
=======
<<<<<<< HEAD
    public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema())->statePath('data');
=======
        return $schema
            ->components($this->getFormSchema())
            ->statePath('data');
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getFormSchema())->statePath('data');
>>>>>>> b93ef594b4 (.)
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Get the form schema for the page.
     *
<<<<<<< HEAD
     * @return array<string, Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Component>
=======
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, Component>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    protected function getFormSchema(): array
    {
        return [];
    }

    /**
     * Get the associated model class for this page.
     */
<<<<<<< HEAD
    public static function getModel(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getModel(): null|string
=======
    public static function getModel(): ?string
>>>>>>> a12f125f4a (.)
=======
    public static function getModel(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public static function getModel(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        /** @phpstan-ignore property.staticAccess */
        return static::$model;
    }

    /**
     * Get the resources associated with this page.
     *
     * @return Collection<string>
     */
    public static function getResources(): Collection
    {
        return collect();
    }

    /*
     * Hook chiamato all'inizializzazione del componente.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     *
     * public function mount(int|string $record): void
     * {
     * parent::mount($record);
     * $this->form->fill($this->data ?? []);
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
     
    public function mount(int|string $record): void
    {
        parent::mount($record);
        $this->form->fill($this->data ?? []);
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * Get the view data for the page.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'data' => $this->data,
        ];
    }
}
