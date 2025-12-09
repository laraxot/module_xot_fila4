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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
>>>>>>> 5a14301c (.)
=======
        $comps = app(GetComponentsAction::class)->execute($path, $namespace . '\View\Components', $prefix);

        if (0 === $comps->count()) {
>>>>>>> 5a14301c (.)
=======
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
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 399f46d3 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 17684f52 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> ca9324a4 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> ca9324a4 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 9db27d12 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 5a14301c (.)
=======
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> ca9324a4 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 5a14301c (.)
=======
            if (!($comp instanceof ComponentFileData)) {
=======
            if (! $comp instanceof ComponentFileData) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            if (!($comp instanceof ComponentFileData)) {
>>>>>>> 3fbbf1f5 (.)
                continue;
            }
            Blade::component($comp->name, $comp->ns);
        }
    }
}
