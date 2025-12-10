<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

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
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
=======
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
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
use Illuminate\Support\Carbon;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 551c768c4 (.)

/**
 * Modules\Xot\Models\Feed.
 *
 * @property string $id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static FeedFactory factory($count = null, $state = [])
 * @method static Builder<static>|Feed newModelQuery()
 * @method static Builder<static>|Feed newQuery()
 * @method static Builder<static>|Feed query()
 * @method static Builder<static>|Feed whereCreatedAt($value)
 * @method static Builder<static>|Feed whereCreatedBy($value)
 * @method static Builder<static>|Feed whereId($value)
 * @method static Builder<static>|Feed whereUpdatedAt($value)
 * @method static Builder<static>|Feed whereUpdatedBy($value)
 *
<<<<<<< HEAD
 * @method static FeedFactory factory($count = null, $state = [])
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @mixin IdeHelperFeed
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
/**
 * Modules\Xot\Models\Feed.
 *
 * @method static \Modules\Xot\Database\Factories\FeedFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  query()
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperFeed
 *
=======
=======
 *
<<<<<<< HEAD
 * @mixin IdeHelperFeed
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
/**
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\FeedFactory factory($count = null, $state = [])
 * @method static Builder<static>|Feed newModelQuery()
 * @method static Builder<static>|Feed newQuery()
 * @method static Builder<static>|Feed query()
 *
<<<<<<< HEAD
 * @mixin IdeHelperFeed
 * @mixin IdeHelperFeed
 * @mixin IdeHelperFeed
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
 * @mixin IdeHelperFeed
=======
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperFeed
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
 * @mixin \Eloquent
 */
class Feed extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
    ];
}
