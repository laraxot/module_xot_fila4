<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Relations\Pivot;
use Modules\Xot\Models\BaseMorphPivot;
use Modules\Xot\Tests\TestCase;

uses(TestCase::class);

test('it extends pivot class', function (): void {
    // Arrange & Act
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;

    // Assert
    expect($pivot)->toBeInstanceOf(Pivot::class);
});

test('it can manage morph type', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->morph_type = 'App\Models\User';

    // Act
    $morphType = $pivot->morph_type;

    // Assert
    expect($morphType)->toBe('App\Models\User');
});

test('it can manage morph id', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->morph_id = 123;

    // Act
    $morphId = $pivot->morph_id;

    // Assert
    expect($morphId)->toBe(123);
});

test('it can manage related type', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->related_type = 'App\Models\Post';

    // Act & Assert
    expect($pivot->related_type)->toBe('App\Models\Post');
});

test('it can manage related id', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->related_id = 456;

    // Act & Assert
    expect($pivot->related_id)->toBe(456);
});

test('it can manage pivot attributes', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->setAttribute('custom_field', 'custom_value');
    $pivot->setAttribute('numeric_field', 42);

    // Act & Assert
    expect($pivot->getAttribute('custom_field'))->toBe('custom_value')
        ->and($pivot->getAttribute('numeric_field'))->toBe(42);
});

test('it can manage timestamps', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $now = now();
    $pivot->created_at = $now;
    $pivot->updated_at = $now;

    // Act & Assert
    expect($pivot->created_at)->toBe($now)
        ->and($pivot->updated_at)->toBe($now);
});

test('it can manage soft deletes', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $deletedAt = now();
    $pivot->deleted_at = $deletedAt;

    // Act & Assert
    expect($pivot->deleted_at)->toBe($deletedAt);
});

test('it can manage tenant id', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->tenant_id = 789;

    // Act & Assert
    expect($pivot->tenant_id)->toBe(789);
});

test('it can manage user id', function (): void {
    // Arrange
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->user_id = 101;

    // Act & Assert
    expect($pivot->user_id)->toBe(101);
});

test('it can manage metadata', function (): void {
    // Arrange
    $metadata = [
        'source' => 'api',
        'ip_address' => '192.168.1.1',
        'user_agent' => 'Test Browser',
        'session_id' => 'session123',
    ];

    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->metadata = $metadata;

    // Act & Assert
    expect($pivot->metadata)->toBeArray()
        ->and($pivot->metadata['source'])->toBe('api')
        ->and($pivot->metadata['ip_address'])->toBe('192.168.1.1')
        ->and($pivot->metadata['user_agent'])->toBe('Test Browser')
        ->and($pivot->metadata['session_id'])->toBe('session123');
});

test('it can manage extra data', function (): void {
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

    // Act & Assert
    expect($pivot->extra_data)->toBeArray()
        ->and($pivot->extra_data['field1'])->toBe('value1')
        ->and($pivot->extra_data['field2'])->toBe('value2')
        ->and($pivot->extra_data['nested']['key'])->toBe('value');
});

test('it can manage status', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->status = 'active';
    expect($pivot->status)->toBe('active');
});

test('it can manage priority', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->priority = 5;
    expect($pivot->priority)->toBe(5);
});

test('it can manage sort order', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->sort_order = 10;
    expect($pivot->sort_order)->toBe(10);
});

test('it can manage expires at', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $expiresAt = now()->addDays(30);
    $pivot->expires_at = $expiresAt;
    expect($pivot->expires_at)->toBe($expiresAt);
});

test('it can manage starts at', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $startsAt = now()->addHours(2);
    $pivot->starts_at = $startsAt;
    expect($pivot->starts_at)->toBe($startsAt);
});

test('it can manage ends at', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $endsAt = now()->addDays(7);
    $pivot->ends_at = $endsAt;
    expect($pivot->ends_at)->toBe($endsAt);
});

test('it can manage is active', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->is_active = true;
    expect($pivot->is_active)->toBeTrue();

    $pivot->is_active = false;
    expect($pivot->is_active)->toBeFalse();
});

test('it can manage is public', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->is_public = false;
    expect($pivot->is_public)->toBeFalse();

    $pivot->is_public = true;
    expect($pivot->is_public)->toBeTrue();
});

test('it can manage is featured', function (): void {
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->is_featured = false;
    expect($pivot->is_featured)->toBeFalse();

    $pivot->is_featured = true;
    expect($pivot->is_featured)->toBeTrue();
});

