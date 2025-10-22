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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function execute(string $modelClass, string $fieldName, null|string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible(null !== $year)
            ->action(static fn() => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): Action
    {
        return Action::make('copy_from_last_year')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible($year !== null)
            ->action(static fn () => app(CopyFromLastYearAction::class)->execute($modelClass, $fieldName, $year));
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
