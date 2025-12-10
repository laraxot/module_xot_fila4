<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;

>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;

>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;

>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;

>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;

>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;

>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
/**
 * Class XotBaseUuidModel.
 *
 * Base class for models using UUIDs.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
abstract class XotBaseUuidModel extends XotBaseModel
{
    public $incrementing = false;

<<<<<<< HEAD
=======
=======
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
>>>>>>> laraxot/develop
abstract class XotBaseUuidModel extends Model
{
    /** @var bool */
    public $incrementing = false;

    /** @var string */
    protected $keyType = 'string';

    /** @var string */
    protected $primaryKey = 'id';

<<<<<<< HEAD
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
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop

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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop

    /** @var list<string> */
    protected $fillable = ['id'];

    /** @var list<string> */
    protected $appends = [];

    /** @var list<string> */
    protected $hidden = [];

    /** @return array<string, string> */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
    protected function casts(): array
    {
        return [
            'id' => 'string',
<<<<<<< HEAD
            'uuid' => 'string',
            'published_at' => 'datetime',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'uuid' => 'string',
            'published_at' => 'datetime',
>>>>>>> b7afadf9 (.)
=======
            'uuid' => 'string',
            'published_at' => 'datetime',
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
}
