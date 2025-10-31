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

    public ?string $module = null;

    public ?string $path = null;

    public ?string $ns = null;
=======
<<<<<<< HEAD
=======
    public string $class;
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
<<<<<<< HEAD
=======
    public ?string $module = null;
    public ?string $path = null;
    public ?string $ns = null;
>>>>>>> f1d4085 (.)
=======
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

    public string $class;

    public ?string $module = null;

    public ?string $path = null;

    public ?string $ns = null;

    /**
     * @param  EloquentCollection<int, mixed>|Collection<int, mixed>|array  $data
     * @return DataCollection<int, static>
     */
    public static function collection(EloquentCollection|Collection|array $data): DataCollection
    {
        return self::collect($data, DataCollection::class);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
