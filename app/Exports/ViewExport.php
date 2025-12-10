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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
    public ?array $fields = null;

    public ?string $transKey = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 399f46d3 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $fields = null;

    public null|string $transKey = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public null|array $fields = null;

    public null|string $transKey = null;
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $fields = null;

    public null|string $transKey = null;
<<<<<<< HEAD
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
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 7131bd09 (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
    public ?array $fields = null;

    public ?string $transKey = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> b7afadf9 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> ed734516 (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
    public ?array $fields = null;

    public ?string $transKey = null;
>>>>>>> 71586de2 (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 5a14301c (.)
=======
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

    /**
     * Summary of __construct.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string>  $fields
     */
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @param array<string> $fields
     */
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
=======
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
=======
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
