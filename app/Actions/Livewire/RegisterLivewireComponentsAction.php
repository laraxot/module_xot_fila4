<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Livewire;

use Livewire\Livewire;
use Modules\Xot\Actions\File\GetComponentsAction;
use Spatie\QueueableAction\QueueableAction;

class RegisterLivewireComponentsAction
{
    use QueueableAction;

    public function execute(string $path, string $namespace, string $prefix = ''): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
>>>>>>> f1d4085 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 300ef70 (.)

        foreach ($comps as $comp) {
            Livewire::component($comp->name, $comp->ns);
        }
    }
}
