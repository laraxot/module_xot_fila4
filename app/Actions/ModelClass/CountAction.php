<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Models\InformationSchemaTable;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

/**
 * Counts records for a given model class using optimized table information.
 */
class CountAction
{
    use QueueableAction;

    /**
     * Execute the count action for the given model class.
     *
     * @param  class-string<Model>  $modelClass  The fully qualified model class name
     * @return int The total count of records
     *
     * @throws InvalidArgumentException If model class is invalid or not found
     */
    public function execute(string $modelClass): int
    {
        /* @phpstan-ignore-next-line staticMethod.notFound, return.type */
        return InformationSchemaTable::getModelCount($modelClass);
    }
}
