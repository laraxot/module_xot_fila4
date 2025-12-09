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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $modelClass  Classe del modello da esportare
     * @param  array<string, mixed>  $where  Condizioni where per la query
     * @param  array<int, string>  $includes  Relazioni o campi da includere
     * @param  array<int, string>  $excludes  Campi da escludere
     * @param  callable|null  $callback  Callback per manipolare i dati
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param string $modelClass Classe del modello da esportare
     * @param array<string, mixed> $where Condizioni where per la query
     * @param array<int, string> $includes Relazioni o campi da includere
     * @param array<int, string> $excludes Campi da escludere
     * @param callable|null $callback Callback per manipolare i dati
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
     * @return BinaryFileResponse
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(
        string $modelClass,
        array $where = [],
        array $includes = [],
        array $excludes = [],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        null|callable $callback = null,
=======
        ?callable $callback = null,
>>>>>>> f1d4085 (.)
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
        null|callable $callback = null,
>>>>>>> 5a14301c (.)
=======
        null|callable $callback = null,
=======
        ?callable $callback = null,
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    ): BinaryFileResponse {
        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);
        Assert::subclassOf($modelClass, Model::class);
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
        $with = $this->getWithByIncludes($includes);

        // Creiamo l'istanza del modello e costruiamo la query
        /** @var Model $model */
        $model = app($modelClass);
        $query = $model->query()->with($with);
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
        // Applichiamo le condizioni where
        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        // Otteniamo i risultati
        /** @var Collection $rows */
        $rows = $query->get();
<<<<<<< HEAD

        // Filtriamo i campi se sono specificati gli includes
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($includes !== []) {
=======
        if ([] !== $includes) {
>>>>>>> 5a14301c (.)
=======
        if ([] !== $includes) {
>>>>>>> 5a14301c (.)
=======
        if ([] !== $includes) {
>>>>>>> 5a14301c (.)
            $rows = $rows->map(static function ($item) use ($includes) {
                $data = [];
                foreach ($includes as $include) {
                    $data[$include] = data_get($item, $include);
                }

                return $data;
            });
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
        }

        // Nascondiamo i campi esclusi
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($excludes !== []) {
=======
        if ([] !== $excludes) {
>>>>>>> 5a14301c (.)
=======
        if ([] !== $excludes) {
>>>>>>> 5a14301c (.)
=======
        if ([] !== $excludes) {
>>>>>>> 5a14301c (.)
            $rows = $rows->map(function ($item) use ($excludes) {
                if (is_object($item) && method_exists($item, 'makeHidden')) {
                    /** @var Model $item */
                    return $item->makeHidden($excludes);
                }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                return $item;
            });
        }

        // Applichiamo il callback se fornito
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($callback !== null) {
=======
        if (null !== $callback) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $callback) {
>>>>>>> 5a14301c (.)
=======
        if (null !== $callback) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<int, string>  $includes  Campi da includere
=======
     * @param array<int, string> $includes Campi da includere
<<<<<<< HEAD
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
     * @param array<int, string> $includes Campi da includere
     *
>>>>>>> 5a14301c (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
     * @return array<int, string>
     */
    private function getWithByIncludes(array $includes): array
    {
        $with = [];
        foreach ($includes as $include) {
            // Assicuriamo che $include sia una stringa
<<<<<<< HEAD
            $includeStr = is_string($include) ? $include : ((string) $include);

=======
            $includeStr = is_string($include) ? $include : (string) $include;
            
>>>>>>> f1d4085 (.)
            // Verifichiamo se contiene un punto (indicatore di relazione)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! Str::contains($includeStr, '.')) {
=======
            if (!Str::contains($includeStr, '.')) {
>>>>>>> 5a14301c (.)
=======
            if (!Str::contains($includeStr, '.')) {
>>>>>>> 5a14301c (.)
=======
            if (!Str::contains($includeStr, '.')) {
>>>>>>> 5a14301c (.)
                continue;
            }
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
            // Estraiamo il nome della relazione (prima parte prima del punto)
            $parts = explode('.', $includeStr);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! empty($parts[0])) {
=======
            if (!empty($parts[0])) {
>>>>>>> 5a14301c (.)
=======
            if (!empty($parts[0])) {
>>>>>>> 5a14301c (.)
=======
            if (!empty($parts[0])) {
>>>>>>> 5a14301c (.)
                $with[] = $parts[0];
            }
        }

        return array_unique($with);
    }

    /**
     * Genera il nome del file di export.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $modelClass  Classe del modello
=======
     * @param string $modelClass Classe del modello
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
     * @return string
>>>>>>> 5a14301c (.)
=======
     * @param string $modelClass Classe del modello
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     * @param string $modelClass Classe del modello
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    private function getExportName(string $modelClass): string
    {
<<<<<<< HEAD
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
