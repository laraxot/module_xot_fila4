<?php

declare(strict_types=1);

/**
 * @see https://github.com/TheDoctor0/laravel-factory-generator. 24 days ago
 * @see https://github.com/mpociot/laravel-test-factory-helper  on 2 Mar 2020.
 * @see https://github.com/laravel-shift/factory-generator on 10 Aug.
 * @see https://dev.to/marcosgad/make-factory-more-organized-laravel-3c19.
 * @see https://medium.com/@yohan7788/seeders-and-faker-in-laravel-6806084a0c7.
 */

namespace Modules\Xot\Actions\Factory;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use ReflectionMethod;
use SplFileObject;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;

/**
 * Classe per estrarre proprietà dai metodi di relazione di un modello.
 *
<<<<<<< HEAD
=======
=======

use function Safe\preg_replace;

=======
>>>>>>> b93ef594b4 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;

/**
 * Classe per estrarre proprietà dai metodi di relazione di un modello.
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;

use function Safe\preg_replace;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Classe per estrarre proprietà dai metodi di relazione di un modello.
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @see https://github.com/mpociot/laravel-test-factory-helper/blob/master/src/Console/GenerateCommand.php#L213
 */
class GetPropertiesFromMethodsByModelAction
{
    use QueueableAction;

    /**
     * Estrae le proprietà dai metodi di relazione del modello.
     *
     * @param Model $model Il modello da analizzare
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
     * @return array<string, string> Dati estratti dalle relazioni
     */
    public function execute(Model $model): array
    {
        Assert::isInstanceOf($model, Model::class, 'Il parametro deve essere un\'istanza di Model');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $methods = get_class_methods($model);
        Assert::isArray($methods, 'get_class_methods deve restituire un array');

        $data = [];

        foreach ($methods as $method) {
            Assert::string($method, 'Il nome del metodo deve essere una stringa');

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $methods = get_class_methods($model);
        Assert::isArray($methods, 'get_class_methods deve restituire un array');

        $data = [];

        foreach ($methods as $method) {
            Assert::string($method, 'Il nome del metodo deve essere una stringa');
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $methods = get_class_methods($model);
        Assert::isArray($methods, 'get_class_methods deve restituire un array');
        
        $data = [];
        
        foreach ($methods as $method) {
            Assert::string($method, 'Il nome del metodo deve essere una stringa');
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            // Ignoriamo i metodi che iniziano con "get" e quelli ereditati da Model
            if (Str::startsWith($method, 'get') || method_exists(Model::class, $method)) {
                continue;
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
>>>>>>> 6cba4fe (.)
            // Utilizziamo la reflection per ispezionare il codice
            try {
                $reflection = new ReflectionMethod($model, $method);
                $filename = $reflection->getFileName();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

                if ($filename === false) {
                    continue; // Saltiamo i metodi senza file (es. metodi interni)
                }

                Assert::fileExists($filename, "Il file {$filename} non esiste");

                // Leggiamo il contenuto del metodo
                $file = new SplFileObject($filename);
                Assert::isInstanceOf(
                    $file,
                    SplFileObject::class,
                    'Errore nella creazione dell\'oggetto SplFileObject',
                );

                $file->seek($reflection->getStartLine() - 1);
                $startLine = $file->key();
                $endLine = $reflection->getEndLine();

                Assert::greaterThanEq(
                    $endLine,
                    $startLine,
                    'La linea finale deve essere maggiore o uguale a quella iniziale',
                );

<<<<<<< HEAD
=======
=======
                
=======

>>>>>>> b93ef594b4 (.)
                if ($filename === false) {
                    continue; // Saltiamo i metodi senza file (es. metodi interni)
                }

                Assert::fileExists($filename, "Il file {$filename} non esiste");

                // Leggiamo il contenuto del metodo
                $file = new SplFileObject($filename);
                Assert::isInstanceOf(
                    $file,
                    SplFileObject::class,
                    'Errore nella creazione dell\'oggetto SplFileObject',
                );

                $file->seek($reflection->getStartLine() - 1);
                $startLine = $file->key();
                $endLine = $reflection->getEndLine();
<<<<<<< HEAD
                
                Assert::greaterThanEq($endLine, $startLine, 'La linea finale deve essere maggiore o uguale a quella iniziale');
                
>>>>>>> a12f125f4a (.)
=======

                Assert::greaterThanEq(
                    $endLine,
                    $startLine,
                    'La linea finale deve essere maggiore o uguale a quella iniziale',
                );

>>>>>>> b93ef594b4 (.)
=======
            
            // Utilizziamo la reflection per ispezionare il codice
            try {
                $reflection = new \ReflectionMethod($model, $method);
                $filename = $reflection->getFileName();
                
                if ($filename === false) {
                    continue; // Saltiamo i metodi senza file (es. metodi interni)
                }
                
                Assert::fileExists($filename, "Il file $filename non esiste");
                
                // Leggiamo il contenuto del metodo
                $file = new \SplFileObject($filename);
                Assert::isInstanceOf($file, \SplFileObject::class, 'Errore nella creazione dell\'oggetto SplFileObject');
                
                $file->seek($reflection->getStartLine() - 1);
                $startLine = $file->key();
                $endLine = $reflection->getEndLine();
                
                Assert::greaterThanEq($endLine, $startLine, 'La linea finale deve essere maggiore o uguale a quella iniziale');
                
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                // Leggiamo il contenuto del metodo
                $code = '';
                while ($file->key() < $endLine) {
                    $currentLine = $file->current();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

                    // Assicuriamoci che la linea corrente sia una stringa
                    Assert::string($currentLine, 'La linea corrente deve essere una stringa');
                    $code .= $currentLine;

                    $file->next();
                }

                // Normalizziamo e analizziamo il codice
                Assert::stringNotEmpty($code, 'Il codice del metodo non può essere vuoto');
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));

                // Estrazione del corpo della funzione
                $begin = mb_strpos($codeStr, 'function(');
                $begin = $begin !== false ? $begin : 0;

                $end = mb_strrpos($codeStr, '}');
                $end = $end !== false ? $end : mb_strlen($codeStr);

                $length = ($end - $begin) + 1;
                Assert::greaterThan($length, 0, 'La lunghezza del corpo della funzione deve essere positiva');

                $codeStr = mb_substr($codeStr, $begin, $length);
                Assert::stringNotEmpty($codeStr, 'Il corpo della funzione non può essere vuoto');

                // Cerchiamo relazioni belongsTo
                $this->extractBelongsToRelations($codeStr, $model, $method, $data);
<<<<<<< HEAD
            } catch (Exception $e) {
=======
=======
                    
=======

>>>>>>> b93ef594b4 (.)
                    // Assicuriamoci che la linea corrente sia una stringa
                    Assert::string($currentLine, 'La linea corrente deve essere una stringa');
                    $code .= $currentLine;

                    $file->next();
                }

                // Normalizziamo e analizziamo il codice
                Assert::stringNotEmpty($code, 'Il codice del metodo non può essere vuoto');
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));

                // Estrazione del corpo della funzione
                $begin = mb_strpos($codeStr, 'function(');
                $begin = $begin !== false ? $begin : 0;

                $end = mb_strrpos($codeStr, '}');
                $end = $end !== false ? $end : mb_strlen($codeStr);

                $length = ($end - $begin) + 1;
                Assert::greaterThan($length, 0, 'La lunghezza del corpo della funzione deve essere positiva');

                $codeStr = mb_substr($codeStr, $begin, $length);
                Assert::stringNotEmpty($codeStr, 'Il corpo della funzione non può essere vuoto');

                // Cerchiamo relazioni belongsTo
                $this->extractBelongsToRelations($codeStr, $model, $method, $data);
<<<<<<< HEAD
                
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
            } catch (Exception $e) {
=======
                    
                    // Assicuriamoci che la linea corrente sia una stringa
                    Assert::string($currentLine, 'La linea corrente deve essere una stringa');
                    $code .= $currentLine;
                    
                    $file->next();
                }
                
                // Normalizziamo e analizziamo il codice
                Assert::stringNotEmpty($code, 'Il codice del metodo non può essere vuoto');
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));
                
                // Estrazione del corpo della funzione
                $begin = mb_strpos($codeStr, 'function(');
                $begin = ($begin !== false) ? $begin : 0;
                
                $end = mb_strrpos($codeStr, '}');
                $end = ($end !== false) ? $end : mb_strlen($codeStr);
                
                $length = $end - $begin + 1;
                Assert::greaterThan($length, 0, 'La lunghezza del corpo della funzione deve essere positiva');
                
                $codeStr = mb_substr($codeStr, $begin, $length);
                Assert::stringNotEmpty($codeStr, 'Il corpo della funzione non può essere vuoto');
                
                // Cerchiamo relazioni belongsTo
                $this->extractBelongsToRelations($codeStr, $model, $method, $data);
                
            } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                // Se c'è un errore nell'analisi del metodo, lo ignoriamo e passiamo al successivo
                continue;
            }
        }

        return $data;
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
    /**
     * Estrae le relazioni belongsTo dal codice.
     *
     * @param string $codeStr Il codice da analizzare
     * @param Model $model Il modello
     * @param string $method Il nome del metodo
     * @param array<string, string> &$data L'array in cui salvare i dati estratti
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     *
     * @return void
     */
    private function extractBelongsToRelations(string $codeStr, Model $model, string $method, array &$data): void
    {
        $search = '$this->belongsTo(';
        $pos = mb_stripos($codeStr, $search);

        if ($pos === false) {
            return; // Il metodo non contiene una relazione belongsTo
        }

        try {
            // Chiamiamo il metodo per ottenere la relazione
            $relationObj = $model->$method();

<<<<<<< HEAD
=======
=======
     * 
=======
     *
>>>>>>> b93ef594b4 (.)
     * @return void
     */
    private function extractBelongsToRelations(string $codeStr, Model $model, string $method, array &$data): void
    {
        $search = '$this->belongsTo(';
        $pos = mb_stripos($codeStr, $search);

        if ($pos === false) {
            return; // Il metodo non contiene una relazione belongsTo
        }

        try {
            // Chiamiamo il metodo per ottenere la relazione
            $relationObj = $model->$method();
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
     * 
     * @return void
     */
    private function extractBelongsToRelations(
        string $codeStr,
        Model $model,
        string $method,
        array &$data
    ): void {
        $search = '$this->belongsTo(';
        $pos = mb_stripos($codeStr, $search);
        
        if ($pos === false) {
            return; // Il metodo non contiene una relazione belongsTo
        }
        
        try {
            // Chiamiamo il metodo per ottenere la relazione
            $relationObj = $model->$method();
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            // Verifichiamo che sia effettivamente una relazione
            if (!($relationObj instanceof Relation)) {
                return;
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
>>>>>>> 6cba4fe (.)
            // Verifichiamo che il metodo getForeignKeyName esista
            if (!method_exists($relationObj, 'getForeignKeyName')) {
                throw new Exception('Il metodo getForeignKeyName non esiste nella relazione');
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            // Otteniamo il nome della chiave esterna
            $foreignKeyName = $relationObj->getForeignKeyName();
            Assert::string($foreignKeyName, 'Il nome della chiave esterna deve essere una stringa');

            // Otteniamo la classe relazionata
            $relatedClass = get_class($relationObj->getRelated());
            Assert::classExists($relatedClass, "La classe relazionata {$relatedClass} non esiste");

            // Chiamiamo GetFakerAction con parametri corretti
            $fakerAction = app(GetFakerAction::class);
            Assert::isCallable([$fakerAction, 'execute'], 'GetFakerAction::execute deve essere chiamabile');

            $type = 'factory(' . $relatedClass . '::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
<<<<<<< HEAD
        } catch (Exception $e) {
=======
=======
            
=======

>>>>>>> b93ef594b4 (.)
            // Otteniamo il nome della chiave esterna
            $foreignKeyName = $relationObj->getForeignKeyName();
            Assert::string($foreignKeyName, 'Il nome della chiave esterna deve essere una stringa');

            // Otteniamo la classe relazionata
            $relatedClass = get_class($relationObj->getRelated());
            Assert::classExists($relatedClass, "La classe relazionata {$relatedClass} non esiste");

            // Chiamiamo GetFakerAction con parametri corretti
            $fakerAction = app(GetFakerAction::class);
            Assert::isCallable([$fakerAction, 'execute'], 'GetFakerAction::execute deve essere chiamabile');

            $type = 'factory(' . $relatedClass . '::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
=======
            
            // Verifichiamo che il metodo getForeignKeyName esista
            if (!method_exists($relationObj, 'getForeignKeyName')) {
                throw new \Exception('Il metodo getForeignKeyName non esiste nella relazione');
            }
            
            // Otteniamo il nome della chiave esterna
            $foreignKeyName = $relationObj->getForeignKeyName();
            Assert::string($foreignKeyName, 'Il nome della chiave esterna deve essere una stringa');
            
            // Otteniamo la classe relazionata
            $relatedClass = get_class($relationObj->getRelated());
            Assert::classExists($relatedClass, "La classe relazionata $relatedClass non esiste");
            
            // Chiamiamo GetFakerAction con parametri corretti
            $fakerAction = app(GetFakerAction::class);
            Assert::isCallable([$fakerAction, 'execute'], 'GetFakerAction::execute deve essere chiamabile');
            
            $type = 'factory('.$relatedClass.'::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
            
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            // In caso di errore, ignoriamo la relazione
            return;
        }
    }
}
