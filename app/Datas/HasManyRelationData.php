<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class HasManyRelationData extends Data
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $updateData
     * @param  array<int|string>|null  $from
     * @param  array<int|string>|null  $to
=======
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
>>>>>>> 5a14301c (.)
     */
    public function __construct(
        public string $foreignKey,
        public mixed $parentKey,
        public array $updateData,
        #[MapInputName('from')]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
>>>>>>> 5a14301c (.)
=======
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
>>>>>>> 3fbbf1f5 (.)
=======
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
>>>>>>> 5a14301c (.)
    ) {}
}
