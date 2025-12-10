<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Modules\Tenant\Models\Traits\SushiToJson;

/**
 * @property int|null $table_rows
 * @property string $table_schema
 * @property string $table_name
 * @property string|null $model_class
 */
class InformationSchemaTable extends BaseModel
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Modules\Tenant\Models\Traits\SushiToJson;
use Sushi\Sushi;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Sushi\Sushi;
use Webmozart\Assert\Assert;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;
use Modules\Tenant\Models\Traits\SushiToJson;
use Sushi\Sushi;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

/**
 * Represents a table in the INFORMATION_SCHEMA.TABLES.
 *
<<<<<<< HEAD
 * Provides metadata and statistics about database tables.
 *
 * @property int $id
 * @property Carbon|null $CREATE_TIME
 * @property Carbon|null $UPDATE_TIME
 * @property Carbon|null $CHECK_TIME
=======
<<<<<<< HEAD
=======
=======

/**
 * Represents a table in the INFORMATION_SCHEMA.TABLES.
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * Provides metadata and statistics about database tables.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $id
=======
=======
>>>>>>> 5a14301c (.)
 * @property string|null $TABLE_CATALOG
 * @property string|null $TABLE_SCHEMA
 * @property string|null $TABLE_NAME
 * @property string|null $TABLE_TYPE
 * @property string|null $ENGINE
 * @property int|null $VERSION
 * @property string|null $ROW_FORMAT
<<<<<<< HEAD
 * @property int|null $table_rows
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int|null $table_rows
=======
 * @property int|null $TABLE_ROWS
>>>>>>> a12f125f4a (.)
=======
 * @property int|null $table_rows
>>>>>>> b93ef594b4 (.)
=======
 * @property int|null $TABLE_ROWS
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @property int|null $AVG_ROW_LENGTH
 * @property int|null $DATA_LENGTH
 * @property int|null $MAX_DATA_LENGTH
 * @property int|null $INDEX_LENGTH
 * @property int|null $DATA_FREE
 * @property int|null $AUTO_INCREMENT
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
 * @property Carbon|null $CREATE_TIME
 * @property Carbon|null $UPDATE_TIME
 * @property Carbon|null $CHECK_TIME
=======
<<<<<<< HEAD
 * @property Carbon|null $CREATE_TIME
 * @property Carbon|null $UPDATE_TIME
 * @property Carbon|null $CHECK_TIME
=======
 * @property \Illuminate\Support\Carbon|null $CREATE_TIME
 * @property \Illuminate\Support\Carbon|null $UPDATE_TIME
 * @property \Illuminate\Support\Carbon|null $CHECK_TIME
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
 * @property string|null $TABLE_COLLATION
 * @property int|null $CHECKSUM
 * @property string|null $CREATE_OPTIONS
 * @property string|null $TABLE_COMMENT
 * @property int $id
<<<<<<< HEAD
 *
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
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
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
 * @property string|null $table_schema
 * @property string|null $table_name
 * @property int|null $table_rows
 * @property string|null $model_class
<<<<<<< HEAD
 * @property string|null $table_schema
 * @property string|null $table_name
=======
=======
 * @property string|null $table_schema
 * @property string|null $table_name
>>>>>>> 5a14301c (.)
=======
 * @property string|null $table_schema
 * @property string|null $table_name
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @property string|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_at
 * @property string|null $created_by
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
 *
 * @method static Builder<static>|InformationSchemaTable newModelQuery()
 * @method static Builder<static>|InformationSchemaTable newQuery()
 * @method static Builder<static>|InformationSchemaTable query()
<<<<<<< HEAD
=======
=======
 *
>>>>>>> cc7fb225 (.)
>>>>>>> laraxot/develop
 * @method static Builder<static>|InformationSchemaTable whereCreatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereCreatedBy($value)
 * @method static Builder<static>|InformationSchemaTable whereId($value)
 * @method static Builder<static>|InformationSchemaTable whereModelClass($value)
<<<<<<< HEAD
 * @method static Builder<static>|InformationSchemaTable whereCreatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereCreatedBy($value)
=======
=======
 * @method static Builder<static>|InformationSchemaTable whereCreatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereCreatedBy($value)
>>>>>>> 5a14301c (.)
=======
 * @method static Builder<static>|InformationSchemaTable whereCreatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereCreatedBy($value)
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @method static Builder<static>|InformationSchemaTable whereTableName($value)
 * @method static Builder<static>|InformationSchemaTable whereTableRows($value)
 * @method static Builder<static>|InformationSchemaTable whereTableSchema($value)
 * @method static Builder<static>|InformationSchemaTable whereUpdatedAt($value)
 * @method static Builder<static>|InformationSchemaTable whereUpdatedBy($value)
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
 * @property string|null $model_class
 *
 * @method static Builder<static>|InformationSchemaTable whereModelClass($value)
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> laraxot/develop
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereAUTOINCREMENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereAVGROWLENGTH($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereCHECKSUM($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereCHECKTIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereCREATEOPTIONS($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereDATAFREE($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereDATALENGTH($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereENGINE($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereINDEXLENGTH($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereMAXDATALENGTH($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereROWFORMAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereTABLECATALOG($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereTABLECOLLATION($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereTABLECOMMENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereTABLENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereTABLEROWS($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereTABLESCHEMA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereTABLETYPE($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereUPDATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InformationSchemaTable whereVERSION($value)
<<<<<<< HEAD
 * @mixin \Eloquent
 */
