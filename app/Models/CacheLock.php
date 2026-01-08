<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\CacheLockFactory;

/**
 * Modules\Xot\Models\CacheLock.
 *
 * @property string $key
 * @property string $owner
 * @property int $expiration
 *
 * @method static CacheLockFactory factory($count = null, $state = [])
<<<<<<< HEAD
=======
 * @method static Builder|CacheLock newModelQuery()
 * @method static Builder|CacheLock newQuery()
 * @method static Builder|CacheLock query()
 * @method static Builder|CacheLock whereExpiration($value)
 * @method static Builder|CacheLock whereKey($value)
 * @method static Builder|CacheLock whereOwner($value)
 *
 * @property int $expiration
 *
 * @method static CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock newModelQuery()
 * @method static Builder|CacheLock newQuery()
 * @method static Builder|CacheLock query()
 * @method static Builder|CacheLock whereExpiration($value)
 * @method static Builder|CacheLock whereKey($value)
 * @method static Builder|CacheLock whereOwner($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
<<<<<<< HEAD
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $owner
 * @property int $expiration
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
>>>>>>> cc7fb225 (.)
 * @method static Builder<static>|CacheLock newModelQuery()
 * @method static Builder<static>|CacheLock newQuery()
 * @method static Builder<static>|CacheLock query()
 * @method static Builder<static>|CacheLock whereExpiration($value)
 * @method static Builder<static>|CacheLock whereKey($value)
 * @method static Builder<static>|CacheLock whereOwner($value)
 *
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $deleter
 * @property-read ProfileContract|null $updater
 *
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
 * @property int    $expiration
 * @method static CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock newModelQuery()
 * @method static Builder|CacheLock newQuery()
 * @method static Builder|CacheLock query()
 * @method static Builder|CacheLock whereExpiration($value)
 * @method static Builder|CacheLock whereKey($value)
 * @method static Builder|CacheLock whereOwner($value)
 * @property int $expiration
 * @method static CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock newModelQuery()
 * @method static Builder|CacheLock newQuery()
 * @method static Builder|CacheLock query()
 * @method static Builder|CacheLock whereExpiration($value)
 * @method static Builder|CacheLock whereKey($value)
 * @method static Builder|CacheLock whereOwner($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperCacheLock
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
 * @mixin IdeHelperCacheLock
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
 * @mixin \Eloquent
 */
class CacheLock extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'key',
        'owner',
        'expiration',
    ];
}
