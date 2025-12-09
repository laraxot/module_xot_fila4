<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Actions;

use Filament\Actions\Action;
use Spatie\QueueableAction\QueueableAction;

class ImportButton
{
    use QueueableAction;

    public function execute(): Action
    {
        return Action::make('import')
            ->tooltip('import XLS')
            ->icon('heroicon-o-arrow-up-on-square')
            // ->visible(null != $year)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(static fn () => dddx('WIP'));
=======
            ->action(static fn() => dddx('WIP'));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            ->action(static fn() => dddx('WIP'));
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            ->tooltip('import XLS')
            ->icon('heroicon-o-arrow-up-on-square')
            // ->visible(null != $year)
            ->action(static fn () => dddx('WIP'));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            ->tooltip('import XLS')
            ->icon('heroicon-o-arrow-up-on-square')
            // ->visible(null != $year)
            ->action(static fn() => dddx('WIP'));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            ->action(static fn() => dddx('WIP'));
>>>>>>> 5a14301c (.)
    }
}
