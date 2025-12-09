<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

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
use LogicException;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\Page as FilamentPage;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
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
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Closure;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Resources\Pages\Page as FilamentPage;
=======
use Filament\Pages\Page as FilamentPage;
>>>>>>> 5a14301c (.)
=======
use Filament\Pages\Page as FilamentPage;
>>>>>>> 5a14301c (.)
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property ?array  $data
 * @property Schema  $form
 */
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use InteractsWithFormActions;
    use InteractsWithForms;
    use NavigationLabelTrait;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * The model class associated with this page, if any.
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
    public static ?string $model = null;
=======
    public static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    public static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)
=======
    public static null|string $model = null;
=======
    public static null|string $model = null;
>>>>>>> 399f46d3 (.)
=======
    public static null|string $model = null;
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static null|string $model = null;
>>>>>>> ca9324a4 (.)
=======
    public static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static null|string $model = null;
=======
    public static ?string $model = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static null|string $model = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static null|string $model = null;
>>>>>>> ca9324a4 (.)
=======
    public static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    public static null|string $model = null;
=======
    public static ?string $model = null;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static null|string $model = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)

    /**
     * The form data.
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
    public ?array $data = [];
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
    public null|array $data = [];
>>>>>>> 3fbbf1f5 (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the associated model class for this page.
     *
     * This method must be non-static to properly override the parent method.
     * Returns the model class string or throws an exception if not set.
     */
    /**
     * @return class-string<Model>
     */
    public function getModel(): string
    {
        if (null === static::$model) {
            throw new LogicException('Model class not set for page: '.static::class);
        }

        /** @var class-string<Model> $model */
        $model = static::$model;

        return $model;
    }

    /**
     * Get the resources associated with this page.
     *
     * @return Collection<int, string>
     */
    public static function getResources(): Collection
    {
        /** @var Collection<int, string> $resources */
        $resources = collect();

        return $resources;
    }

    /**
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * Get the associated model class for this page.
     * 
     * This method must be non-static to properly override the parent method.
     * Returns the model class string or throws an exception if not set.
     */
    public function getModel(): string
    {
        if (static::$model === null) {
            throw new \LogicException('Model class not set for page: ' . static::class);
        }
        
=======
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
