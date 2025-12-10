<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
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
<<<<<<< HEAD
=======
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
            
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->form([
                TextInput::make('qty')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->integer(),
            ])
            ->action(function (array $data, ListRecords $livewire): void {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire): void {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire): void {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire): void {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire): void {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire): void {
            ->action(function (array $data, ListRecords $livewire) {
            ->action(function (array $data, ListRecords $livewire) {
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
<<<<<<< HEAD
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue '.$qty.' '.$modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
<<<<<<< HEAD
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue '.$qty.' '.$modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
=======
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
>>>>>>> 5a14301c (.)
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                app(FakeSeederAction::class)
                    ->onQueue()
                    ->execute($modelClass, $qty);

                $title = 'On Queue '.$qty.' '.$modelClass;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
<<<<<<< HEAD
<<<<<<< HEAD
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue '.$qty.' '.$modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue '.$qty.' '.$modelClass;
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
                Notification::make()
                    ->title($title)
                    ->success()
                    ->send();
            })
            ->visible(false);
    }

<<<<<<< HEAD
=======
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        return 'fake_seeder';
    }
}
