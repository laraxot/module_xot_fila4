<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
use Mockery;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
use Mockery;
use Modules\SaluteOra\Models\User;
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // use DatabaseMigrations;

    // SHARED TEST HELPER FUNCTIONS (DRY Pattern)
    // Queste funzioni erano duplicate in molti file di test
    // Centralizzate qui per manutenibilità e coerenza

    /**
     * Generate a unique email for testing to prevent database conflicts.
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5a14301c (.)
     */
    protected static function generateUniqueEmail(): string
    {
        $faker = fake();
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
        return $faker->unique()->safeEmail();
    }

    /**
     * Get the configured User class via XotData (correct architecture pattern).
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    protected static function getUserClass(): string
    {
        return XotData::make()->getUserClass();
    }

    /**
     * Create a test user via XotData pattern with proper architecture.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
=======
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $userData = array_merge($defaultData, $attributes);

        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $userData = array_merge($defaultData, $attributes);

        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $userData = array_merge($defaultData, $attributes);
        
        /** @var UserContract&\Illuminate\Database\Eloquent\Model $user */
        $user = $userClass::factory()->create($userData);
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return $user;
    }

    /**
     * Mock XotData for widget testing (Gold Standard Pattern).
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * Prevents "Class not found" errors and provides consistent behavior
     * across all widget tests.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
     */
    protected static function mockXotData(): void
    {
<<<<<<< HEAD
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
=======
<<<<<<< HEAD
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

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
        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(XotData::class, $mockXotData);
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
=======
        $mockXotData = \Mockery::mock(\Modules\Xot\Datas\XotData::class)->makePartial();
        
        // Mock dei metodi critici con fallback sicuri
        $mockXotData->shouldReceive('getUserClass')
            ->andReturn(\Modules\SaluteOra\Models\User::class);
            
        $mockXotData->shouldReceive('getUserResourceClassByType')
            ->with('patient')
            ->andReturn('\\Modules\\User\\Filament\\Resources\\PatientResource');
            
        $mockXotData->shouldReceive('getUserResourceClassByType')
            ->with('doctor')  
            ->andReturn('\\Modules\\User\\Filament\\Resources\\DoctorResource');
            
        $mockXotData->shouldReceive('getUserResourceClassByType')
            ->with(\Mockery::any())
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');
>>>>>>> origin/develop
            
        $mockXotData->shouldReceive('make')
            ->andReturn($mockXotData);
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

>>>>>>> b93ef594b4 (.)
        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(XotData::class, $mockXotData);
=======
        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(\Modules\Xot\Datas\XotData::class, $mockXotData);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Create test user with specific type for multi-type testing.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
=======
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
     */
    protected static function createTestUserWithType(string $type, array $attributes = []): UserContract
    {
        $attributes['type'] = $type;
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
        return static::createTestUser($attributes);
    }

    /**
     * Generate test data array with common fields.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $overrides
=======
     * @param array<string, mixed> $overrides
>>>>>>> 5a14301c (.)
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

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        return array_merge($defaultData, $overrides);
    }

    /**
     * Assert that user is authenticated with correct type.
<<<<<<< HEAD
     */
    protected function assertUserAuthenticated(?string $expectedType = null): void
=======
     *
     * @param string|null $expectedType
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    protected function assertUserAuthenticated(null|string $expectedType = null): void
>>>>>>> 5a14301c (.)
    {
        $this->assertAuthenticated();

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    protected function assertUserAuthenticated(?string $expectedType = null): void
    {
        $this->assertAuthenticated();
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    protected function assertUserAuthenticated(null|string $expectedType = null): void
    {
        $this->assertAuthenticated();

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if ($expectedType !== null) {
            /** @var UserContract|null $user */
            $user = auth()->user();
<<<<<<< HEAD
            self::assertNotNull($user);

            if ($user && method_exists($user, 'type')) {
                self::assertSame($expectedType, $user->type ?? null);
=======
            $this->assertNotNull($user);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            if ($user && method_exists($user, 'type')) {
                $this->assertEquals($expectedType, $user->type ?? null);
>>>>>>> 5a14301c (.)
            }
        }
    }
}
