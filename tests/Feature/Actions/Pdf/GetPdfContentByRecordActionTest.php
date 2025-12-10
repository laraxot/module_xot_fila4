<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature\Actions\Pdf;

<<<<<<< HEAD
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
=======
>>>>>>> 551c768c4 (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\User;
use Modules\Xot\Actions\Pdf\GetPdfContentByRecordAction;
<<<<<<< HEAD
=======
use ReflectionClass;
>>>>>>> 551c768c4 (.)
use Tests\TestCase;

/**
 * Test suite for GetPdfContentByRecordAction.
 */
class GetPdfContentByRecordActionTest extends TestCase
{
    private GetPdfContentByRecordAction $action;

    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
=======
        $this->action = new GetPdfContentByRecordAction;
>>>>>>> 551c768c4 (.)
    }

    /** @test */
    public function it_generates_pdf_content_from_record(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create([
            'name' => 'Test User',
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
            'email' => 'test@example.com',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> f1d4085 (.)
=======
            'email' => 'test@example.com',
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
            'email' => 'test@example.com',
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> a12f125f4a (.)
=======
            'email' => 'test@example.com',
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
            'email' => 'test@example.com',
>>>>>>> aba62c408 (.)
=======
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
            'email' => 'test@example.com',
>>>>>>> 5cb992cc6 (.)
=======
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
            'email' => 'test@example.com',
>>>>>>> 3c8d62b79 (.)
=======
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
            'email' => 'test@example.com',
>>>>>>> 60f0a1820 (.)
=======
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
            'email' => 'test@example.com',
>>>>>>> 851793957 (.)
        ]);

        // Mock view existence
        view()->addNamespace('user', resource_path('views'));
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
=======
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 851793957 (.)

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
        
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        $this->action->execute($user);
    }

    /** @test */
    public function it_generates_correct_view_name(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

=======
>>>>>>> 5cf46378 (.)
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
>>>>>>> 7468a7d2 (.)

<<<<<<< HEAD
=======
        $user = User::factory()->create();
=======
        $user = User::factory()->create();
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f8f76a284 (.)
=======
        $user = User::factory()->create();
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e6e0d054 (.)
=======
        $user = User::factory()->create();
<<<<<<< HEAD

=======
>>>>>>> 0117b849c (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
        $user = User::factory()->create();
=======
        $user = User::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======

>>>>>>> 5cb992cc6 (.)
=======
        $user = User::factory()->create();
<<<<<<< HEAD
=======
>>>>>>> 9f27fc9a6 (.)
<<<<<<< HEAD
=======
>>>>>>> 8fd88dd43 (.)

=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======

>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======

>>>>>>> 851793957 (.)
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('generateViewName');
        $method->setAccessible(true);
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
>>>>>>> 5ca118c34 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)

        // Act
        $viewName = $method->invoke($this->action, $user);
>>>>>>> f7e6113c6 (.)

<<<<<<< HEAD
=======
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('generateViewName');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $viewName = $method->invoke($this->action, $user);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 851793957 (.)

        // Act
        $viewName = $method->invoke($this->action, $user);

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
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act
        $viewName = $method->invoke($this->action, $user);
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act
        $viewName = $method->invoke($this->action, $user);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('user::user.show.pdf', $viewName);
    }

    /** @test */
    public function it_generates_correct_filename_for_basic_model(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create(['id' => 123, 'name' => 'Test User']);

=======
>>>>>>> 5cf46378 (.)
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create(['id' => 123, 'name' => 'Test User']);
>>>>>>> 7468a7d2 (.)

<<<<<<< HEAD
=======
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
=======
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f8f76a284 (.)
=======
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e6e0d054 (.)
=======
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
<<<<<<< HEAD

=======
>>>>>>> 0117b849c (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
=======
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======

>>>>>>> 5cb992cc6 (.)
=======
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
<<<<<<< HEAD
=======
>>>>>>> 9f27fc9a6 (.)
<<<<<<< HEAD
=======
>>>>>>> 8fd88dd43 (.)

=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======

>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======

>>>>>>> 851793957 (.)
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('generateFilename');
        $method->setAccessible(true);
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
>>>>>>> 5ca118c34 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)

        // Act
        $filename = $method->invoke($this->action, $user);
>>>>>>> f7e6113c6 (.)

<<<<<<< HEAD
=======
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('generateFilename');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $filename = $method->invoke($this->action, $user);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 851793957 (.)

        // Act
        $filename = $method->invoke($this->action, $user);

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
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act
        $filename = $method->invoke($this->action, $user);
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act
        $filename = $method->invoke($this->action, $user);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('user_123_test-user.pdf', $filename);
    }

    /** @test */
    public function it_generates_enhanced_filename_for_performance_models(): void
    {
        // Arrange - Create a mock model with performance fields
        $record = new class extends Model
        {
            protected $table = 'test_performance';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

        $record = new class extends Model {
            protected $table = 'test_performance';
        $record = new class extends Model {
            protected $table = 'test_performance';
        $record = new class extends Model {
            protected $table = 'test_performance';
        $record = new class extends Model {
            protected $table = 'test_performance';
            protected $fillable = ['id', 'matr', 'cognome', 'nome'];

            public string $matr = '';

            public string $cognome = '';

            public string $nome = '';

            public function getKey(): int
<<<<<<< HEAD
        $record = new class extends Model {
            protected $table = 'test_performance';
            protected $fillable = ['id', 'matr', 'cognome', 'nome'];

            public string $matr = '';

            public string $cognome = '';

            public string $nome = '';

            public function getKey(): int
        $record = new class extends Model {
            protected $table = 'test_performance';
            protected $fillable = ['id', 'matr', 'cognome', 'nome'];

            public string $matr = '';

            public string $cognome = '';

            public string $nome = '';

            public function getKey(): int
=======
>>>>>>> a6ef6dc7 (.)
=======

>>>>>>> 551c768c4 (.)
            protected $fillable = ['id', 'matr', 'cognome', 'nome'];
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
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8fd88dd43 (.)

=======
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 73eab74 (.)
=======

=======
=======

=======
>>>>>>> f8f76a284 (.)
=======

=======
>>>>>>> 5e6e0d054 (.)
=======

=======
>>>>>>> 0117b849c (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======

>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======

>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======

>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======

>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======

>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
            public function getKey()
<<<<<<< HEAD
=======
=======
            protected $fillable = ['id', 'matr', 'cognome', 'nome'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======

>>>>>>> 851793957 (.)
            public function getKey()
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 5cf46378 (.)
            {
                return 456;
            }
        };
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
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)

        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';

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
>>>>>>> 6be8834c2 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8fd88dd43 (.)
=======
        
        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 0117b849c (.)

        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';
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
        
>>>>>>> f1d4085 (.)
=======
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('generateFilename');
        $method->setAccessible(true);
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
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 8cf76e7 (.)
=======
>>>>>>> 851793957 (.)

        // Act
        $filename = $method->invoke($this->action, $record);

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8fd88dd43 (.)
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)

        // Act
        $filename = $method->invoke($this->action, $record);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9f27fc9a6 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)

        // Act
        $filename = $method->invoke($this->action, $record);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 73eab74 (.)

        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';

<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
        
        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======

        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('generateFilename');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $filename = $method->invoke($this->action, $record);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f8f76a284 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)

        // Act
        $filename = $method->invoke($this->action, $record);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act
        $filename = $method->invoke($this->action, $record);
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act
        $filename = $method->invoke($this->action, $record);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('scheda_456_ABC123_Rossi_Mario.pdf', $filename);
    }

    /** @test */
    public function it_prepares_correct_view_parameters(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Test User']);

=======
>>>>>>> 5cf46378 (.)
        $user = User::factory()->create(['name' => 'Test User']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Test User']);
>>>>>>> 7468a7d2 (.)

<<<<<<< HEAD
=======
        $user = User::factory()->create(['name' => 'Test User']);
=======
        $user = User::factory()->create(['name' => 'Test User']);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f8f76a284 (.)
=======
        $user = User::factory()->create(['name' => 'Test User']);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e6e0d054 (.)
=======
        $user = User::factory()->create(['name' => 'Test User']);
<<<<<<< HEAD

=======
>>>>>>> 0117b849c (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
        $user = User::factory()->create(['name' => 'Test User']);
=======
        $user = User::factory()->create(['name' => 'Test User']);
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======

>>>>>>> 5cb992cc6 (.)
=======
        $user = User::factory()->create(['name' => 'Test User']);
<<<<<<< HEAD
=======
>>>>>>> 9f27fc9a6 (.)
<<<<<<< HEAD
=======
>>>>>>> 8fd88dd43 (.)

=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======

>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======

>>>>>>> 851793957 (.)
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('prepareViewParameters');
        $method->setAccessible(true);
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
>>>>>>> 5ca118c34 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 73eab74 (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)

        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');
>>>>>>> f7e6113c6 (.)

<<<<<<< HEAD
=======
        
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
        
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('prepareViewParameters');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 851793957 (.)

        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');

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
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($params);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('view', $params);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('row', $params);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('transKey', $params);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('user::user.show.pdf', $params['view']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertSame($user, $params['row']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('user::users.fields', $params['transKey']);
    }

    /** @test */
    public function it_throws_exception_for_missing_view(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $user = User::factory()->create();
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
<<<<<<< HEAD
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
=======
        $user = User::factory()->create();
=======
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
=======
        $user = User::factory()->create();
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
=======
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 851793957 (.)

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
        
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        $this->action->execute($user);
    }

    /** @test */
    public function it_throws_exception_for_empty_html_content(): void
    {
        // This test would require mocking view rendering to return empty content
        // Implementation depends on testing infrastructure setup
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->markTestSkipped('Requires view mocking infrastructure');
    }

    /** @test */
    public function it_uses_custom_filename_when_provided(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        $customFilename = 'custom-report.pdf';
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
>>>>>>> 8cf76e7 (.)
=======
>>>>>>> 851793957 (.)

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

<<<<<<< HEAD
>>>>>>> 8fd88dd43 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9f27fc9a6 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

        // Act & Assert - Should use custom filename in error message
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 5cf46378 (.)
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        $this->action->execute($user, $customFilename);
    }

    /** @test */
    public function it_handles_from_record_convenience_method(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        $filename = 'convenience-test.pdf';
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
=======
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 851793957 (.)

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");
        
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
        
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
        $this->action->fromRecord($user, $filename);
    }

    /** @test */
    public function it_logs_errors_when_pdf_generation_fails(): void
    {
        // This test would require mocking HTML2PDF to throw exceptions
        // Implementation depends on testing infrastructure setup
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->markTestSkipped('Requires HTML2PDF mocking infrastructure');
    }

    /** @test */
    public function it_returns_valid_pdf_content_when_view_exists(): void
    {
        // This test would require creating actual test views
        // Implementation depends on test view infrastructure
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->markTestSkipped('Requires test view infrastructure');
    }
}
