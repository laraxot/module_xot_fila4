<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Exception;
>>>>>>> 091f883c (.)
=======
use Exception;
>>>>>>> 414a4ffcb (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class AssetAction
{
    use QueueableAction;

    /**
     * Gestisce i percorsi degli asset, copiandoli nella directory pubblica se necessario.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param string $path Il percorso dell'asset
     *
     * @param string $path Il percorso dell'asset
     *
     * @param string $path Il percorso dell'asset
     *
     * @param string $path Il percorso dell'asset
     *
     * @param string $path Il percorso dell'asset
     *
=======
     * @param  string  $path  Il percorso dell'asset
>>>>>>> 551c768c4 (.)
=======
     * @param  string  $path  Il percorso dell'asset
>>>>>>> 414a4ffcb (.)
     * @return string Il percorso pubblico dell'asset
     *
     * @throws Exception Se il file sorgente non esiste o non può essere copiato
     */
    public function execute(string $path): string
    {
        $xot = XotData::make();
        if (Str::startsWith($path, 'https://')) {
            return $path;
        }

        if (Str::startsWith($path, 'http://')) {
            return $path;
        }

        if (File::exists(public_path($path))) {
            return $path;
        }
        $ns = Str::before($path, '::');
        $ns_after = Str::after($path, '::');
        if ($ns === $path) {
            $ns = inAdmin() ? 'adm_theme' : 'pub_theme';
        }

        $ns_after0 = Str::before($ns_after, '/');
        $ns_after1 = Str::after($ns_after, '/');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)).'/'.$ns_after1;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 414a4ffcb (.)
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)).'/'.$ns_after1;
<<<<<<< HEAD
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
<<<<<<< HEAD
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
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
>>>>>>> 5a14301c (.)
=======
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
<<<<<<< HEAD
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $ns_after =
<<<<<<< HEAD
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)).'/'.$ns_after1;
=======
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
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
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

        if (Str::startsWith($ns_after, '/')) {
            $ns_after = Str::after($ns_after, '/');
        }

        if (\in_array($ns, ['pub_theme', 'adm_theme'], false)) {
            // Assicuriamoci che $theme sia una stringa
            $theme = $xot->{$ns};
            Assert::string($theme, 'Il tema deve essere una stringa');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

            // Costruiamo i percorsi
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

            // Costruiamo i percorsi
<<<<<<< HEAD

            // Costruiamo i percorsi
<<<<<<< HEAD

            // Costruiamo i percorsi
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/' . $theme . '/resources/' . $ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
<<<<<<< HEAD
=======
            
            // Costruiamo i percorsi
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======

            // Costruiamo i percorsi
>>>>>>> 551c768c4 (.)
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

<<<<<<< HEAD
            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
            $themeResourcePath = 'Themes/' . $theme . '/resources/' . $ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
            
            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
            $themeResourcePath = 'Themes/' . $theme . '/resources/' . $ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 2f3197ab (.)
            

            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/' . $theme . '/resources/' . $ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
<<<<<<< HEAD
            
            // Costruiamo i percorsi
            
            // Costruiamo i percorsi
            
            // Costruiamo i percorsi
            
            // Costruiamo i percorsi
            
            // Costruiamo i percorsi
            
            // Costruiamo i percorsi
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            
            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));
            
            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
<<<<<<< HEAD
            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
            
            // Costruiamo i percorsi
            
            // Costruiamo i percorsi
=======
>>>>>>> 414a4ffcb (.)
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
=======
=======
            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
            // Costruiamo i percorsi
>>>>>>> d2b0a27 (.)
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
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
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
            $asset = $themeAssetPath;
            $filename_to = app(FixPathAction::class)->execute(public_path($asset));
            $asset = Str::replace(url(''), '', asset($asset));

