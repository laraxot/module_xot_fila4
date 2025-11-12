<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use InvalidArgumentException;
>>>>>>> 3df5f27e (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Modules\Tenant\Models\Traits\SushiToJson;
use Sushi\Sushi;
=======
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Modules\Tenant\Models\Traits\SushiToJson;
use Sushi\Sushi;
use Webmozart\Assert\Assert;
>>>>>>> 54cbe5d (.)

/**
 * Represents a table in the INFORMATION_SCHEMA.TABLES.
 *
 * Provides metadata and statistics about database tables.
 *
<<<<<<< HEAD
 * @property int $id
=======
 * @property string|null $TABLE_CATALOG
 * @property string|null $TABLE_SCHEMA
 * @property string|null $TABLE_NAME
 * @property string|null $TABLE_TYPE
 * @property string|null $ENGINE
<<<<<<< HEAD
 * @property int|null    $VERSION
 * @property string|null $ROW_FORMAT
 * @property int|null    $table_rows
 * @property int|null    $AVG_ROW_LENGTH
 * @property int|null    $DATA_LENGTH
 * @property int|null    $MAX_DATA_LENGTH
 * @property int|null    $INDEX_LENGTH
 * @property int|null    $DATA_FREE
 * @property int|null    $AUTO_INCREMENT
=======
 * @property int|null $VERSION
 * @property string|null $ROW_FORMAT
 * @property int|null $table_rows
 * @property int|null $AVG_ROW_LENGTH
 * @property int|null $DATA_LENGTH
 * @property int|null $MAX_DATA_LENGTH
 * @property int|null $INDEX_LENGTH
 * @property int|null $DATA_FREE
 * @property int|null $AUTO_INCREMENT
>>>>>>> 54cbe5d (.)
>>>>>>> 3df5f27e (.)
 * @property Carbon|null $CREATE_TIME
 * @property Carbon|null $UPDATE_TIME
 * @property Carbon|null $CHECK_TIME
 * @property string|null $TABLE_COLLATION
<<<<<<< HEAD
 * @property int|null $CHECKSUM
=======
<<<<<<< HEAD
 * @property int|null    $CHECKSUM
>>>>>>> 3df5f27e (.)
 * @property string|null $CREATE_OPTIONS
 * @property string|null $TABLE_COMMENT
 * @property int $id
 *
=======
 * @property int|null $CHECKSUM
 * @property string|null $CREATE_OPTIONS
 * @property string|null $TABLE_COMMENT
 * @property int $id
>>>>>>> 54cbe5d (.)
 * @method static Builder<static>|InformationSchemaTable newModelQuery()
 * @method static Builder<static>|InformationSchemaTable newQuery()
 * @method static Builder<static>|InformationSchemaTable query()
 * @method static Builder<static>|InformationSchemaTable whereAUTOINCREMENT($value)
 * @method static Builder<static>|InformationSchemaTable whereAVGROWLENGTH($value)
 * @method static Builder<static>|InformationSchemaTable whereCHECKSUM($value)
 * @method static Builder<static>|InformationSchemaTable whereCHECKTIME($value)
 * @method static Builder<static>|InformationSchemaTable whereCREATEOPTIONS($value)
 * @method static Builder<static>|InformationSchemaTable whereCREATETIME($value)
 * @method static Builder<static>|InformationSchemaTable whereDATAFREE($value)
 * @method static Builder<static>|InformationSchemaTable whereDATALENGTH($value)
 * @method static Builder<static>|InformationSchemaTable whereENGINE($value)
 * @method static Builder<static>|InformationSchemaTable whereINDEXLENGTH($value)
 * @method static Builder<static>|InformationSchemaTable whereId($value)
 * @method static Builder<static>|InformationSchemaTable whereMAXDATALENGTH($value)
 * @method static Builder<static>|InformationSchemaTable whereROWFORMAT($value)
 * @method static Builder<static>|InformationSchemaTable whereTABLECATALOG($value)
 * @method static Builder<static>|InformationSchemaTable whereTABLECOLLATION($value)
 * @method static Builder<static>|InformationSchemaTable whereTABLECOMMENT($value)
 * @method static Builder<static>|InformationSchemaTable whereTABLENAME($value)
 * @method static Builder<static>|InformationSchemaTable whereTABLEROWS($value)
 * @method static Builder<static>|InformationSchemaTable whereTABLESCHEMA($value)
 * @method static Builder<static>|InformationSchemaTable whereTABLETYPE($value)
 * @method static Builder<static>|InformationSchemaTable whereUPDATETIME($value)
 * @method static Builder<static>|InformationSchemaTable whereVERSION($value)
<<<<<<< HEAD
 *
=======
>>>>>>> 54cbe5d (.)
 * @property string|null $table_schema
 * @property string|null $table_name
 * @property int|null $table_rows
 * @property string|null $model_class
 * @property string|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $created_by
<<<<<<< HEAD
 *
<<<<<<< HEAD
 * @method static Builder<static>|InformationSchemaTable newModelQuery()
 * @method static Builder<static>|InformationSchemaTable newQuery()
 * @method static Builder<static>|InformationSchemaTable query()
=======
=======
>>>>>>> 54cbe5d (.)
>>>>>>> 3df5f27e (.)
 * @method static Builder<static>|InformationSchemaTable whereCreatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereCreatedBy($value)
 * @method static Builder<static>|InformationSchemaTable whereId($value)
 * @method static Builder<static>|InformationSchemaTable whereModelClass($value)
 * @method static Builder<static>|InformationSchemaTable whereTableName($value)
 * @method static Builder<static>|InformationSchemaTable whereTableRows($value)
 * @method static Builder<static>|InformationSchemaTable whereTableSchema($value)
 * @method static Builder<static>|InformationSchemaTable whereUpdatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereUpdatedBy($value)
<<<<<<< HEAD
 *
=======
>>>>>>> 54cbe5d (.)
 * @mixin \Eloquent
 */
class InformationSchemaTable extends Model
{
    use SushiToJson;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'table_schema',
        'table_name',
        'table_rows',
        'model_class',
        'updated_at',
        'updated_by',
        'created_at',
        'created_by',
    ];

    /**
     * The schema for the Sushi model.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
    protected $form = [
=======
    protected $schema = [
>>>>>>> 54cbe5d (.)
        'id' => 'integer',
        'table_schema' => 'string',
        'table_name' => 'string',
        'table_rows' => 'integer',
        'model_class' => 'string',
        'updated_at' => 'datetime',
        'updated_by' => 'string',
        'created_at' => 'datetime',
        'created_by' => 'string',
    ];

    /**
<<<<<<< HEAD
     * Alias compatibile per trait SushiToJson che attende getSchema().
     *
     * @return array<string, string>
     */
    public function getSchema(): array
    {
        return $this->form;
    }

    /**
=======
>>>>>>> 54cbe5d (.)
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
     *
     * @return array<int, array<string, mixed>>
     */
    public function getRows(): array
    {
        return $this->getSushiRows();
    }

    public static function updateModelCount(string $modelClass, int $total): void
    {
<<<<<<< HEAD
        if (! class_exists($modelClass)) {
=======
        if (!class_exists($modelClass)) {
>>>>>>> 54cbe5d (.)
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
        }

        /** @var Model $model */
        $model = app($modelClass);

<<<<<<< HEAD
        if (! ($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of ".Model::class);
=======
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 54cbe5d (.)
        }

        $connection = $model->getConnection();
        $database = $connection->getDatabaseName();
        $driver = $connection->getDriverName();
        $table = $model->getTable();
        $where = ['table_schema' => $database, 'model_class' => $modelClass, 'table_name' => $table];
        $row = InformationSchemaTable::updateOrCreate($where, ['table_rows' => $total]);
    }

    /**
     * Get the row count for a model class.
     * This method incorporates the logic from CountAction.
     *
     * @param  class-string<Model>  $modelClass  The fully qualified model class name
     *
     * @throws InvalidArgumentException If model class is invalid or not found
     */
    public static function getModelCount(string $modelClass): int
    {
<<<<<<< HEAD
        if (! class_exists($modelClass)) {
=======
        if (!class_exists($modelClass)) {
>>>>>>> 54cbe5d (.)
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
        }

        /** @var Model $model */
        $model = app($modelClass);

<<<<<<< HEAD
        if (! ($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of ".Model::class);
=======
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 54cbe5d (.)
        }

        $connection = $model->getConnection();
        $database = $connection->getDatabaseName();
        $driver = $connection->getDriverName();
        $table = $model->getTable();

        $where = ['table_schema' => $database, 'model_class' => $modelClass, 'table_name' => $table];
        $row = InformationSchemaTable::firstOrCreate($where);
<<<<<<< HEAD
        if ($row->table_rows === null) {
=======
<<<<<<< HEAD
        if (null === $row->table_rows) {
=======
        if ($row->table_rows === null) {
>>>>>>> 54cbe5d (.)
>>>>>>> 3df5f27e (.)
            $table_rows = $model->count();
            $row = tap($row)->update(['table_rows' => $table_rows]);
        }

        return intval($row->table_rows);

        /*
         * // Handle in-memory database
         * if (':memory:' === $database) {
         * return (int) $model->count();
         * }
         *
         * // Handle SQLite specifically
         * if ('sqlite' === $driver) {
         * return (int) $model->count();
         * }
         *
         * return $model->count();
         *
         * return static::getAccurateRowCount($table, $database);
         */
    }
}
