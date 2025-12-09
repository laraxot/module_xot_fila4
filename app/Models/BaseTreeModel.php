<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Modules\Xot\Contracts\HasRecursiveRelationshipsContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Models\Traits\TypedHasRecursiveRelationships;

abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
    use TypedHasRecursiveRelationships;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
    use HasRecursiveRelationships;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
}
