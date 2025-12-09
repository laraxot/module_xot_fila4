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
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
>>>>>>> 5a14301c (.)
=======
    public null|string $module = null;
    public null|string $path = null;
    public null|string $ns = null;
>>>>>>> 3fbbf1f5 (.)

    public static function collection(EloquentCollection|Collection|array $data): DataCollection
    {
        return self::collect($data, DataCollection::class);
    }
}