class InformationSchemaTable extends Model
 * @mixin \Eloquent
 */
class InformationSchemaTable extends Model
{
    use SushiToJson;

    /**
     * The attributes that are mass assignable.
     *
     * The attributes that are mass assignable.
     *
     * The attributes that are mass assignable.
     *
     * The attributes that are mass assignable.
     *
     * The attributes that are mass assignable.
     *
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
 * @mixin \Eloquent
 */
class InformationSchemaTable extends Model
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
=======
 * @mixin \Eloquent
 */
class InformationSchemaTable extends Model
>>>>>>> 5a14301c (.)
=======
 * @mixin \Eloquent
 */
class InformationSchemaTable extends Model
>>>>>>> 5a14301c (.)
{
<<<<<<< HEAD
    use SushiToJson;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    use SushiToJson;
=======
=======
>>>>>>> origin/develop
    use Sushi;

    /**
     * The connection name for the model.
     */
    protected $connection = 'information_schema';

    /**
     * The table associated with the model.
     */
    protected $table = 'tables';

    /**
     * Indicates if the model should be timestamped.
     */
    public $timestamps = false;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    use SushiToJson;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
     * The attributes that are mass assignable.
     *
>>>>>>> 5a14301c (.)
=======
     * The attributes that are mass assignable.
     *
>>>>>>> 5a14301c (.)
=======
     * The attributes that are mass assignable.
     *
>>>>>>> 5a14301c (.)
=======
     * The attributes that are mass assignable.
     *
>>>>>>> 5a14301c (.)
=======
     * The attributes that are mass assignable.
     *
>>>>>>> 5a14301c (.)
=======
     * The attributes that are mass assignable.
     *
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @var list<string>
     */
    protected $fillable = [
        'table_schema',
        'table_name',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        'table_rows',
        'model_class',
        'updated_at',
        'updated_by',
        'created_at',
        'created_by',
<<<<<<< HEAD
    ];

    /**
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        'engine',
        'version',
        'row_format',
        'table_rows',
        'avg_row_length',
        'data_length',
        'max_data_length',
        'index_length',
        'data_free',
        'create_time',
        'update_time',
        'check_time',
        'table_collation',
        'checksum',
        'create_options',
        'table_comment',
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        'table_rows',
        'model_class',
        'updated_at',
        'updated_by',
        'created_at',
        'created_by',
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * Schema utilizzato dal trait Sushi per tipizzare i campi.
     *
     * @var array<string, string>
     */
    protected array $schema = [
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * The schema for the Sushi model.
     *
     * @var array<string, string>
     */
    protected $schema = [
<<<<<<< HEAD
        'id' => 'integer',
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        'id' => 'integer',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        'table_schema' => 'string',
        'table_name' => 'string',
        'table_rows' => 'integer',
        'model_class' => 'string',
        'updated_at' => 'datetime',
        'updated_by' => 'string',
        'created_at' => 'datetime',
        'created_by' => 'string',
<<<<<<< HEAD
    ];

    ];

=======
<<<<<<< HEAD
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
    ];

=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        'TABLE_CATALOG' => 'string',
        'TABLE_SCHEMA' => 'string',
        'TABLE_NAME' => 'string',
        'TABLE_TYPE' => 'string',
        'ENGINE' => 'string',
        'VERSION' => 'integer',
        'ROW_FORMAT' => 'string',
        'TABLE_ROWS' => 'integer',
        'AVG_ROW_LENGTH' => 'integer',
        'DATA_LENGTH' => 'integer',
        'MAX_DATA_LENGTH' => 'integer',
        'INDEX_LENGTH' => 'integer',
        'DATA_FREE' => 'integer',
        'AUTO_INCREMENT' => 'integer',
        'CREATE_TIME' => 'datetime',
        'UPDATE_TIME' => 'datetime',
        'CHECK_TIME' => 'datetime',
        'TABLE_COLLATION' => 'string',
        'CHECKSUM' => 'integer',
        'CREATE_OPTIONS' => 'string',
        'TABLE_COMMENT' => 'string',
    ];

    
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'TABLE_ROWS' => 'integer',
            'AVG_ROW_LENGTH' => 'integer',
            'DATA_LENGTH' => 'integer',
            'MAX_DATA_LENGTH' => 'integer',
            'INDEX_LENGTH' => 'integer',
            'DATA_FREE' => 'integer',
            'AUTO_INCREMENT' => 'integer',
            'CHECKSUM' => 'integer',
            'CREATE_TIME' => 'datetime',
            'UPDATE_TIME' => 'datetime',
            'CHECK_TIME' => 'datetime',
            'VERSION' => 'integer',
        ]);
    }

