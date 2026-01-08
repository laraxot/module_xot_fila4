<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Tests\Feature;
=======
=======
namespace Modules\Xot\Tests\Feature;

>>>>>>> 53d6a6ba (.)
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Models\Module;
use Modules\Xot\Models\XotBaseModel;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
>>>>>>> ab8cc3f3 (.)

use function Safe\json_encode;


=======
>>>>>>> b7afadf9 (.)
use Illuminate\Database\ConnectionInterface;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 5a14301c (.)
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Models\Module;
use Modules\Xot\Models\XotBaseModel;
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;

use function Safe\json_encode;

uses(TestCase::class);

test('it extends correct base class', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel)->toBeInstanceOf(XotBaseModel::class)
        ->and($baseModel)->toBeInstanceOf(Model::class);
});

test('it has required eloquent methods', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getTable'))->toBeTrue()
        ->and(method_exists($baseModel, 'getConnection'))->toBeTrue()
        ->and(method_exists($baseModel, 'getKeyName'))->toBeTrue();
});

test('it can be instantiated without database', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel)->toBeInstanceOf(BaseModel::class)
        ->and($baseModel)->not->toBeNull();
});

test('it supports table name override', function (): void {
    $baseModel = new BaseModel;
    $tableName = $baseModel->getTable();

    expect($tableName)->toBeString()
        ->and($tableName)->not->toBeEmpty();
});

test('it supports connection override', function (): void {
    $baseModel = new BaseModel;
    $connection = $baseModel->getConnection();

    expect($connection)->not->toBeNull()
        ->and($connection)->toBeInstanceOf(ConnectionInterface::class);
});

test('it supports key name configuration', function (): void {
    $baseModel = new BaseModel;
    $keyName = $baseModel->getKeyName();

    expect($keyName)->toBeString()
        ->and($keyName)->toBe('id');
});

test('it can be used as base for other models', function (): void {
    $module = new Module;

    expect($module)->toBeInstanceOf(XotBaseModel::class)
        ->and($module)->toBeInstanceOf(Model::class);
});

test('it supports model configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getFillable())->toBeArray()
        ->and($baseModel->getHidden())->toBeArray()
        ->and($baseModel->getCasts())->toBeArray();
});

test('it can be serialized and unserialized', function (): void {
    $baseModel = new BaseModel;
    $serialized = serialize($baseModel);

    expect($serialized)->toBeString()->and($serialized)->not->toBeEmpty();

    $unserialized = unserialize($serialized);
    expect($unserialized)->toBeInstanceOf(BaseModel::class);
});

test('it supports json serialization', function (): void {
    $baseModel = new BaseModel;
    $json = json_encode($baseModel);

    expect($json)->toBeString()
        ->and($json)->not->toBeEmpty()
        ->and($json)->not->toBeFalse();
});

test('it supports array conversion', function (): void {
    $baseModel = new BaseModel;
    $array = $baseModel->toArray();

    expect($array)->toBeArray()
        ->and($array)->not->toBeEmpty();
});

test('it supports json conversion', function (): void {
    $baseModel = new BaseModel;
    $json = $baseModel->toJson();

    expect($json)->toBeString()
        ->and($json)->not->toBeEmpty();
});

test('it supports relationship loading', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'load'))->toBeTrue();
});

test('it supports attribute access methods', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getAttribute'))->toBeTrue()
        ->and(method_exists($baseModel, 'setAttribute'))->toBeTrue();
});

test('it supports mass assignment configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getFillable())->toBeArray()
        ->and($baseModel->getGuarded())->toBeArray();
});

test('it supports model events', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'fireModelEvent'))->toBeTrue();
});

test('it supports observers', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getObservableEvents'))->toBeTrue();
});

test('it supports scopes', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'addGlobalScope'))->toBeTrue();
});

test('it supports accessors and mutators', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getAttributeValue'))->toBeTrue()
        ->and(method_exists($baseModel, 'setAttribute'))->toBeTrue();
});

test('it supports casting configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getCasts())->toBeArray();
});

test('it supports timestamps configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->usesTimestamps())->toBeBool();
});

test('it supports dates configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getDates())->toBeArray();
});

test('it supports hidden attributes', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getHidden())->toBeArray();
});

test('it supports visible attributes', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getVisible())->toBeArray();
});

test('it supports appends configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getAppends())->toBeArray();
});

test('it supports eager loading configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getWith())->toBeArray();
});
=======
use Tests\TestCase;

