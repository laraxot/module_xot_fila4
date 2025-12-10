<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\States\Transitions\XotBaseTransition;

describe('XotBaseTransition', function (): void {
    beforeEach(function (): void {
        // Create a test record using concrete class
        /* @phpstan-ignore-next-line property.notFound, new.internalClass */
        $this->record = new TestModelForTransition;
uses(RefreshDatabase::class);
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\States\Transitions\XotBaseTransition;

uses(RefreshDatabase::class);
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);
=======
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Database\Eloquent\Model;

>>>>>>> f1d4085 (.)

describe('XotBaseTransition', function () {
    beforeEach(function () {
        // Create a concrete test transition class
<<<<<<< HEAD
uses(RefreshDatabase::class);
describe('XotBaseTransition', function (): void {
    beforeEach(function (): void {
        // Create a test record using concrete class
        /* @phpstan-ignore-next-line property.notFound, new.internalClass */
        $this->record = new TestModelForTransition;
uses(RefreshDatabase::class);

describe('XotBaseTransition', function () {
    beforeEach(function () {
        // Create a concrete test transition class
        $this->transition = new class extends XotBaseTransition {
        $this->transition = new class extends XotBaseTransition {
        $this->transition = new class extends XotBaseTransition {
        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';

            #[Override]
        /* @phpstan-ignore-next-line property.notFound, new.internalClass */
        $this->transition = new TestTransitionForTest($this->record);
uses(RefreshDatabase::class);

describe('XotBaseTransition', function () {
    beforeEach(function () {
        // Create a concrete test transition class
uses(RefreshDatabase::class);
uses(RefreshDatabase::class);
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Database\Eloquent\Model;


describe('XotBaseTransition', function () {
    beforeEach(function () {
        // Create a concrete test transition class
        $this->transition = new class extends XotBaseTransition
        {
            public static string $name = 'test_transition';

            #[Override]

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
        $this->transition = new class extends XotBaseTransition
        {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        $this->transition = new class extends XotBaseTransition {
        $this->transition = new class extends XotBaseTransition
        {
            public static string $name = 'test_transition';

            #[Override]


        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';

            #[Override]

        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';
            


        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';

            #[Override]
        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';

            #[Override]

        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';

            #[Override]
=======

>>>>>>> f1d4085 (.)
            public function getNotificationRecipients(): array
            {
                return [
                    'test_user' => $this->record,
                    'null_user' => null,
                ];
            }
<<<<<<< HEAD
            public function sendRecipientNotification(?UserContract $recipient): void
=======

<<<<<<< HEAD
            #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            public function sendRecipientNotification(?UserContract $recipient): void
=======
            public function sendRecipientNotification(null|UserContract $recipient): void
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
>>>>>>> 5a14301c (.)
=======
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            #[Override]
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
<<<<<<< HEAD
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            {
                // Mock implementation
            }
        };

        // Create a test record
<<<<<<< HEAD
        $this->record = new class extends Model implements UserContract {
        $this->record = new class extends Model implements UserContract {
        $this->record = new class extends Model implements UserContract {
        $this->record = new class extends Model implements UserContract {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
        $this->record = new class extends Model implements UserContract {
        $this->record = new class extends Model implements UserContract
        {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
        $this->record = new class extends Model implements UserContract
        {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
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
        $this->record = new class extends Model implements UserContract
        {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        $this->record = new class extends Model implements UserContract {
        $this->record = new class extends Model implements UserContract
        {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
        $this->record = new class extends Model implements UserContract {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
=======
>>>>>>> f1d4085 (.)


        $this->record = new class extends Model implements UserContract {
            protected $table = 'test_users';
            protected $fillable = ['name', 'email'];
            
            // Implement UserContract methods as needed
            public function getAuthIdentifierName(): string
            {
                return 'id';
            }
            public function getAuthIdentifier(): mixed
            {
                return $this->id;
            }
            public function getAuthPassword(): string
            {
                return '';
            }
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
<<<<<<< HEAD
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): ?string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
            public function getRememberToken(): null|string
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            public function getRememberToken(): null|string
=======
            public function getRememberToken(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            {
                return null;
            }

            public function setRememberToken($value): void
            {
                // Mock implementation
            }
            public function getRememberTokenName(): string
            {
                return 'remember_token';
            }
        };

        $this->transition->record = $this->record;
    });

    it('can be instantiated', function () {
        expect($this->transition)->toBeInstanceOf(XotBaseTransition::class);
    });

    it('has static name property', function () {
        expect($this->transition::$name)->toBe('test_transition');
    });

    it('has record property', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
    it('has record property', function () {
    it('has record property', function () {
    it('has record property', function () {
    it('has record property', function () {
    it('has record property', function () {
        expect(property_exists($this->transition, 'record'))->toBeTrue();
        expect(property_exists($this->transition, 'record'))->toBeTrue();
        expect(property_exists($this->transition, 'record'))->toBeTrue();
        expect(property_exists($this->transition, 'record'))->toBeTrue();
    it('has record property', function () {
    it('has record property', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
        expect(property_exists($this->transition, 'record'))->toBeTrue();
    it('has record property', function () {
        expect(property_exists($this->transition, 'record'))->toBeTrue();
    });

    it('can get record', function () {
        $record = $this->transition->getRecord();
        expect($record)->toBe($this->record);
    });

    it('has sendNotifications method', function () {
        expect(method_exists($this->transition, 'sendNotifications'))->toBeTrue();
    });

    it('can send notifications without errors', function () {
        // This should not throw an exception
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.notFound */
        /* @phpstan-ignore-next-line property.notFound */
        /* @phpstan-ignore-next-line property.notFound */
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    });

    it('has getNotificationRecipients method', function () {
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue();
    });

    it('returns correct notification recipients structure', function () {
        $recipients = $this->transition->getNotificationRecipients();
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        expect($recipients)
            ->toBeArray()
            ->and($recipients)
            ->toHaveKey('test_user')
            /* @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($recipients['test_user'])
            ->toBeInstanceOf(RecordNotificationData::class);
            ->and($recipients)
            ->toHaveKey('null_user')
            ->and($recipients['null_user'])
            ->toBeNull();
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        expect($recipients)->toBeArray()
            ->and($recipients)->toHaveKey('test_user')
            ->and($recipients)->toHaveKey('null_user')
            ->and($recipients['null_user'])->toBeNull();
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    });

    it('has sendRecipientNotification method', function () {
        expect(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
    });

    it('can send notification to user contract', function () {
        // This should not throw an exception
<<<<<<< HEAD
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        /* @phpstan-ignore-next-line property.notFound */
        expect(fn () => $this->transition->sendRecipientNotification($recipientData, []))->not->toThrow(Exception::class);
    });

        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });
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
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        /* @phpstan-ignore-next-line property.notFound */
        expect(fn () => $this->transition->sendRecipientNotification($recipientData, []))->not->toThrow(Exception::class);
    });

    it('processes recipients correctly in sendNotifications', function (): void {
        // Create a test model
        /* @phpstan-ignore-next-line new.internalClass */
        $mockModel = new TestModelForTransition;

    it('processes recipients correctly in sendNotifications', function () {
        // Mock recipients with mixed types
        $transition = new class extends XotBaseTransition {
        $transition = new class extends XotBaseTransition {
        $transition = new class extends XotBaseTransition {
        $transition = new class extends XotBaseTransition {
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> ca9324a4 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 7131bd09 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> ed734516 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 7131bd09 (.)
=======
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 9db27d12 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
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
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
>>>>>>> 2f3197ab (.)
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> ca9324a4 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 7131bd09 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> ed734516 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 7131bd09 (.)
=======
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 9db27d12 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    });

    it('processes recipients correctly in sendNotifications', function () {
        // Mock recipients with mixed types
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
        $transition = new class extends XotBaseTransition
        {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        $transition = new class extends XotBaseTransition {
            public static string $name = 'test_mixed_transition';

            #[Override]
            public function getNotificationRecipients(): array
            {
                return [
                    'valid_user' => new class extends Model implements UserContract {
                    'valid_user' => new class extends Model implements UserContract {
                    'valid_user' => new class extends Model implements UserContract {
                    'valid_user' => new class extends Model implements UserContract {
                    'valid_user' => new class extends Model implements UserContract {
                    'valid_user' => new class extends Model implements UserContract {
                        protected $table = 'test_users';

                        public function getAuthIdentifierName(): string
                        {
                            return 'id';
                        }

                        public function getAuthIdentifier(): mixed
                        {
                            return 1;
                        }

                        public function getAuthPassword(): string
                        {
                            return '';
                        }

                        public function getRememberToken(): null|string
                        public function getRememberToken(): null|string
                        public function getRememberToken(): null|string
                        public function getRememberToken(): null|string
                        public function getRememberToken(): null|string
                        public function getRememberToken(): null|string
                        {
                            return null;
                        }

                        public function setRememberToken($value): void
                        {
                        }
                        public function setRememberToken($value): void
                        {
                        }
                        public function setRememberToken($value): void
                        {
                        }
                        public function setRememberToken($value): void
                        {
                        }
                        public function setRememberToken($value): void
                        {
                        }
                        public function setRememberToken($value): void
                        {
                        }

                        public function getRememberTokenName(): string
                        {
                            return 'remember_token';
                        }
                        
                        public function getAuthIdentifierName(): string { return 'id'; }
                        public function getAuthIdentifier(): mixed { return 1; }
                        public function getAuthPassword(): string { return ''; }
                        public function getRememberToken(): ?string { return null; }
                        public function setRememberToken($value): void { }
                        public function getRememberTokenName(): string { return 'remember_token'; }
                    },
                    'null_user' => null,
                ];
            }
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            {
                // Mock implementation
            }
        };

        // Create transition with concrete model
        $transition = new TestTransitionForTest($mockModel);

        // Create transition with concrete model
        $transition = new TestTransitionForTest($mockModel);

        // This should process without errors
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

    it('processes recipients correctly in sendNotifications', function () {
        // Mock recipients with mixed types
        $transition = new class extends XotBaseTransition
        {
            public static string $name = 'test_mixed_transition';

            #[Override]
            public function getNotificationRecipients(): array
            {
                return [
                    'valid_user' => new class extends Model implements UserContract
                    {
                        protected $table = 'test_users';

                        public function getAuthIdentifierName(): string
                        {
                            return 'id';
                        }

                        public function getAuthIdentifier(): mixed
                        {
                            return 1;
                        }

                        public function getAuthPassword(): string
                        {
                            return '';
                        }

                        public function getRememberToken(): ?string
                        {
                            return null;
                        }

                        public function setRememberToken($value): void {}

                        public function getRememberTokenName(): string
                        {
                            return 'remember_token';
                        }
=======

>>>>>>> f1d4085 (.)
                    },
                    'null_user' => null,
                ];
            }

<<<<<<< HEAD
            #[Override]
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(null|UserContract $recipient): void
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 2f3197ab (.)
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 5a14301c (.)
=======
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 5a14301c (.)
=======
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            {
                // Mock implementation
            }
        };

        // This should process without errors
<<<<<<< HEAD
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
<<<<<<< HEAD
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

    it('processes recipients correctly in sendNotifications', function () {
        // Mock recipients with mixed types
        $transition = new class extends XotBaseTransition
        {
            public static string $name = 'test_mixed_transition';

            #[Override]
            public function getNotificationRecipients(): array
            {
                return [
                    'valid_user' => new class extends Model implements UserContract
                    {
                        protected $table = 'test_users';

                        public function getAuthIdentifierName(): string
                        {
                            return 'id';
                        }

                        public function getAuthIdentifier(): mixed
                        {
                            return 1;
                        }

                        public function getAuthPassword(): string
                        {
                            return '';
                        }

                        public function getRememberToken(): ?string
                        {
                            return null;
                        }

                        public function setRememberToken($value): void {}

                        public function getRememberTokenName(): string
                        {
                            return 'remember_token';
                        }
                    },
                    'null_user' => null,
                ];
            }

            #[Override]
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
            {
                // Mock implementation
            }
        };

        // This should process without errors
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
=======
=======
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    });

    it('validates abstract class structure', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        expect($reflection->isAbstract())
            ->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))
            ->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))
            ->toBeTrue();
<<<<<<< HEAD
        
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
=======
=======
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    });

    it('has proper method signatures', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);

<<<<<<< HEAD
        /* @phpstan-ignore-next-line method.notFound, argument.templateType */

        /* @phpstan-ignore-next-line method.notFound, argument.templateType */

        /* @phpstan-ignore-next-line method.notFound, argument.templateType */
=======
        // Check sendNotifications method
        $sendMethod = $reflection->getMethod('sendNotifications');
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
=======
        expect($sendMethod->isPublic())->toBeTrue()
            ->and($sendMethod->getReturnType()?->getName())->toBe('void');
>>>>>>> f1d4085 (.)

        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');

        
        // Check sendNotifications method
        $sendMethod = $reflection->getMethod('sendNotifications');
        expect($sendMethod->isPublic())->toBeTrue()
            ->and($sendMethod->getReturnType()?->getName())->toBe('void');
        
        // Check getRecord method
        $getRecordMethod = $reflection->getMethod('getRecord');
        expect($getRecordMethod->isPublic())->toBeTrue();
    });

    it('handles type checking correctly', function () {
        $recipients = $this->transition->getNotificationRecipients();
        foreach ($recipients as $recipient) {
            if ($recipient !== null) {
                expect($recipient instanceof UserContract || $recipient instanceof Model)->toBeTrue();
            }
        }
    });

    it('has proper documentation', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);
        $method = $reflection->getMethod('sendNotifications');
        expect($method->isPublic())->toBeTrue();
    });

    it('validates inheritance requirements', function () {
        // Test that concrete implementations must provide required methods
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        expect(method_exists($this->transition, 'getNotificationRecipients'))
            ->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))
            ->toBeTrue();
<<<<<<< HEAD
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
=======
=======
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    });
});
