<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ViewExport implements FromView
{
    use Exportable;

    public View $view;

    /**
     * Summary of fields.
     *
     * @var array<string>
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
    public ?array $fields = null;

    public ?string $transKey = null;
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
    public null|array $fields = null;

    public null|string $transKey = null;
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 399f46d3 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 17684f52 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $fields = null;

    public null|string $transKey = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> ed734516 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 7131bd09 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> ed734516 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> ed734516 (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> ca9324a4 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 9db27d12 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> ca9324a4 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)

    /**
     * Summary of __construct.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string>  $fields
     */
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
=======
     * @param array<string> $fields
     */
<<<<<<< HEAD
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
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
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
=======
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
>>>>>>> a12f125f4a (.)
=======
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @param array<string> $fields
     */
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 5a14301c (.)
=======
=======
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
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
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
     * @param array<string> $fields
     */
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 5a14301c (.)
=======
=======
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @param array<string> $fields
     */
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 5a14301c (.)
=======
=======
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    {
        $this->view = $view;
        $this->transKey = $transKey;
        $this->fields = $fields;
    }

    public function view(): View
    {
        return $this->view;
    }
}
