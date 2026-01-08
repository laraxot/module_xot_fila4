<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\Page as FilamentPage;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\Page as FilamentPage;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
<<<<<<< HEAD
=======
use Illuminate\Contracts\View\View;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use LogicException;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Closure;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Concerns\InteractsWithFormActions;
<<<<<<< HEAD
use Filament\Resources\Pages\Page as FilamentPage;
=======
use Filament\Pages\Page as FilamentPage;
>>>>>>> 5a14301c (.)
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 8b18e4bff (.)

/**
 * Base class for all custom pages in the application.
 *
 * This class provides common functionality for custom pages,
 * following the architectural pattern of never extending Filament classes directly.
 *
 * @property ?string $model
 * @property ?array $data
 * @property Schema $form
 */
abstract class XotBasePage extends FilamentPage implements HasForms
{
    use InteractsWithFormActions;
    use InteractsWithForms;
    use NavigationLabelTrait;

    /**
     * The model class associated with this page, if any.
     */
    public static ?string $model = null;

    /**
     * The form data.
     *
     * @var array<string, mixed>
     */
    public ?array $data = [];

    /**
     * Get the view that should be used for the page.
     */
    public function getView(): string
    {
        if (isset($this->view)) {
            return $this->view;
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
     * Configure the schema.
     */
    public function schema(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema())->statePath('data');
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
        if (static::$model === null) {
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
     */
    protected function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
=======
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
        
=======
    /**
     * Get the associated model class for this page.
     */
    public static function getModel(): null|string
    {
        /** @phpstan-ignore property.staticAccess */
>>>>>>> 5a14301c (.)
=======

<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return static::$model;
=======
        /** @var class-string<\Illuminate\Database\Eloquent\Model> $model */
        $model = static::$model;

        return $model;
>>>>>>> a6ef6dc7 (.)
    }

   

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 285375c74 (.)
    /*
     * Hook chiamato all'inizializzazione del componente.
     *
     * public function mount(int|string $record): void
     * {
     * parent::mount($record);
     * $this->form->fill($this->data ?? []);
     * }
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
