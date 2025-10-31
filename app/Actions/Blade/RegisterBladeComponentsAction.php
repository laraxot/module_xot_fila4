<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Blade;

use Illuminate\Support\Facades\Blade;
use Modules\Xot\Actions\File\GetComponentsAction;
use Modules\Xot\Datas\ComponentFileData;
use Spatie\QueueableAction\QueueableAction;

class RegisterBladeComponentsAction
{
    use QueueableAction;

    public function execute(string $path, string $namespace, string $prefix = ''): void
    {
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\View\Components', $prefix);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\View\Components', $prefix);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);
>>>>>>> f1d4085 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

        if ($comps->count() === 0) {
            return;
        }

        foreach ($comps->items() as $comp) {
<<<<<<< HEAD
            if (! ($comp instanceof ComponentFileData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (! ($comp instanceof ComponentFileData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> f1d4085 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
                continue;
            }
            Blade::component($comp->name, $comp->ns);
        }
    }
}