test('it can manage tags', function (): void {
    $tags = ['tag1', 'tag2', 'important'];
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->tags = $tags;

    expect($pivot->tags)->toBeArray()
        ->and($pivot->tags)->toContain('tag1')
        ->and($pivot->tags)->toContain('tag2')
        ->and($pivot->tags)->toContain('important')
        ->and($pivot->tags)->toHaveCount(3);
});

test('it can manage categories', function (): void {
    $categories = ['category1', 'category2'];
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->categories = $categories;

    expect($pivot->categories)->toBeArray()
        ->and($pivot->categories)->toContain('category1')
        ->and($pivot->categories)->toContain('category2')
        ->and($pivot->categories)->toHaveCount(2);
});

test('it can manage permissions', function (): void {
    $permissions = [
        'read' => true,
        'write' => false,
        'delete' => false,
    ];
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->permissions = $permissions;

    expect($pivot->permissions)->toBeArray()
        ->and($pivot->permissions['read'])->toBeTrue()
        ->and($pivot->permissions['write'])->toBeFalse()
        ->and($pivot->permissions['delete'])->toBeFalse();
});

test('it can manage settings', function (): void {
    $settings = [
        'notifications' => true,
        'auto_save' => false,
        'timeout' => 30,
    ];
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->settings = $settings;

    expect($pivot->settings)->toBeArray()
        ->and($pivot->settings['notifications'])->toBeTrue()
        ->and($pivot->settings['auto_save'])->toBeFalse()
        ->and($pivot->settings['timeout'])->toBe(30);
});

test('it can manage notes', function (): void {
    $notes = 'This is a test note for the pivot relationship';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->notes = $notes;
    expect($pivot->notes)->toBe($notes);
});

test('it can manage description', function (): void {
    $description = 'Test description for pivot relationship';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->description = $description;
    expect($pivot->description)->toBe($description);
});

test('it can manage url', function (): void {
    $url = 'https://example.com/pivot/123';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->url = $url;
    expect($pivot->url)->toBe($url);
});

test('it can manage image url', function (): void {
    $imageUrl = 'https://example.com/images/pivot.jpg';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->image_url = $imageUrl;
    expect($pivot->image_url)->toBe($imageUrl);
});

test('it can manage external id', function (): void {
    $externalId = 'ext_12345';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->external_id = $externalId;
    expect($pivot->external_id)->toBe($externalId);
});

test('it can manage source', function (): void {
    $source = 'api_import';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->source = $source;
    expect($pivot->source)->toBe($source);
});

test('it can manage version', function (): void {
    $version = '1.2.3';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->version = $version;
    expect($pivot->version)->toBe($version);
});

test('it can manage hash', function (): void {
    $hash = 'abc123def456';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->hash = $hash;
    expect($pivot->hash)->toBe($hash);
});

test('it can manage checksum', function (): void {
    $checksum = 'sha256:abc123def456';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->checksum = $checksum;
    expect($pivot->checksum)->toBe($checksum);
});

test('it can manage size', function (): void {
    $size = 1024;
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->size = $size;
    expect($pivot->size)->toBe($size);
});

test('it can manage mime type', function (): void {
    $mimeType = 'application/json';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->mime_type = $mimeType;
    expect($pivot->mime_type)->toBe($mimeType);
});

test('it can manage encoding', function (): void {
    $encoding = 'UTF-8';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->encoding = $encoding;
    expect($pivot->encoding)->toBe($encoding);
});

test('it can manage language', function (): void {
    $language = 'en';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->language = $language;
    expect($pivot->language)->toBe($language);
});

test('it can manage locale', function (): void {
    $locale = 'en_US';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->locale = $locale;
    expect($pivot->locale)->toBe($locale);
});

test('it can manage timezone', function (): void {
    $timezone = 'Europe/Rome';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->timezone = $timezone;
    expect($pivot->timezone)->toBe($timezone);
});

test('it can manage currency', function (): void {
    $currency = 'EUR';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->currency = $currency;
    expect($pivot->currency)->toBe($currency);
});

test('it can manage decimal places', function (): void {
    $decimalPlaces = 2;
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->decimal_places = $decimalPlaces;
    expect($pivot->decimal_places)->toBe($decimalPlaces);
});

test('it can manage rounding mode', function (): void {
    $roundingMode = 'half_up';
    $pivot = /** @phpstan-ignore-line new.abstract */ new BaseMorphPivot;
    $pivot->rounding_mode = $roundingMode;
    expect($pivot->rounding_mode)->toBe($roundingMode);
});
