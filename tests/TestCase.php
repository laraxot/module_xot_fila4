<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

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

    // use DatabaseMigrations;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)

    //use DatabaseMigrations;
>>>>>>> d2b0a27 (.)

    // =============================================================================
    // SHARED TEST HELPER FUNCTIONS (DRY Pattern)
    // =============================================================================
    // Queste funzioni erano duplicate in molti file di test
    // Centralizzate qui per manutenibilità e coerenza
    // =============================================================================

    /**
     * Generate a unique email for testing to prevent database conflicts.
     */
    protected static function generateUniqueEmail(): string
    {
        $faker = fake();

        return $faker->unique()->safeEmail();
    }

    /**
     * Get the configured User class via XotData (correct architecture pattern).
     */
    protected static function getUserClass(): string
    {
        return XotData::make()->getUserClass();
    }

    /**
     * Create a test user via XotData pattern with proper architecture.
     *
     * @param  array<string, mixed>  $attributes
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        $userData = array_merge($defaultData, $attributes);

        /** @var UserContract&Model $user */
        /* @phpstan-ignore-next-line method.nonObject */
        $user = $userClass::factory()->create($userData);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        
        $userData = array_merge($defaultData, $attributes);
        
        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        return $user;
    }

    /**
     * Mock XotData for widget testing (Gold Standard Pattern).
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> f1d4085 (.)
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     *
>>>>>>> 300ef70 (.)
     * Prevents "Class not found" errors and provides consistent behavior
     * across all widget tests.
     */
    protected static function mockXotData(): void
    {
<<<<<<< HEAD
        $mockXotData = \Mockery::mock(XotData::class)->makePartial();
=======
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        // Mock dei metodi critici con fallback sicuri
        $userClass = XotData::make()->getUserClass();
        /* @phpstan-ignore-next-line method.notFound */
        $mockXotData->shouldReceive('getUserClass')->andReturn($userClass);

        /* @phpstan-ignore-next-line method.notFound */
        $mockXotData
            /* @phpstan-ignore-next-line method.notFound */
            ->shouldReceive('getUserResourceClassByType')
            /* @phpstan-ignore-next-line method.notFound, method.nonObject */
            ->with('patient')
            /* @phpstan-ignore-next-line method.nonObject */
            ->andReturn('\\Modules\\User\\Filament\\Resources\\PatientResource');

        /* @phpstan-ignore-next-line method.notFound */
        $mockXotData
            /* @phpstan-ignore-next-line method.notFound */
            ->shouldReceive('getUserResourceClassByType')
            /* @phpstan-ignore-next-line method.notFound, method.nonObject */
            ->with('doctor')
            /* @phpstan-ignore-next-line method.nonObject */
            ->andReturn('\\Modules\\User\\Filament\\Resources\\DoctorResource');

        /* @phpstan-ignore-next-line method.notFound */
        $mockXotData
            /* @phpstan-ignore-next-line method.notFound */
            ->shouldReceive('getUserResourceClassByType')
            /* @phpstan-ignore-next-line method.notFound, method.nonObject */
            ->with(\Mockery::any())
            /* @phpstan-ignore-next-line method.nonObject */
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');

        /* @phpstan-ignore-next-line method.notFound, method.nonObject */
        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(XotData::class, $mockXotData);
    }

    /**
     * Create test user with specific type for multi-type testing.
     *
     * @param  array<string, mixed>  $attributes
     */
    protected static function createTestUserWithType(string $type, array $attributes = []): UserContract
    {
        $attributes['type'] = $type;

        return static::createTestUser($attributes);
    }

    /**
     * Generate test data array with common fields.
     *
     * @param  array<string, mixed>  $overrides
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
        return array_merge($defaultData, $overrides);
    }

    /**
     * Assert that user is authenticated with correct type.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function assertUserAuthenticated(?string $expectedType = null): void
    {
        $this->assertAuthenticated();

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    protected function assertUserAuthenticated(null|string $expectedType = null): void
    {
        $this->assertAuthenticated();

<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function assertUserAuthenticated(?string $expectedType = null): void
    {
        $this->assertAuthenticated();
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        if ($expectedType !== null) {
            /** @var UserContract|null $user */
            $user = auth()->user();
            $this->assertNotNull($user);
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
            if ($user && method_exists($user, 'type')) {
                $this->assertEquals($expectedType, $user->type ?? null);
            }
        }
    }
}
