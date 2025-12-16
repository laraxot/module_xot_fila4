<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
=======
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

/**
 * Counts records for a given model class using optimized table information.
 */
class UpdateCountAction
{
    use QueueableAction;

    /**
     * Execute the count action for the given model class.
     *
     * @param class-string<Model> $modelClass The fully qualified model class name
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     *
     *
     *
     *
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     */
    public function execute(string $modelClass, int $total): void
    {
        InformationSchemaTable::updateModelCount($modelClass, $total); // Method not implemented
    }
}
