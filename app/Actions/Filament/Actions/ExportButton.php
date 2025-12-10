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
            ->tooltip('export XLS')
            ->icon('heroicon-o-inbox-arrow-down')
            // ->visible(null != $year)
            ->action(static fn() => dddx('WIP'));
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
<<<<<<< HEAD
            ->action(static fn() => dddx('WIP'));
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            
            ->tooltip('export XLS')
            ->icon('heroicon-o-inbox-arrow-down')
            // ->visible(null != $year)
            ->action(static fn () => dddx('WIP'));
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
            ->tooltip('export XLS')
            ->icon('heroicon-o-inbox-arrow-down')
            // ->visible(null != $year)
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
<<<<<<< HEAD
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
            ->action(static fn() => dddx('WIP'));
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    }
}
