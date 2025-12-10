<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

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
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use Mockery;
use Modules\SaluteOra\Models\User;
use Mockery;
use Modules\SaluteOra\Models\User;
use Mockery;
use Modules\SaluteOra\Models\User;
use Mockery;
use Modules\SaluteOra\Models\User;
use Mockery;
use Modules\SaluteOra\Models\User;
use Mockery;
use Modules\SaluteOra\Models\User;
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
use Mockery;
use Modules\SaluteOra\Models\User;
use Mockery;
use Modules\SaluteOra\Models\User;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)

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
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
    // use DatabaseMigrations;


<<<<<<< HEAD





=======
    /**
     * Generate a unique email for testing to prevent database conflicts.
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD


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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)



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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
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
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param  array<string, mixed>  $attributes
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param  array<string, mixed>  $attributes
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param  array<string, mixed>  $attributes
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $userData = array_merge($defaultData, $attributes);

        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
        $userData = array_merge($defaultData, $attributes);

        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);
<<<<<<< HEAD

=======
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        
        $userData = array_merge($defaultData, $attributes);
        
        /** @var UserContract&\Illuminate\Database\Eloquent\Model $user */
        $user = $userClass::factory()->create($userData);
        
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        
        $userData = array_merge($defaultData, $attributes);
        
        /** @var UserContract&Model $user */
        $user = $userClass::factory()->create($userData);
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        return $user;
    }

    /**
     * Mock XotData for widget testing (Gold Standard Pattern).
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * 
=======
=======
     * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
     * Prevents "Class not found" errors and provides consistent behavior
     * across all widget tests.
     *
     * @return void
     *
     * @return void
     *
     * @return void
     *
     * @return void
     */
    protected static function mockXotData(): void
    {
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
     *
     * @return void
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
            /* @phpstan-ignore-next-line method.notFound, method.nonObject */
            ->with(\Mockery::any())
            /* @phpstan-ignore-next-line method.nonObject */
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');

        /* @phpstan-ignore-next-line method.notFound, method.nonObject */
        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

        
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
            /* @phpstan-ignore-next-line method.notFound, method.nonObject */
            ->with(\Mockery::any())
            /* @phpstan-ignore-next-line method.nonObject */
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');

        /* @phpstan-ignore-next-line method.notFound, method.nonObject */
        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

        
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

        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

        
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
        
            ->with(Mockery::any())
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');

        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

            ->with(Mockery::any())
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');

        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

<<<<<<< HEAD
        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(XotData::class, $mockXotData);
<<<<<<< HEAD
        

=======
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
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
>>>>>>> ce6fc085 (.)
            
        $mockXotData->shouldReceive('make')
            ->andReturn($mockXotData);
        
<<<<<<< HEAD

        $mockXotData->shouldReceive('make')->andReturn($mockXotData);

        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(XotData::class, $mockXotData);
        // ✅ CRITICO: Bind nel container per risoluzione automatica
        app()->instance(\Modules\Xot\Datas\XotData::class, $mockXotData);
=======
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
>>>>>>> ce6fc085 (.)
    }

    /**
     * Create test user with specific type for multi-type testing.
     *
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param  array<string, mixed>  $attributes
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param  array<string, mixed>  $attributes
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
     * @param  array<string, mixed>  $attributes
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
     * @param  array<string, mixed>  $overrides
     * @param array<string, mixed> $overrides
     * @param  array<string, mixed>  $overrides
     * @param array<string, mixed> $overrides
     * @param  array<string, mixed>  $overrides
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
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
        return array_merge($defaultData, $overrides);
    }

    /**
     * Assert that user is authenticated with correct type.
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
    {
        $this->assertAuthenticated();

    protected function assertUserAuthenticated(?string $expectedType = null): void
    {
        $this->assertAuthenticated();
        
    protected function assertUserAuthenticated(null|string $expectedType = null): void
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
            self::assertNotNull($user);

            if ($user && method_exists($user, 'type')) {
                self::assertSame($expectedType, $user->type ?? null);
            $this->assertNotNull($user);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
=======
=======
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
            if ($user && method_exists($user, 'type')) {
                $this->assertEquals($expectedType, $user->type ?? null);
            }
        }
    }
}
