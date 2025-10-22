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
}
