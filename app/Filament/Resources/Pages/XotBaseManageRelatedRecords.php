<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\HasXotTable;
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Filament\Traits\HasXotTable;
use Webmozart\Assert\Assert;
>>>>>>> a6ef6dc7 (.)

/**
 * ---
 */
abstract class XotBaseManageRelatedRecords extends FilamentManageRelatedRecords
{
    use HasXotTable;
<<<<<<< HEAD
=======

    protected function getDefaultTableSortColumn(): ?string
    {
        return null;
        /*
        try {
            $modelClass = $this->getModelClass();
            // @var Model $model
            $model = app($modelClass);
            Assert::isInstanceOf($model, Model::class);

            return $model->getTable().'.id';
        } catch (\Exception $e) {
            return null;
        }
            */
    }
>>>>>>> a6ef6dc7 (.)
}
