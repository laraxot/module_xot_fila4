<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Modules\Xot\Database\Factories\CacheFactory;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> 551c768c4 (.)

/**
 * Modules\Xot\Models\Cache.
 *
 * @property string $key
 * @property string $value
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $expiration
 *
 * @method static CacheFactory factory($count = null, $state = [])
<<<<<<< HEAD
=======
 * @method static Builder|Cache newModelQuery()
 * @method static Builder|Cache newQuery()
 * @method static Builder|Cache query()
 * @method static Builder|Cache whereExpiration($value)
 * @method static Builder|Cache whereKey($value)
 * @method static Builder|Cache whereValue($value)
 *
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $value
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static Builder<static>|Cache newModelQuery()
 * @method static Builder<static>|Cache newQuery()
 * @method static Builder<static>|Cache query()
 * @method static Builder<static>|Cache whereExpiration($value)
 * @method static Builder<static>|Cache whereKey($value)
 * @method static Builder<static>|Cache whereValue($value)
 *
 * @property int    $expiration
 * @method static CacheFactory factory($count = null, $state = [])
 * @method static Builder|Cache newModelQuery()
 * @method static Builder|Cache newQuery()
 * @method static Builder|Cache query()
 * @method static Builder|Cache whereExpiration($value)
 * @method static Builder|Cache whereKey($value)
 * @method static Builder|Cache whereValue($value)
 * @property int $expiration
 * @method static CacheFactory factory($count = null, $state = [])
 * @method static Builder|Cache newModelQuery()
 * @method static Builder|Cache newQuery()
 * @method static Builder|Cache query()
 * @method static Builder|Cache whereExpiration($value)
 * @method static Builder|Cache whereKey($value)
 * @method static Builder|Cache whereValue($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperCache
 * @mixin IdeHelperCache
<<<<<<< HEAD
 * @mixin IdeHelperCache
 * @mixin IdeHelperCache
=======
>>>>>>> 53d6a6ba (.)
=======
 * @mixin IdeHelperCache
=======
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $value
=======
>>>>>>> 551c768c4 (.)
 * @property int $expiration
<<<<<<< HEAD
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
>>>>>>> 5cf46378 (.)
 * @method static Builder<static>|Cache newModelQuery()
 * @method static Builder<static>|Cache newQuery()
 * @method static Builder<static>|Cache query()
 * @method static Builder<static>|Cache whereExpiration($value)
 * @method static Builder<static>|Cache whereKey($value)
 * @method static Builder<static>|Cache whereValue($value)
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperCache
 * @mixin IdeHelperCache
 * @mixin IdeHelperCache
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
 * @mixin \Eloquent
 */
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
