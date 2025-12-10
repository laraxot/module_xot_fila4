<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Actions\Model\GetTransKeyByModelClassAction;
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
     * @param  string  $modelClass  Classe del modello da esportare
     * @param  array<string, mixed>  $where  Condizioni where per la query
     * @param  array<int, string>  $includes  Relazioni o campi da includere
     * @param  array<int, string>  $excludes  Campi da escludere
     * @param  callable|null  $callback  Callback per manipolare i dati
     * @param string $modelClass Classe del modello da esportare
     * @param array<string, mixed> $where Condizioni where per la query
     * @param array<int, string> $includes Relazioni o campi da includere
     * @param array<int, string> $excludes Campi da escludere
     * @param callable|null $callback Callback per manipolare i dati
<<<<<<< HEAD
     *
<<<<<<< HEAD
     *
     * 
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
     * 
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
     * @return BinaryFileResponse
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
>>>>>>> 2f3197ab (.)
        ?callable $callback = null,
        null|callable $callback = null,
        null|callable $callback = null,
        ?callable $callback = null,
        ?callable $callback = null,
        ?callable $callback = null,
        ?callable $callback = null,
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
>>>>>>> 2f3197ab (.)
    ): BinaryFileResponse {
        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);
        Assert::subclassOf($modelClass, Model::class);
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        $with = $this->getWithByIncludes($includes);

        // Creiamo l'istanza del modello e costruiamo la query
        /** @var Model $model */
        $model = app($modelClass);
        $query = $model->query()->with($with);
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // Applichiamo le condizioni where
        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        // Otteniamo i risultati
        /** @var Collection $rows */
        $rows = $query->get();
<<<<<<< HEAD

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
        // Filtriamo i campi se sono specificati gli includes
        if ([] !== $includes) {
            $rows = $rows->map(static function ($item) use ($includes) {
                $data = [];
                foreach ($includes as $include) {
                    $data[$include] = data_get($item, $include);
                }

                return $data;
            });
=======
=======
>>>>>>> 2f3197ab (.)
        
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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

        // Otteniamo la chiave di traduzione e creiamo l'export
        $transKey = app(GetTransKeyByModelClassAction::class)->execute($modelClass);
        $collectionExport = new CollectionExport($rows, $transKey);
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
     * @param  array<int, string>  $includes  Campi da includere
     * @param  array<int, string>  $includes  Campi da includere
     * @param array<int, string> $includes Campi da includere
     *
     * 
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
>>>>>>> 2f3197ab (.)
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
            $includeStr = is_string($include) ? $include : (string) $include;
            
=======
=======
            $includeStr = is_string($include) ? $include : (string) $include;
            
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
            
=======
=======
            
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
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
        return sprintf(
            '%s %s.xlsx',
            Str::slug(class_basename($modelClass)),
            Carbon::now()->format('d-m-Y His'),
        );
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        return sprintf('%s %s.xlsx', Str::slug(class_basename($modelClass)), Carbon::now()->format('d-m-Y His'));
=======
        return sprintf(
            '%s %s.xlsx',
            Str::slug(class_basename($modelClass)),
            Carbon::now()->format('d-m-Y His'),
        );
>>>>>>> f1d4085 (.)
    }
}
