<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Actions;

use Filament\Actions\Action;
use Modules\Xot\Actions\ModelClass\CopyFromLastYearAction;
use Spatie\QueueableAction\QueueableAction;

class CopyFromLastYearButton
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
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
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
>>>>>>> 551c768c4 (.)
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible($year !== null)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
=======
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
>>>>>>> b7afadf9 (.)
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
=======
=======
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
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 091f883c (.)
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
=======
>>>>>>> 414a4ffcb (.)
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->visible($year !== null)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
>>>>>>> 7468a7d2 (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 2f3197ab (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    {
        return Action::make('copy_from_last_year')
            
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 218dfed3 (.)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
            ->visible($year !== null)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
>>>>>>> 414a4ffcb (.)
    }
}
