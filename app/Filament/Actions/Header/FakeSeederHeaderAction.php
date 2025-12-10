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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
<<<<<<< HEAD
<<<<<<< HEAD
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->schema([
=======
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
>>>>>>> ce6fc085 (.)
            
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->form([
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $title = 'On Queue '.$qty.' '.$modelClass;
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a67e542f (.)
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
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
                app(FakeSeederAction::class)->onQueue()->execute($modelClass, $qty);

                $title = 'On Queue ' . $qty . ' ' . $modelClass;
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                $title = 'On Queue ' . $qty . ' ' . $modelClass;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
=======
>>>>>>> a67e542f (.)
    public static function getDefaultName(): ?string
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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
    public static function getDefaultName(): null|string
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 17684f52 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
    public static function getDefaultName(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    {
        return 'fake_seeder';
    }
}
