<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
<<<<<<< HEAD
<<<<<<< HEAD
// use Filament\Actions\Action;
=======
// use Filament\Tables\Actions\Action;
>>>>>>> 5a14301c (.)
=======
// use Filament\Tables\Actions\Action;
>>>>>>> 5a14301c (.)
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\ModelClass\FakeSeederAction;
use Webmozart\Assert\Assert;

class FakeSeederHeaderAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
<<<<<<< HEAD
=======
            
>>>>>>> f1d4085 (.)
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
                TextInput::make('qty')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->integer(),
            ])
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(function (array $data, ListRecords $livewire): void {
=======
            ->action(function (array $data, ListRecords $livewire) {
>>>>>>> 5a14301c (.)
=======
            ->action(function (array $data, ListRecords $livewire) {
>>>>>>> 5a14301c (.)
                $resource = $livewire->getResource();
                /** @var class-string<Model> $modelClass */
                $modelClass = $resource::getModel();
                Assert::classExists($modelClass);

                $qtyRaw = $data['qty'];
                Assert::numeric($qtyRaw);
                $qty = max(1, (int) $qtyRaw);
                Assert::greaterThanEq($qty, 1, 'Quantity must be greater than 0');

<<<<<<< HEAD
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $title = 'On Queue '.$qty.' '.$modelClass;
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
                app(FakeSeederAction::class)
                    ->onQueue()
                    ->execute($modelClass, $qty);

                $title = 'On Queue '.$qty.' '.$modelClass;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
                Notification::make()
                    ->title($title)
                    ->success()
                    ->send();
            })
            ->visible(false);
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getDefaultName(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> a12f125f4a (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public static function getDefaultName(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    {
        return 'fake_seeder';
    }
}
