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
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
     * @param  string  $modelClass  Classe del modello da esportare
     * @param  array<string, mixed>  $where  Condizioni where per la query
     * @param  array<int, string>  $includes  Relazioni o campi da includere
     * @param  array<int, string>  $excludes  Campi da escludere
     * @param  callable|null  $callback  Callback per manipolare i dati
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
     * @param string $modelClass Classe del modello da esportare
     * @param array<string, mixed> $where Condizioni where per la query
     * @param array<int, string> $includes Relazioni o campi da includere
     * @param array<int, string> $excludes Campi da escludere
     * @param callable|null $callback Callback per manipolare i dati
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * 
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
     * @return BinaryFileResponse
     *
     * @return BinaryFileResponse
     *
     * @return BinaryFileResponse
     *
     * @return BinaryFileResponse
     *
     * @return BinaryFileResponse
     *
=======
=======
<<<<<<< HEAD
     * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
     * @return BinaryFileResponse
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
>>>>>>> 7468a7d2 (.)
     */
    public function execute(
        string $modelClass,
        array $where = [],
        array $includes = [],
        array $excludes = [],
<<<<<<< HEAD
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        ?callable $callback = null,
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        ?callable $callback = null,
        ?callable $callback = null,
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        ?callable $callback = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        null|callable $callback = null,
=======
        ?callable $callback = null,
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
<<<<<<< HEAD
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
=======
>>>>>>> ca9324a4 (.)
=======
        null|callable $callback = null,
=======
        ?callable $callback = null,
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        null|callable $callback = null,
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        null|callable $callback = null,
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
        null|callable $callback = null,
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
        null|callable $callback = null,
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    ): BinaryFileResponse {
        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);
        Assert::subclassOf($modelClass, Model::class);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        $with = $this->getWithByIncludes($includes);

        // Creiamo l'istanza del modello e costruiamo la query
        /** @var Model $model */
        $model = app($modelClass);
        $query = $model->query()->with($with);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        // Applichiamo le condizioni where
        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        // Otteniamo i risultati
        /** @var Collection $rows */
        $rows = $query->get();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

        // Filtriamo i campi se sono specificati gli includes
        if ([] !== $includes) {
        if ([] !== $includes) {
        if ([] !== $includes) {
        if ([] !== $includes) {
        if ([] !== $includes) {
            $rows = $rows->map(static function ($item) use ($includes) {
                $data = [];
                foreach ($includes as $include) {
                    $data[$include] = data_get($item, $include);
                }

                return $data;
            });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        // Filtriamo i campi se sono specificati gli includes
        if ([] !== $includes) {
            $rows = $rows->map(static function ($item) use ($includes) {
                $data = [];
                foreach ($includes as $include) {
                    $data[$include] = data_get($item, $include);
                }
<<<<<<< HEAD

                return $data;
            });
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
            );
>>>>>>> a12f125f4a (.)
=======

                return $data;
            });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
        
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        }

        // Nascondiamo i campi esclusi
        if ([] !== $excludes) {
        if ([] !== $excludes) {
        if ([] !== $excludes) {
        if ([] !== $excludes) {
        if ([] !== $excludes) {
            $rows = $rows->map(function ($item) use ($excludes) {
                if (is_object($item) && method_exists($item, 'makeHidden')) {
                    /** @var Model $item */
                    return $item->makeHidden($excludes);
                }
                return $item;
            });
        }

        // Applichiamo il callback se fornito
        if (null !== $callback) {
        if (null !== $callback) {
        if (null !== $callback) {
        if (null !== $callback) {
        if (null !== $callback) {
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
     * @param  array<int, string>  $includes  Campi da includere
     * @param  array<int, string>  $includes  Campi da includere
     *
     *
     * 
     * @param array<int, string> $includes Campi da includere
     * 
     *
     * 
     *
     * @param array<int, string> $includes Campi da includere
<<<<<<< HEAD
     *
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
>>>>>>> 5a14301c (.)
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
     *
=======
>>>>>>> 2f3197ab (.)
     * 
     *
     * @param array<int, string> $includes Campi da includere
     *
     * 
     *
     * 
     *
     * @param  array<int, string>  $includes  Campi da includere
     * @param array<int, string> $includes Campi da includere
     *
     *
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
     * @param  array<int, string>  $includes  Campi da includere
     * @param  array<int, string>  $includes  Campi da includere
<<<<<<< HEAD
=======
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
     *
=======
     * 
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 218dfed3 (.)
     * @param array<int, string> $includes Campi da includere
     *
     * 
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
     * @param array<int, string> $includes Campi da includere
     *
>>>>>>> 5a14301c (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
     *
     * 
     *
     * @param  array<int, string>  $includes  Campi da includere
     * @param  array<int, string>  $includes  Campi da includere
     * @param array<int, string> $includes Campi da includere
     *
     * 
     *
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
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
     *
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
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
     * @return array<int, string>
     */
    private function getWithByIncludes(array $includes): array
    {
        $with = [];
        foreach ($includes as $include) {
            // Assicuriamo che $include sia una stringa
<<<<<<< HEAD
            $includeStr = is_string($include) ? $include : ((string) $include);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $includeStr = is_string($include) ? $include : (string) $include;
            
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $includeStr = is_string($include) ? $include : ((string) $include);

>>>>>>> 7468a7d2 (.)
=======
            $includeStr = is_string($include) ? $include : (string) $include;
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
            $includeStr = is_string($include) ? $include : ((string) $include);

>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $includeStr = is_string($include) ? $include : ((string) $include);

=======
            $includeStr = is_string($include) ? $include : (string) $include;
            
>>>>>>> a12f125f4a (.)
=======
            $includeStr = is_string($include) ? $include : ((string) $include);

>>>>>>> b93ef594b4 (.)
=======
            $includeStr = is_string($include) ? $include : (string) $include;
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            // Verifichiamo se contiene un punto (indicatore di relazione)
            if (!Str::contains($includeStr, '.')) {
            if (!Str::contains($includeStr, '.')) {
            if (!Str::contains($includeStr, '.')) {
            if (!Str::contains($includeStr, '.')) {
            if (!Str::contains($includeStr, '.')) {
                continue;
            }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
=======
=======
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            // Estraiamo il nome della relazione (prima parte prima del punto)
            $parts = explode('.', $includeStr);
            if (!empty($parts[0])) {
            if (!empty($parts[0])) {
            if (!empty($parts[0])) {
            if (!empty($parts[0])) {
            if (!empty($parts[0])) {
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
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
     * @param  string  $modelClass  Classe del modello
     * @param  string  $modelClass  Classe del modello
     * @param  string  $modelClass  Classe del modello
     * @param string $modelClass Classe del modello
     *
     * 
     * @return string
     * @param string $modelClass Classe del modello
     *
     * @return string
     * @param string $modelClass Classe del modello
     *
     * @return string
     * @param string $modelClass Classe del modello
     *
     * @return string
     * @param string $modelClass Classe del modello
     *
     * @return string
     * @param string $modelClass Classe del modello
     *
     * @return string
     */
    private function getExportName(string $modelClass): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return sprintf(
            '%s %s.xlsx',
            Str::slug(class_basename($modelClass)),
            Carbon::now()->format('d-m-Y His'),
        );
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        return sprintf('%s %s.xlsx', Str::slug(class_basename($modelClass)), Carbon::now()->format('d-m-Y His'));
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
    }
}
