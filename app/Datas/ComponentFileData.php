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

    public string $class;
<<<<<<< HEAD

    public ?string $module = null;

    public ?string $path = null;

    public ?string $ns = null;
=======
    public string $class;
<<<<<<< HEAD
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
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
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public ?string $module = null;
    public ?string $path = null;
    public ?string $ns = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

    public static function collection(EloquentCollection|Collection|array $data): DataCollection
    {
        return self::collect($data, DataCollection::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
