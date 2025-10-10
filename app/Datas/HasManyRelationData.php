<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class HasManyRelationData extends Data
{
    /**
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
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
>>>>>>> 6cba4fe (.)
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
    ) {}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
    ) {
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
}
