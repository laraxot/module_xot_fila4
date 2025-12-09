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
     * @param  string  $modelClass  Classe del modello da esportare
     * @param  array<string, mixed>  $where  Condizioni where per la query
     * @param  array<int, string>  $includes  Relazioni o campi da includere
     * @param  array<int, string>  $excludes  Campi da escludere
     * @param  callable|null  $callback  Callback per manipolare i dati
=======
     * @param string $modelClass Classe del modello da esportare
     * @param array<string, mixed> $where Condizioni where per la query
     * @param array<int, string> $includes Relazioni o campi da includere
     * @param array<int, string> $excludes Campi da escludere
     * @param callable|null $callback Callback per manipolare i dati
     *
     * @return BinaryFileResponse
>>>>>>> 5a14301c (.)
     */
    public function execute(
        string $modelClass,
        array $where = [],
        array $includes = [],
        array $excludes = [],
<<<<<<< HEAD
<<<<<<< HEAD
        ?callable $callback = null,
=======
        null|callable $callback = null,
>>>>>>> 5a14301c (.)
=======
        null|callable $callback = null,
>>>>>>> 3fbbf1f5 (.)
    ): BinaryFileResponse {
        // Verifichiamo che la classe del modello esista
        Assert::classExists($modelClass);
        Assert::subclassOf($modelClass, Model::class);

        $with = $this->getWithByIncludes($includes);

        // Creiamo l'istanza del modello e costruiamo la query
        /** @var Model $model */
        $model = app($modelClass);
        $query = $model->query()->with($with);

        // Applichiamo le condizioni where
        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        // Otteniamo i risultati
        /** @var Collection $rows */
        $rows = $query->get();

        // Filtriamo i campi se sono specificati gli includes
<<<<<<< HEAD
        if ($includes !== []) {
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
        }

        // Nascondiamo i campi esclusi
<<<<<<< HEAD
        if ($excludes !== []) {
=======
        if ([] !== $excludes) {
>>>>>>> 5a14301c (.)
            $rows = $rows->map(function ($item) use ($excludes) {
                if (is_object($item) && method_exists($item, 'makeHidden')) {
                    /** @var Model $item */
                    return $item->makeHidden($excludes);
                }
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
                return $item;
            });
        }

        // Applichiamo il callback se fornito
<<<<<<< HEAD
        if ($callback !== null) {
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
     * @param  array<int, string>  $includes  Campi da includere
=======
     * @param array<int, string> $includes Campi da includere
     *
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
     * @return array<int, string>
     */
    private function getWithByIncludes(array $includes): array
    {
        $with = [];
        foreach ($includes as $include) {
            // Assicuriamo che $include sia una stringa
            $includeStr = is_string($include) ? $include : ((string) $include);

            // Verifichiamo se contiene un punto (indicatore di relazione)
<<<<<<< HEAD
            if (! Str::contains($includeStr, '.')) {
=======
            if (!Str::contains($includeStr, '.')) {
>>>>>>> 5a14301c (.)
                continue;
            }

            // Estraiamo il nome della relazione (prima parte prima del punto)
            $parts = explode('.', $includeStr);
<<<<<<< HEAD
            if (! empty($parts[0])) {
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
     * @param  string  $modelClass  Classe del modello
=======
     * @param string $modelClass Classe del modello
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    private function getExportName(string $modelClass): string
    {
        return sprintf('%s %s.xlsx', Str::slug(class_basename($modelClass)), Carbon::now()->format('d-m-Y His'));
    }
}
