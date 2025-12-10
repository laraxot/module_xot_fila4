<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Filament\Actions\Action;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Colors\Color;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Schema;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

/**
 * @property Schema $form
 */
class MetatagPage extends Page implements HasForms
{
    use InteractsWithForms;
    use NavigationLabelTrait;

    public ?array $data = [];
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $data = [];
    public null|array $data = [];
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
    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'xot::filament.pages.metatag';
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
    public null|array $data = [];
    public null|array $data = [];
    public ?array $data = [];
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
    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public ?array $data = [];
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
    public null|array $data = [];
    public null|array $data = [];
    public null|array $data = [];
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

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
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                TextInput::make('logo_header'),
                TextInput::make('logo_header_dark')->helperText('logo for dark css'),
                TextInput::make('logo_height'),
                Repeater::make('colors')
                    ->schema([
                        Select::make('key')
                            ->required()
                            ->options($metatag->getFilamentColors()),
                        Select::make('color')
                            ->options(array_combine(array_keys(Color::all()), array_keys(Color::all())))
                            ->reactive(),
                        ColorPicker::make('hex')
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                            ->visible(fn(Get $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
<<<<<<< HEAD
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn (callable $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn(Get $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn (callable $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn(Get $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn (callable $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn(Get $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn (callable $get) => $get('color') === 'custom')
                            ->visible(fn ($get) => $get('color') === 'custom')
                            ->visible(fn(Get $get) => $get('color') === 'custom')
=======
>>>>>>> 53d6a6ba (.)
=======
                            ->visible(fn ($get) => $get('color') === 'custom')
=======
                            ->visible(fn (callable $get) => $get('color') === 'custom')
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
