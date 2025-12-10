<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class XotBaseUuidModel.
 *
 * Base class for models using UUIDs as primary keys.
 *
 * Inherits from Model and configures UUID-specific properties.
 * Used as parent for module-specific BaseUuidModel classes.
 */
abstract class XotBaseUuidModel extends XotBaseModel
{
    public $incrementing = false;

abstract class XotBaseUuidModel extends Model
{
    use \Modules\Xot\Traits\Updater;
    use Traits\HasXotFactory;
    use Traits\RelationX;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = false;

    /** @var string */
    protected $keyType = 'string';

    /** @var string */
    protected $primaryKey = 'id';

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'id',
    ];

    /**
     * @return array<string, string>
     */
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)

    /** @var list<string> */
    protected $fillable = ['id'];

    /** @var list<string> */
    protected $appends = [];

    /** @var list<string> */
    protected $hidden = [];

    /** @return array<string, string> */
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
<<<<<<< HEAD
            'uuid' => 'string',
            'published_at' => 'datetime',
=======
<<<<<<< HEAD
=======
            'uuid' => 'string',
            'published_at' => 'datetime',
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
}
