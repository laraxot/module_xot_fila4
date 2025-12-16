<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Modules\Xot\Contracts\HasRecursiveRelationshipsContract;
<<<<<<< HEAD
use Modules\Xot\Models\Traits\HasRecursiveRelationshipsMethods;
=======
>>>>>>> 38b70c7ba (.)
use Modules\Xot\Models\Traits\TypedHasRecursiveRelationships;

abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
<<<<<<< HEAD
    use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
=======
    use TypedHasRecursiveRelationships;
<<<<<<< HEAD
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
    use HasRecursiveRelationships;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
}
