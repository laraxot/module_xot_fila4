<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

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
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Closure;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Filament\Resources\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Filament\Pages\Page as FilamentPage;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;


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
/**
 * Base class for all custom pages in the application.
 *
 * This class provides common functionality for custom pages,
 * following the architectural pattern of never extending Filament classes directly.
 *
 * @property ?string $model
 * @property ?array  $data
 * @property Schema  $form
 */
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use InteractsWithFormActions;
    use InteractsWithForms;
    use NavigationLabelTrait;
 * @property ?array $data
 * @property Schema $form
 */
 * @property ?array $data
 * @property Schema $form
 */
 * @property Schema $form
 */
 * @property Schema $form
 */
 * @property ComponentContainer $form
*/
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use InteractsWithForms;
    use NavigationLabelTrait;
    use TransTrait;
    use InteractsWithFormActions;
    use TransTrait;
    use TransTrait;
    use TransTrait;
    use TransTrait;

    /**
     * The model class associated with this page, if any.
     */
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;
    public static ?string $model = null;
    public static null|string $model = null;
    public static null|string $model = null;

    /**
     * The form data.
     *
     * @var array<string, mixed>
     */
    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];

    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];

    public null|array $data = [];

    public null|array $data = [];

    public ?array $data = [];

    
    /**
     * Get the view that should be used for the page.
     */
    public function getView(): string
    {
        if (isset($this->view)) {
            return $this->view;
        if (isset($this->view)) {
            return $this->view;
        if (isset($this->view)) {
            return $this->view;
        if (isset($this->view)) {
            return $this->view;
        if (isset(static::$view)) {
            return static::$view;
        }

        $view = Str::of(static::class)
            ->after('Modules\\')
            ->before('\\Filament\\')
            ->lower()
            ->append('::filament.pages.')
            ->append(
                Str::of(static::class)
                    ->afterLast('\\')
                    ->kebab()
                    ->toString(),
            ->append(Str::of(static::class)
                ->afterLast('\\')
                ->kebab()
                ->toString()
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
    public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema())->statePath('data');
    }

    /**
    public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema())->statePath('data');
    public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema())->statePath('data');
        return $schema->components($this->getFormSchema())->statePath('data');
    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }

    /**
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
     * Get the form schema for the page.
     *
     * @return array<string, Component>
     * Get the form schema for the page.
     *
     * @return array<string, Component>
     * @return array<string, Component>
     * @return array<string, Component>
     * @return array<string, Component>
     */
    protected function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * Get the associated model class for this page.
     * 
     * This method must be non-static to properly override the parent method.
     * Returns the model class string or throws an exception if not set.
<<<<<<< HEAD
     */
=======
     *
     * @return class-string<\Illuminate\Database\Eloquent\Model>
     */
    /**
     * @return class-string<Model>
     */
>>>>>>> a6ef6dc7 (.)
    public function getModel(): string
    {
        if (static::$model === null) {
            throw new \LogicException('Model class not set for page: ' . static::class);
        }
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        
    /**
     * Get the associated model class for this page.
     */
    public static function getModel(): null|string
    {
        /** @phpstan-ignore property.staticAccess */

<<<<<<< HEAD
        
    /**
     * Get the associated model class for this page.
     */
    public static function getModel(): null|string
    public static function getModel(): null|string
    public static function getModel(): null|string
    public static function getModel(): ?string
    {
        /** @phpstan-ignore property.staticAccess */

=======
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        return static::$model;
=======
        /** @var class-string<\Illuminate\Database\Eloquent\Model> $model */
        $model = static::$model;

        return $model;
>>>>>>> a6ef6dc7 (.)
    }

   

    /*
     * Hook chiamato all'inizializzazione del componente.
    /*
     * Hook chiamato all'inizializzazione del componente.
     *
     * public function mount(int|string $record): void
     * {
     * parent::mount($record);
     * $this->form->fill($this->data ?? []);
     * }
     */
     
    public function mount(int|string $record): void
    {
        parent::mount($record);
        $this->form->fill($this->data ?? []);
    }
    */
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
