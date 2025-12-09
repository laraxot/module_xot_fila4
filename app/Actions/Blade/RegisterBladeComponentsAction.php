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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\View\Components', $prefix);

        if ($comps->count() === 0) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
>>>>>>> 5a14301c (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
>>>>>>> 5a14301c (.)
            return;
        }

        foreach ($comps->items() as $comp) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! ($comp instanceof ComponentFileData)) {
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 5a14301c (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> a12f125f4a (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> b93ef594b4 (.)
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> ca9324a4 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 5a14301c (.)
                continue;
            }
            Blade::component($comp->name, $comp->ns);
        }
    }
}
