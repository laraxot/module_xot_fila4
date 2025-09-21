<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Block;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\AssetAction;
use Modules\Xot\Actions\File\FixPathAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Classe per ottenere le opzioni dei blocchi di vista per un tipo specifico.
 */
class GetViewBlocksOptionsByTypeAction
{
    use QueueableAction;

    /**
     * Ottiene le opzioni dei blocchi di vista per un determinato tipo.
     *
     * @param string $type Il tipo di blocco da cercare
     * @param bool $img Se includere i percorsi delle immagini invece dei nomi
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @return array<string, string> Array di opzioni con chiave = vista e valore = nome o percorso immagine
     */
    public function execute(string $type, bool $img = false): array
    {
        Assert::stringNotEmpty($type, 'Il tipo di blocco non può essere vuoto');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $basePath = base_path('Modules');
        Assert::directory($basePath, 'Il percorso base dei moduli non esiste');

        $globPattern = $basePath . '/*/resources/views/components/blocks/' . $type . '/*.blade.php';
        $files = File::glob($globPattern);

        if ($files === false) {
            return []; // Ritorna un array vuoto se non ci sono file
        }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $basePath = base_path('Modules');
        Assert::directory($basePath, 'Il percorso base dei moduli non esiste');

        $globPattern = $basePath . '/*/resources/views/components/blocks/' . $type . '/*.blade.php';
        $files = File::glob($globPattern);

        if ($files === false) {
            return []; // Ritorna un array vuoto se non ci sono file
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $basePath = base_path('Modules');
        Assert::directory($basePath, 'Il percorso base dei moduli non esiste');
        
        $globPattern = $basePath.'/*/resources/views/components/blocks/'.$type.'/*.blade.php';
        $files = File::glob($globPattern);
        
        if ($files === false) {
            return []; // Ritorna un array vuoto se non ci sono file
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        Assert::isArray($files, 'Il risultato di File::glob() deve essere un array');

        $fixPathAction = app(FixPathAction::class);
        Assert::isCallable([$fixPathAction, 'execute'], 'FixPathAction::execute deve essere chiamabile');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $opts = Arr::mapWithKeys($files, function ($path) use ($img, $type, $fixPathAction): array {
            // Verifichiamo che il percorso sia una stringa
            Assert::string($path, 'Il percorso del file deve essere una stringa');

            // Normalizziamo il percorso
            $pathStr = $fixPathAction->execute($path);
            Assert::stringNotEmpty($pathStr, 'Il percorso normalizzato non può essere vuoto');

            // Estraiamo il nome del modulo dal percorso
            $modulePath = Str::of($pathStr)->between(
                DIRECTORY_SEPARATOR . 'Modules' . DIRECTORY_SEPARATOR,
                DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR,
            );

            Assert::notEmpty($modulePath, 'Impossibile estrarre il nome del modulo dal percorso');

            $module_low = is_string($modulePath) ? $modulePath : ((string) $modulePath->lower());
            Assert::stringNotEmpty($module_low, 'Il nome del modulo in minuscolo non può essere vuoto');

            // Estraiamo il nome del file
            $info = pathinfo($pathStr);
            Assert::isArray($info, 'Il risultato di pathinfo() deve essere un array');
            Assert::keyExists($info, 'basename', 'L\'array info deve contenere la chiave basename');

            $name = Str::of($info['basename'])->before('.blade.php')->toString();
            Assert::stringNotEmpty($name, 'Il nome del componente non può essere vuoto');

            // Costruiamo il nome della vista
            $view = $module_low . '::components.blocks.' . $type . '.' . $name;
            Assert::stringNotEmpty($view, 'Il nome della vista non può essere vuoto');

            if ($img) {
                // Se è richiesto il percorso dell'immagine, lo costruiamo
                $assetAction = app(AssetAction::class);
                Assert::isCallable([$assetAction, 'execute'], 'AssetAction::execute deve essere chiamabile');

                $imgPath = $module_low . '::img/screenshots/' . $name . '.png';
                $img_path = $assetAction->execute($imgPath);
                Assert::stringNotEmpty($img_path, 'Il percorso dell\'immagine non può essere vuoto');

                return [$view => $img_path];
            }

            return [$view => $name];
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $opts = Arr::mapWithKeys(
            $files,
            function ($path) use ($img, $type, $fixPathAction): array {
                // Verifichiamo che il percorso sia una stringa
                Assert::string($path, 'Il percorso del file deve essere una stringa');
                
                // Normalizziamo il percorso
                $pathStr = $fixPathAction->execute($path);
                Assert::stringNotEmpty($pathStr, 'Il percorso normalizzato non può essere vuoto');
                
                // Estraiamo il nome del modulo dal percorso
                $modulePath = Str::of($pathStr)
                    ->between(DIRECTORY_SEPARATOR.'Modules'.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR);
                    
                Assert::notEmpty($modulePath, 'Impossibile estrarre il nome del modulo dal percorso');
                
                $module_low = is_string($modulePath) ? $modulePath : (string) $modulePath->lower();
                Assert::stringNotEmpty($module_low, 'Il nome del modulo in minuscolo non può essere vuoto');
                
                // Estraiamo il nome del file
                $info = pathinfo($pathStr);
                Assert::isArray($info, 'Il risultato di pathinfo() deve essere un array');
                Assert::keyExists($info, 'basename', 'L\'array info deve contenere la chiave basename');
                
                $name = Str::of($info['basename'])->before('.blade.php')->toString();
                Assert::stringNotEmpty($name, 'Il nome del componente non può essere vuoto');
                
                // Costruiamo il nome della vista
                $view = $module_low.'::components.blocks.'.$type.'.'.$name;
                Assert::stringNotEmpty($view, 'Il nome della vista non può essere vuoto');
                
                if ($img) {
                    // Se è richiesto il percorso dell'immagine, lo costruiamo
                    $assetAction = app(AssetAction::class);
                    Assert::isCallable([$assetAction, 'execute'], 'AssetAction::execute deve essere chiamabile');
                    
                    $imgPath = $module_low.'::img/screenshots/'.$name.'.png';
                    $img_path = $assetAction->execute($imgPath);
                    Assert::stringNotEmpty($img_path, 'Il percorso dell\'immagine non può essere vuoto');
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

        $opts = Arr::mapWithKeys($files, function ($path) use ($img, $type, $fixPathAction): array {
            // Verifichiamo che il percorso sia una stringa
            Assert::string($path, 'Il percorso del file deve essere una stringa');

            // Normalizziamo il percorso
            $pathStr = $fixPathAction->execute($path);
            Assert::stringNotEmpty($pathStr, 'Il percorso normalizzato non può essere vuoto');

            // Estraiamo il nome del modulo dal percorso
            $modulePath = Str::of($pathStr)->between(
                DIRECTORY_SEPARATOR . 'Modules' . DIRECTORY_SEPARATOR,
                DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR,
            );

            Assert::notEmpty($modulePath, 'Impossibile estrarre il nome del modulo dal percorso');

            $module_low = is_string($modulePath) ? $modulePath : ((string) $modulePath->lower());
            Assert::stringNotEmpty($module_low, 'Il nome del modulo in minuscolo non può essere vuoto');

            // Estraiamo il nome del file
            $info = pathinfo($pathStr);
            Assert::isArray($info, 'Il risultato di pathinfo() deve essere un array');
            Assert::keyExists($info, 'basename', 'L\'array info deve contenere la chiave basename');

            $name = Str::of($info['basename'])->before('.blade.php')->toString();
            Assert::stringNotEmpty($name, 'Il nome del componente non può essere vuoto');

            // Costruiamo il nome della vista
            $view = $module_low . '::components.blocks.' . $type . '.' . $name;
            Assert::stringNotEmpty($view, 'Il nome della vista non può essere vuoto');

            if ($img) {
                // Se è richiesto il percorso dell'immagine, lo costruiamo
                $assetAction = app(AssetAction::class);
                Assert::isCallable([$assetAction, 'execute'], 'AssetAction::execute deve essere chiamabile');

                $imgPath = $module_low . '::img/screenshots/' . $name . '.png';
                $img_path = $assetAction->execute($imgPath);
                Assert::stringNotEmpty($img_path, 'Il percorso dell\'immagine non può essere vuoto');

                return [$view => $img_path];
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======

            return [$view => $name];
        });
>>>>>>> b93ef594b4 (.)
=======

                    return [$view => $img_path];
                }

                return [$view => $name];
            }
        );
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        // Assicuriamo che il risultato sia un array di stringhe
        /** @var array<string, string> $result */
        $result = $opts;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        Assert::isArray($result, 'Il risultato deve essere un array');
        foreach ($result as $key => $value) {
            Assert::string($key, 'La chiave dell\'array deve essere una stringa');
            Assert::string($value, 'Il valore dell\'array deve essere una stringa');
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $result;
    }
}
