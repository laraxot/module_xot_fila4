<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 *
 * @property string|int $id
 * @property string $morph_type
 * @property string|int $morph_id
 * @property string $related_type
 * @property string|int $related_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|int|null $tenant_id
 * @property string|int|null $user_id
 * @property array<string, mixed>|null $metadata
 * @property array<string, mixed>|null $extra_data
 * @property string|null $status
 * @property int|null $priority
 * @property int|null $sort_order
 * @property \Illuminate\Support\Carbon|null $expires_at
 * @property \Illuminate\Support\Carbon|null $starts_at
 * @property \Illuminate\Support\Carbon|null $ends_at
 * @property bool $is_active
 * @property bool $is_public
 * @property bool $is_featured
 * @property array<int, string>|null $tags
 * @property array<int, string>|null $categories
 * @property array<string, bool>|null $permissions
 * @property array<string, mixed>|null $settings
 * @property string|null $notes
 * @property string|null $description
 * @property string|null $url
 * @property string|null $image_url
 * @property string|null $external_id
 * @property string|null $source
 * @property string|null $version
 * @property string|null $hash
 * @property string|null $checksum
 * @property int|null $size
 * @property string|null $mime_type
 * @property string|null $encoding
 * @property string|null $language
 * @property string|null $locale
 * @property string|null $timezone
 * @property string|null $currency
 * @property int|null $decimal_places
 * @property string|null $rounding_mode
 */
abstract class BaseMorphPivot extends MorphPivot
{
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'xot';

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'id',
        'post_id',
        'post_type',
        'related_type',
        'user_id',
        'note',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string', // must be string else primary key of related model will be typed as int
            'uuid' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
