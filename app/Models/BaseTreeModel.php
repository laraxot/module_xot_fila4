<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
=======
>>>>>>> 50c0e1043 (.)
use Modules\Xot\Contracts\HasRecursiveRelationshipsContract;

abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
<<<<<<< HEAD
    use HasRecursiveRelationships;
=======
    use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
>>>>>>> 50c0e1043 (.)
}