<<<<<<< HEAD
    ];

    /**
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
    ];

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
    /**
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * Restituisce lo schema atteso da Sushi.
     *
     * @return array<string, string>
     */
    public function getSchema(): array
    {
        return $this->schema;
    }

<<<<<<< HEAD
    /**
     * Restituisce i record da utilizzare per popolare la tabella in-memory.
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
=======
=======
>>>>>>> 3fbbf1f5 (.)
    /**
     * Restituisce i record da utilizzare per popolare la tabella in-memory.
=======
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
>>>>>>> 5a14301c (.)
=======
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
>>>>>>> 5a14301c (.)
=======
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
>>>>>>> 5a14301c (.)
=======
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
>>>>>>> 5a14301c (.)
=======
    /**
     * Get the rows array for the Sushi model.
     * This method is required by Sushi to provide the data.
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     *
     * @return array<int, array<string, mixed>>
     */
    public function getRows(): array
    {
<<<<<<< HEAD
        return $this->getSushiRows();
    }

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        return $this->getSushiRows();
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    /**
     * Aggiorna il numero di record memorizzato per un modello.
     *
     * @param  class-string<Model>  $modelClass
     */
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (! class_exists($modelClass)) {
<<<<<<< HEAD
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
=======
=======
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
        }

        /** @var Model $model */
        $model = app($modelClass);
