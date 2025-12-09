<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class HasManyRelationData extends Data
{
    /**
<<<<<<< HEAD
     * @param  array<string, mixed>  $updateData
     * @param  array<int|string>|null  $from
     * @param  array<int|string>|null  $to
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
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
=======
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
>>>>>>> 5a14301c (.)
=======
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
>>>>>>> 3fbbf1f5 (.)
    ) {}
}
