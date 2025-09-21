<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Actions;

use Filament\Actions\Action;
use Spatie\QueueableAction\QueueableAction;

class ExportButton
{
    use QueueableAction;

    public function execute(): Action
    {
        return Action::make('export')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            ->tooltip('export XLS')
            ->icon('heroicon-o-inbox-arrow-down')
            // ->visible(null != $year)
            ->action(static fn() => dddx('WIP'));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            ->tooltip('export XLS')
            ->icon('heroicon-o-inbox-arrow-down')
            // ->visible(null != $year)
            ->action(static fn () => dddx('WIP'));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            ->tooltip('export XLS')
            ->icon('heroicon-o-inbox-arrow-down')
            // ->visible(null != $year)
            ->action(static fn() => dddx('WIP'));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
