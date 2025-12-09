<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Database\Factories\ExtraFactory;
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Override;
=======
use Override;
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
use Override;
>>>>>>> 3310e9c6 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ExtraContract;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait;
use Webmozart\Assert\Assert;

/**
 * Model Extra.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $id
 * @property int|null $model_id
 * @property string|null $model_type
=======
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
>>>>>>> 5a14301c (.)
=======
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
>>>>>>> 5a14301c (.)
=======
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // ✅ CORRETTO: NON implementare scopeWithExtraAttributes() manualmente
    // Il trait SchemalessAttributesTrait lo fornisce automaticamente!
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    public function scopeWithExtraAttributes(): Builder
    {
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');

        return $this->extra_attributes->modelScope();
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'extra_attributes' => SchemalessAttributes::class,
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
