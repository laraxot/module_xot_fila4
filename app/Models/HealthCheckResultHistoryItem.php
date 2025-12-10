<?php

/**
 * @see https://github.com/shuvroroy/filament-spatie-laravel-health/tree/main
 */

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
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Spatie\Health\Models\HealthCheckResultHistoryItem as BaseHealthCheckResultHistoryItem;

/**
 * @property int $id
 * @property string $check_name
 * @property string $check_label
 * @property string $status
 * @property string|null $notification_message
 * @property string|null $short_summary
 * @property array<array-key, mixed> $meta
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
use Spatie\Health\Models\HealthCheckResultHistoryItem as BaseHealthCheckResultHistoryItem;

/**
 * @property int                             $id
 * @property string $check_name
 * @property string $check_label
 * @property string $status
 * @property string|null                     $notification_message
 * @property string|null                     $short_summary
 * @property array                           $meta
<<<<<<< HEAD
 * @property string $ended_at
 * @property string $batch
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
=======
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
 * @property string $ended_at
 * @property string $batch
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static Builder<static>|HealthCheckResultHistoryItem newModelQuery()
 * @method static Builder<static>|HealthCheckResultHistoryItem newQuery()
 * @method static Builder<static>|HealthCheckResultHistoryItem query()
 * @method static Builder<static>|HealthCheckResultHistoryItem whereBatch($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereCheckLabel($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereCheckName($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereCreatedAt($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereEndedAt($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereId($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereMeta($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereNotificationMessage($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereShortSummary($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereStatus($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereUpdatedAt($value)
 * @method static Builder<static>|HealthCheckResultHistoryItem whereUpdatedBy($value)
 *
<<<<<<< HEAD
 *
 *
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 5a14301c (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @method static Builder|HealthCheckResultHistoryItem newModelQuery()
 * @method static Builder|HealthCheckResultHistoryItem newQuery()
 * @method static Builder|HealthCheckResultHistoryItem query()
 * @method static Builder|HealthCheckResultHistoryItem whereBatch($value)
 * @method static Builder|HealthCheckResultHistoryItem whereCheckLabel($value)
 * @method static Builder|HealthCheckResultHistoryItem whereCheckName($value)
 * @method static Builder|HealthCheckResultHistoryItem whereCreatedAt($value)
 * @method static Builder|HealthCheckResultHistoryItem whereEndedAt($value)
 * @method static Builder|HealthCheckResultHistoryItem whereId($value)
 * @method static Builder|HealthCheckResultHistoryItem whereMeta($value)
 * @method static Builder|HealthCheckResultHistoryItem whereNotificationMessage($value)
 * @method static Builder|HealthCheckResultHistoryItem whereShortSummary($value)
 * @method static Builder|HealthCheckResultHistoryItem whereStatus($value)
 * @method static Builder|HealthCheckResultHistoryItem whereUpdatedAt($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
 *
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
<<<<<<< HEAD
 * @mixin IdeHelperHealthCheckResultHistoryItem
 *
 * @mixin IdeHelperHealthCheckResultHistoryItem
 *
 * @mixin IdeHelperHealthCheckResultHistoryItem
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperHealthCheckResultHistoryItem
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
 *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperHealthCheckResultHistoryItem
>>>>>>> 53d6a6ba (.)
=======
 *
 * @mixin IdeHelperHealthCheckResultHistoryItem
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
 *
>>>>>>> cc7fb225 (.)
>>>>>>> laraxot/develop
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
<<<<<<< HEAD
 * @mixin IdeHelperHealthCheckResultHistoryItem
 *
 * @mixin IdeHelperHealthCheckResultHistoryItem
=======
<<<<<<< HEAD
 * @mixin IdeHelperHealthCheckResultHistoryItem
>>>>>>> 5a14301c (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperHealthCheckResultHistoryItem
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCheckLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCheckName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereNotificationMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereShortSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereUpdatedAt($value)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperHealthCheckResultHistoryItem
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
class HealthCheckResultHistoryItem extends BaseHealthCheckResultHistoryItem
{
    /** @var string */
    protected $connection = 'xot';
}
