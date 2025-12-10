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
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\View\Components', $prefix);

        if ($comps->count() === 0) {
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\View\Components', $prefix);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace.'\View\Components', $prefix);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
=======
        $comps = app(GetComponentsAction::class)
            ->execute($path, $namespace.'\View\Components', $prefix);
>>>>>>> f1d4085 (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)

        if ($comps->count() === 0) {
<<<<<<< HEAD
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
=======
>>>>>>> 9db27d12 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            return;
        }

        foreach ($comps->items() as $comp) {
<<<<<<< HEAD
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
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
            if (! ($comp instanceof ComponentFileData)) {
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
            if (!($comp instanceof ComponentFileData)) {
=======
=======
=======
            if (! ($comp instanceof ComponentFileData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            if (! ($comp instanceof ComponentFileData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            if (!($comp instanceof ComponentFileData)) {
            if (! $comp instanceof ComponentFileData) {
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            if (! ($comp instanceof ComponentFileData)) {
>>>>>>> 53d6a6ba (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            if (! ($comp instanceof ComponentFileData)) {
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                continue;
            }
            Blade::component($comp->name, $comp->ns);
        }
    }
}
