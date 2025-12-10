<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Modules\Xot\Contracts\HasRecursiveRelationshipsContract;
use Modules\Xot\Models\Traits\TypedHasRecursiveRelationships;

abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
    use TypedHasRecursiveRelationships;
<<<<<<< HEAD
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
    use HasRecursiveRelationships;
=======
>>>>>>> 551c768c4 (.)
}
