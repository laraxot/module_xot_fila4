<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Arr\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
>>>>>>> 3fbbf1f5 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> f1d4085 (.)
use Filament\Actions;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Array\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Models\Module;

<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
/**
 * @property Module $record
 */
class EditModule extends XotBaseEditRecord
{
    protected static string $resource = ModuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //    Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return $data;
    }

    protected function afterSave(): void
    {
        $module = $this->record; // Ottiene il record corrente
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
        if (! ($module instanceof Model) || ! isset($module->path)) {
            return;
        }

        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> 7131bd09 (.)
        if (!($module instanceof Model) || !isset($module->path)) {
            return;
        }

        $config_path = $module->path . '/config/config.php';
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
>>>>>>> b93ef594b4 (.)
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
            $data = [];
        }
        $data = array_merge($data, $module->toArray());
        unset($data['path']);
        app(SaveArrayAction::class)->execute($data, $config_path);

        /*
<<<<<<< HEAD
         * $configPath = config_path('modules/colors.php');
         *
         * // Prepara l'array di colori
         * $colorsConfig = [
         * $module->name => [
         * 'colors' => $module->colors,
         * 'icon' => $module->icon,
         * ],
         * ];
         *
         * // Se il file di configurazione esiste già, unisci i colori
         * if (File::exists($configPath)) {
         * $existingConfig = include $configPath;
         * $colorsConfig = array_merge($existingConfig, $colorsConfig);
         * }
         *
         * // Salva il nuovo file di configurazione
         * File::put($configPath, '<?php return ' . var_export($colorsConfig, true) . ';');
         *
         * // Richiama il file di configurazione per essere sicuro che i colori siano caricati
         * Config::set('modules.colors', $colorsConfig);
         */
=======
        $configPath = config_path('modules/colors.php');

        // Prepara l'array di colori
        $colorsConfig = [
            $module->name => [
                'colors' => $module->colors,
                'icon' => $module->icon,
            ],
        ];

        // Se il file di configurazione esiste già, unisci i colori
        if (File::exists($configPath)) {
            $existingConfig = include $configPath;
            $colorsConfig = array_merge($existingConfig, $colorsConfig);
        }

        // Salva il nuovo file di configurazione
        File::put($configPath, '<?php return ' . var_export($colorsConfig, true) . ';');

        // Richiama il file di configurazione per essere sicuro che i colori siano caricati
        Config::set('modules.colors', $colorsConfig);
        */
>>>>>>> f1d4085 (.)
    }
}
