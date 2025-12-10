<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

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
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)).'/'.$ns_after1;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
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
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> 73eab74 (.)
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
>>>>>>> 218dfed3 (.)

        if (Str::startsWith($ns_after, '/')) {
            $ns_after = Str::after($ns_after, '/');
        }

        if (\in_array($ns, ['pub_theme', 'adm_theme'], false)) {
            // Assicuriamoci che $theme sia una stringa
            $theme = $xot->{$ns};
            Assert::string($theme, 'Il tema deve essere una stringa');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            // Costruiamo i percorsi

            // Costruiamo i percorsi

            // Costruiamo i percorsi
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
>>>>>>> 2f3197ab (.)
            
            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));
            
            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
<<<<<<< HEAD
            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
            
            // Costruiamo i percorsi
            
            // Costruiamo i percorsi
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
>>>>>>> 218dfed3 (.)
            $asset = $themeAssetPath;
            $filename_to = app(FixPathAction::class)->execute(public_path($asset));
            $asset = Str::replace(url(''), '', asset($asset));

<<<<<<< HEAD
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
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
>>>>>>> 218dfed3 (.)
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
=======
=======
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                }

                try {
                    File::copy($filename_from, $filename_to);
<<<<<<< HEAD
=======
                } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
                            ']',
                        $e->getCode(),
                        $e,
                    );
                }
            }

            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
                    throw new Exception('message:['.$e->getMessage().']
                } catch (\Exception $e) {
                    throw new \Exception('message:['.$e->getMessage().']
<<<<<<< HEAD
=======
>>>>>>> origin/develop
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
>>>>>>> 2f3197ab (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
                }
            }

            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
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
>>>>>>> 218dfed3 (.)

            return $asset;
        }

        $module_path = app(GetModulePathAction::class)->execute($ns);

        if (Str::endsWith($module_path, '/')) {
            $module_path = Str::beforeLast($module_path, '/');
        }

<<<<<<< HEAD
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);
        $asset = 'assets/'.$ns.'/'.$ns_after;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
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
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
=======
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
        if (! File::exists($filename_to) || 'production' !== app()->environment()) {
            if (! File::exists(\dirname($filename_to))) {
                File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            }
            try {
                File::copy($filename_from, $filename_to);
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
                        ']',
                    $e->getCode(),
                    $e,
                );
            }
        }

        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
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
>>>>>>> 2f3197ab (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
            }
        }

        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
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
>>>>>>> 218dfed3 (.)

        return $asset;
    }
}
