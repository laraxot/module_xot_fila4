<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\SessionFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
=======
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
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Illuminate\Support\Carbon;
use Modules\Xot\Database\Factories\SessionFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;

/**
 * Modules\Xot\Models\Session.
 *
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
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $ip_address
 * @property string|null                     $user_agent
 * @property string $payload
 * @property int                             $last_activity
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
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $ip_address
 * @property string|null                     $user_agent
 * @property string $payload
 * @property int                             $last_activity
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
 * @mixin IdeHelperSession
 * @property string|null $created_by
 * @property string|null $updated_by
 *
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
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string $payload
 * @property int $last_activity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
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
 *
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static Builder|Session whereDeletedAt($value)
 * @method static Builder|Session whereDeletedBy($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
<<<<<<< HEAD
 * @mixin IdeHelperSession
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
/**
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
 *
 * @property-read \Modules\Quaeris\Models\Profile|null $creator
 * @property-read \Modules\Quaeris\Models\Profile|null $updater
 *
 * @method static \Modules\Xot\Database\Factories\SessionFactory factory($count = null, $state = [])
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
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
class Session extends BaseModel
{
    protected $fillable = ['id', 'user_id', 'ip_address', 'user_agent', 'payload', 'last_activity'];
}
