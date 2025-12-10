<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
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
            
            
            




            

            // 
            

            // 
            
            
            
            
            
<<<<<<< HEAD
            
            
            
            

            // 
=======
>>>>>>> ed734516 (.)
=======
            
>>>>>>> 7131bd09 (.)
=======

            // 
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
            
            
            
            
            
            
            
            
            
            
<<<<<<< HEAD
            
            
            
            
            
            
            
            
            

            

            
            
            
            
            
            
            
            



            
            
            
            
            
            
            
            
            
            




            

            // 
            

            // 
            
            
            
            
            
            
            
            
            
            

            // 
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            

            
            
            
            
            
            
            
            


            
            
            
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            // ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            // ->icon('heroicon-o-arrow-down-tray')
            ->action(function (): void {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function (): void {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function (): void {
            ->action(function () {
            ->action(function () {
            ->action(function (): void {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function (): void {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function () {
            ->action(function (): void {
            ->action(function () {
            ->action(function () {
            ->action(function () {
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        return 'artisan_action';
    }
}