<<<<<<< HEAD
<<<<<<< HEAD
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
<<<<<<< HEAD
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
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
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
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
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
=======
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
>>>>>>> 551c768c4 (.)
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
<<<<<<< HEAD
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
<<<<<<< HEAD
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> a6ef6dc7 (.)
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
>>>>>>> 5cf46378 (.)
=======
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
>>>>>>> 414a4ffcb (.)
                }

                try {
                    File::copy($filename_from, $filename_to);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
                } catch (Exception $e) {
=======
<<<<<<< HEAD
                } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
                } catch (Exception $e) {
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
                } catch (Exception $e) {
>>>>>>> 414a4ffcb (.)
                    throw new Exception(
                        'message:['.
                        $e->getMessage().
                            ']
                        public_path ['.
                            public_path().
                            ']
                        path ['.
                            $path.
                            ']
                        file from ['.
                            $filename_from.
                            ']
                        file to ['.
                            $filename_to.
<<<<<<< HEAD
<<<<<<< HEAD
                        'message:[' .
                        $e->getMessage() .
                            ']
                        public_path [' .
                            public_path() .
                            ']
                        path [' .
                            $path .
                            ']
                        file from [' .
                            $filename_from .
                            ']
                        file to [' .
                            $filename_to .
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                            ']',
                        $e->getCode(),
                        $e,
                    );
                }
            }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
<<<<<<< HEAD
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
                    throw new Exception('message:['.$e->getMessage().']
                } catch (\Exception $e) {
                    throw new \Exception('message:['.$e->getMessage().']
<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
                    throw new Exception('message:['.$e->getMessage().']
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
                    throw new Exception('message:['.$e->getMessage().']
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                    throw new Exception('message:['.$e->getMessage().']
                    throw new Exception('message:['.$e->getMessage().']
                    throw new Exception('message:['.$e->getMessage().']
<<<<<<< HEAD
                    throw new Exception('message:['.$e->getMessage().']
                    throw new Exception('message:['.$e->getMessage().']
                    throw new Exception('message:['.$e->getMessage().']
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
                    throw new Exception('message:['.$e->getMessage().']
                    throw new Exception('message:['.$e->getMessage().']
                    throw new Exception('message:['.$e->getMessage().']
                    throw new Exception('message:['.$e->getMessage().']
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
                    throw new Exception('message:['.$e->getMessage().']
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
                    throw new Exception('message:['.$e->getMessage().']
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
=======
<<<<<<< HEAD
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
=======
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    throw new Exception('message:['.$e->getMessage().']
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
                        public_path ['.public_path().']
                        path ['.$path.']
                        file from ['.$filename_from.']
                        file to ['.$filename_to.']', $e->getCode(), $e);
                }
            }

            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
                }
            }

            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 218dfed3 (.)
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
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
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

            return $asset;
        }

        $module_path = app(GetModulePathAction::class)->execute($ns);

        if (Str::endsWith($module_path, '/')) {
            $module_path = Str::beforeLast($module_path, '/');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);
        $asset = 'assets/'.$ns.'/'.$ns_after;
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);
        $asset = 'assets/'.$ns.'/'.$ns_after;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $filename_from = app(FixPathAction::class)->execute($module_path . '/resources/' . $ns_after);
        $asset = 'assets/' . $ns . '/' . $ns_after;
<<<<<<< HEAD
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (!File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file [' . $filename_from . '] not Exists , path [' . $path . ']');
        }

        // dddx(app()->environment());// local
        if (!File::exists($filename_to) || 'production' !== app()->environment()) {
            if (!File::exists(\dirname($filename_to))) {
=======
>>>>>>> a6ef6dc7 (.)
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (! File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file ['.$filename_from.'] not Exists , path ['.$path.']');
        }

        // dddx(app()->environment());// local
        if (! File::exists($filename_to) || app()->environment() !== 'production') {
            if (! File::exists(\dirname($filename_to))) {
>>>>>>> b7afadf9 (.)
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);
        $asset = 'assets/'.$ns.'/'.$ns_after;
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (! File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file ['.$filename_from.'] not Exists , path ['.$path.']');
        }

        // dddx(app()->environment());// local
        if (! File::exists($filename_to) || app()->environment() !== 'production') {
            if (! File::exists(\dirname($filename_to))) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> 73eab74 (.)
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
        $filename_from = app(FixPathAction::class)->execute($module_path . '/resources/' . $ns_after);
        $asset = 'assets/' . $ns . '/' . $ns_after;
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (!File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file [' . $filename_from . '] not Exists , path [' . $path . ']');
        }

        // dddx(app()->environment());// local
        if (!File::exists($filename_to) || 'production' !== app()->environment()) {
            if (!File::exists(\dirname($filename_to))) {
<<<<<<< HEAD
=======
>>>>>>> 414a4ffcb (.)
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (! File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file ['.$filename_from.'] not Exists , path ['.$path.']');
        }

        // dddx(app()->environment());// local
        if (! File::exists($filename_to) || app()->environment() !== 'production') {
            if (! File::exists(\dirname($filename_to))) {
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);
        $asset = 'assets/'.$ns.'/'.$ns_after;
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (! File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file ['.$filename_from.'] not Exists , path ['.$path.']');
        }

        // dddx(app()->environment());// local
        if (! File::exists($filename_to) || app()->environment() !== 'production') {
            if (! File::exists(\dirname($filename_to))) {
        $filename_from = app(FixPathAction::class)->execute($module_path . '/resources/' . $ns_after);
        $asset = 'assets/' . $ns . '/' . $ns_after;
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (!File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file [' . $filename_from . '] not Exists , path [' . $path . ']');
        }

        // dddx(app()->environment());// local
        if (!File::exists($filename_to) || 'production' !== app()->environment()) {
            if (!File::exists(\dirname($filename_to))) {
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (!File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file [' . $filename_from . '] not Exists , path [' . $path . ']');
        }

        // dddx(app()->environment());// local
        if (!File::exists($filename_to) || 'production' !== app()->environment()) {
            if (!File::exists(\dirname($filename_to))) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
=======
                File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
            }
            try {
                File::copy($filename_from, $filename_to);
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
                throw new Exception(
                    'message:['.
                    $e->getMessage().
                        ']
                    public_path ['.
                        public_path().
                        ']
                    path ['.
                        $path.
                        ']
                    file from ['.
                        $filename_from.
                        ']
                    file to ['.
                        $filename_to.
<<<<<<< HEAD
<<<<<<< HEAD
                    'message:[' .
                    $e->getMessage() .
                        ']
                    public_path [' .
                        public_path() .
                        ']
                    path [' .
                        $path .
                        ']
                    file from [' .
                        $filename_from .
                        ']
                    file to [' .
                        $filename_to .
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                        ']',
                    $e->getCode(),
                    $e,
                );
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
<<<<<<< HEAD
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
                throw new Exception('message:['.$e->getMessage().']
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);
        $asset = 'assets/'.$ns.'/'.$ns_after;
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (! File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new \Exception('file ['.$filename_from.'] not Exists , path ['.$path.']');
        }

        // dddx(app()->environment());// local
        if (! File::exists($filename_to) || 'production' !== app()->environment()) {
            if (! File::exists(\dirname($filename_to))) {
                File::makeDirectory(\dirname($filename_to), 0755, true, true);
            }
            try {
                File::copy($filename_from, $filename_to);
            } catch (\Exception $e) {
                throw new \Exception('message:['.$e->getMessage().']
<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
                throw new Exception('message:['.$e->getMessage().']
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
                throw new Exception('message:['.$e->getMessage().']
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                throw new Exception('message:['.$e->getMessage().']
                throw new Exception('message:['.$e->getMessage().']
                throw new Exception('message:['.$e->getMessage().']
<<<<<<< HEAD
                throw new Exception('message:['.$e->getMessage().']
                throw new Exception('message:['.$e->getMessage().']
                throw new Exception('message:['.$e->getMessage().']
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
                throw new Exception('message:['.$e->getMessage().']
                throw new Exception('message:['.$e->getMessage().']
                throw new Exception('message:['.$e->getMessage().']
                throw new Exception('message:['.$e->getMessage().']
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
                throw new Exception('message:['.$e->getMessage().']
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
                throw new Exception('message:['.$e->getMessage().']
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
=======
<<<<<<< HEAD
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
=======
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
                throw new Exception('message:['.$e->getMessage().']
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
                    public_path ['.public_path().']
                    path ['.$path.']
                    file from ['.$filename_from.']
                    file to ['.$filename_to.']', $e->getCode(), $e);
            }
        }

        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
            }
        }

        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 218dfed3 (.)
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
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
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

        return $asset;
    }
}
