<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Modules\Xot\Database\Factories\CacheFactory;
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
/**
 * Modules\Xot\Models\Cache.
 *
 * @property string $key
 * @property string $value
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $expiration
 *
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $value
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
>>>>>>> cc7fb225 (.)
 * @method static Builder<static>|Cache newModelQuery()
 * @method static Builder<static>|Cache newQuery()
 * @method static Builder<static>|Cache query()
 * @method static Builder<static>|Cache whereExpiration($value)
 * @method static Builder<static>|Cache whereKey($value)
 * @method static Builder<static>|Cache whereValue($value)
 *
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
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  whereValue($value)
 * @property int $expiration
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  whereExpiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  whereValue($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperCache
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
 * @mixin IdeHelperCache
>>>>>>> 53d6a6ba (.)
=======
 * @mixin IdeHelperCache
=======
 * @mixin IdeHelperCache
>>>>>>> b7afadf9 (.)
=======
 * @mixin \Eloquent
 */
/**
 * @property string $key
 * @property string $value
 * @property int $expiration
<<<<<<< HEAD
 *
 * @method static CacheFactory factory($count = null, $state = [])
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
>>>>>>> b7afadf9 (.)
 * @method static Builder<static>|Cache newModelQuery()
 * @method static Builder<static>|Cache newQuery()
 * @method static Builder<static>|Cache query()
 * @method static Builder<static>|Cache whereExpiration($value)
 * @method static Builder<static>|Cache whereKey($value)
 * @method static Builder<static>|Cache whereValue($value)
 *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
 * @mixin IdeHelperCache
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperCache
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
 * @mixin IdeHelperCache
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
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
