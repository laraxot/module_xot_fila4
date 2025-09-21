<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\PulseValueFactory;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @method static PulseValueFactory factory($count = null, $state = [])
 * @method static Builder|PulseValue newModelQuery()
 * @method static Builder|PulseValue newQuery()
 * @method static Builder|PulseValue query()
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
 * @property string $type
 * @property string $key
 * @property string|null $key_hash
 * @property string $value
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @method static Builder|PulseValue whereId($value)
 * @method static Builder|PulseValue whereKey($value)
 * @method static Builder|PulseValue whereKeyHash($value)
 * @method static Builder|PulseValue whereTimestamp($value)
 * @method static Builder|PulseValue whereType($value)
 * @method static Builder|PulseValue whereValue($value)
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
