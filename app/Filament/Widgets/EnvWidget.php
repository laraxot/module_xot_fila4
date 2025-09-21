<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Schemas\Schema;
use Filament\Forms;
<<<<<<< HEAD
=======
=======
use Filament\Forms;
use Filament\Forms\ComponentContainer;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Widgets\Widget;
use Illuminate\Support\Arr;
use Modules\Xot\Datas\EnvData;

/**
<<<<<<< HEAD
 * @property Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions
=======
 * @property \Filament\Schemas\Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions, HasActions
>>>>>>> a12f125f4a (.)
=======
 * @property Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
{
    use InteractsWithActions;
    use InteractsWithForms;

    /** @var array<string, mixed>|null */
<<<<<<< HEAD
    public null|array $data = [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> a12f125f4a (.)
=======
    public null|array $data = [];
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

    public array $only = [];

    protected string $view = 'xot::filament.widgets.env';
<<<<<<< HEAD
=======
=======
 * @property ComponentContainer $form
 */
class EnvWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    /** @var array<string, mixed>|null */
    public ?array $data = [];

    public array $only = [];

    protected static string $view = 'xot::filament.widgets.env';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    public function mount(): void
    {
        /** @var array<string, mixed> */
        $data = EnvData::make()->toArray();
        $this->data = $data;

        $this->form->fill($this->data);
    }

<<<<<<< HEAD
    public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema())->columns(1)->statePath('data');
=======
<<<<<<< HEAD
    public function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getFormSchema())->columns(1)->statePath('data');
=======
        return $schema
            ->components($this->getFormSchema())
            ->columns(1)
            ->statePath('data');
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getFormSchema())->columns(1)->statePath('data');
>>>>>>> b93ef594b4 (.)
=======
    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->columns(1)
            ->statePath('data');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function submit(): void
    {
<<<<<<< HEAD
        if (!is_array($this->data)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_array($this->data)) {
=======
        if (! is_array($this->data)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_array($this->data)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! is_array($this->data)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return;
        }
        EnvData::make()->update($this->data);
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        /*
         * dddx([
         * 'data' => $this->data,
         * // 'data1' => $this->form->getState(),
         * ]);
         */
    }

    /**
     * @return array<Component>
<<<<<<< HEAD
=======
=======
=======

>>>>>>> b93ef594b4 (.)
        /*
         * dddx([
         * 'data' => $this->data,
         * // 'data1' => $this->form->getState(),
         * ]);
         */
    }

    /**
<<<<<<< HEAD
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<Component>
>>>>>>> b93ef594b4 (.)
=======
        /*
        dddx([
            'data' => $this->data,
            // 'data1' => $this->form->getState(),
        ]);
        */
    }

    /**
     * @return array<Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getFormSchema(): array
    {
        $all = [
            'app_url' => TextInput::make('app_url')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                ->placeholder('http://localhost')
                ->helperText('Required for file uploads and other internal configs')
                ->required(),
            'debugbar_enabled' => Toggle::make('debugbar_enabled')->helperText(
                'Enable/Disable debug mode to help debug errors',
            ),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop

                ->placeholder('http://localhost')
                ->helperText('Required for file uploads and other internal configs')
                ->required(),
            'debugbar_enabled' => Toggle::make('debugbar_enabled')

                ->helperText('Enable/Disable debug mode to help debug errors'),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                ->placeholder('http://localhost')
                ->helperText('Required for file uploads and other internal configs')
                ->required(),
            'debugbar_enabled' => Toggle::make('debugbar_enabled')->helperText(
                'Enable/Disable debug mode to help debug errors',
            ),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            'google_maps_api_key' => TextInput::make('google_maps_api_key')
                ->placeholder('AIzaSyAuB_...')
                ->helperText('google maps api key'),
            'telegram_bot_token' => TextInput::make('telegram_bot_token')
                ->placeholder('AIzaSyAuB_...')
                ->helperText('telegram_bot_token'),
        ];

        /**
<<<<<<< HEAD
         * @var array<Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
         * @var array<Component>
=======
         * @var array<\Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
         * @var array<Component>
>>>>>>> b93ef594b4 (.)
=======
         * @var array<Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
         */
        $fields = Arr::only($all, $this->only);

        return $fields;
    }
}
