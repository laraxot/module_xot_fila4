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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);
>>>>>>> a12f125f4a (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
>>>>>>> b93ef594b4 (.)
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
            if (! ($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
>>>>>>> ce6fc085 (.)
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            if (!($comp instanceof ComponentFileData)) {
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
                continue;
            }
            Blade::component($comp->name, $comp->ns);
        }
    }
}
