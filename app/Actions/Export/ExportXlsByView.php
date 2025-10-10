<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Contracts\View\View;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\ViewExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Collection;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\ViewExport;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Symfony\Component\HttpFoundation\BinaryFileResponse;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\ViewExport;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Classe per l'esportazione di viste in formato Excel.
 */
class ExportXlsByView
{
    use QueueableAction;

    /**
     * Esporta una vista in Excel.
     *
     * @param View $view La vista da esportare
     * @param array<int, string> $fields Campi da includere nell'export
     * @param string $filename Nome del file Excel
     * @param string|null $transKey Chiave di traduzione per i campi
     *
     * @return BinaryFileResponse
     */
    public function execute(
        View $view,
        array $fields,
        string $filename = 'test.xlsx',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        null|string $transKey = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(strval(...), array_values($fields));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        ?string $transKey = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function (string|int|float|bool $field): string {
                return strval($field);
            }, array_values($fields));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        null|string $transKey = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(strval(...), array_values($fields));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        $export = new ViewExport(
            view: $view,
            transKey: $transKey,
<<<<<<< HEAD
            fields: $stringFields,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            fields: $stringFields,
=======
            fields: $stringFields
>>>>>>> a12f125f4a (.)
=======
            fields: $stringFields,
>>>>>>> b93ef594b4 (.)
=======
            fields: $stringFields
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        );

        return Excel::download($export, $filename);
    }
}
