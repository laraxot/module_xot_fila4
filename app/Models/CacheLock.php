<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Modules\Xot\Database\Factories\CacheLockFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Modules\Xot\Database\Factories\CacheLockFactory;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
/**
 * Modules\Xot\Models\CacheLock.
 *
 * @property string $key
 * @property string $owner
<<<<<<< HEAD
 * @property int $expiration
 *
 * @method static CacheLockFactory factory($count = null, $state = [])
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $expiration
 *
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $owner
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
>>>>>>> laraxot/develop
 * @method static Builder<static>|CacheLock newModelQuery()
 * @method static Builder<static>|CacheLock newQuery()
 * @method static Builder<static>|CacheLock query()
 * @method static Builder<static>|CacheLock whereExpiration($value)
 * @method static Builder<static>|CacheLock whereKey($value)
 * @method static Builder<static>|CacheLock whereOwner($value)
 *
<<<<<<< HEAD
 * @property int    $expiration
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @property int    $expiration
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperCacheLock
>>>>>>> 53d6a6ba (.)
=======
 * @mixin IdeHelperCacheLock
=======
 * @mixin IdeHelperCacheLock
>>>>>>> b7afadf9 (.)
=======
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $owner
 * @property int $expiration
<<<<<<< HEAD
 *
 * @method static CacheLockFactory factory($count = null, $state = [])
=======
<<<<<<< HEAD
 *
 * @method static CacheLockFactory factory($count = null, $state = [])
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
 * @method static Builder<static>|CacheLock newModelQuery()
 * @method static Builder<static>|CacheLock newQuery()
 * @method static Builder<static>|CacheLock query()
 * @method static Builder<static>|CacheLock whereExpiration($value)
 * @method static Builder<static>|CacheLock whereKey($value)
 * @method static Builder<static>|CacheLock whereOwner($value)
 *
<<<<<<< HEAD
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
 * @mixin IdeHelperCacheLock
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
 * @mixin IdeHelperCacheLock
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperCacheLock
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
 * @mixin IdeHelperCacheLock
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
