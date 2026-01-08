<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class HasManyRelationData extends Data
{
    /**
     * @param  array<string, mixed>  $updateData
     * @param  array<int|string>|null  $from
     * @param  array<int|string>|null  $to
     */
    public function __construct(
        public string $foreignKey,
        public mixed $parentKey,
        public array $updateData,
        #[MapInputName('from')]
<<<<<<< HEAD
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
        public ?array $from = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
    ) {}
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
        public null|array $from = null,
>>>>>>> a6ef6dc7 (.)
        #[MapInputName('to')]
        public ?array $to = null,
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
=======
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
    ) {
    }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
}
