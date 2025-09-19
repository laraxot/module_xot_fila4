<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
use Filament\Schemas\Schema;
use Closure;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page as FilamentPage;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
/**
 * Base class for all custom pages in the application.
 *
 * This class provides common functionality for custom pages,
 * following the architectural pattern of never extending Filament classes directly.
 *
 * @property ?string $model
 * @property ?array $data
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $form
 */
=======
 * @property \Filament\Schemas\Schema $form
*/
>>>>>>> f1d4085 (.)
=======
 * @property Schema $form
 */
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
    public static null|string $model = null;
=======
    public static ?string $model = null;
>>>>>>> f1d4085 (.)
=======
    public static null|string $model = null;
>>>>>>> 73eab74 (.)

    /**
     * The form data.
     *
     * @var array<string, mixed>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $data = [];

=======
    public ?array $data = [];

    
>>>>>>> f1d4085 (.)
=======
    public null|array $data = [];

>>>>>>> 73eab74 (.)
    /**
     * Get the view that should be used for the page.
     */
    public function getView(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($this->view)) {
            return $this->view;
=======
        if (isset(static::$view)) {
            return static::$view;
>>>>>>> f1d4085 (.)
=======
        if (isset($this->view)) {
            return $this->view;
>>>>>>> 73eab74 (.)
        }

        $view = Str::of(static::class)
            ->after('Modules\\')
            ->before('\\Filament\\')
            ->lower()
            ->append('::filament.pages.')
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            ->append(
                Str::of(static::class)
                    ->afterLast('\\')
                    ->kebab()
                    ->toString(),
<<<<<<< HEAD
=======
            ->append(Str::of(static::class)
                ->afterLast('\\')
                ->kebab()
                ->toString()
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema())->statePath('data');
=======
        return $schema
            ->components($this->getFormSchema())
            ->statePath('data');
>>>>>>> f1d4085 (.)
=======
        return $schema->components($this->getFormSchema())->statePath('data');
>>>>>>> 73eab74 (.)
    }

    /**
     * Get the form schema for the page.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Component>
=======
     * @return array<string, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
=======
     * @return array<string, Component>
>>>>>>> 73eab74 (.)
     */
    protected function getFormSchema(): array
    {
        return [];
    }

    /**
     * Get the associated model class for this page.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getModel(): null|string
=======
    public static function getModel(): ?string
>>>>>>> f1d4085 (.)
=======
    public static function getModel(): null|string
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     *
     * public function mount(int|string $record): void
     * {
     * parent::mount($record);
     * $this->form->fill($this->data ?? []);
     * }
     */
<<<<<<< HEAD
=======
     
    public function mount(int|string $record): void
    {
        parent::mount($record);
        $this->form->fill($this->data ?? []);
    }
    */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
