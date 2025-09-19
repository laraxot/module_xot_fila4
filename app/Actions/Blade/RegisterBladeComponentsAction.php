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
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);
>>>>>>> f1d4085 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
>>>>>>> 73eab74 (.)

        if (0 === $comps->count()) {
            return;
        }

        foreach ($comps->items() as $comp) {
<<<<<<< HEAD
<<<<<<< HEAD
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> f1d4085 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
                continue;
            }
            Blade::component($comp->name, $comp->ns);
        }
    }
}
