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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use ReflectionMethod;
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;

=======
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
use SplFileObject;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use ReflectionMethod;
use SplFileObject;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
use ReflectionMethod;
use SplFileObject;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
use ReflectionMethod;
use SplFileObject;
>>>>>>> c06600c (.)
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
use ReflectionMethod;
use SplFileObject;
>>>>>>> 5a14301c (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use ReflectionMethod;
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 5a14301c (.)
=======
use ReflectionMethod;
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;
>>>>>>> ca9324a4 (.)
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
use ReflectionMethod;
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
>>>>>>> 43d67f21 (.)
=======
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
use ReflectionMethod;
>>>>>>> ca9324a4 (.)
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
use ReflectionMethod;
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
use ReflectionMethod;
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
>>>>>>> b7ea1cd1 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
>>>>>>> 5a14301c (.)

/**
 * Classe per estrarre proprietà dai metodi di relazione di un modello.
 *
<<<<<<< HEAD
=======

use function Safe\preg_replace;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Classe per estrarre proprietà dai metodi di relazione di un modello.
 * 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
 * @see https://github.com/mpociot/laravel-test-factory-helper/blob/master/src/Console/GenerateCommand.php#L213
 */
class GetPropertiesFromMethodsByModelAction
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    use QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
use ReflectionMethod;
use Spatie\QueueableAction\QueueableAction;
use SplFileObject;
=======
    use QueueableAction;
>>>>>>> 0e51323 (.)
=======
    use QueueableAction;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
    use QueueableAction;
>>>>>>> 43d67f21 (.)
=======
    use QueueableAction;
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
    use QueueableAction;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    use QueueableAction;
>>>>>>> b7ea1cd1 (.)
=======
    use QueueableAction;
>>>>>>> 5a14301c (.)

    /**
     * Estrae le proprietà dai metodi di relazione del modello.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $model  Il modello da analizzare
=======
>>>>>>> d86d643a (.)
=======
     * @param Model $model Il modello da analizzare
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
     * @param Model $model Il modello da analizzare
<<<<<<< HEAD
     *
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> 43d67f21 (.)
=======
     * @param  Model  $model  Il modello da analizzare
=======
     * @param Model $model Il modello da analizzare
<<<<<<< HEAD
     *
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> 5842a556 (.)
=======
     * @param Model $model Il modello da analizzare
     *
>>>>>>> 5a14301c (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
     * @param Model $model Il modello da analizzare
     *
>>>>>>> 0e51323 (.)
=======
     * @param Model $model Il modello da analizzare
     *
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> 43d67f21 (.)
=======
     * @param  Model  $model  Il modello da analizzare
=======
     * @param Model $model Il modello da analizzare
     *
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> b7ea1cd1 (.)
=======
     * @param  Model  $model  Il modello da analizzare
=======
     * @param Model $model Il modello da analizzare
     *
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
     * @param  Model  $model  Il modello da analizzare
>>>>>>> 16dc7ab0 (.)
=======
     * @param Model $model Il modello da analizzare
     *
>>>>>>> 5a14301c (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
     * @return array<string, string> Dati estratti dalle relazioni
     */
    public function execute(Model $model): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $data = [];
        $methods = get_class_methods($model);

        foreach ($methods as $method) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        Assert::isInstanceOf($model, Model::class, 'Il parametro deve essere un\'istanza di Model');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        $methods = get_class_methods($model);
        Assert::isArray($methods, 'get_class_methods deve restituire un array');

        $data = [];

        foreach ($methods as $method) {
            Assert::string($method, 'Il nome del metodo deve essere una stringa');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
        
        $methods = get_class_methods($model);
        Assert::isArray($methods, 'get_class_methods deve restituire un array');
        
        $data = [];
        
        foreach ($methods as $method) {
            Assert::string($method, 'Il nome del metodo deve essere una stringa');
            
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
            // Ignoriamo i metodi che iniziano con "get" e quelli ereditati da Model
            if (Str::startsWith($method, 'get') || method_exists(Model::class, $method)) {
                continue;
            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
            // Utilizziamo la reflection per ispezionare il codice
            try {
                $reflection = new ReflectionMethod($model, $method);
                $filename = $reflection->getFileName();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

                if ($filename === false) {
                    continue; // Saltiamo i metodi senza file (es. metodi interni)
                }

                Assert::fileExists($filename, "Il file {$filename} non esiste");

                // Leggiamo il contenuto del metodo
                $file = new SplFileObject($filename);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                Assert::isInstanceOf(
                    $file,
                    SplFileObject::class,
                    'Errore nella creazione dell\'oggetto SplFileObject',
                );
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
                
                if ($filename === false) {
                    continue; // Saltiamo i metodi senza file (es. metodi interni)
                }
                
                Assert::fileExists($filename, "Il file $filename non esiste");
                
                // Leggiamo il contenuto del metodo
                $file = new SplFileObject($filename);
                Assert::isInstanceOf($file, SplFileObject::class, 'Errore nella creazione dell\'oggetto SplFileObject');
                
                $file->seek($reflection->getStartLine() - 1);
                $startLine = $file->key();
                $endLine = $reflection->getEndLine();
                
                Assert::greaterThanEq($endLine, $startLine, 'La linea finale deve essere maggiore o uguale a quella iniziale');
                
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
                // Leggiamo il contenuto del metodo
                $code = '';
                while ($file->key() < $endLine) {
                    $currentLine = $file->current();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

                    // Assicuriamoci che la linea corrente sia una stringa
                    Assert::string($currentLine, 'La linea corrente deve essere una stringa');
                    $code .= $currentLine;

                    $file->next();
                }

                // Normalizziamo e analizziamo il codice
                Assert::stringNotEmpty($code, 'Il codice del metodo non può essere vuoto');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
=======
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));
>>>>>>> 0e51323 (.)
=======
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> 5842a556 (.)
=======
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));
>>>>>>> 5a14301c (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
                $replaced = preg_replace('/\s\s+/', '', $code);
                $codeStr = is_string($replaced) ? trim($replaced) : trim($code);
>>>>>>> 16dc7ab0 (.)
=======
                $codeStr = trim(preg_replace('/\s\s+/', '', $code));
>>>>>>> 5a14301c (.)

                // Estrazione del corpo della funzione
                $begin = mb_strpos($codeStr, 'function(');
                $begin = $begin !== false ? $begin : 0;

                $end = mb_strrpos($codeStr, '}');
                $end = $end !== false ? $end : mb_strlen($codeStr);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $length = $end - $begin + 1;
=======
                $length = ($end - $begin) + 1;
>>>>>>> 5a14301c (.)
=======
                $length = ($end - $begin) + 1;
>>>>>>> 3fbbf1f5 (.)
=======
                $length = ($end - $begin) + 1;
>>>>>>> 5a14301c (.)
=======
                $length = ($end - $begin) + 1;
>>>>>>> 5a14301c (.)
                Assert::greaterThan($length, 0, 'La lunghezza del corpo della funzione deve essere positiva');

                $codeStr = mb_substr($codeStr, $begin, $length);
                Assert::stringNotEmpty($codeStr, 'Il corpo della funzione non può essere vuoto');

                // Cerchiamo relazioni belongsTo
                $this->extractBelongsToRelations($codeStr, $model, $method, $data);
<<<<<<< HEAD
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
                
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            } catch (Exception $e) {
                // Se c'è un errore nell'analisi del metodo, lo ignoriamo e passiamo al successivo
                continue;
            }
        }

        return $data;
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
    /**
     * Estrae le relazioni belongsTo dal codice.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
     * @param  string  $codeStr  Il codice da analizzare
     * @param  Model  $model  Il modello
     * @param  string  $method  Il nome del metodo
     * @param  array<string, string>  &$data  L'array in cui salvare i dati estratti
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
     * @param string $codeStr Il codice da analizzare
     * @param Model $model Il modello
     * @param string $method Il nome del metodo
     * @param array<string, string> &$data L'array in cui salvare i dati estratti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
     *
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
     *
     * @return void
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
     *
     * @return void
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
     *
     * @return void
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
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
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            // Verifichiamo che sia effettivamente una relazione
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! ($relationObj instanceof Relation)) {
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> 5a14301c (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> 0e51323 (.)
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> 43d67f21 (.)
=======
            if (! ($relationObj instanceof Relation)) {
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> 5842a556 (.)
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> 5a14301c (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> 43d67f21 (.)
=======
            if (! ($relationObj instanceof Relation)) {
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> b7ea1cd1 (.)
=======
            if (! ($relationObj instanceof Relation)) {
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            if (! ($relationObj instanceof Relation)) {
>>>>>>> 16dc7ab0 (.)
=======
            if (!($relationObj instanceof Relation)) {
>>>>>>> 5a14301c (.)
                return;
            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
            // Verifichiamo che il metodo getForeignKeyName esista
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! method_exists($relationObj, 'getForeignKeyName')) {
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 5a14301c (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 0e51323 (.)
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 43d67f21 (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 5842a556 (.)
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 5a14301c (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 43d67f21 (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> b7ea1cd1 (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            if (! method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 16dc7ab0 (.)
=======
            if (!method_exists($relationObj, 'getForeignKeyName')) {
>>>>>>> 5a14301c (.)
                throw new Exception('Il metodo getForeignKeyName non esiste nella relazione');
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            // Otteniamo il nome della chiave esterna
            $foreignKeyName = $relationObj->getForeignKeyName();
            Assert::string($foreignKeyName, 'Il nome della chiave esterna deve essere una stringa');

            // Otteniamo la classe relazionata
            $relatedClass = get_class($relationObj->getRelated());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            // Chiamiamo GetFakerAction con parametri corretti
            $fakerAction = app(GetFakerAction::class);
            // Assert::isCallable rimosso - metodo verificato a compile time

            $type = 'factory('.$relatedClass.'::class)';
=======
=======
>>>>>>> 5a14301c (.)
            Assert::classExists($relatedClass, "La classe relazionata {$relatedClass} non esiste");

            // Chiamiamo GetFakerAction con parametri corretti
            $fakerAction = app(GetFakerAction::class);
            Assert::isCallable([$fakerAction, 'execute'], 'GetFakerAction::execute deve essere chiamabile');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $type = 'factory(' . $relatedClass . '::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $type = 'factory(' . $relatedClass . '::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
=======
            
            // Verifichiamo che il metodo getForeignKeyName esista
            if (!method_exists($relationObj, 'getForeignKeyName')) {
                throw new \Exception('Il metodo getForeignKeyName non esiste nella relazione');
            }
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ed734516 (.)
            
            // Otteniamo il nome della chiave esterna
            $foreignKeyName = $relationObj->getForeignKeyName();
            Assert::string($foreignKeyName, 'Il nome della chiave esterna deve essere una stringa');
            
            // Otteniamo la classe relazionata
            $relatedClass = get_class($relationObj->getRelated());
            Assert::classExists($relatedClass, "La classe relazionata $relatedClass non esiste");
            
            // Chiamiamo GetFakerAction con parametri corretti
            $fakerAction = app(GetFakerAction::class);
            Assert::isCallable([$fakerAction, 'execute'], 'GetFakerAction::execute deve essere chiamabile');
            
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
            $type = 'factory('.$relatedClass.'::class)';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
            $type = 'factory(' . $relatedClass . '::class)';
>>>>>>> 0e51323 (.)
=======
            $type = 'factory(' . $relatedClass . '::class)';
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
>>>>>>> 43d67f21 (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
=======
            $type = 'factory(' . $relatedClass . '::class)';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
>>>>>>> 5842a556 (.)
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
=======
            $type = 'factory(' . $relatedClass . '::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
            $type = 'factory('.$relatedClass.'::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
            
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> 5a14301c (.)
            Assert::classExists($relatedClass, "La classe relazionata {$relatedClass} non esiste");

            // Chiamiamo GetFakerAction con parametri corretti
            $fakerAction = app(GetFakerAction::class);
            Assert::isCallable([$fakerAction, 'execute'], 'GetFakerAction::execute deve essere chiamabile');

            $type = 'factory(' . $relatedClass . '::class)';
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
<<<<<<< HEAD
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
            
=======
>>>>>>> ca9324a4 (.)
            $type = 'factory('.$relatedClass.'::class)';
=======
>>>>>>> d86d643a (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
>>>>>>> 43d67f21 (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
=======
            $type = 'factory(' . $relatedClass . '::class)';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
>>>>>>> b7ea1cd1 (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
=======
            $type = 'factory(' . $relatedClass . '::class)';
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            $type = 'factory('.$relatedClass.'::class)';
>>>>>>> 16dc7ab0 (.)
            $data[$foreignKeyName] = $fakerAction->execute($foreignKeyName, $type, null);
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
        } catch (Exception $e) {
            // In caso di errore, ignoriamo la relazione
            return;
        }
    }
}
