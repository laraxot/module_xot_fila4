<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Modules\Xot\Database\Factories\PulseAggregateFactory;
use Illuminate\Database\Eloquent\Builder;

/**
<<<<<<< HEAD
 * @property string $id
 * @property int $bucket
 * @property int $period
=======
<<<<<<< HEAD
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @method static PulseAggregateFactory factory($count = null, $state = [])
 * @method static Builder|PulseAggregate newModelQuery()
 * @method static Builder|PulseAggregate newQuery()
 * @method static Builder|PulseAggregate query()
 * @property int         $id
 * @property int         $bucket
 * @property int         $period
=======
 * @property string $id
 * @property int $bucket
 * @property int $period
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
 * @property string $type
 * @property string $key
 * @property string|null $key_hash
 * @property string $aggregate
 * @property string $value
<<<<<<< HEAD
 * @property int|null $count
 * @method static PulseAggregateFactory factory($count = null, $state = [])
=======
<<<<<<< HEAD
 * @method static Builder|PulseAggregate whereAggregate($value)
 * @method static Builder|PulseAggregate whereBucket($value)
 * @method static Builder|PulseAggregate whereCount($value)
 * @method static Builder|PulseAggregate whereId($value)
 * @method static Builder|PulseAggregate whereKey($value)
 * @method static Builder|PulseAggregate whereKeyHash($value)
 * @method static Builder|PulseAggregate wherePeriod($value)
 * @method static Builder|PulseAggregate whereType($value)
 * @method static Builder|PulseAggregate whereValue($value)
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $bucket
 * @property int $period
 * @property string $type
 * @property string $key
 * @property string $key_hash
 * @property string $aggregate
 * @property string $value
 * @property int|null $count
 *
<<<<<<< HEAD
>>>>>>> 38b70c7ba (.)
 * @method static Builder<static>|PulseAggregate newModelQuery()
 * @method static Builder<static>|PulseAggregate newQuery()
 * @method static Builder<static>|PulseAggregate query()
 * @method static Builder<static>|PulseAggregate whereAggregate($value)
 * @method static Builder<static>|PulseAggregate whereBucket($value)
 * @method static Builder<static>|PulseAggregate whereCount($value)
 * @method static Builder<static>|PulseAggregate whereId($value)
 * @method static Builder<static>|PulseAggregate whereKey($value)
 * @method static Builder<static>|PulseAggregate whereKeyHash($value)
 * @method static Builder<static>|PulseAggregate wherePeriod($value)
 * @method static Builder<static>|PulseAggregate whereType($value)
 * @method static Builder<static>|PulseAggregate whereValue($value)
<<<<<<< HEAD
 * @property-read \Modules\TechPlanner\Models\Profile|null $creator
 * @property-read \Modules\TechPlanner\Models\Profile|null $deleter
 * @property-read \Modules\TechPlanner\Models\Profile|null $updater
=======
 *
 * @property int|null    $count
 * @method static Builder|PulseAggregate whereAggregate($value)
 * @method static Builder|PulseAggregate whereBucket($value)
 * @method static Builder|PulseAggregate whereCount($value)
 * @method static Builder|PulseAggregate whereId($value)
 * @method static Builder|PulseAggregate whereKey($value)
 * @method static Builder|PulseAggregate whereKeyHash($value)
 * @method static Builder|PulseAggregate wherePeriod($value)
 * @method static Builder|PulseAggregate whereType($value)
 * @method static Builder|PulseAggregate whereValue($value)
 * @mixin IdeHelperPulseAggregate
 * @mixin IdeHelperPulseAggregate
 * @mixin IdeHelperPulseAggregate
 * @mixin IdeHelperPulseAggregate
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $bucket
 * @property int $period
 * @property string $type
 * @property string $key
 * @property string $key_hash
 * @property string $aggregate
 * @property string $value
 * @property int|null $count
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\PulseAggregateFactory factory($count = null, $state = [])
=======
 * @property int|null $count
 *
 * @method static PulseAggregateFactory factory($count = null, $state = [])
>>>>>>> 551c768c4 (.)
 * @method static Builder<static>|PulseAggregate newModelQuery()
 * @method static Builder<static>|PulseAggregate newQuery()
 * @method static Builder<static>|PulseAggregate query()
 * @method static Builder<static>|PulseAggregate whereAggregate($value)
 * @method static Builder<static>|PulseAggregate whereBucket($value)
 * @method static Builder<static>|PulseAggregate whereCount($value)
 * @method static Builder<static>|PulseAggregate whereId($value)
 * @method static Builder<static>|PulseAggregate whereKey($value)
 * @method static Builder<static>|PulseAggregate whereKeyHash($value)
 * @method static Builder<static>|PulseAggregate wherePeriod($value)
 * @method static Builder<static>|PulseAggregate whereType($value)
 * @method static Builder<static>|PulseAggregate whereValue($value)
 *
<<<<<<< HEAD
 * @mixin IdeHelperPulseAggregate
 * @mixin IdeHelperPulseAggregate
<<<<<<< HEAD
 * @mixin IdeHelperPulseAggregate
=======
>>>>>>> 53d6a6ba (.)
=======
 * @mixin IdeHelperPulseAggregate
=======
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $bucket
 * @property int $period
 * @property string $type
 * @property string $key
 * @property string $key_hash
 * @property string $aggregate
 * @property string $value
 * @property int|null $count
 *
 * @method static \Modules\Xot\Database\Factories\PulseAggregateFactory factory($count = null, $state = [])
 * @method static Builder<static>|PulseAggregate newModelQuery()
 * @method static Builder<static>|PulseAggregate newQuery()
 * @method static Builder<static>|PulseAggregate query()
 * @method static Builder<static>|PulseAggregate whereAggregate($value)
 * @method static Builder<static>|PulseAggregate whereBucket($value)
 * @method static Builder<static>|PulseAggregate whereCount($value)
 * @method static Builder<static>|PulseAggregate whereId($value)
 * @method static Builder<static>|PulseAggregate whereKey($value)
 * @method static Builder<static>|PulseAggregate whereKeyHash($value)
 * @method static Builder<static>|PulseAggregate wherePeriod($value)
 * @method static Builder<static>|PulseAggregate whereType($value)
 * @method static Builder<static>|PulseAggregate whereValue($value)
 *
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
 * @mixin \Eloquent
 */
class PulseAggregate extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'type',
        'key',
        'value',
    ];
}
