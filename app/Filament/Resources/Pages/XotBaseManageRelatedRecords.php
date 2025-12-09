<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Filament\Traits\HasXotTable;
use Filament\Resources\Pages\ManageRelatedRecords as FilamentManageRelatedRecords;

/**
 * ---
 */
abstract class XotBaseManageRelatedRecords extends FilamentManageRelatedRecords
{
    use HasXotTable;

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
}