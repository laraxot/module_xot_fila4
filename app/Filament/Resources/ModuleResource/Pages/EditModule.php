<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Array\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Models\Module;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
        if (! ($module instanceof Model) || ! isset($module->path)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($module instanceof Model) || ! isset($module->path)) {
            return;
        }

        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        if (!($module instanceof Model) || !isset($module->path)) {
>>>>>>> a6ef6dc7 (.)
            return;
        }

        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
<<<<<<< HEAD
        if (! is_array($data)) {
=======
        if (!is_array($data)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            $data = [];
        }
        $data = array_merge($data, $module->toArray());
        unset($data['path']);
        app(SaveArrayAction::class)->execute($data, $config_path);

        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
