<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\SessionFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Illuminate\Support\Carbon;
use Modules\Xot\Database\Factories\SessionFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Modules\Xot\Models\Session.
 *
<<<<<<< HEAD
 * @property string $id
 * @property string|null $user_id
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string $payload
 * @property int $last_activity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
 * @method static SessionFactory factory($count = null, $state = [])
 * @method static Builder<static>|Session newModelQuery()
 * @method static Builder<static>|Session newQuery()
 * @method static Builder<static>|Session query()
 * @method static Builder<static>|Session whereCreatedAt($value)
 * @method static Builder<static>|Session whereCreatedBy($value)
 * @method static Builder<static>|Session whereDeletedAt($value)
 * @method static Builder<static>|Session whereDeletedBy($value)
 * @method static Builder<static>|Session whereId($value)
 * @method static Builder<static>|Session whereIpAddress($value)
 * @method static Builder<static>|Session whereLastActivity($value)
 * @method static Builder<static>|Session wherePayload($value)
 * @method static Builder<static>|Session whereUpdatedAt($value)
 * @method static Builder<static>|Session whereUpdatedBy($value)
 * @method static Builder<static>|Session whereUserAgent($value)
 * @method static Builder<static>|Session whereUserId($value)
 *
=======
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $ip_address
 * @property string|null                     $user_agent
 * @property string $payload
 * @property int                             $last_activity
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @method static SessionFactory factory($count = null, $state = [])
 * @method static Builder|Session newModelQuery()
 * @method static Builder|Session newQuery()
 * @method static Builder|Session query()
 * @method static Builder|Session whereCreatedAt($value)
 * @method static Builder|Session whereCreatedBy($value)
 * @method static Builder|Session whereId($value)
 * @method static Builder|Session whereIpAddress($value)
 * @method static Builder|Session whereLastActivity($value)
 * @method static Builder|Session wherePayload($value)
 * @method static Builder|Session whereUpdatedAt($value)
 * @method static Builder|Session whereUpdatedBy($value)
 * @method static Builder|Session whereUserAgent($value)
 * @method static Builder|Session whereUserId($value)
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @method static \Modules\Xot\Database\Factories\SessionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Session  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session  query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereLastActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUserId($value)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $ip_address
 * @property string|null                     $user_agent
 * @property string $payload
 * @property int                             $last_activity
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @method static SessionFactory factory($count = null, $state = [])
 * @method static Builder|Session newModelQuery()
 * @method static Builder|Session newQuery()
 * @method static Builder|Session query()
 * @method static Builder|Session whereCreatedAt($value)
 * @method static Builder|Session whereCreatedBy($value)
 * @method static Builder|Session whereId($value)
 * @method static Builder|Session whereIpAddress($value)
 * @method static Builder|Session whereLastActivity($value)
 * @method static Builder|Session wherePayload($value)
 * @method static Builder|Session whereUpdatedAt($value)
 * @method static Builder|Session whereUpdatedBy($value)
 * @method static Builder|Session whereUserAgent($value)
 * @method static Builder|Session whereUserId($value)
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static Builder|Session whereDeletedAt($value)
 * @method static Builder|Session whereDeletedBy($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @method static \Modules\Xot\Database\Factories\SessionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Session  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session  query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereLastActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session  whereUserId($value)
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereDeletedBy($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperSession
>>>>>>> 5a14301c (.)
 * @mixin \Eloquent
 */
class Session extends BaseModel
{
    protected $fillable = ['id', 'user_id', 'ip_address', 'user_agent', 'payload', 'last_activity'];
}
