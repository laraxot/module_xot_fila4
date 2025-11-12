<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\Xot\Models\Cache.
 *
 * @property string $key
 * @property string $value
 * @property int $expiration
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
=======
 * @property-read \Modules\Quaeris\Models\Profile|null $creator
 * @property-read \Modules\Quaeris\Models\Profile|null $updater
>>>>>>> f1570712 (.)
 *
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static Builder<static>|Cache newModelQuery()
 * @method static Builder<static>|Cache newQuery()
 * @method static Builder<static>|Cache query()
 * @method static Builder<static>|Cache whereExpiration($value)
 * @method static Builder<static>|Cache whereKey($value)
 * @method static Builder<static>|Cache whereValue($value)
 *
<<<<<<< HEAD
=======
 * @property int $expiration
 *
 * @method static CacheFactory factory($count = null, $state = [])
 * @method static Builder|Cache newModelQuery()
 * @method static Builder|Cache newQuery()
 * @method static Builder|Cache query()
 * @method static Builder|Cache whereExpiration($value)
 * @method static Builder|Cache whereKey($value)
 * @method static Builder|Cache whereValue($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
>>>>>>> eeaa032 (.)
 * @mixin \Eloquent
 */
/** */
class Cache extends BaseModel
{
    protected $table = 'cache';

    protected $primaryKey = 'key';

    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'key',
        'value',
        'expiration',
    ];
}
