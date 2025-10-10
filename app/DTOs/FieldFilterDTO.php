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
        public null|string $where_method,
        public null|string $rules,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public null|string $where_method,
        public null|string $rules,
    ) {}
=======
=======
>>>>>>> origin/develop
        public ?string $where_method,
        public ?string $rules,
    ) {
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        public null|string $where_method,
        public null|string $rules,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
}
