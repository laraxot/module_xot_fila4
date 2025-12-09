<?php

declare(strict_types=1);

namespace Modules\Xot\DTOs;

use Spatie\LaravelData\Data;

/**
 * Undocumented class.
 */
class FieldFilterDTO extends Data
{
    public function __construct(
        public string $param_name,
        public string $field_name,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $where_method,
        public ?string $rules,
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
        public null|string $where_method,
        public null|string $rules,
>>>>>>> 5a14301c (.)
=======
        public null|string $where_method,
        public null|string $rules,
>>>>>>> 3fbbf1f5 (.)
=======
        public null|string $where_method,
        public null|string $rules,
>>>>>>> 5a14301c (.)
    ) {}
=======
        public ?string $where_method,
        public ?string $rules,
    ) {
    }
>>>>>>> f1d4085 (.)
}
