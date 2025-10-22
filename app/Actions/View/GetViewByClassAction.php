<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
use Spatie\QueueableAction\QueueableAction;
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
>>>>>>> f1d4085 (.)
=======
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 300ef70 (.)

/**
 * Classe per la conversione di nomi di classi in nomi di viste.
 */
class GetViewByClassAction
{
    use QueueableAction;

    /**
     * Converte un nome di classe in un nome di vista.
     * Esempio: "Modules\UI\Filament\Widgets\GroupWidget" => "ui::filament.widgets.group"
     *
     * @param  string  $class  Il nome della classe da convertire
     * @param  string  $suffix  Suffisso opzionale da aggiungere al nome della vista
     * @return string Il nome della vista
     *
     * @throws Exception Se la vista non esiste
     */
    public function execute(string $class, string $suffix = ''): string
    {
        $module = Str::of($class)->betweenFirst('Modules\\', '\\')->toString();
        $module_low = Str::of($module)->lower()->toString();
        $after = Str::of($class)
<<<<<<< HEAD
<<<<<<< HEAD
            ->after('Modules\\'.$module.'\\')
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->after('Modules\\' . $module . '\\')
=======
            ->after('Modules\\'.$module.'\\')
>>>>>>> f1d4085 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 300ef70 (.)
            ->explode('\\')
            ->toArray();

        $mapped = Arr::map($after, function (string $value, int $key) use ($after) {
            if ($key > 0 && isset($after[$key - 1])) {
                /** @var mixed $prevValue */
                $prevValue = $after[$key - 1];

                // Gestione sicura delle conversioni di tipo per PHPStan level 10
                $prevValueStr = '';

                if (is_string($prevValue)) {
                    $prevValueStr = $prevValue;
                } elseif ($prevValue === null) {
                    $prevValueStr = '';
                } elseif (is_scalar($prevValue)) {
                    // Cast sicuro per valori scalari (int, float, bool)
                    $prevValueStr = strval($prevValue);
                }

                $singular = Str::of($prevValueStr)->singular()->toString();
                if (Str::endsWith($value, $singular)) {
                    $value = Str::of($value)->beforeLast($singular)->toString();
                }
            }

            return Str::of($value)->slug()->toString();
        });

        $implode = implode('.', $mapped);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        $view = $module_low . '::' . $implode . $suffix;

        if (!view()->exists($view)) {
            throw new Exception('View not found: ' . $view);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        $view = $module_low.'::'.$implode.$suffix;

        if (! view()->exists($view)) {
            throw new Exception('View not found: '.$view);
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        }

        return $view;
    }
}
