<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
// use Modules\Xot\Services\ArrayService;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;

class XlsByModelClassAction
{
    use QueueableAction;

    /**
     * Esporta i dati di un modello in Excel.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     * @param  string  $modelClass  Classe del modello da esportare
     * @param  array<string, mixed>  $where  Condizioni where per la query
     * @param  array<int, string>  $includes  Relazioni o campi da includere
     * @param  array<int, string>  $excludes  Campi da escludere
     * @param  callable|null  $callback  Callback per manipolare i dati
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
     * @param string $modelClass Classe del modello da esportare
     * @param array<string, mixed> $where Condizioni where per la query
     * @param array<int, string> $includes Relazioni o campi da includere
     * @param array<int, string> $excludes Campi da escludere
     * @param callable|null $callback Callback per manipolare i dati
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
     *
     * @return BinaryFileResponse
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
     * @return BinaryFileResponse
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
     *
     * @return BinaryFileResponse
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     */
    public function execute(
        string $modelClass,
        array $where = [],
        array $includes = [],
        array $excludes = [],
<<<<<<< HEAD
        ?callable $callback = null,
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
        ?callable $callback = null,
=======
        null|callable $callback = null,
>>>>>>> 5a14301c (.)
=======
        null|callable $callback = null,
>>>>>>> 3fbbf1f5 (.)
=======
        null|callable $callback = null,
=======
        null|callable $callback = null,
>>>>>>> 399f46d3 (.)
=======
        null|callable $callback = null,
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        null|callable $callback = null,
=======
        ?callable $callback = null,
>>>>>>> a12f125f4a (.)
=======
        null|callable $callback = null,
>>>>>>> b93ef594b4 (.)
=======
        ?callable $callback = null,
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        null|callable $callback = null,
>>>>>>> ca9324a4 (.)
=======
        null|callable $callback = null,
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
        ?callable $callback = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        ?callable $callback = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        null|callable $callback = null,
=======
        ?callable $callback = null,
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        null|callable $callback = null,
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        null|callable $callback = null,
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        null|callable $callback = null,
>>>>>>> ca9324a4 (.)
=======
        null|callable $callback = null,
=======
        ?callable $callback = null,
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        null|callable $callback = null,
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        null|callable $callback = null,
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        null|callable $callback = null,
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        null|callable $callback = null,
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        null|callable $callback = null,
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        ?callable $callback = null,
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        null|callable $callback = null,
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    ): BinaryFileResponse {
        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);
        Assert::subclassOf($modelClass, Model::class);
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        $with = $this->getWithByIncludes($includes);

        // Creiamo l'istanza del modello e costruiamo la query
        /** @var Model $model */
        $model = app($modelClass);
        $query = $model->query()->with($with);
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        // Applichiamo le condizioni where
        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        // Otteniamo i risultati
        /** @var Collection $rows */
        $rows = $query->get();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

        // Filtriamo i campi se sono specificati gli includes
        if ($includes !== []) {
            $rows = $rows->map(static function ($item) use ($includes) {
                $data = [];
                foreach ($includes as $include) {
                    $data[$include] = data_get($item, $include);
                }

                return $data;
            });
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        // Filtriamo i campi se sono specificati gli includes
        if ([] !== $includes) {
            $rows = $rows->map(
                static function ($item) use ($includes) {
                    $data = [];
                    foreach ($includes as $include) {
                        $data[$include] = data_get($item, $include);
                    }

                    return $data;
                }
            );
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        }

        // Nascondiamo i campi esclusi
        if ($excludes !== []) {
            $rows = $rows->map(function ($item) use ($excludes) {
                if (is_object($item) && method_exists($item, 'makeHidden')) {
                    /** @var Model $item */
                    return $item->makeHidden($excludes);
                }

                return $item;
            });
        }

        // Applichiamo il callback se fornito
        if ($callback !== null) {
            $rows = $rows->map($callback);
        }

        // Creiamo l'export
        $collectionExport = new CollectionExport($rows, [], []);
        $filename = $this->getExportName($modelClass);

        return Excel::download($collectionExport, $filename);
    }

    /**
     * Ottiene le relazioni da caricare in base ai campi inclusi.
     *
<<<<<<< HEAD
     * @param  array<int, string>  $includes  Campi da includere
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<int, string>  $includes  Campi da includere
=======
     * @param array<int, string> $includes Campi da includere
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
     * @param  array<int, string>  $includes  Campi da includere
=======
     * @param array<int, string> $includes Campi da includere
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<int, string>  $includes  Campi da includere
=======
<<<<<<< HEAD
     * @param  array<int, string>  $includes  Campi da includere
=======
     * @param array<int, string> $includes Campi da includere
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     *
=======
     * 
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @param array<int, string> $includes Campi da includere
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
>>>>>>> ca9324a4 (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
     * @param  array<int, string>  $includes  Campi da includere
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     * @return array<int, string>
     */
    private function getWithByIncludes(array $includes): array
    {
        $with = [];
        foreach ($includes as $include) {
            // Assicuriamo che $include sia una stringa
<<<<<<< HEAD
<<<<<<< HEAD
            $includeStr = is_string($include) ? $include : ((string) $include);

=======
<<<<<<< HEAD
<<<<<<< HEAD
            $includeStr = is_string($include) ? $include : ((string) $include);

=======
            $includeStr = is_string($include) ? $include : (string) $include;
            
>>>>>>> f1d4085 (.)
=======
            $includeStr = is_string($include) ? $include : ((string) $include);

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $includeStr = is_string($include) ? $include : ((string) $include);

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            // Verifichiamo se contiene un punto (indicatore di relazione)
            if (! Str::contains($includeStr, '.')) {
                continue;
            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            // Estraiamo il nome della relazione (prima parte prima del punto)
            $parts = explode('.', $includeStr);
            if (! empty($parts[0])) {
                $with[] = $parts[0];
            }
        }

        return array_unique($with);
    }

    /**
     * Genera il nome del file di export.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
     * @param  string  $modelClass  Classe del modello
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     * @param  string  $modelClass  Classe del modello
     */
    private function getExportName(string $modelClass): string
    {
        return sprintf('%s %s.xlsx', Str::slug(class_basename($modelClass)), Carbon::now()->format('d-m-Y His'));
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param string $modelClass Classe del modello
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
     * @return string
     */
    private function getExportName(string $modelClass): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return sprintf('%s %s.xlsx', Str::slug(class_basename($modelClass)), Carbon::now()->format('d-m-Y His'));
=======
=======
     * @param string $modelClass Classe del modello
     *
     * @return string
>>>>>>> a6ef6dc7 (.)
     */
    private function getExportName(string $modelClass): string
    {
        return sprintf('%s %s.xlsx', Str::slug(class_basename($modelClass)), Carbon::now()->format('d-m-Y His'));
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
=======
        return sprintf(
            '%s %s.xlsx',
            Str::slug(class_basename($modelClass)),
            Carbon::now()->format('d-m-Y His'),
        );
>>>>>>> f1d4085 (.)
=======
        return sprintf('%s %s.xlsx', Str::slug(class_basename($modelClass)), Carbon::now()->format('d-m-Y His'));
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    }
}
