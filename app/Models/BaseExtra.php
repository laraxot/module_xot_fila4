<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
use Override;
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
>>>>>>> d2b0a27 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Database\Factories\ExtraFactory;
use Override;
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait;
use Webmozart\Assert\Assert;

/**
 * Model Extra.
 *
 * @property int $id
 * @property int|null $model_id
 * @property string|null $model_type
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 *
 * @method static Builder|BaseModel disableCache()
 * @method static ExtraFactory factory($count = null, $state = [])
 * @method static Builder|Extra newModelQuery()
 * @method static Builder|Extra newQuery()
 * @method static Builder|Extra query()
 * @method static Builder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @method static Builder|Extra withExtraAttributes()
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static Builder|Extra whereCreatedAt($value)
 * @method static Builder|Extra whereCreatedBy($value)
 * @method static Builder|Extra whereDeletedAt($value)
 * @method static Builder|Extra whereDeletedBy($value)
 * @method static Builder|Extra whereExtraAttributes($value)
 * @method static Builder|Extra whereId($value)
 * @method static Builder|Extra whereModelId($value)
 * @method static Builder|Extra whereModelType($value)
 * @method static Builder|Extra whereUpdatedAt($value)
 * @method static Builder|Extra whereUpdatedBy($value)
 *
 * @mixin \Eloquent
 */
abstract class BaseExtra extends BaseModel implements ExtraContract
{
    use SchemalessAttributesTrait;

    /** @var string */
    protected $connection = 'xot';

    protected $fillable = [
        'id',
        'model_id',
        'model_type',
        'extra_attributes',
    ];

    public function scopeWithExtraAttributes(): Builder
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
=======
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
>>>>>>> f1d4085 (.)
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> 300ef70 (.)

        return $this->extra_attributes->modelScope();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
    protected function casts(): array
    {
        return [
            'extra_attributes' => SchemalessAttributes::class,
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

>>>>>>> f1d4085 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 300ef70 (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
