<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Attributes\Validation\ArrayType;
use Spatie\LaravelData\Data;

class HasManyUpdateData extends Data
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<int|string>  $ids
=======
     * @param array<int|string> $ids
>>>>>>> 5a14301c (.)
=======
     * @param array<int|string> $ids
>>>>>>> 5a14301c (.)
=======
     * @param array<int|string> $ids
>>>>>>> 5a14301c (.)
=======
     * @param array<int|string> $ids
>>>>>>> 5a14301c (.)
=======
     * @param array<int|string> $ids
>>>>>>> 5a14301c (.)
     */
    public function __construct(
        public string $foreignKey,
        public mixed $parentKey,
        #[ArrayType]
        public array $ids = [],
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> f1d4085 (.)
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    ) {}
>>>>>>> 300ef70 (.)
}
