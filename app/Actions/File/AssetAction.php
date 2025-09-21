<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
     * @param string $path Il percorso dell'asset
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     *
     * @return string Il percorso pubblico dell'asset
     *
     * @throws Exception Se il file sorgente non esiste o non può essere copiato
<<<<<<< HEAD
=======
=======
     * 
     * @return string Il percorso pubblico dell'asset
     * 
     * @throws \Exception Se il file sorgente non esiste o non può essere copiato
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $ns_after =
            str_replace('.', '/', is_string($ns_after0) ? $ns_after0 : ((string) $ns_after0)) . '/' . $ns_after1;
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

        if (Str::startsWith($ns_after, '/')) {
            $ns_after = Str::after($ns_after, '/');
        }

        if (\in_array($ns, ['pub_theme', 'adm_theme'], false)) {
            // Assicuriamoci che $theme sia una stringa
            $theme = $xot->{$ns};
            Assert::string($theme, 'Il tema deve essere una stringa');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/' . $theme . '/resources/' . $ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));

            $themeAssetPath = 'themes/' . $theme . '/' . $ns_after;
<<<<<<< HEAD
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
            
            // Costruiamo i percorsi
            $themeResourcePath = 'Themes/'.$theme.'/resources/'.$ns_after;
            $filename_from = app(FixPathAction::class)->execute(base_path($themeResourcePath));
            
            $themeAssetPath = 'themes/'.$theme.'/'.$ns_after;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $asset = $themeAssetPath;
            $filename_to = app(FixPathAction::class)->execute(public_path($asset));
            $asset = Str::replace(url(''), '', asset($asset));

<<<<<<< HEAD
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
=======
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> a12f125f4a (.)
=======
            if (!File::exists($filename_to)) {
                if (!File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0o755, true, true);
>>>>>>> b93ef594b4 (.)
=======
            if (! File::exists($filename_to)) {
                if (! File::exists(\dirname($filename_to))) {
                    File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                }

                try {
                    File::copy($filename_from, $filename_to);
<<<<<<< HEAD
                } catch (Exception $e) {
=======
<<<<<<< HEAD
                } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                    throw new Exception(
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                }
            }

            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
=======
                    throw new Exception('message:['.$e->getMessage().']
=======
                } catch (\Exception $e) {
                    throw new \Exception('message:['.$e->getMessage().']
>>>>>>> origin/develop
                        public_path ['.public_path().']
                        path ['.$path.']
                        file from ['.$filename_from.']
                        file to ['.$filename_to.']', $e->getCode(), $e);
                }
            }

            Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                }
            }

            Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $asset;
        }

        $module_path = app(GetModulePathAction::class)->execute($ns);

        if (Str::endsWith($module_path, '/')) {
            $module_path = Str::beforeLast($module_path, '/');
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
        $filename_from = app(FixPathAction::class)->execute($module_path.'/resources/'.$ns_after);
        $asset = 'assets/'.$ns.'/'.$ns_after;
=======
        $filename_from = app(FixPathAction::class)->execute($module_path . '/resources/' . $ns_after);
        $asset = 'assets/' . $ns . '/' . $ns_after;
>>>>>>> b93ef594b4 (.)
        $filename_to = app(FixPathAction::class)->execute(public_path($asset));
        $asset = Str::replace(url(''), '', asset($asset));
        if (!File::exists($filename_from)) {
            if (isRunningTestBench()) {
                return $path;
            }
            throw new Exception('file [' . $filename_from . '] not Exists , path [' . $path . ']');
        }

        // dddx(app()->environment());// local
<<<<<<< HEAD
        if (! File::exists($filename_to) || 'production' !== app()->environment()) {
            if (! File::exists(\dirname($filename_to))) {
                File::makeDirectory(\dirname($filename_to), 0755, true, true);
>>>>>>> a12f125f4a (.)
=======
        if (!File::exists($filename_to) || 'production' !== app()->environment()) {
            if (!File::exists(\dirname($filename_to))) {
                File::makeDirectory(\dirname($filename_to), 0o755, true, true);
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            }
            try {
                File::copy($filename_from, $filename_to);
            } catch (Exception $e) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                throw new Exception(
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            }
        }

        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
<<<<<<< HEAD
=======
=======
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
                    public_path ['.public_path().']
                    path ['.$path.']
                    file from ['.$filename_from.']
                    file to ['.$filename_to.']', $e->getCode(), $e);
            }
        }

        Assert::string($asset, '['.__LINE__.']['.class_basename(static::class).']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            }
        }

        Assert::string($asset, '[' . __LINE__ . '][' . class_basename(static::class) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $asset;
    }
}
