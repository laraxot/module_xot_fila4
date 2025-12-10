<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
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
>>>>>>> b7afadf9 (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> f1d4085 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Filament\Actions;
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 414a4ffcb (.)
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Arr\SaveArrayAction;
use Modules\Xot\Filament\Resources\ModuleResource;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
use Illuminate\Database\Eloquent\Model;
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
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 551c768c4 (.)
use Modules\Xot\Models\Module;

<<<<<<< HEAD
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
=======
>>>>>>> 414a4ffcb (.)
use Modules\Xot\Models\Module;

=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
        if (! ($module instanceof Model) || ! isset($module->path)) {
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
        if (! ($module instanceof Model) || ! isset($module->path)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        if (! ($module instanceof Model) || ! isset($module->path)) {
=======
>>>>>>> 414a4ffcb (.)
            return;
        }

        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
        $data = File::getRequire($config_path);
        if (!is_array($data)) {
=======
<<<<<<< HEAD
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $config_path = $module->path.'/config/config.php';
        $data = File::getRequire($config_path);
        if (! is_array($data)) {
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
    }
}
