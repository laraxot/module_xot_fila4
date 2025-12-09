<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Table;

use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Export\PdfByModelAction;

class PdfAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            ->tooltip('pdf')
            ->openUrlInNewTab()
            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-document-arrow-down')
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
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 399f46d3 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 17684f52 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 399f46d3 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 399f46d3 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> ca9324a4 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 7131bd09 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> ed734516 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 9db27d12 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> ca9324a4 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 9db27d12 (.)
    }
}
