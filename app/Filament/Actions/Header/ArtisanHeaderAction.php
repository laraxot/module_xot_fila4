<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
<<<<<<< HEAD
// use Filament\Actions\Action;
=======
// use Filament\Tables\Actions\Action;
>>>>>>> 5a14301c (.)
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Artisan;
use Webmozart\Assert\Assert;

class ArtisanHeaderAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 5a14301c (.)
=======
            
>>>>>>> 3fbbf1f5 (.)
            // ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            // ->icon('heroicon-o-arrow-down-tray')
<<<<<<< HEAD
            ->action(function (): void {
=======
            ->action(function () {
>>>>>>> 5a14301c (.)
                Assert::string($cmd = $this->getName());
                Artisan::call($cmd);
                $output = Artisan::output();
                Notification::make()
                    ->title('Executed successfully')
                    ->success()
                    ->body($output)
                    ->persistent();
            });
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
    {
        return 'artisan_action';
    }
}
