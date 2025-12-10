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
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
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
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
<<<<<<< HEAD
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
>>>>>>> ca9324a4 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
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
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $view_name = $module_low . '::' . Str::kebab($model_name) . '.show.pdf';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
        $view_name = $module_low.'::'.Str::kebab($model_name).'.show.pdf';
>>>>>>> 551c768c4 (.)

        $view_params = [
            'view' => $view_name,
            'row' => $model,
<<<<<<< HEAD
<<<<<<< HEAD
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
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
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
<<<<<<< HEAD
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
>>>>>>> ca9324a4 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
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
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
            'transKey' => $module_low . '::' . Str::plural($model_name_low) . '.fields',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
>>>>>>> 5cf46378 (.)
=======
            'transKey' => $module_low.'::'.Str::plural($model_name_low).'.fields',
>>>>>>> 551c768c4 (.)
        ];
        $view = view($view_name, $view_params);

        $html = $view->render();

        return app(PdfByHtmlAction::class)->execute($html, $filename, $disk, $out);
    }
}
