<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\PulseValueFactory;

/**
 * @property string $id
 * @property int $timestamp
 * @property string $type
 * @property string $key
 * @property string|null $key_hash
 * @property string $value
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
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $timestamp
 * @property string $type
 * @property string $key
 * @property string $key_hash
 * @property string $value
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\PulseValueFactory factory($count = null, $state = [])
>>>>>>> cc7fb225 (.)
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
 * @property-read ProfileContract|null $deleter
 *
=======
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
 * @method static Builder|PulseValue whereId($value)
 * @method static Builder|PulseValue whereKey($value)
 * @method static Builder|PulseValue whereKeyHash($value)
 * @method static Builder|PulseValue whereTimestamp($value)
 * @method static Builder|PulseValue whereType($value)
 * @method static Builder|PulseValue whereValue($value)
 * @mixin IdeHelperPulseValue
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
 * @mixin IdeHelperPulseValue
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
 * @mixin IdeHelperPulseValue
=======
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $timestamp
 * @property string $type
 * @property string $key
 * @property string $key_hash
 * @property string $value
 *
 * @property-read \Modules\Quaeris\Models\Profile|null $creator
 * @property-read \Modules\Quaeris\Models\Profile|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\PulseValueFactory factory($count = null, $state = [])
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
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
