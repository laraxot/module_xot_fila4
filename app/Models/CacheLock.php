<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Modules\Xot\Database\Factories\CacheLockFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Modules\Xot\Models\CacheLock.
 *
 * @property string $key
 * @property string $owner
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $owner
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static Builder<static>|CacheLock newModelQuery()
 * @method static Builder<static>|CacheLock newQuery()
 * @method static Builder<static>|CacheLock query()
 * @method static Builder<static>|CacheLock whereExpiration($value)
 * @method static Builder<static>|CacheLock whereKey($value)
 * @method static Builder<static>|CacheLock whereOwner($value)
 *
 * @property int    $expiration
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  query()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  whereOwner($value)
 * @property int $expiration
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  query()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  whereOwner($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $owner
 * @property int $expiration
 * @method static Builder<static>|CacheLock newModelQuery()
 * @method static Builder<static>|CacheLock newQuery()
 * @method static Builder<static>|CacheLock query()
 * @method static Builder<static>|CacheLock whereExpiration($value)
 * @method static Builder<static>|CacheLock whereKey($value)
 * @method static Builder<static>|CacheLock whereOwner($value)
 *
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
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
