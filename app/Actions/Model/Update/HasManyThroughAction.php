<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;

class HasManyThroughAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $_relationDTO): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $_relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $_model, RelationDTO $_relationDTO): void
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');
    }
}
