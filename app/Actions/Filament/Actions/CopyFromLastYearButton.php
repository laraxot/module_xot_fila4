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
>>>>>>> 399f46d3 (.)
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
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
>>>>>>> 5a14301c (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
>>>>>>> 5a14301c (.)
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
<<<<<<< HEAD
<<<<<<< HEAD
            ->visible($year !== null)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
>>>>>>> b93ef594b4 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
>>>>>>> 5a14301c (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
>>>>>>> 5a14301c (.)
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
>>>>>>> a12f125f4a (.)
=======
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
>>>>>>> 399f46d3 (.)
=======
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
>>>>>>> b93ef594b4 (.)
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
<<<<<<< HEAD
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
>>>>>>> a12f125f4a (.)
=======
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    {
        return Action::make('copy_from_last_year')
            
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
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
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
    }
}
