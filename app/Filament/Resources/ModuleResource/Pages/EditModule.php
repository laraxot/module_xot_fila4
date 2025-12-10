<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Arr\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
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
=======
>>>>>>> 2f3197ab (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> f1d4085 (.)
use Filament\Actions;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Arr\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Arr\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Models\Module;

use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Arr\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
use Modules\Xot\Actions\Array\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
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
        if (! ($module instanceof Model) || ! isset($module->path)) {
        if (! ($module instanceof Model) || ! isset($module->path)) {
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
>>>>>>> 2f3197ab (.)
        if (! ($module instanceof Model) || ! isset($module->path)) {
            return;
        }

        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> 2f3197ab (.)
        if (!($module instanceof Model) || !isset($module->path)) {
            return;
        }

        $config_path = $module->path . '/config/config.php';
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
<<<<<<< HEAD
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
        if (!($module instanceof Model) || !isset($module->path)) {
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
        if (!($module instanceof Model) || !isset($module->path)) {
            return;
        }

        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
>>>>>>> 399f46d3 (.)
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
>>>>>>> 17684f52 (.)
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    }
}
