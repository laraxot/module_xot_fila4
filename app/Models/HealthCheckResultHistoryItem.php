<?php

/**
 * @see https://github.com/shuvroroy/filament-spatie-laravel-health/tree/main
 */

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Health\Models\HealthCheckResultHistoryItem as BaseHealthCheckResultHistoryItem;

/**
 * @property int                             $id
 * @property string $check_name
 * @property string $check_label
 * @property string $status
 * @property string|null                     $notification_message
 * @property string|null                     $short_summary
 * @property array                           $meta
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
 * @property string $ended_at
 * @property string $batch
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
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
<<<<<<< HEAD
 *
 *
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
 *
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperHealthCheckResultHistoryItem
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5cf46378 (.)
 *
 * @mixin IdeHelperHealthCheckResultHistoryItem
<<<<<<< HEAD
 *
 * @mixin IdeHelperHealthCheckResultHistoryItem
 *
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
 *
 * @mixin IdeHelperHealthCheckResultHistoryItem
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static Builder|HealthCheckResultHistoryItem whereCreatedBy($value)
 * @method static Builder|HealthCheckResultHistoryItem whereUpdatedBy($value)
 * @mixin IdeHelperHealthCheckResultHistoryItem
=======
>>>>>>> 53d6a6ba (.)
=======
 *
<<<<<<< HEAD
 * @mixin IdeHelperHealthCheckResultHistoryItem
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
 * @mixin \Eloquent
 */
class HealthCheckResultHistoryItem extends BaseHealthCheckResultHistoryItem
{
    /** @var string */
    protected $connection = 'xot';
}
