<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class HasManyRelationData extends Data
{
    /**
<<<<<<< HEAD
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
     * @param array<string, mixed>   $updateData
     * @param array<int|string>|null $from
     * @param array<int|string>|null $to
=======
     * @param  array<string, mixed>  $updateData
     * @param  array<int|string>|null  $from
     * @param  array<int|string>|null  $to
>>>>>>> 551c768c4 (.)
     */
    public function __construct(
        public string $foreignKey,
        public mixed $parentKey,
        public array $updateData,
        #[MapInputName('from')]
<<<<<<< HEAD
<<<<<<< HEAD
        public ?array $from = null,
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
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
>>>>>>> 53d6a6ba (.)
=======
        public ?array $from = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
    ) {}
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
    ) {
    }
        public null|array $from = null,
        #[MapInputName('to')]
        public null|array $to = null,
=======
        public ?array $from = null,
        #[MapInputName('to')]
        public ?array $to = null,
>>>>>>> 551c768c4 (.)
    ) {}
}