<<<<<<< HEAD
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of ".Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of ".Model::class);
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        }

        $connection = $model->getConnection();
        $database = $connection->getDatabaseName();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
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
     * @param  class-string<Model>  $modelClass
     */
    public static function getModelCount(string $modelClass): int
    {
        if (! class_exists($modelClass)) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        $driver = $connection->getDriverName();
        $table = $model->getTable();
        $where = ['table_schema' => $database, 'model_class' => $modelClass, 'table_name' => $table];
        $row = InformationSchemaTable::updateOrCreate($where, ['table_rows' => $total]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $query = "SELECT 
            TABLE_CATALOG,
            TABLE_SCHEMA,
            TABLE_NAME,
            TABLE_TYPE,
            ENGINE,
            VERSION,
            ROW_FORMAT,
            TABLE_ROWS,
            AVG_ROW_LENGTH,
            DATA_LENGTH,
            MAX_DATA_LENGTH,
            INDEX_LENGTH,
            DATA_FREE,
            AUTO_INCREMENT,
            CREATE_TIME,
            UPDATE_TIME,
            CHECK_TIME,
            TABLE_COLLATION,
            CHECKSUM,
            CREATE_OPTIONS,
            TABLE_COMMENT
        FROM information_schema.TABLES
        WHERE TABLE_SCHEMA = ?";

        $results = collect(DB::select($query, [DB::connection()->getDatabaseName()]))
            ->map(function ($row, $index) {
                $data = (array) $row;
                $data['id'] = $index + 1; // Aggiungi un ID incrementale
                return $data;
            })
            ->toArray();

        /** @var array<int, array<string, mixed>> */
        return $results;
<<<<<<< HEAD
=======
        return $this->getSushiRows();
>>>>>>> b93ef594b4 (.)
    }

    public static function updateModelCount(string $modelClass, int $total): void
    {
        if (!class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
        }

        /** @var Model $model */
        $model = app($modelClass);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
        }
<<<<<<< HEAD
        return $instance;
>>>>>>> a12f125f4a (.)
=======

        $connection = $model->getConnection();
        $database = $connection->getDatabaseName();
        $driver = $connection->getDriverName();
        $table = $model->getTable();
        $where = ['table_schema' => $database, 'model_class' => $modelClass, 'table_name' => $table];
        $row = InformationSchemaTable::updateOrCreate($where, ['table_rows' => $total]);
>>>>>>> b93ef594b4 (.)
=======
    }

    /**
     * Get table statistics from Sushi or information_schema as fallback.
     *
     * @param string $schema The schema name
     * @param string $table The table name
     */
    public static function getTableStats(string $schema, string $table): ?self
    {
        $result = DB::connection('mysql')
            ->table('information_schema.TABLES')
            ->select([
                'TABLE_CATALOG',
                'TABLE_SCHEMA',
                'TABLE_NAME',
                'TABLE_TYPE',
                'ENGINE',
                'VERSION',
                'ROW_FORMAT',
                'TABLE_ROWS',
                'AVG_ROW_LENGTH',
                'DATA_LENGTH',
                'MAX_DATA_LENGTH',
                'INDEX_LENGTH',
                'DATA_FREE',
                'AUTO_INCREMENT',
                'CREATE_TIME',
                'UPDATE_TIME',
                'CHECK_TIME',
                'TABLE_COLLATION',
                'CHECKSUM',
                'CREATE_OPTIONS',
                'TABLE_COMMENT'
            ])
            ->where('TABLE_SCHEMA', '=', $schema)
            ->where('TABLE_NAME', '=', $table)
            ->first();

        if (!$result) {
            return null;
        }

        // Creiamo una nuova istanza e popoliamola manualmente
        $instance = new self();
        foreach ((array) $result as $key => $value) {
            $instance->setAttribute($key, $value);
        }
        return $instance;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    }

    /**
     * Get the row count for a model class.
     * This method incorporates the logic from CountAction.
     *
     * @param class-string<Model> $modelClass The fully qualified model class name
     *
     * @throws InvalidArgumentException If model class is invalid or not found
     */
    public static function getModelCount(string $modelClass): int
    {
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
=======
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
=======
        if (! class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [$modelClass] does not exist");
>>>>>>> a12f125f4a (.)
=======
        if (!class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [{$modelClass}] does not exist");
>>>>>>> b93ef594b4 (.)
=======
        if (! class_exists($modelClass)) {
            throw new InvalidArgumentException("Model class [$modelClass] does not exist");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        }

        /** @var Model $model */
        $model = app($modelClass);
<<<<<<< HEAD
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of ".Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [$modelClass] must be an instance of ".Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [$modelClass] must be an instance of ".Model::class);
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of ".Model::class);
=======

<<<<<<< HEAD
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
=======
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [$modelClass] must be an instance of ".Model::class);
>>>>>>> a12f125f4a (.)
=======
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> b93ef594b4 (.)
=======
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [$modelClass] must be an instance of ".Model::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Class [$modelClass] must be an instance of ".Model::class);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

        if (!($model instanceof Model)) {
            throw new InvalidArgumentException("Class [{$modelClass}] must be an instance of " . Model::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        }

        $connection = $model->getConnection();
        $database = $connection->getDatabaseName();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
        $driver = $connection->getDriverName();
        $table = $model->getTable();

=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $driver = $connection->getDriverName();
        $table = $model->getTable();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        $where = ['table_schema' => $database, 'model_class' => $modelClass, 'table_name' => $table];
        $row = InformationSchemaTable::firstOrCreate($where);
        if ($row->table_rows === null) {
            $table_rows = $model->count();
            $row = tap($row)->update(['table_rows' => $table_rows]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
        // Handle in-memory database
        if (':memory:' === $database) {
            return (int) $model->count();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
        // Handle in-memory database
        if (':memory:' === $database) {
            return (int) $model->count();
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> laraxot/develop
        }

        return intval($row->table_rows);

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        // Handle in-memory database
        if (':memory:' === $database) {
            return (int) $model->count();
        }

        // Handle SQLite specifically
        if ('sqlite' === $driver) {
            return (int) $model->count();
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
        return static::getAccurateRowCount($table, $database);
    }

    /**
     * Get accurate row count for a table.
     *
     * @param string $tableName The name of the table
     * @param string $database The database name
     */
    public static function getAccurateRowCount(string $tableName, string $database): int
    {
        $stats = static::getTableStats($database, $tableName);
        if ($stats === null) {
            return 0;
        }

        $rows = $stats->getAttribute('TABLE_ROWS');
        if ($rows === null) {
            return 0;
        }
        Assert::numeric($rows);
        return (int) $rows;
    }

    /**
     * Get table size in bytes.
     *
     * @param string $tableName The name of the table
     * @param string $database The database name
     */
    public static function getTableSize(string $tableName, string $database): int
    {
        $stats = static::getTableStats($database, $tableName);
        if ($stats === null) {
            return 0;
        }

        $dataLength = $stats->getAttribute('DATA_LENGTH');
        $indexLength = $stats->getAttribute('INDEX_LENGTH');

        if ($dataLength === null || $indexLength === null) {
            return 0;
        }

        // Assicuriamo che i valori siano convertiti correttamente in intero
        $dataLengthInt = is_numeric($dataLength) ? (int) $dataLength : 0;
        $indexLengthInt = is_numeric($indexLength) ? (int) $indexLength : 0;
        
        return $dataLengthInt + $indexLengthInt;
    }

    /**
     * Refresh the cache for a specific table.
     *
     * @param string $tableName The name of the table
     * @param string $database The database name
     */
    public static function refreshCache(string $tableName, string $database): void
    {
        DB::connection('mysql')
            ->statement("ANALYZE TABLE `{$database}`.`{$tableName}`");
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
    }
}
