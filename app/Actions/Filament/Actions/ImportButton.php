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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            ->tooltip('import XLS')
            ->icon('heroicon-o-arrow-up-on-square')
            // ->visible(null != $year)
            ->action(static fn() => dddx('WIP'));
<<<<<<< HEAD
=======
            
            ->tooltip('import XLS')
            ->icon('heroicon-o-arrow-up-on-square')
            // ->visible(null != $year)
            ->action(static fn () => dddx('WIP'));
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    }
}