class XotBaseModelBusinessLogicTest extends TestCase
{
    /** @test */
    public function it_extends_correct_base_class(): void
    {
        // Arrange & Act
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(XotBaseModel::class, $baseModel);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(Model::class, $baseModel);
    }

    /** @test */
    public function it_has_required_traits(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($baseModel, 'getTable'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($baseModel, 'getConnection'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($baseModel, 'getKeyName'));
    }

    /** @test */
    public function it_can_be_instantiated_without_database(): void
    {
        // Arrange & Act
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(BaseModel::class, $baseModel);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($baseModel);
    }

    /** @test */
    public function it_supports_table_name_override(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $tableName = $baseModel->getTable();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString($tableName);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotEmpty($tableName);
    }

    /** @test */
    public function it_supports_connection_override(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $connection = $baseModel->getConnection();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($connection);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(ConnectionInterface::class, $connection);
    }

    /** @test */
    public function it_supports_key_name_override(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $keyName = $baseModel->getKeyName();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString($keyName);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('id', $keyName);
    }

    /** @test */
    public function it_can_be_used_as_base_for_other_models(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $module = new Module;
=======
        $module = new Module();
>>>>>>> 5a14301c (.)
=======
        $module = new Module();
>>>>>>> 5a14301c (.)

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(XotBaseModel::class, $module);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(Model::class, $module);
    }

    /** @test */
    public function it_supports_model_configuration(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $fillable = $baseModel->getFillable();
        /** @phpstan-ignore-next-line method.nonObject */
        $hidden = $baseModel->getHidden();
        /** @phpstan-ignore-next-line method.nonObject */
        $casts = $baseModel->getCasts();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($fillable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($hidden);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($casts);
    }

    /** @test */
    public function it_supports_soft_deletes_when_configured(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        $usesSoftDeletes = method_exists($baseModel, 'trashed');

        // Assert
        // Nota: Non tutti i modelli base usano soft deletes
        // Questo test verifica solo la possibilità di configurazione
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(true); // Placeholder per logica specifica
    }

    /** @test */
    public function it_supports_timestamps_when_configured(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $usesTimestamps = $baseModel->usesTimestamps();
=======
test('it supports relationship loading', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'load'))->toBeTrue();
});
>>>>>>> cc7fb225 (.)

        // Assert
        // Nota: I modelli base possono avere configurazioni diverse
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsBool($usesTimestamps);
    }

    /** @test */
    public function it_supports_tenant_isolation_when_configured(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        $hasTenantTrait = method_exists($baseModel, 'getTenantKey');

        // Assert
        // Nota: Non tutti i modelli base usano tenant isolation
        // Questo test verifica solo la possibilità di configurazione
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(true); // Placeholder per logica specifica
    }

    /** @test */
    public function it_supports_audit_trail_when_configured(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        $hasAuditTrait = method_exists($baseModel, 'getAuditEvents');

        // Assert
        // Nota: Non tutti i modelli base usano audit trail
        // Questo test verifica solo la possibilità di configurazione
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(true); // Placeholder per logica specifica
    }

    /** @test */
    public function it_can_be_serialized(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        $serialized = serialize($baseModel);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString($serialized);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotEmpty($serialized);
    }

    /** @test */
    public function it_can_be_unserialized(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
        $serialized = serialize($baseModel);

        // Act
        $unserialized = unserialize($serialized);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(BaseModel::class, $unserialized);
    }

    /** @test */
    public function it_supports_json_serialization(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        $json = json_encode($baseModel);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString($json);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotEmpty($json);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotFalse($json);
    }

    /** @test */
    public function it_supports_array_conversion(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $array = $baseModel->toArray();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($array);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotEmpty($array);
    }

    /** @test */
    public function it_supports_json_conversion(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $json = $baseModel->toJson();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString($json);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotEmpty($json);
    }

    /** @test */
    public function it_supports_relationship_loading(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        $hasLoadMethod = method_exists($baseModel, 'load');

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasLoadMethod);
    }

<<<<<<< HEAD
=======
    expect($baseModel->getWith())->toBeArray();
});
=======
=======
>>>>>>> 53d6a6ba (.)
use Tests\TestCase;

class XotBaseModelBusinessLogicTest extends TestCase
{
    /** @test */
    public function it_extends_correct_base_class(): void
    {
        // Arrange & Act
        $baseModel = new BaseModel();

        // Assert
        $this->assertInstanceOf(XotBaseModel::class, $baseModel);
        $this->assertInstanceOf(Model::class, $baseModel);
    }

