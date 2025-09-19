<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

use Mockery;
use Modules\SaluteOra\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
    //use DatabaseMigrations;

    // =============================================================================
    // SHARED TEST HELPER FUNCTIONS (DRY Pattern)
    // =============================================================================
    // Queste funzioni erano duplicate in molti file di test
    // Centralizzate qui per manutenibilità e coerenza
    // =============================================================================

    /**
     * Generate a unique email for testing to prevent database conflicts.
     *
     * @return string
     */
    protected static function generateUniqueEmail(): string
    {
        $faker = fake();
        return $faker->unique()->safeEmail();
    }

    /**
     * Get the configured User class via XotData (correct architecture pattern).
     *
     * @return string
     */
    protected static function getUserClass(): string
    {
        return XotData::make()->getUserClass();
    }

    /**
     * Create a test user via XotData pattern with proper architecture.
     *
     * @param array<string, mixed> $attributes
     * @return UserContract
     */
    protected static function createTestUser(array $attributes = []): UserContract
    {
        $userClass = static::getUserClass();
        $defaultData = [
            'email' => static::generateUniqueEmail(),
            'password' => Hash::make('password123'),
            'name' => fake()->name(),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        $userData = array_merge($defaultData, $attributes);

        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);

<<<<<<< HEAD
=======
        
        $userData = array_merge($defaultData, $attributes);
        
        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        return $user;
    }

    /**
     * Mock XotData for widget testing (Gold Standard Pattern).
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
     * Prevents "Class not found" errors and provides consistent behavior
     * across all widget tests.
     *
     * @return void
     */
    protected static function mockXotData(): void
    {
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        // Mock dei metodi critici con fallback sicuri
        $mockXotData->shouldReceive('getUserClass')->andReturn(User::class);

        $mockXotData
            ->shouldReceive('getUserResourceClassByType')
            ->with('patient')
            ->andReturn('\\Modules\\User\\Filament\\Resources\\PatientResource');

        $mockXotData
            ->shouldReceive('getUserResourceClassByType')
            ->with('doctor')
            ->andReturn('\\Modules\\User\\Filament\\Resources\\DoctorResource');

        $mockXotData
            ->shouldReceive('getUserResourceClassByType')
            ->with(Mockery::any())
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');

        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

<<<<<<< HEAD
=======
        
        // Mock dei metodi critici con fallback sicuri
        $mockXotData->shouldReceive('getUserClass')
            ->andReturn(User::class);
            
        $mockXotData->shouldReceive('getUserResourceClassByType')
            ->with('patient')
            ->andReturn('\\Modules\\User\\Filament\\Resources\\PatientResource');
            
        $mockXotData->shouldReceive('getUserResourceClassByType')
            ->with('doctor')  
            ->andReturn('\\Modules\\User\\Filament\\Resources\\DoctorResource');
            
        $mockXotData->shouldReceive('getUserResourceClassByType')
            ->with(Mockery::any())
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');
            
        $mockXotData->shouldReceive('make')
            ->andReturn($mockXotData);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(XotData::class, $mockXotData);
    }

    /**
     * Create test user with specific type for multi-type testing.
     *
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
     */
    protected static function createTestUserWithType(string $type, array $attributes = []): UserContract
    {
        $attributes['type'] = $type;
        return static::createTestUser($attributes);
    }

    /**
     * Generate test data array with common fields.
     *
     * @param array<string, mixed> $overrides
     * @return array<string, mixed>
     */
    protected static function generateTestData(array $overrides = []): array
    {
        $defaultData = [
            'name' => fake()->name(),
            'email' => static::generateUniqueEmail(),
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        return array_merge($defaultData, $overrides);
    }

    /**
     * Assert that user is authenticated with correct type.
     *
     * @param string|null $expectedType
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    protected function assertUserAuthenticated(null|string $expectedType = null): void
    {
        $this->assertAuthenticated();

<<<<<<< HEAD
=======
    protected function assertUserAuthenticated(?string $expectedType = null): void
    {
        $this->assertAuthenticated();
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        if ($expectedType !== null) {
            /** @var UserContract|null $user */
            $user = auth()->user();
            $this->assertNotNull($user);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
            if ($user && method_exists($user, 'type')) {
                $this->assertEquals($expectedType, $user->type ?? null);
            }
        }
    }
}
