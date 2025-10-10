<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Actions\Action;
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
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
=======
            
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->form([
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                TextInput::make('qty')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->integer(),
            ])
            ->action(function (array $data, ListRecords $livewire) {
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

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
=======
=======
>>>>>>> origin/develop
                app(FakeSeederAction::class)
                    ->onQueue()
                    ->execute($modelClass, $qty);

                $title = 'On Queue '.$qty.' '.$modelClass;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                Notification::make()
                    ->title($title)
                    ->success()
                    ->send();
            })
            ->visible(false);
    }

<<<<<<< HEAD
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
    {
        return 'fake_seeder';
    }
}