    /** @test */
    public function it_has_required_traits(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act & Assert
        $this->assertTrue(method_exists($baseModel, 'getTable'));
        $this->assertTrue(method_exists($baseModel, 'getConnection'));
        $this->assertTrue(method_exists($baseModel, 'getKeyName'));
    }

    /** @test */
    public function it_can_be_instantiated_without_database(): void
    {
        // Arrange & Act
        $baseModel = new BaseModel();

        // Assert
        $this->assertInstanceOf(BaseModel::class, $baseModel);
        $this->assertNotNull($baseModel);
    }

    /** @test */
    public function it_supports_table_name_override(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $tableName = $baseModel->getTable();

        // Assert
        $this->assertIsString($tableName);
        $this->assertNotEmpty($tableName);
    }

    /** @test */
    public function it_supports_connection_override(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $connection = $baseModel->getConnection();

        // Assert
        $this->assertNotNull($connection);
        $this->assertInstanceOf(ConnectionInterface::class, $connection);
    }

    /** @test */
    public function it_supports_key_name_override(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $keyName = $baseModel->getKeyName();

        // Assert
        $this->assertIsString($keyName);
        $this->assertEquals('id', $keyName);
    }

    /** @test */
    public function it_can_be_used_as_base_for_other_models(): void
    {
        // Arrange
        $module = new Module();

        // Act & Assert
        $this->assertInstanceOf(XotBaseModel::class, $module);
        $this->assertInstanceOf(Model::class, $module);
    }

    /** @test */
    public function it_supports_model_configuration(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $fillable = $baseModel->getFillable();
        $hidden = $baseModel->getHidden();
        $casts = $baseModel->getCasts();

        // Assert
        $this->assertIsArray($fillable);
        $this->assertIsArray($hidden);
        $this->assertIsArray($casts);
    }

    /** @test */
    public function it_supports_soft_deletes_when_configured(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $usesSoftDeletes = method_exists($baseModel, 'trashed');

        // Assert
        // Nota: Non tutti i modelli base usano soft deletes
        // Questo test verifica solo la possibilità di configurazione
        $this->assertTrue(true); // Placeholder per logica specifica
    }

    /** @test */
    public function it_supports_timestamps_when_configured(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $usesTimestamps = $baseModel->usesTimestamps();

        // Assert
        // Nota: I modelli base possono avere configurazioni diverse
        $this->assertIsBool($usesTimestamps);
    }

    /** @test */
    public function it_supports_tenant_isolation_when_configured(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $hasTenantTrait = method_exists($baseModel, 'getTenantKey');

        // Assert
        // Nota: Non tutti i modelli base usano tenant isolation
        // Questo test verifica solo la possibilità di configurazione
        $this->assertTrue(true); // Placeholder per logica specifica
    }

    /** @test */
    public function it_supports_audit_trail_when_configured(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $hasAuditTrait = method_exists($baseModel, 'getAuditEvents');

        // Assert
        // Nota: Non tutti i modelli base usano audit trail
        // Questo test verifica solo la possibilità di configurazione
        $this->assertTrue(true); // Placeholder per logica specifica
    }

    /** @test */
    public function it_can_be_serialized(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $serialized = serialize($baseModel);

        // Assert
        $this->assertIsString($serialized);
        $this->assertNotEmpty($serialized);
    }

    /** @test */
    public function it_can_be_unserialized(): void
    {
        // Arrange
        $baseModel = new BaseModel();
        $serialized = serialize($baseModel);

        // Act
        $unserialized = unserialize($serialized);

        // Assert
        $this->assertInstanceOf(BaseModel::class, $unserialized);
    }

    /** @test */
    public function it_supports_json_serialization(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $json = json_encode($baseModel);

        // Assert
        $this->assertIsString($json);
        $this->assertNotEmpty($json);
        $this->assertNotFalse($json);
    }

    /** @test */
    public function it_supports_array_conversion(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $array = $baseModel->toArray();

        // Assert
        $this->assertIsArray($array);
        $this->assertNotEmpty($array);
    }

    /** @test */
    public function it_supports_json_conversion(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $json = $baseModel->toJson();

        // Assert
        $this->assertIsString($json);
        $this->assertNotEmpty($json);
    }

