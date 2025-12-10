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
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 17684f52 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 399f46d3 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 399f46d3 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 9db27d12 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
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
=======
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> 53d6a6ba (.)
=======
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> 71586de2 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 5a14301c (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
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
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 17684f52 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 399f46d3 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 399f46d3 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 9db27d12 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 5a14301c (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> f1d4085 (.)
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
=======
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> 53d6a6ba (.)
=======
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> 71586de2 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 5a14301c (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> f1d4085 (.)
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
