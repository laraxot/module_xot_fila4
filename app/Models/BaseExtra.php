<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
use Override;
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Override;
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Database\Factories\ExtraFactory;
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
use Override;
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ExtraContract;
use Override;
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Override;
=======
>>>>>>> 3fbbf1f5 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ExtraContract;
=======
use Override;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait;
use Webmozart\Assert\Assert;

/**
 * Model Extra.
 *
<<<<<<< HEAD
 * @property int $id
 * @property int|null $model_id
 * @property string|null $model_type
=======
<<<<<<< HEAD
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
=======
 * @property int $id
 * @property int|null $model_id
 * @property string|null $model_type
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
    // ✅ CORRETTO: NON implementare scopeWithExtraAttributes() manualmente
    // Il trait SchemalessAttributesTrait lo fornisce automaticamente!
=======
<<<<<<< HEAD
    public function scopeWithExtraAttributes(): Builder
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
=======
=======
>>>>>>> 5cf46378 (.)
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
=======
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
>>>>>>> a12f125f4a (.)
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> 091f883c (.)
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
=======
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
>>>>>>> f1d4085 (.)
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
>>>>>>> 53d6a6ba (.)
=======
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

        return $this->extra_attributes->modelScope();
    }
    public function scopeWithExtraAttributes(): Builder
    {
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
=======
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
        Assert::notNull($this->extra_attributes, '[' . __FILE__ . '][' . __LINE__ . ']');
>>>>>>> a67e542f (.)

        return $this->extra_attributes->modelScope();
    }
=======
    // ✅ CORRETTO: NON implementare scopeWithExtraAttributes() manualmente
    // Il trait SchemalessAttributesTrait lo fornisce automaticamente!
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
    protected function casts(): array
    {
        return [
            'extra_attributes' => SchemalessAttributes::class,
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
