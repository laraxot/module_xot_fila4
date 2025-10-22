<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

// use Laravel\Scout\Searchable;
// ---------- traits

/**
 * Class BaseModel.
 */
abstract class BaseModel extends XotBaseModel
{
    protected $connection = 'xot';
<<<<<<< HEAD
=======

    /** @var list<string> */
    protected $fillable = ['id'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory(): Factory
    {
        // return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
        return app(GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, class-string|string> */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
>>>>>>> d2b0a27 (.)
}
