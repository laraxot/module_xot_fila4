<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;
=======
use InvalidArgumentException;
=======
>>>>>>> 3fbbf1f5 (.)
=======
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
>>>>>>> ca9324a4 (.)
=======
use InvalidArgumentException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\DB;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Xot\Models\InformationSchemaTable;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Models\InformationSchemaTable;
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)

/**
 * Counts records for a given model class using optimized table information.
 */
class CountAction
{
    use QueueableAction;

    /**
     * Execute the count action for the given model class.
     *
     * @param class-string<Model> $modelClass The fully qualified model class name
<<<<<<< HEAD
<<<<<<< HEAD
     * @return int The total count of records
     *
     * @throws InvalidArgumentException If model class is invalid or not found
=======
=======
>>>>>>> 5a14301c (.)
     *
     * @throws InvalidArgumentException If model class is invalid or not found
     *
     * @return int The total count of records
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(string $modelClass): int
    {
        return InformationSchemaTable::getModelCount($modelClass);
    }
}
