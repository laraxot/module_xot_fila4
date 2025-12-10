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
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
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
>>>>>>> ce6fc085 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
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
>>>>>>> a67e542f (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 17684f52 (.)
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
>>>>>>> 218dfed3 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
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
>>>>>>> 2f3197ab (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
=======
>>>>>>> ed734516 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 7131bd09 (.)
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\Http\Livewire', $prefix);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\Http\Livewire', $prefix);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

        foreach ($comps as $comp) {
            Livewire::component($comp->name, $comp->ns);
        }
    }
}
