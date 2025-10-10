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
    public string $class;
<<<<<<< HEAD
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
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
=======
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $module = null;
    public ?string $path = null;
    public ?string $ns = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
