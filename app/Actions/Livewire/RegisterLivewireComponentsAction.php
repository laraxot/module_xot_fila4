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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 5a14301c (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 3fbbf1f5 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
>>>>>>> a12f125f4a (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> b93ef594b4 (.)
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> ca9324a4 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> ca9324a4 (.)

        foreach ($comps as $comp) {
            Livewire::component($comp->name, $comp->ns);
        }
    }
}
