<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
>>>>>>> 5a14301c (.)
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
>>>>>>> 5a14301c (.)
use Filament\Actions\Action;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
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
use Filament\Schemas\Schema;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Filament\Support\Colors\Color;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Schemas\Schema;
=======
>>>>>>> 2850177 (.)
>>>>>>> 3a08b27 (.)
=======
>>>>>>> 5a14301c (.)
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

/**
 * @property Schema $form
 */
class MetatagPage extends Page implements HasForms
{
    use InteractsWithForms;
    use NavigationLabelTrait;

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
    public null|array $data = [];
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public null|array $data = [];
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|array $data = [];
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> ca9324a4 (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|array $data = [];
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|array $data = [];
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> ca9324a4 (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|array $data = [];
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|array $data = [];
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> ca9324a4 (.)
=======
    public null|array $data = [];
>>>>>>> 5a14301c (.)
=======
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public null|array $data = [];
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|array $data = [];
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|array $data = [];
>>>>>>> ca9324a4 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'xot::filament.pages.metatag';

    public function mount(): void
    {
        Assert::isArray($data = config('metatag'));

        // @phpstan-ignore argument.type
        $this->form->fill($data);
    }

    public function form(Schema $schema): Schema
    {
        $metatag = MetatagData::make();

        return $schema
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                TextInput::make('logo_header'),
                TextInput::make('logo_header_dark')->helperText('logo for dark css'),
                TextInput::make('logo_height'),
                Repeater::make('colors')
                    ->schema([
                        Select::make('key')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            ->required()
                            ->options($metatag->getFilamentColors()),
                        Select::make('color')
                            ->options(array_combine(array_keys(Color::all()), array_keys(Color::all())))
                            ->reactive(),
                        ColorPicker::make('hex')
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                            ->label('Chiave')
                            ->required()
                            ->options($metatag->getFilamentColors()),
                        Select::make('color')
                            ->label('Colore')
                            ->options(array_combine(array_keys(Color::all()), array_keys(Color::all())))
                            ->reactive(),
                        ColorPicker::make('hex')
                            ->label('Colore personalizzato')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            ->visible(fn(Get $get) => $get('color') === 'custom')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
                            ->visible(fn ($get) => $get('color') === 'custom')
>>>>>>> 53d6a6ba (.)
=======
                            ->visible(fn ($get) => $get('color') === 'custom')
=======
                            ->visible(fn (callable $get) => $get('color') === 'custom')
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                            ->visible(fn ($get) => $get('color') === 'custom')
>>>>>>> 71586de2 (.)
=======
                            ->visible(fn(Get $get) => $get('color') === 'custom')
>>>>>>> 5a14301c (.)
=======
                            ->visible(fn ($get) => $get('color') === 'custom')
>>>>>>> 53d6a6ba (.)
=======
                            ->visible(fn ($get) => $get('color') === 'custom')
=======
                            ->visible(fn (callable $get) => $get('color') === 'custom')
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
                            ->required(),
                    ])
                    ->columns(3),
            ])
            ->columns(2)
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
            Action::make('save')->submit('save'),
        ];
    }
}
