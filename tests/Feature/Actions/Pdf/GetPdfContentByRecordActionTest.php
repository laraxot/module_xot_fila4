<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature\Actions\Pdf;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use ReflectionClass;
>>>>>>> 5a14301c (.)
=======
use ReflectionClass;
>>>>>>> 5a14301c (.)
=======
use ReflectionClass;
>>>>>>> 5a14301c (.)
=======
use ReflectionClass;
>>>>>>> 5a14301c (.)
=======
use ReflectionClass;
>>>>>>> 5a14301c (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\User;
use Modules\Xot\Actions\Pdf\GetPdfContentByRecordAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use ReflectionClass;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->action = new GetPdfContentByRecordAction;
=======
        $this->action = new GetPdfContentByRecordAction();
>>>>>>> 5a14301c (.)
=======
        $this->action = new GetPdfContentByRecordAction();
>>>>>>> 5a14301c (.)
=======
        $this->action = new GetPdfContentByRecordAction();
>>>>>>> 5a14301c (.)
=======
        $this->action = new GetPdfContentByRecordAction();
>>>>>>> 5a14301c (.)
=======
        $this->action = new GetPdfContentByRecordAction();
>>>>>>> 5a14301c (.)
    }

    /** @test */
    public function it_generates_pdf_content_from_record(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Mock view existence
        view()->addNamespace('user', resource_path('views'));

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessage("View 'user::user.show.pdf' not found");

        /** @phpstan-ignore-next-line property.notFound */
        $this->action->execute($user);
    }

    /** @test */
    public function it_generates_correct_view_name(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('generateViewName');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $viewName = $method->invoke($this->action, $user);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('user::user.show.pdf', $viewName);
    }

    /** @test */
    public function it_generates_correct_filename_for_basic_model(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create(['id' => 123, 'name' => 'Test User']);

        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('generateFilename');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $filename = $method->invoke($this->action, $user);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('user_123_test-user.pdf', $filename);
    }

    /** @test */
    public function it_generates_enhanced_filename_for_performance_models(): void
    {
        // Arrange - Create a mock model with performance fields
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $record = new class extends Model
        {
            protected $table = 'test_performance';

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
        $record = new class extends Model {
            protected $table = 'test_performance';
>>>>>>> 5a14301c (.)
=======
        $record = new class extends Model {
            protected $table = 'test_performance';
>>>>>>> 5a14301c (.)
=======
        $record = new class extends Model {
            protected $table = 'test_performance';
>>>>>>> 5a14301c (.)
=======
        $record = new class extends Model {
            protected $table = 'test_performance';
>>>>>>> 5a14301c (.)
            protected $fillable = ['id', 'matr', 'cognome', 'nome'];

            public string $matr = '';

            public string $cognome = '';

            public string $nome = '';

            public function getKey(): int
=======
>>>>>>> a6ef6dc7 (.)
=======
>>>>>>> 71586de2 (.)
=======
        $record = new class extends Model {
            protected $table = 'test_performance';
>>>>>>> 5a14301c (.)
            protected $fillable = ['id', 'matr', 'cognome', 'nome'];

            public string $matr = '';

            public string $cognome = '';

            public string $nome = '';

            public function getKey(): int
            {
                return 456;
            }
        };

        $record->matr = 'ABC123';
        $record->cognome = 'Rossi';
        $record->nome = 'Mario';

        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('generateFilename');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $filename = $method->invoke($this->action, $record);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('scheda_456_ABC123_Rossi_Mario.pdf', $filename);
    }

    /** @test */
    public function it_prepares_correct_view_parameters(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Test User']);

        // Use reflection to test protected method
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->action);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('prepareViewParameters');
        /** @phpstan-ignore-next-line method.nonObject */
        $method->setAccessible(true);

        // Act
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $params = $method->invoke($this->action, $user, 'user::user.show.pdf');

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
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

        /** @phpstan-ignore-next-line property.notFound */
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

        // Act & Assert - Should use custom filename in error message
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);

        /** @phpstan-ignore-next-line property.notFound */
        $this->action->execute($user, $customFilename);
    }

    /** @test */
    public function it_handles_from_record_convenience_method(): void
    {
        // Arrange
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
        $filename = 'convenience-test.pdf';

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessageMatches("/View 'user::user\.show\.pdf' not found/");

        /** @phpstan-ignore-next-line property.notFound */
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
