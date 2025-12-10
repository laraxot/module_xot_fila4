<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Table;

use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\Action;
=======
=======
<<<<<<< HEAD
use Filament\Actions\Action;
=======
// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 17684f52 (.)
=======
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
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
>>>>>>> 7468a7d2 (.)
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
>>>>>>> 091f883c (.)
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            ->action(fn (Model $record) => app(PdfByModelAction::class)->execute(model: $record));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn (Model $record) => app(PdfByModelAction::class)
                ->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
            ->action(fn(Model $record) => app(PdfByModelAction::class)->execute(model: $record));
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    }
}
