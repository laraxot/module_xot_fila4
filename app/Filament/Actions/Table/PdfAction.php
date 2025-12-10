<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Table;

use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Export\PdfByModelAction;

class PdfAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            ->tooltip('pdf')
            ->openUrlInNewTab()
            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-document-arrow-down')
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
<<<<<<< HEAD
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
=======
>>>>>>> ed734516 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 7131bd09 (.)
=======
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 2f3197ab (.)
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
<<<<<<< HEAD
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    }
}
