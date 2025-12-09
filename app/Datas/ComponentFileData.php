<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

/**
 * Undocumented class.
 */
class ComponentFileData extends Data
{
    public string $name;
<<<<<<< HEAD
<<<<<<< HEAD

    public string $class;
<<<<<<< HEAD

    public ?string $module = null;

    public ?string $path = null;

    public ?string $ns = null;
=======
=======
>>>>>>> 5a14301c (.)
    public string $class;
<<<<<<< HEAD
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
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
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
    public ?string $module = null;
    public ?string $path = null;
    public ?string $ns = null;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public ?string $module = null;
    public ?string $path = null;
    public ?string $ns = null;
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
    public ?string $module = null;
    public ?string $path = null;
    public ?string $ns = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)

    public static function collection(EloquentCollection|Collection|array $data): DataCollection
    {
        return self::collect($data, DataCollection::class);
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
    }
}
