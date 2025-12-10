<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

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
use Mockery;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Mockery;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Mockery;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Mockery;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
use Mockery;
use Modules\SaluteOra\Models\User;
>>>>>>> 53d6a6ba (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
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
     */
    protected static function generateUniqueEmail(): string
    {
        $faker = fake();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
        return $faker->unique()->safeEmail();
    }

    /**
     * Get the configured User class via XotData (correct architecture pattern).
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
=======
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $attributes
>>>>>>> cc7fb225 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     *
     * @return void
>>>>>>> 5a14301c (.)
     */
    protected static function mockXotData(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
=======
<<<<<<< HEAD
        $mockXotData = \Mockery::mock(XotData::class)->makePartial();
=======
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
=======
        $mockXotData = \Mockery::mock(XotData::class)->makePartial();
=======
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
>>>>>>> 71586de2 (.)
=======
     *
     * @return void
     */
    protected static function mockXotData(): void
    {
<<<<<<< HEAD
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
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
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
        $mockXotData = Mockery::mock(XotData::class)->makePartial();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->with(Mockery::any())
            ->andReturn('\\Modules\\User\\Filament\\Resources\\UserResource');

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
=======
>>>>>>> 53d6a6ba (.)
            ->with(Mockery::any())
=======
            /* @phpstan-ignore-next-line method.notFound, method.nonObject */
            ->with(\Mockery::any())
            /* @phpstan-ignore-next-line method.nonObject */
>>>>>>> b7afadf9 (.)
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
=======
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param string $type
     * @param array<string, mixed> $attributes
     * @return UserContract
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $attributes
>>>>>>> cc7fb225 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
        return static::createTestUser($attributes);
    }

    /**
     * Generate test data array with common fields.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $overrides
=======
     * @param array<string, mixed> $overrides
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $overrides
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $overrides
>>>>>>> 5a14301c (.)
=======
     * @param array<string, mixed> $overrides
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $overrides
>>>>>>> cc7fb225 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    protected function assertUserAuthenticated(?string $expectedType = null): void
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            self::assertNotNull($user);

            if ($user && method_exists($user, 'type')) {
                self::assertSame($expectedType, $user->type ?? null);
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
            }
        }
    }
}
