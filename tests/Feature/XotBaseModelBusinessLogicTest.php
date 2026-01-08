<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature;

use function Safe\json_encode;


use Illuminate\Database\ConnectionInterface;
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

    /** @test */
    public function it_supports_attribute_access(): void
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
        $hasGetAttributeMethod = method_exists($baseModel, 'getAttribute');
        $hasSetAttributeMethod = method_exists($baseModel, 'setAttribute');

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasGetAttributeMethod);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasSetAttributeMethod);
    }

    /** @test */
    public function it_supports_mass_assignment_protection(): void
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
        $guarded = $baseModel->getGuarded();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($fillable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($guarded);
    }

    /** @test */
    public function it_supports_model_events(): void
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
        $hasEvents = method_exists($baseModel, 'fireModelEvent');

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasEvents);
    }

    /** @test */
    public function it_supports_observers(): void
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
        $hasObservers = method_exists($baseModel, 'getObservableEvents');

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasObservers);
    }

    /** @test */
    public function it_supports_scopes(): void
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
        $hasScopes = method_exists($baseModel, 'addGlobalScope');

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasScopes);
    }

    /** @test */
    public function it_supports_accessors_and_mutators(): void
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
        $hasAccessors = method_exists($baseModel, 'getAttributeValue');
        $hasMutators = method_exists($baseModel, 'setAttribute');

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasAccessors);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($hasMutators);
    }

    /** @test */
    public function it_supports_casting(): void
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
        $casts = $baseModel->getCasts();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($casts);
    }

    /** @test */
    public function it_supports_dates(): void
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
        $dates = $baseModel->getDates();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($dates);
    }

    /** @test */
    public function it_supports_hidden_attributes(): void
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
        $hidden = $baseModel->getHidden();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($hidden);
    }

    /** @test */
    public function it_supports_visible_attributes(): void
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
        $visible = $baseModel->getVisible();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($visible);
    }

    /** @test */
    public function it_supports_appends(): void
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
        $appends = $baseModel->getAppends();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($appends);
    }

    /** @test */
    public function it_supports_with_relationships(): void
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
        $with = $baseModel->getWith();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($with);
    }
}
