<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * Modules\Xot\Models\Session.
 *
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
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
>>>>>>> eeaa032 (.)
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
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
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
 * @mixin \Eloquent
 */
class Session extends BaseModel
{
    protected $fillable = ['id', 'user_id', 'ip_address', 'user_agent', 'payload', 'last_activity'];
}
