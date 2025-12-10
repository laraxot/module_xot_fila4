<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class CreateDirectoryForFilenameAction
{
    use QueueableAction;

    public function execute(string $filename): void
    {
<<<<<<< HEAD
        if (! File::exists(\dirname($filename))) {
        if (! File::exists(\dirname($filename))) {
        if (! File::exists(\dirname($filename))) {
        if (!File::exists(\dirname($filename))) {
        if (!File::exists(\dirname($filename))) {
        if (!File::exists(\dirname($filename))) {
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
=======
>>>>>>> ab8cc3f3 (.)
        if (! File::exists(\dirname($filename))) {
=======
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
=======
=======
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
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        if (!File::exists(\dirname($filename))) {
        if (!File::exists(\dirname($filename))) {
        if (!File::exists(\dirname($filename))) {
        if (!File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0o755, true, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        if (!File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0o755, true, true);
<<<<<<< HEAD
<<<<<<< HEAD
        if (! File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0755, true, true);
=======
=======
>>>>>>> 7468a7d2 (.)
=======
        if (! File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0755, true, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
        if (!File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0o755, true, true);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
        if (! File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0755, true, true);
>>>>>>> a12f125f4a (.)
=======
        if (!File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0o755, true, true);
>>>>>>> b93ef594b4 (.)
=======
        if (! File::exists(\dirname($filename))) {
            File::makeDirectory(\dirname($filename), 0755, true, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        }
    }
}
