<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature\Actions\Pdf;

use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\User;
use Modules\Xot\Actions\Pdf\GetPdfContentByRecordAction;
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
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
        $this->action = new GetPdfContentByRecordAction();
    }

    /** @test */
    public function it_generates_pdf_content_from_record(): void
    {
        // Arrange
        $user = User::factory()->create([
            'name' => 'Test User',
<<<<<<< HEAD
            'email' => 'test@example.com',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'email' => 'test@example.com',
=======
            'email' => 'test@example.com'
>>>>>>> a12f125f4a (.)
=======
            'email' => 'test@example.com',
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        ]);

        // Mock view existence
        view()->addNamespace('user', resource_path('views'));
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");
        
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

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        $this->action->execute($user);
    }

    /** @test */
    public function it_generates_correct_view_name(): void
    {
        // Arrange
        $user = User::factory()->create();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('generateViewName');
        $method->setAccessible(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act
        $viewName = $method->invoke($this->action, $user);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act
        $viewName = $method->invoke($this->action, $user);

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act
        $viewName = $method->invoke($this->action, $user);
        
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

        // Act
        $viewName = $method->invoke($this->action, $user);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // Assert
        $this->assertEquals('user::user.show.pdf', $viewName);
    }

    /** @test */
    public function it_generates_correct_filename_for_basic_model(): void
    {
        // Arrange
        $user = User::factory()->create(['id' => 123, 'name' => 'Test User']);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('generateFilename');
        $method->setAccessible(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act
        $filename = $method->invoke($this->action, $user);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act
        $filename = $method->invoke($this->action, $user);

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act
        $filename = $method->invoke($this->action, $user);
        
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

        // Act
        $filename = $method->invoke($this->action, $user);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // Assert
        $this->assertEquals('user_123_test-user.pdf', $filename);
    }

    /** @test */
    public function it_generates_enhanced_filename_for_performance_models(): void
    {
        // Arrange - Create a mock model with performance fields
        $record = new class extends Model
        {
            protected $table = 'test_performance';

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
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            public function getKey()
            {
                return 456;
            }
        };
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';
        
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
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('generateFilename');
        $method->setAccessible(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act
        $filename = $method->invoke($this->action, $record);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act
        $filename = $method->invoke($this->action, $record);

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act
        $filename = $method->invoke($this->action, $record);
        
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

        // Act
        $filename = $method->invoke($this->action, $record);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // Assert
        $this->assertEquals('scheda_456_ABC123_Rossi_Mario.pdf', $filename);
    }

    /** @test */
    public function it_prepares_correct_view_parameters(): void
    {
        // Arrange
        $user = User::factory()->create(['name' => 'Test User']);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        // Use reflection to test protected method
        $reflection = new ReflectionClass($this->action);
        $method = $reflection->getMethod('prepareViewParameters');
        $method->setAccessible(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');
        
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

        // Act
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // Assert
        $this->assertIsArray($params);
        $this->assertArrayHasKey('view', $params);
        $this->assertArrayHasKey('row', $params);
        $this->assertArrayHasKey('transKey', $params);
        $this->assertEquals('user::user.show.pdf', $params['view']);
        $this->assertSame($user, $params['row']);
        $this->assertEquals('user::users.fields', $params['transKey']);
    }

    /** @test */
    public function it_throws_exception_for_missing_view(): void
    {
        // Arrange
        $user = User::factory()->create();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");
        
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

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        $this->action->execute($user);
    }

    /** @test */
    public function it_throws_exception_for_empty_html_content(): void
    {
        // This test would require mocking view rendering to return empty content
        // Implementation depends on testing infrastructure setup
        $this->markTestSkipped('Requires view mocking infrastructure');
    }

    /** @test */
    public function it_uses_custom_filename_when_provided(): void
    {
        // Arrange
        $user = User::factory()->create();
        $customFilename = 'custom-report.pdf';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);
        
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

        // Act & Assert - Should use custom filename in error message
        $this->expectException(Exception::class);

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        $this->action->execute($user, $customFilename);
    }

    /** @test */
    public function it_handles_from_record_convenience_method(): void
    {
        // Arrange
        $user = User::factory()->create();
        $filename = 'convenience-test.pdf';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
        
        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");
        
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

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        $this->action->fromRecord($user, $filename);
    }

    /** @test */
    public function it_logs_errors_when_pdf_generation_fails(): void
    {
        // This test would require mocking HTML2PDF to throw exceptions
        // Implementation depends on testing infrastructure setup
        $this->markTestSkipped('Requires HTML2PDF mocking infrastructure');
    }

    /** @test */
    public function it_returns_valid_pdf_content_when_view_exists(): void
    {
        // This test would require creating actual test views
        // Implementation depends on test view infrastructure
        $this->markTestSkipped('Requires test view infrastructure');
    }
}
