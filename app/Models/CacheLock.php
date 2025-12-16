<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Modules\Xot\Database\Factories\CacheLockFactory;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

/**
 * Modules\Xot\Models\CacheLock.
 *
 * @property string $key
 * @property string $owner
<<<<<<< HEAD
 * @property int $expiration
 * @method static CacheLockFactory factory($count = null, $state = [])
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $owner
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
>>>>>>> 38b70c7ba (.)
 * @method static Builder<static>|CacheLock newModelQuery()
 * @method static Builder<static>|CacheLock newQuery()
 * @method static Builder<static>|CacheLock query()
 * @method static Builder<static>|CacheLock whereExpiration($value)
 * @method static Builder<static>|CacheLock whereKey($value)
 * @method static Builder<static>|CacheLock whereOwner($value)
<<<<<<< HEAD
 * @property-read \Modules\TechPlanner\Models\Profile|null $creator
 * @property-read \Modules\TechPlanner\Models\Profile|null $deleter
 * @property-read \Modules\TechPlanner\Models\Profile|null $updater
=======
 *
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
 * @mixin IdeHelperCacheLock
<<<<<<< HEAD
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
=======
>>>>>>> 53d6a6ba (.)
=======
 * @mixin IdeHelperCacheLock
=======
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $owner
=======
>>>>>>> 551c768c4 (.)
 * @property int $expiration
<<<<<<< HEAD
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
>>>>>>> 5cf46378 (.)
 * @method static Builder<static>|CacheLock newModelQuery()
 * @method static Builder<static>|CacheLock newQuery()
 * @method static Builder<static>|CacheLock query()
 * @method static Builder<static>|CacheLock whereExpiration($value)
 * @method static Builder<static>|CacheLock whereKey($value)
 * @method static Builder<static>|CacheLock whereOwner($value)
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
