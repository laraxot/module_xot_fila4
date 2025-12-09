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
use Filament\Schemas\Schema;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
=======
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
>>>>>>> 21348520 (.)
use Filament\Schemas\Components\Component;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
>>>>>>> 73eab74 (.)
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Schemas\Schema;
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
=======
use Filament\Forms;
use Filament\Forms\ComponentContainer;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Filament\Widgets\Widget;
use Illuminate\Support\Arr;
use Modules\Xot\Datas\EnvData;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $form
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class EnvWidget extends Widget implements HasActions, HasForms
=======
class EnvWidget extends Widget implements HasForms, HasActions
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
class EnvWidget extends Widget implements HasForms, HasActions
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions
=======
>>>>>>> ed734516 (.)
=======
 * @property \Filament\Schemas\Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions, HasActions
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
 * @property Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
class EnvWidget extends Widget implements HasForms, HasActions
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
 * @property Schema $form
 */
class EnvWidget extends Widget implements HasForms, HasActions
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
{
    use InteractsWithActions;
    use InteractsWithForms;

    /** @var array<string, mixed>|null */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?array $data = [];
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
    public null|array $data = [];
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> ca9324a4 (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public null|array $data = [];
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)

    public array $only = [];

    protected string $view = 'xot::filament.widgets.env';

    public function mount(): void
    {
        /** @var array<string, mixed> */
        $data = EnvData::make()->toArray();
        $this->data = $data;

        $this->form->fill($this->data);
    }

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
>>>>>>> f1d4085 (.)
=======
        return $schema->components($this->getFormSchema())->columns(1)->statePath('data');
>>>>>>> 73eab74 (.)
    }

    public function submit(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_array($this->data)) {
=======
        if (!is_array($this->data)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_array($this->data)) {
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
        if (!is_array($this->data)) {
>>>>>>> ca9324a4 (.)
=======
        if (!is_array($this->data)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!is_array($this->data)) {
=======
        if (! is_array($this->data)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!is_array($this->data)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
            return;
        }
        EnvData::make()->update($this->data);
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

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
        /*
        dddx([
            'data' => $this->data,
            // 'data1' => $this->form->getState(),
        ]);
        */
    }

    /**
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
     */
    public function getFormSchema(): array
    {
        $all = [
            'app_url' => TextInput::make('app_url')
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                ->placeholder('http://localhost')
                ->helperText('Required for file uploads and other internal configs')
                ->required(),
            'debugbar_enabled' => Toggle::make('debugbar_enabled')->helperText(
                'Enable/Disable debug mode to help debug errors',
            ),
<<<<<<< HEAD
=======

                ->placeholder('http://localhost')
                ->helperText('Required for file uploads and other internal configs')
                ->required(),
            'debugbar_enabled' => Toggle::make('debugbar_enabled')

                ->helperText('Enable/Disable debug mode to help debug errors'),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            'google_maps_api_key' => TextInput::make('google_maps_api_key')
                ->placeholder('AIzaSyAuB_...')
                ->helperText('google maps api key'),
            'telegram_bot_token' => TextInput::make('telegram_bot_token')
                ->placeholder('AIzaSyAuB_...')
                ->helperText('telegram_bot_token'),
        ];

        /**
<<<<<<< HEAD
<<<<<<< HEAD
         * @var array<Component>
=======
         * @var array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
=======
         * @var array<Component>
>>>>>>> 73eab74 (.)
         */
<<<<<<< HEAD
<<<<<<< HEAD
        return Arr::only($all, $this->only);
=======
        $fields = Arr::only($all, $this->only);

        return $fields;
>>>>>>> 5a14301c (.)
=======
        $fields = Arr::only($all, $this->only);

        return $fields;
>>>>>>> 5a14301c (.)
    }
}