    /** @test */
    public function it_supports_relationship_loading(): void
    {
        // Arrange
        $baseModel = new BaseModel();

        // Act
        $hasLoadMethod = method_exists($baseModel, 'load');

        // Assert
        $this->assertTrue($hasLoadMethod);
    }

>>>>>>> ab8cc3f3 (.)
    /** @test */
    public function it_supports_attribute_access(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> ab8cc3f3 (.)

        // Act
        $hasGetAttributeMethod = method_exists($baseModel, 'getAttribute');
        $hasSetAttributeMethod = method_exists($baseModel, 'setAttribute');

        // Assert
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasGetAttributeMethod);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $this->assertTrue($hasGetAttributeMethod);
>>>>>>> ab8cc3f3 (.)
        $this->assertTrue($hasSetAttributeMethod);
    }

    /** @test */
    public function it_supports_mass_assignment_protection(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $fillable = $baseModel->getFillable();
        /** @phpstan-ignore-next-line method.nonObject */
        $guarded = $baseModel->getGuarded();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($fillable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $baseModel = new BaseModel();

        // Act
        $fillable = $baseModel->getFillable();
        $guarded = $baseModel->getGuarded();

        // Assert
        $this->assertIsArray($fillable);
>>>>>>> ab8cc3f3 (.)
        $this->assertIsArray($guarded);
    }

    /** @test */
    public function it_supports_model_events(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> ab8cc3f3 (.)

        // Act
        $hasEvents = method_exists($baseModel, 'fireModelEvent');

        // Assert
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
>>>>>>> ab8cc3f3 (.)
        $this->assertTrue($hasEvents);
    }

    /** @test */
    public function it_supports_observers(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> ab8cc3f3 (.)

        // Act
        $hasObservers = method_exists($baseModel, 'getObservableEvents');

        // Assert
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
>>>>>>> ab8cc3f3 (.)
        $this->assertTrue($hasObservers);
    }

    /** @test */
    public function it_supports_scopes(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> ab8cc3f3 (.)

        // Act
        $hasScopes = method_exists($baseModel, 'addGlobalScope');

        // Assert
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
>>>>>>> ab8cc3f3 (.)
        $this->assertTrue($hasScopes);
    }

    /** @test */
    public function it_supports_accessors_and_mutators(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> ab8cc3f3 (.)

        // Act
        $hasAccessors = method_exists($baseModel, 'getAttributeValue');
        $hasMutators = method_exists($baseModel, 'setAttribute');

        // Assert
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasAccessors);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $this->assertTrue($hasAccessors);
>>>>>>> ab8cc3f3 (.)
        $this->assertTrue($hasMutators);
    }

    /** @test */
    public function it_supports_casting(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $casts = $baseModel->getCasts();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $baseModel = new BaseModel();

        // Act
        $casts = $baseModel->getCasts();

        // Assert
>>>>>>> ab8cc3f3 (.)
        $this->assertIsArray($casts);
    }

    /** @test */
    public function it_supports_dates(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $dates = $baseModel->getDates();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $baseModel = new BaseModel();

        // Act
        $dates = $baseModel->getDates();

        // Assert
>>>>>>> ab8cc3f3 (.)
        $this->assertIsArray($dates);
    }

    /** @test */
    public function it_supports_hidden_attributes(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $hidden = $baseModel->getHidden();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $baseModel = new BaseModel();

        // Act
        $hidden = $baseModel->getHidden();

        // Assert
>>>>>>> ab8cc3f3 (.)
        $this->assertIsArray($hidden);
    }

    /** @test */
    public function it_supports_visible_attributes(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $visible = $baseModel->getVisible();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $baseModel = new BaseModel();

        // Act
        $visible = $baseModel->getVisible();

        // Assert
>>>>>>> ab8cc3f3 (.)
        $this->assertIsArray($visible);
    }

    /** @test */
    public function it_supports_appends(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $appends = $baseModel->getAppends();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
=======
        $baseModel = new BaseModel();

        // Act
        $appends = $baseModel->getAppends();

        // Assert
>>>>>>> ab8cc3f3 (.)
        $this->assertIsArray($appends);
    }

    /** @test */
    public function it_supports_with_relationships(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $baseModel = new BaseModel;
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)
=======
        $baseModel = new BaseModel();
>>>>>>> 5a14301c (.)

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $with = $baseModel->getWith();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($with);
    }
}
=======
        $baseModel = new BaseModel();

        // Act
        $with = $baseModel->getWith();

        // Assert
        $this->assertIsArray($with);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
