<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PdfByModelAction
{
    use QueueableAction;

    public function execute(
        Model $model,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download',
    ): string|BinaryFileResponse {
        $model_class = $model::class;
        $model_name = class_basename($model_class);
        $model_name_low = mb_strtolower($model_name);
        $module = Str::between($model_class, 'Modules\\', '\Models');
        $module_low = mb_strtolower($module);
        /**
         * @var non-falsy-string&view-string
         */
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
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> a12f125f4a (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> b93ef594b4 (.)
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> ca9324a4 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> ca9324a4 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)

        $view_params = [
            'view' => $view_name,
            'row' => $model,
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
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 5a14301c (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 3fbbf1f5 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> a12f125f4a (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> b93ef594b4 (.)
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> ca9324a4 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> ca9324a4 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
        ];
        $view = view($view_name, $view_params);

        $html = $view->render();

        return app(PdfByHtmlAction::class)->execute($html, $filename, $disk, $out);
    }
}
