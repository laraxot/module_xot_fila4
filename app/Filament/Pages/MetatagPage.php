<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
>>>>>>> 5a14301c (.)
use Filament\Actions\Action;
=======
<<<<<<< HEAD
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Actions\Action;
=======
use Filament\Actions\Action;
use Filament\Forms\ComponentContainer;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
<<<<<<< HEAD
use Filament\Notifications\Notification;
use Filament\Pages\Page;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Schema;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Filament\Support\Colors\Color;
=======
<<<<<<< HEAD
use Filament\Notifications\Notification;
use Filament\Pages\Page;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Colors\Color;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Support\Colors\Color;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

/**
 * @property Schema $form
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

/**
 * @property Schema $form
=======
use Filament\Support\Colors\Color;

/**
 * @property \Filament\Schemas\Schema $form
>>>>>>> a12f125f4a (.)
=======

/**
 * @property Schema $form
>>>>>>> b93ef594b4 (.)
=======
use Filament\Support\Colors\Color;

/**
 * @property ComponentContainer $form
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 */
class MetatagPage extends Page implements HasForms
{
    use InteractsWithForms;
    use NavigationLabelTrait;

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

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'xot::filament.pages.metatag';
<<<<<<< HEAD
=======
=======
    public ?array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'xot::filament.pages.metatag';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    public function mount(): void
    {
        Assert::isArray($data = config('metatag'));

        // @phpstan-ignore argument.type
        $this->form->fill($data);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function form(Schema $schema): Schema
    {
        $metatag = MetatagData::make();

        return $schema
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            ->components([
                TextInput::make('title')->required(),
                TextInput::make('sitename'),
                TextInput::make('subtitle'),
                TextInput::make('generator'),
                TextInput::make('charset'),
                TextInput::make('author'),
                TextInput::make('description'),
                TextInput::make('keywords'),
<<<<<<< HEAD
=======
                /*
                 * FileUpload::make('logo_header')
                 * ->preserveFilenames()
                 * ->image()
                 * ->imageEditor()
                 * ->moveFiles()
                 * ->disk('public')
                 * ->visibility('public')
                 * ->directory('logo')
                 * ->formatStateUsing(fn ($state): array =>[basename($state)])
                 * //->formatStateUsing(fn ($state): array =>['/uploads/photos/pexels-giona-mason-19138633.jpg'])
                 * ->dehydrateStateUsing(fn ($state) => collect($state)->map(function($item){
                 * return Storage::disk('public')->url($item);
                 * })->first() )
                 * ,
                 */
>>>>>>> 5a14301c (.)
                TextInput::make('logo_header'),
                TextInput::make('logo_header_dark')->helperText('logo for dark css'),
                TextInput::make('logo_height'),
                Repeater::make('colors')
                    ->schema([
                        Select::make('key')
<<<<<<< HEAD
                            ->required()
                            ->options($metatag->getFilamentColors()),
                        Select::make('color')
                            ->options(array_combine(array_keys(Color::all()), array_keys(Color::all())))
                            ->reactive(),
                        ColorPicker::make('hex')
=======
                            ->label('Chiave')
                            ->required()
                            ->options($metatag->getFilamentColors()),
                        Select::make('color')
                            ->label('Colore')
                            ->options(array_combine(array_keys(Color::all()), array_keys(Color::all())))
                            ->reactive(),
                        ColorPicker::make('hex')
                            ->label('Colore personalizzato')
                            ->visible(fn(Get $get) => $get('color') === 'custom')
>>>>>>> 5a14301c (.)
                            ->required(),
                    ])
                    ->columns(3),
            ])
            ->columns(2)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            ->components(
=======
    public function form(Form $form): Form
    {
        $metatag = MetatagData::make();

        return $form
            ->schema(
>>>>>>> origin/develop
                [
                    TextInput::make('title')
                        ->required(),
                    TextInput::make('sitename'),
                    TextInput::make('subtitle'),
                    TextInput::make('generator'),
                    TextInput::make('charset'),
                    TextInput::make('author'),
                    TextInput::make('description'),
                    TextInput::make('keywords'),
                    /*
                FileUpload::make('logo_header')
                    ->preserveFilenames()
                    ->image()
                    ->imageEditor()
                    ->moveFiles()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('logo')
                    ->formatStateUsing(fn ($state): array =>[basename($state)])
                    //->formatStateUsing(fn ($state): array =>['/uploads/photos/pexels-giona-mason-19138633.jpg'])
                    ->dehydrateStateUsing(fn ($state) => collect($state)->map(function($item){
                        return Storage::disk('public')->url($item);
                    })->first() )
                                      ,
                */
                    TextInput::make('logo_header'),
                    TextInput::make('logo_header_dark')
                        ->helperText('logo for dark css'),
                    TextInput::make('logo_height'),
                    Repeater::make('colors')
                        ->schema([
                            Select::make('key')
                                ->label('Chiave')
                                ->required()
                                ->options($metatag->getFilamentColors()),
                            Select::make('color')
                                ->label('Colore')
                                ->options(array_combine(
                                    array_keys(Color::all()),
                                    array_keys(Color::all())
                                ))
                                ->reactive(),
                            ColorPicker::make('hex')
                                ->label('Colore personalizzato')
                                ->visible(fn (Get $get) => $get('color') === 'custom')
                                ->required(),
                        ])
                        ->columns(3),
                ]
            )->columns(2)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        TenantService::saveConfig('metatag', $data);

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
<<<<<<< HEAD
            Action::make('save')->submit('save'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Action::make('save')->submit('save'),
=======
            Action::make('save')
                ->submit('save'),
>>>>>>> a12f125f4a (.)
=======
            Action::make('save')->submit('save'),
>>>>>>> b93ef594b4 (.)
=======
            Action::make('save')
                ->submit('save'),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }
}
