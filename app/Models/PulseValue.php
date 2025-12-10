<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\PulseValueFactory;

/**
<<<<<<< HEAD
 * @property string $id
 * @property int $timestamp
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string $id
 * @property int $timestamp
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
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\PulseValueFactory;
use Illuminate\Database\Eloquent\Builder;

/**
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @method static PulseValueFactory factory($count = null, $state = [])
 * @method static Builder|PulseValue newModelQuery()
 * @method static Builder|PulseValue newQuery()
 * @method static Builder|PulseValue query()
<<<<<<< HEAD
 * @property int         $id
 * @property int         $timestamp
=======
<<<<<<< HEAD
=======
=======
/**
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Modules\Xot\Database\Factories\PulseValueFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue  query()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @property int         $id
 * @property int         $timestamp
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @property string $type
 * @property string $key
 * @property string|null $key_hash
 * @property string $value
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
 * @method static PulseValueFactory factory($count = null, $state = [])
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
<<<<<<< HEAD
 * @method static PulseValueFactory factory($count = null, $state = [])
=======
 * @method static Builder|PulseValue whereId($value)
 * @method static Builder|PulseValue whereKey($value)
 * @method static Builder|PulseValue whereKeyHash($value)
 * @method static Builder|PulseValue whereTimestamp($value)
 * @method static Builder|PulseValue whereType($value)
 * @method static Builder|PulseValue whereValue($value)
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
 * @property string $id
 * @property int $timestamp
 * @property string $type
 * @property string $key
 * @property string $key_hash
 * @property string $value
 * @property-read \Modules\Quaeris\Models\Profile|null $creator
 * @property-read \Modules\Quaeris\Models\Profile|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\PulseValueFactory factory($count = null, $state = [])
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
>>>>>>> laraxot/develop
 * @method static Builder<static>|PulseValue newModelQuery()
 * @method static Builder<static>|PulseValue newQuery()
 * @method static Builder<static>|PulseValue query()
 * @method static Builder<static>|PulseValue whereId($value)
 * @method static Builder<static>|PulseValue whereKey($value)
 * @method static Builder<static>|PulseValue whereKeyHash($value)
 * @method static Builder<static>|PulseValue whereTimestamp($value)
 * @method static Builder<static>|PulseValue whereType($value)
 * @method static Builder<static>|PulseValue whereValue($value)
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
 * @method static Builder|PulseValue whereId($value)
 * @method static Builder|PulseValue whereKey($value)
 * @method static Builder|PulseValue whereKeyHash($value)
 * @method static Builder|PulseValue whereTimestamp($value)
 * @method static Builder|PulseValue whereType($value)
 * @method static Builder|PulseValue whereValue($value)
<<<<<<< HEAD
 * @mixin IdeHelperPulseValue
 * @mixin IdeHelperPulseValue
 * @mixin IdeHelperPulseValue
 * @mixin IdeHelperPulseValue
=======
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue whereKeyHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseValue whereValue($value)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperPulseValue
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
 * @mixin IdeHelperPulseValue
>>>>>>> 53d6a6ba (.)
=======
 * @mixin IdeHelperPulseValue
=======
 * @mixin IdeHelperPulseValue
>>>>>>> b7afadf9 (.)
=======
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $timestamp
 * @property string $type
 * @property string $key
 * @property string $key_hash
 * @property string $value
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/develop
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
 * @method static PulseValueFactory factory($count = null, $state = [])
<<<<<<< HEAD
=======
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\PulseValueFactory factory($count = null, $state = [])
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
 * @method static Builder<static>|PulseValue newModelQuery()
 * @method static Builder<static>|PulseValue newQuery()
 * @method static Builder<static>|PulseValue query()
 * @method static Builder<static>|PulseValue whereId($value)
 * @method static Builder<static>|PulseValue whereKey($value)
 * @method static Builder<static>|PulseValue whereKeyHash($value)
 * @method static Builder<static>|PulseValue whereTimestamp($value)
 * @method static Builder<static>|PulseValue whereType($value)
 * @method static Builder<static>|PulseValue whereValue($value)
 *
<<<<<<< HEAD
 * @mixin IdeHelperPulseValue
 * @mixin IdeHelperPulseValue
 * @mixin IdeHelperPulseValue
=======
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
 * @mixin IdeHelperPulseValue
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperPulseValue
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
 * @mixin IdeHelperPulseValue
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
class PulseValue extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'type',
        'key',
        'value',
    ];
}
