<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Models\BaseMorphPivot;
use Tests\TestCase;

class BaseMorphPivotBusinessLogicTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_extends_pivot_class(): void
    {
        // Arrange & Act
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(Pivot::class, $pivot);
    }

    /** @test */
    public function it_can_manage_morph_type(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->morph_type = 'App\Models\User';

        // Act
        $morphType = $pivot->morph_type;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('App\Models\User', $morphType);
    }

    /** @test */
    public function it_can_manage_morph_id(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->morph_id = 123;

        // Act
        $morphId = $pivot->morph_id;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(123, $morphId);
    }

    /** @test */
    public function it_can_manage_related_type(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->related_type = 'App\Models\Post';

        // Act
        $relatedType = $pivot->related_type;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('App\Models\Post', $relatedType);
    }

    /** @test */
    public function it_can_manage_related_id(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->related_id = 456;

        // Act
        $relatedId = $pivot->related_id;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(456, $relatedId);
    }

    /** @test */
    public function it_can_manage_pivot_attributes(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        /** @phpstan-ignore-next-line method.nonObject */
        $pivot->setAttribute('custom_field', 'custom_value');
        /** @phpstan-ignore-next-line method.nonObject */
        $pivot->setAttribute('numeric_field', 42);

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $customField = $pivot->getAttribute('custom_field');
        /** @phpstan-ignore-next-line method.nonObject */
        $numericField = $pivot->getAttribute('numeric_field');

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('custom_value', $customField);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(42, $numericField);
    }

    /** @test */
    public function it_can_manage_timestamps(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $now = now();
        $pivot->created_at = $now;
        $pivot->updated_at = $now;

        // Act
        $createdAt = $pivot->created_at;
        $updatedAt = $pivot->updated_at;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($now, $createdAt);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($now, $updatedAt);
    }

    /** @test */
    public function it_can_manage_soft_deletes(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $deletedAt = now();
        $pivot->deleted_at = $deletedAt;

        // Act
        $pivotDeletedAt = $pivot->deleted_at;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($deletedAt, $pivotDeletedAt);
    }

    /** @test */
    public function it_can_manage_tenant_id(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->tenant_id = 789;

        // Act
        $tenantId = $pivot->tenant_id;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(789, $tenantId);
    }

    /** @test */
    public function it_can_manage_user_id(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->user_id = 101;

        // Act
        $userId = $pivot->user_id;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(101, $userId);
    }

    /** @test */
    public function it_can_manage_metadata(): void
    {
        // Arrange
        $metadata = [
            'source' => 'api',
            'ip_address' => '192.168.1.1',
            'user_agent' => 'Test Browser',
            'session_id' => 'session123',
        ];

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->metadata = $metadata;

        // Act
        $pivotMetadata = $pivot->metadata;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($pivotMetadata);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('api', $pivotMetadata['source']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('192.168.1.1', $pivotMetadata['ip_address']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Test Browser', $pivotMetadata['user_agent']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('session123', $pivotMetadata['session_id']);
    }

    /** @test */
    public function it_can_manage_extra_data(): void
    {
        // Arrange
        $extraData = [
            'field1' => 'value1',
            'field2' => 'value2',
            'nested' => [
                'key' => 'value',
            ],
        ];

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->extra_data = $extraData;

        // Act
        $pivotExtraData = $pivot->extra_data;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($pivotExtraData);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('value1', $pivotExtraData['field1']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('value2', $pivotExtraData['field2']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('value', $pivotExtraData['nested']['key']);
    }

    /** @test */
    public function it_can_manage_status(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->status = 'active';

        // Act
        $status = $pivot->status;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('active', $status);
    }

    /** @test */
    public function it_can_manage_priority(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->priority = 5;

        // Act
        $priority = $pivot->priority;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(5, $priority);
    }

    /** @test */
    public function it_can_manage_sort_order(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->sort_order = 10;

        // Act
        $sortOrder = $pivot->sort_order;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(10, $sortOrder);
    }

    /** @test */
    public function it_can_manage_expires_at(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $expiresAt = now()->addDays(30);
        $pivot->expires_at = $expiresAt;

        // Act
        $pivotExpiresAt = $pivot->expires_at;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($expiresAt, $pivotExpiresAt);
    }

    /** @test */
    public function it_can_manage_starts_at(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $startsAt = now()->addHours(2);
        $pivot->starts_at = $startsAt;

        // Act
        $pivotStartsAt = $pivot->starts_at;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($startsAt, $pivotStartsAt);
    }

    /** @test */
    public function it_can_manage_ends_at(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $endsAt = now()->addDays(7);
        $pivot->ends_at = $endsAt;

        // Act
        $pivotEndsAt = $pivot->ends_at;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($endsAt, $pivotEndsAt);
    }

    /** @test */
    public function it_can_manage_is_active(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->is_active = true;

        // Act
        $isActive = $pivot->is_active;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($isActive);

        // Act - Deactivate
        $pivot->is_active = false;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($pivot->is_active);
    }

    /** @test */
    public function it_can_manage_is_public(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->is_public = false;

        // Act
        $isPublic = $pivot->is_public;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($isPublic);

        // Act - Make public
        $pivot->is_public = true;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($pivot->is_public);
    }

    /** @test */
    public function it_can_manage_is_featured(): void
    {
        // Arrange
        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->is_featured = false;

        // Act
        $isFeatured = $pivot->is_featured;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($isFeatured);

        // Act - Make featured
        $pivot->is_featured = true;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($pivot->is_featured);
    }

    /** @test */
    public function it_can_manage_tags(): void
    {
        // Arrange
        $tags = ['tag1', 'tag2', 'important'];

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->tags = $tags;

        // Act
        $pivotTags = $pivot->tags;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($pivotTags);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('tag1', $pivotTags);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('tag2', $pivotTags);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('important', $pivotTags);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $pivotTags);
    }

    /** @test */
    public function it_can_manage_categories(): void
    {
        // Arrange
        $categories = ['category1', 'category2'];

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->categories = $categories;

        // Act
        $pivotCategories = $pivot->categories;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($pivotCategories);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('category1', $pivotCategories);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('category2', $pivotCategories);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(2, $pivotCategories);
    }

    /** @test */
    public function it_can_manage_permissions(): void
    {
        // Arrange
        $permissions = [
            'read' => true,
            'write' => false,
            'delete' => false,
        ];

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->permissions = $permissions;

        // Act
        $pivotPermissions = $pivot->permissions;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($pivotPermissions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertTrue($pivotPermissions['read']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertFalse($pivotPermissions['write']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertFalse($pivotPermissions['delete']);
    }

    /** @test */
    public function it_can_manage_settings(): void
    {
        // Arrange
        $settings = [
            'notifications' => true,
            'auto_save' => false,
            'timeout' => 30,
        ];

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->settings = $settings;

        // Act
        $pivotSettings = $pivot->settings;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($pivotSettings);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertTrue($pivotSettings['notifications']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertFalse($pivotSettings['auto_save']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals(30, $pivotSettings['timeout']);
    }

    /** @test */
    public function it_can_manage_notes(): void
    {
        // Arrange
        $notes = 'This is a test note for the pivot relationship';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->notes = $notes;

        // Act
        $pivotNotes = $pivot->notes;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($notes, $pivotNotes);
    }

    /** @test */
    public function it_can_manage_description(): void
    {
        // Arrange
        $description = 'Test description for pivot relationship';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->description = $description;

        // Act
        $pivotDescription = $pivot->description;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($description, $pivotDescription);
    }

    /** @test */
    public function it_can_manage_url(): void
    {
        // Arrange
        $url = 'https://example.com/pivot/123';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->url = $url;

        // Act
        $pivotUrl = $pivot->url;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($url, $pivotUrl);
    }

    /** @test */
    public function it_can_manage_image_url(): void
    {
        // Arrange
        $imageUrl = 'https://example.com/images/pivot.jpg';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->image_url = $imageUrl;

        // Act
        $pivotImageUrl = $pivot->image_url;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($imageUrl, $pivotImageUrl);
    }

    /** @test */
    public function it_can_manage_external_id(): void
    {
        // Arrange
        $externalId = 'ext_12345';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->external_id = $externalId;

        // Act
        $pivotExternalId = $pivot->external_id;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($externalId, $pivotExternalId);
    }

    /** @test */
    public function it_can_manage_source(): void
    {
        // Arrange
        $source = 'api_import';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->source = $source;

        // Act
        $pivotSource = $pivot->source;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($source, $pivotSource);
    }

    /** @test */
    public function it_can_manage_version(): void
    {
        // Arrange
        $version = '1.2.3';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->version = $version;

        // Act
        $pivotVersion = $pivot->version;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($version, $pivotVersion);
    }

    /** @test */
    public function it_can_manage_hash(): void
    {
        // Arrange
        $hash = 'abc123def456';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->hash = $hash;

        // Act
        $pivotHash = $pivot->hash;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($hash, $pivotHash);
    }

    /** @test */
    public function it_can_manage_checksum(): void
    {
        // Arrange
        $checksum = 'sha256:abc123def456';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->checksum = $checksum;

        // Act
        $pivotChecksum = $pivot->checksum;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($checksum, $pivotChecksum);
    }

    /** @test */
    public function it_can_manage_size(): void
    {
        // Arrange
        $size = 1024;

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->size = $size;

        // Act
        $pivotSize = $pivot->size;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($size, $pivotSize);
    }

    /** @test */
    public function it_can_manage_mime_type(): void
    {
        // Arrange
        $mimeType = 'application/json';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->mime_type = $mimeType;

        // Act
        $pivotMimeType = $pivot->mime_type;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($mimeType, $pivotMimeType);
    }

    /** @test */
    public function it_can_manage_encoding(): void
    {
        // Arrange
        $encoding = 'UTF-8';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->encoding = $encoding;

        // Act
        $pivotEncoding = $pivot->encoding;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($encoding, $pivotEncoding);
    }

    /** @test */
    public function it_can_manage_language(): void
    {
        // Arrange
        $language = 'en';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->language = $language;

        // Act
        $pivotLanguage = $pivot->language;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($language, $pivotLanguage);
    }

    /** @test */
    public function it_can_manage_locale(): void
    {
        // Arrange
        $locale = 'en_US';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->locale = $locale;

        // Act
        $pivotLocale = $pivot->locale;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($locale, $pivotLocale);
    }

    /** @test */
    public function it_can_manage_timezone(): void
    {
        // Arrange
        $timezone = 'Europe/Rome';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->timezone = $timezone;

        // Act
        $pivotTimezone = $pivot->timezone;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($timezone, $pivotTimezone);
    }

    /** @test */
    public function it_can_manage_currency(): void
    {
        // Arrange
        $currency = 'EUR';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->currency = $currency;

        // Act
        $pivotCurrency = $pivot->currency;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($currency, $pivotCurrency);
    }

    /** @test */
    public function it_can_manage_decimal_places(): void
    {
        // Arrange
        $decimalPlaces = 2;

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->decimal_places = $decimalPlaces;

        // Act
        $pivotDecimalPlaces = $pivot->decimal_places;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($decimalPlaces, $pivotDecimalPlaces);
    }

    /** @test */
    public function it_can_manage_rounding_mode(): void
    {
        // Arrange
        $roundingMode = 'half_up';

        $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
        $pivot->rounding_mode = $roundingMode;

        // Act
        $pivotRoundingMode = $pivot->rounding_mode;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($roundingMode, $pivotRoundingMode);
    }
}
