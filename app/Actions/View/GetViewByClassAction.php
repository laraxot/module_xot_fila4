<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
<<<<<<< HEAD
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
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
>>>>>>> 3fbbf1f5 (.)
=======
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 6dcebf8a (.)
>>>>>>> 285375c74 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 50c0e1043 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
>>>>>>> a6ef6dc7 (.)
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

/**
 * Classe per la conversione di nomi di classi in nomi di viste.
 */
class GetViewByClassAction
{
    use QueueableAction;

    /**
     * Converte un nome di classe in un nome di vista.
     * Esempio: "Modules\UI\Filament\Widgets\GroupWidget" => "ui::filament.widgets.group".
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $class  Il nome della classe da convertire
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 50c0e1043 (.)
     * @param  string  $class  Il nome della classe da convertire
     * @param  string  $suffix  Suffisso opzionale da aggiungere al nome della vista
     * @return string Il nome della vista
     *
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * @param string $class Il nome della classe da convertire
>>>>>>> 27537f124 (.)
     * @param string $suffix Suffisso opzionale da aggiungere al nome della vista
     *
=======
>>>>>>> 50c0e1043 (.)
     * @throws Exception Se la vista non esiste
     *
     * @return string Il nome della vista
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
            ->after('Modules\\'.$module.'\\')
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 5a14301c (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 3fbbf1f5 (.)
=======
            ->after('Modules\\' . $module . '\\')
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 399f46d3 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->after('Modules\\' . $module . '\\')
=======
            ->after('Modules\\'.$module.'\\')
>>>>>>> a12f125f4a (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> b93ef594b4 (.)
=======
            ->after('Modules\\'.$module.'\\')
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> ca9324a4 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
            ->after('Modules\\'.$module.'\\')
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            ->after('Modules\\'.$module.'\\')
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            ->after('Modules\\' . $module . '\\')
=======
            ->after('Modules\\'.$module.'\\')
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> ca9324a4 (.)
=======
            ->after('Modules\\' . $module . '\\')
=======
            ->after('Modules\\'.$module.'\\')
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            ->after('Modules\\'.$module.'\\')
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
            ->after('Modules\\' . $module . '\\')
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
=======
            ->after('Modules\\'.$module.'\\')
>>>>>>> 50c0e1043 (.)
            ->explode('\\')
            ->toArray();

        $mapped = Arr::map($after, function (string $value, int $key) use ($after) {
            if ($key > 0 && isset($after[$key - 1])) {
                $prevValue = $after[$key - 1];
                $prevValueStr = is_string($prevValue) ? $prevValue : (string) $prevValue;

                $value = $this->checkPrev($value, $prevValueStr);
            }
            if ($key > 0 && isset($after[$key - 2])) {
                $prevValue = $after[$key - 2];
                $prevValueStr = is_string($prevValue) ? $prevValue : (string) $prevValue;

                $value = $this->checkPrev($value, $prevValueStr);
            }

            return Str::of($value)->slug()->toString();
        });

        $implode = implode('.', $mapped);
<<<<<<< HEAD
        $views = [
            'pub_theme::'.$implode.$suffix,
            $module_low.'::'.$implode.$suffix,
        ];
        $view = Arr::first($views, view()->exists(...));
<<<<<<< HEAD
<<<<<<< HEAD
        if ($view === null) {
=======
        if (null === $view) {
>>>>>>> 8ab8fd81a (.)
            throw new Exception('View not found: '.implode(', ', $views));
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $view = $module_low . '::' . $implode . $suffix;

        if (!view()->exists($view)) {
            throw new Exception('View not found: ' . $view);
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 50c0e1043 (.)
        $view = $module_low.'::'.$implode.$suffix;

        if (! view()->exists($view)) {
            throw new Exception('View not found: '.$view);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
        $view = $module_low . '::' . $implode . $suffix;

        if (!view()->exists($view)) {
            throw new Exception('View not found: ' . $view);
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
        $view = $module_low.'::'.$implode.$suffix;

        if (!view()->exists($view)) {
            throw new Exception('View not found: '.$view);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
        $view = $module_low . '::' . $implode . $suffix;

        if (!view()->exists($view)) {
            throw new Exception('View not found: ' . $view);
>>>>>>> b93ef594b4 (.)
=======
        $view = $module_low.'::'.$implode.$suffix;

        if (!view()->exists($view)) {
            throw new \Exception('View not found: '.$view);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> d2b0a27 (.)
        $view = $module_low.'::'.$implode.$suffix;

        if (! view()->exists($view)) {
            throw new Exception('View not found: '.$view);
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
=======
>>>>>>> 50c0e1043 (.)
        }

        if (view()->exists($view)) {
            return $view;
        }
        throw new Exception('View not found: '.$view);
    }

    public function checkPrev(string $value, string $prevValue): string
    {
        $singular = Str::of($prevValue)->singular()->toString();

        if (Str::endsWith($value, $singular)) {
            $value = Str::of($value)->beforeLast($singular)->toString();
        }

        return $value;
    }
}
