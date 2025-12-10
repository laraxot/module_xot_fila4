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

        if ($comps->count() === 0) {
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);

        if (0 === $comps->count()) {
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
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
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\View\Components', $prefix);

        if ($comps->count() === 0) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
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
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);
>>>>>>> f1d4085 (.)

        if (0 === $comps->count()) {
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
            return;
        }

        foreach ($comps->items() as $comp) {
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
            if (! ($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
<<<<<<< HEAD
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (! ($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
=======
>>>>>>> ca9324a4 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                continue;
            }
            Blade::component($comp->name, $comp->ns);
        }
    }
}
