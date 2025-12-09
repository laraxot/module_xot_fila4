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
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
>>>>>>> 5a14301c (.)
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
<<<<<<< HEAD
            ->visible($year !== null)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
=======
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
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
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    {
        return Action::make('copy_from_last_year')
            
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    }
}
