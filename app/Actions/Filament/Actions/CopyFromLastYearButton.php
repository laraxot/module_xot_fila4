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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
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
    }
}
