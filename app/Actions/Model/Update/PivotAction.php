<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Relations\Pivot;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class PivotAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function execute(Model $_model, RelationDTO $relationDTO): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $rows = $relationDTO->rows;
        // $rows is already typed as Relation in RelationDTO
=======
        Assert::isInstanceOf($rows = $relationDTO->rows, Pivot::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($rows = $relationDTO->rows, Pivot::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($rows = $relationDTO->rows, Pivot::class);
>>>>>>> 5a14301c (.)
=======
        Assert::isInstanceOf($rows = $relationDTO->rows, Pivot::class);
>>>>>>> 5a14301c (.)
        dddx('wip');

        /*
         *
         * $parent_panel = $this->panel->getParent();
         * if (null !== $parent_panel) {
         * $parent_row = $parent_panel->getRow();
         * $panel_name = $this->panel->getName();
         * $parent_row->{$panel_name}()->updateExistingPivot($model->getKey(), $data);
         * }
         *
         *
         */
<<<<<<< HEAD
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> b93ef594b4 (.)
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, Pivot::class);
        dddx('wip');

        /*
<<<<<<< HEAD
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, Pivot::class);
        dddx('wip');
        /*
>>>>>>> origin/develop

            $parent_panel = $this->panel->getParent();
            if (null !== $parent_panel) {
                $parent_row = $parent_panel->getRow();
                $panel_name = $this->panel->getName();
                $parent_row->{$panel_name}()->updateExistingPivot($model->getKey(), $data);
            }


        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
         *
         * $parent_panel = $this->panel->getParent();
         * if (null !== $parent_panel) {
         * $parent_row = $parent_panel->getRow();
         * $panel_name = $this->panel->getName();
         * $parent_row->{$panel_name}()->updateExistingPivot($model->getKey(), $data);
         * }
         *
         *
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
