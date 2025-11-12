<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> f1570712 (.)
use InvalidArgumentException;
use Modules\Tenant\Models\Traits\SushiToJson;

/**
<<<<<<< HEAD
 * Metadata per le tabelle contenute in information_schema.tables.
 *
 * @property string|null $table_schema
 * @property string|null $table_name
 * @property int|null    $table_rows
 * @property string|null $model_class
=======
 * Represents a table in the INFORMATION_SCHEMA.TABLES.
 *
 * Provides metadata and statistics about database tables.
 *
 * @property int $id
 * @property string|null $table_schema
 * @property string|null $table_name
 * @property int|null $table_rows
 * @property string|null $model_class
 * @property string|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $created_by
 *
 * @method static Builder<static>|InformationSchemaTable newModelQuery()
 * @method static Builder<static>|InformationSchemaTable newQuery()
 * @method static Builder<static>|InformationSchemaTable query()
 * @method static Builder<static>|InformationSchemaTable whereCreatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereCreatedBy($value)
 * @method static Builder<static>|InformationSchemaTable whereId($value)
 * @method static Builder<static>|InformationSchemaTable whereModelClass($value)
 * @method static Builder<static>|InformationSchemaTable whereTableName($value)
 * @method static Builder<static>|InformationSchemaTable whereTableRows($value)
 * @method static Builder<static>|InformationSchemaTable whereTableSchema($value)
 * @method static Builder<static>|InformationSchemaTable whereUpdatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereUpdatedBy($value)
 *
 * @mixin \Eloquent
>>>>>>> f1570712 (.)
 */
class InformationSchemaTable extends Model
{
    use SushiToJson;

    /**
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
     * Schema utilizzato dal trait Sushi per tipizzare i campi.
     *
     * @var array<string, string>
     */
    protected array $schema = [
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
     * Restituisce lo schema atteso da Sushi.
     *
     * @return array<string, string>
     */
    public function getSchema(): array
    {
        return $this->schema;
    }

    /**
     * Restituisce i record da utilizzare per popolare la tabella in-memory.
     *
     * @return array<int, array<string, mixed>>
     */
    public function getRows(): array
    {
        return $this->getSushiRows();
    }

    /**
     * Aggiorna il numero di record memorizzato per un modello.
     *
     * @param class-string<Model> $modelClass
     */
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (! class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
        }

        /** @var Model $model */
        $model = app($modelClass);
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
        }

        $connection = $model->getConnection();
        $database = $connection->getDatabaseName();
        $table = $model->getTable();

        static::updateOrCreate([
            'table_schema' => $database,
            'model_class' => $modelClass,
            'table_name' => $table,
        ], [
            'table_rows' => $total,
        ]);
    }

    /**
     * Restituisce il numero di record per un modello.
     *
     * @param class-string<Model> $modelClass
     */
    public static function getModelCount(string $modelClass): int
    {
        if (! class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
        }

        /** @var Model $model */
        $model = app($modelClass);
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
        }

        $connection = $model->getConnection();
        $database = $connection->getDatabaseName();
        $table = $model->getTable();

        $record = static::firstOrCreate([
            'table_schema' => $database,
            'model_class' => $modelClass,
            'table_name' => $table,
        ]);

        if ($record->table_rows === null) {
            $record->update(['table_rows' => $model->count()]);
        }

        return (int) $record->table_rows;
    }
}
