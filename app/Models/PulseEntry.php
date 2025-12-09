<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\PulseEntryFactory;
use Illuminate\Database\Eloquent\Builder;

/**
<<<<<<< HEAD
 * @property string $id
 * @property int $timestamp
 * @property string $type
 * @property string $key
 * @property string|null $key_hash
 * @property int|null $value
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
 * @method static PulseEntryFactory factory($count = null, $state = [])
 * @method static Builder<static>|PulseEntry newModelQuery()
 * @method static Builder<static>|PulseEntry newQuery()
 * @method static Builder<static>|PulseEntry query()
 * @method static Builder<static>|PulseEntry whereId($value)
 * @method static Builder<static>|PulseEntry whereKey($value)
 * @method static Builder<static>|PulseEntry whereKeyHash($value)
 * @method static Builder<static>|PulseEntry whereTimestamp($value)
 * @method static Builder<static>|PulseEntry whereType($value)
 * @method static Builder<static>|PulseEntry whereValue($value)
 *
=======
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @method static PulseEntryFactory factory($count = null, $state = [])
 * @method static Builder|PulseEntry newModelQuery()
 * @method static Builder|PulseEntry newQuery()
 * @method static Builder|PulseEntry query()
<<<<<<< HEAD
=======
=======
/**
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Modules\Xot\Database\Factories\PulseEntryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry  query()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @property int         $id
 * @property int         $timestamp
 * @property string $type
 * @property string $key
 * @property string|null $key_hash
 * @property int|null    $value
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @method static Builder|PulseEntry whereId($value)
 * @method static Builder|PulseEntry whereKey($value)
 * @method static Builder|PulseEntry whereKeyHash($value)
 * @method static Builder|PulseEntry whereTimestamp($value)
 * @method static Builder|PulseEntry whereType($value)
 * @method static Builder|PulseEntry whereValue($value)
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry whereKeyHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PulseEntry whereValue($value)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperPulseEntry
>>>>>>> 5a14301c (.)
 * @mixin \Eloquent
 */
class PulseEntry extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'type',
        'key',
        'value',
    ];
}
