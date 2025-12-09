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
    public ?array $fields = null;

    public ?string $transKey = null;
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 5a14301c (.)
=======
    public null|array $fields = null;

    public null|string $transKey = null;
>>>>>>> 3fbbf1f5 (.)

    /**
     * Summary of __construct.
     *
<<<<<<< HEAD
     * @param  array<string>  $fields
     */
    public function __construct(View $view, ?string $transKey = null, ?array $fields = null)
=======
     * @param array<string> $fields
     */
    public function __construct(View $view, null|string $transKey = null, null|array $fields = null)
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
