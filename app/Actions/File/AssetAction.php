<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class AssetAction
{
    use QueueableAction;

    private XotData $xot;

    /**
     * Gestisce i percorsi degli asset, copiandoli nella directory pubblica se necessario.
     *
     * @param  string  $path  Il percorso dell'asset
     * @return string Il percorso pubblico dell'asset
     *
     * @throws Exception Se il file sorgente non esiste o non può essere copiato
     */
    public function execute(string $path): string
    {
        $this->xot = XotData::make();

        if (Str::startsWith($path, ['https://', 'http://'])) {
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

<<<<<<< HEAD
        $ns_after = $this->normalizeNsAfter($ns_after);

        if (\in_array($ns, ['pub_theme', 'adm_theme'], false)) {
            return $this->resolveThemeAsset($ns, $ns_after);
=======
        $ns_after0 = Str::before($ns_after, '/');
        $ns_after1 = Str::after($ns_after, '/');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
        $ns_after =
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)).'/'.$ns_after1;
<<<<<<< HEAD
=======
<<<<<<< HEAD
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> a12f125f4a (.)
=======
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> b93ef594b4 (.)
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> 5a14301c (.)
=======
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
=======
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> 73eab74 (.)
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
        $ns_after = str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : (string) $ns_after0).'/'.$ns_after1;
>>>>>>> f1d4085 (.)
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

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
>>>>>>> 285375c74 (.)

            // Costruiamo i percorsi
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
>>>>>>> 53d6a6ba (.)
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
            $themeResourcePath = 'Themes/' . $theme . '/resources/' . $ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
            
=======

>>>>>>> b93ef594b4 (.)
            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/' . $theme . '/resources/' . $ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));
<<<<<<< HEAD
            
            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
>>>>>>> a12f125f4a (.)
=======

            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
>>>>>>> b93ef594b4 (.)
=======
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
            
            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));
            
            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
            $asset = $themeAssetPath;
            $filename_to = app(FixPathAction::class)->execute(public_path($asset));
            $asset = Str::replace(url(''), '', asset($asset));

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
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
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
>>>>>>> 5a14301c (.)
=======
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
>>>>>>> 3fbbf1f5 (.)
=======
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
>>>>>>> 5a14301c (.)
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
=======
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> f1d4085 (.)
=======
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
                }

                try {
                    File::copy($filename_from, $filename_to);
                } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
                    throw new Exception(
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                            ']',
                        $e->getCode(),
                        $e,
                    );
                }
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
=======
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
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
                    throw new Exception('message:['.$e->getMessage().']
=======
                } catch (\Exception $e) {
                    throw new \Exception('message:['.$e->getMessage().']
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
                    throw new Exception('message:['.$e->getMessage().']
>>>>>>> ab8cc3f3 (.)
                        public_path ['.public_path().']
                        path ['.$path.']
                        file from ['.$filename_from.']
                        file to ['.$filename_to.']', $e->getCode(), $e);
                }
            }

            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
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
>>>>>>> a12f125f4a (.)
=======
                }
            }

            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

            return $asset;
>>>>>>> 48515e368 (.)
        }

        return $this->resolveModuleAsset($path, $ns, $ns_after);
    }

    /**
     * Normalizes the given path segment.
     */
    private function normalizeNsAfter(string $ns_after): string
    {
        $ns_after0 = Str::before($ns_after, '/');
        $ns_after1 = Str::after($ns_after, '/');
        $ns_after = str_replace('.', '/', $ns_after0).'/'.$ns_after1;

        if (Str::startsWith($ns_after, '/')) {
            return Str::after($ns_after, '/');
        }

        return $ns_after;
    }

    /**
     * Resolves the path for a theme asset.
     */
    private function resolveThemeAsset(string $ns, string $ns_after): string
    {
        $theme = $this->xot->{$ns};
        Assert::string($theme, 'Il tema deve essere una stringa');

        $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
        $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

        $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
        $filename_to = app(FixPathAction::class)->execute(public_path($themeAssetPath));

        $this->copyAsset($filename_from, $filename_to, $themeAssetPath);

        $asset = Str::replace(url(''), '', asset($themeAssetPath));
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');

        return $asset;
    }

    /**
     * Resolves the path for a module asset.
     */
    private function resolveModuleAsset(string $originalPath, string $ns, string $ns_after): string
    {
        $module_path = app(GetModulePathAction::class)->execute($ns);

        if (Str::endsWith($module_path, '/')) {
            $module_path = Str::beforeLast($module_path, '/');
        }

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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);

        if (! File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $originalPath;
            }
            throw new Exception('file ['.$filename_from.'] not Exists , path ['.$originalPath.']');
        }

<<<<<<< HEAD
        $assetPath = 'assets/'.$ns.'/'.$ns_after;
        $filename_to = app(FixPathAction::class)->execute(public_path($assetPath));

        $forceCopy = app()->environment() !== 'production';
        $this->copyAsset($filename_from, $filename_to, $assetPath, $forceCopy);
        
        $asset = Str::replace(url(''), '', asset($assetPath));
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
=======
        // dddx(app()->environment());// local
        if (! File::exists($filename_to) || app()->environment() !== 'production') {
            if (! File::exists(\dirname($filename_to))) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
<<<<<<< HEAD
=======
                File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
            }
            try {
                File::copy($filename_from, $filename_to);
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
                throw new Exception(
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                        ']',
                    $e->getCode(),
                    $e,
                );
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
=======
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
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
                throw new Exception('message:['.$e->getMessage().']
=======
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
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
                throw new Exception('message:['.$e->getMessage().']
>>>>>>> ab8cc3f3 (.)
                    public_path ['.public_path().']
                    path ['.$path.']
                    file from ['.$filename_from.']
                    file to ['.$filename_to.']', $e->getCode(), $e);
            }
        }

        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
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
>>>>>>> a12f125f4a (.)
=======
            }
        }

        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

        return $asset;
    }

    /**
     * Copies an asset file if it doesn't exist or if forced.
     */
    private function copyAsset(string $from, string $to, string $path, bool $force = false): void
    {
        if (! File::exists($to) || $force) {
            $this->ensureDirectoryExists(\dirname($to));

            try {
                File::copy($from, $to);
            } catch (Exception $e) {
                $this->throwCopyException($e, $path, $from, $to);
            }
        }
    }

    /**
     * Ensures the given directory exists.
     */
    private function ensureDirectoryExists(string $directory): void
    {
        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0o755, true, true);
        }
    }

    /**
     * Throws a formatted exception for a file copy error.
     */
    private function throwCopyException(Exception $e, string $path, string $from, string $to): void
    {
        throw new Exception(
            'message:['.$e->getMessage().']
            public_path ['.public_path().']
            path ['.$path.']
            file from ['.$from.']
            file to ['.$to.']',
            $e->getCode(),
            $e,
        );
    }
}
