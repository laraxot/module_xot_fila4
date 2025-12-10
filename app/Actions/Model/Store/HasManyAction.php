<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class HasManyAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 300ef70 (.)
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, HasMany::class);

        $rows->create($relationDTO->data);
    }
}
