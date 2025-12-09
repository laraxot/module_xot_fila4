<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Table;

<<<<<<< HEAD
use Filament\Actions\Action;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
=======
// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Export\PdfByModelAction;

class PdfAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            ->tooltip('pdf')
            ->openUrlInNewTab()
            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-document-arrow-down')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 5a14301c (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 3fbbf1f5 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
>>>>>>> a12f125f4a (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> b93ef594b4 (.)
=======
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    }
}
