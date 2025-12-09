<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\States\Transitions\XotBaseTransition;

uses(RefreshDatabase::class);
<<<<<<< HEAD
=======
=======
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Contracts\UserContract;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\States\Transitions\XotBaseTransition;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
uses(RefreshDatabase::class);
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

describe('XotBaseTransition', function () {
    beforeEach(function () {
        // Create a concrete test transition class
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
        $this->transition = new class extends XotBaseTransition {
>>>>>>> 5a14301c (.)
=======
        $this->transition = new class extends XotBaseTransition {
>>>>>>> 5a14301c (.)
            public static string $name = 'test_transition';

            #[Override]
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            public function getNotificationRecipients(): array
            {
                return [
                    'test_user' => $this->record,
                    'null_user' => null,
                ];
            }
<<<<<<< HEAD

            #[Override]
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
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> a12f125f4a (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> b93ef594b4 (.)
=======
            
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 73eab74 (.)
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
            {
                // Mock implementation
            }
        };

        // Create a test record
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
        $this->record = new class extends Model implements UserContract {
>>>>>>> 5a14301c (.)
=======
        $this->record = new class extends Model implements UserContract {
>>>>>>> 5a14301c (.)
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)

=======
        $this->record = new class extends Model implements UserContract {
            protected $table = 'test_users';
            protected $fillable = ['name', 'email'];
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            // Implement UserContract methods as needed
            public function getAuthIdentifierName(): string
            {
                return 'id';
            }
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            public function getAuthIdentifier(): mixed
            {
                return $this->id;
            }
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            public function getAuthPassword(): string
            {
                return '';
            }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            public function getRememberToken(): ?string
=======
            public function getRememberToken(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            public function getRememberToken(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
            public function getRememberToken(): null|string
=======
            public function getRememberToken(): ?string
>>>>>>> a12f125f4a (.)
=======
            public function getRememberToken(): null|string
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            public function getRememberToken(): null|string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
            public function getRememberToken(): null|string
=======
            public function getRememberToken(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            public function getRememberToken(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            public function getRememberToken(): null|string
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
=======
=======
            public function getRememberToken(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            public function getRememberToken(): null|string
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
            {
                return null;
            }

<<<<<<< HEAD
=======
=======
            
            public function getRememberToken(): ?string
            {
                return null;
            }
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            public function setRememberToken($value): void
            {
                // Mock implementation
            }
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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

    it('has record property', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionObject($this->transition);
        expect($reflection->hasProperty('record'))->toBeTrue();
=======
        expect(property_exists($this->transition, 'record'))->toBeTrue();
>>>>>>> 5a14301c (.)
=======
        expect(property_exists($this->transition, 'record'))->toBeTrue();
>>>>>>> 5a14301c (.)
    });

    it('can get record', function () {
        $record = $this->transition->getRecord();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($record)->toBe($this->record);
    });

    it('has sendNotifications method', function () {
        expect(method_exists($this->transition, 'sendNotifications'))->toBeTrue();
    });

    it('can send notifications without errors', function () {
        // This should not throw an exception
<<<<<<< HEAD
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> a12f125f4a (.)
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('has getNotificationRecipients method', function () {
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue();
    });

    it('returns correct notification recipients structure', function () {
        $recipients = $this->transition->getNotificationRecipients();
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        expect($recipients)
            ->toBeArray()
            ->and($recipients)
            ->toHaveKey('test_user')
            ->and($recipients)
            ->toHaveKey('null_user')
            ->and($recipients['null_user'])
            ->toBeNull();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        
>>>>>>> origin/develop
        expect($recipients)->toBeArray()
            ->and($recipients)->toHaveKey('test_user')
            ->and($recipients)->toHaveKey('null_user')
            ->and($recipients['null_user'])->toBeNull();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('has sendRecipientNotification method', function () {
        expect(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
    });

    it('can send notification to user contract', function () {
        // This should not throw an exception
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 5a14301c (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 3fbbf1f5 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
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
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
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
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 5a14301c (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 3fbbf1f5 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
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
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
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
    });

    it('processes recipients correctly in sendNotifications', function () {
        // Mock recipients with mixed types
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
        $transition = new class extends XotBaseTransition {
>>>>>>> 5a14301c (.)
=======
        $transition = new class extends XotBaseTransition {
>>>>>>> 5a14301c (.)
            public static string $name = 'test_mixed_transition';

            #[Override]
<<<<<<< HEAD
=======
=======
        $transition = new class extends XotBaseTransition {
            public static string $name = 'test_mixed_transition';
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            public function getNotificationRecipients(): array
            {
                return [
<<<<<<< HEAD
<<<<<<< HEAD
                    'valid_user' => new class extends Model implements UserContract
                    {
=======
                    'valid_user' => new class extends Model implements UserContract {
>>>>>>> 5a14301c (.)
=======
                    'valid_user' => new class extends Model implements UserContract {
>>>>>>> 5a14301c (.)
                        protected $table = 'test_users';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

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

<<<<<<< HEAD
<<<<<<< HEAD
                        public function getRememberToken(): ?string
=======
                        public function getRememberToken(): null|string
>>>>>>> 5a14301c (.)
=======
                        public function getRememberToken(): null|string
>>>>>>> 5a14301c (.)
                        {
                            return null;
                        }

<<<<<<< HEAD
<<<<<<< HEAD
                        public function setRememberToken($value): void {}
=======
                        public function setRememberToken($value): void
                        {
                        }
>>>>>>> 5a14301c (.)
=======
                        public function setRememberToken($value): void
                        {
                        }
>>>>>>> 5a14301c (.)

                        public function getRememberTokenName(): string
                        {
                            return 'remember_token';
                        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                        
                        public function getAuthIdentifierName(): string { return 'id'; }
                        public function getAuthIdentifier(): mixed { return 1; }
                        public function getAuthPassword(): string { return ''; }
                        public function getRememberToken(): ?string { return null; }
                        public function setRememberToken($value): void { }
                        public function getRememberTokenName(): string { return 'remember_token'; }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                    },
                    'null_user' => null,
                ];
            }
<<<<<<< HEAD

            #[Override]
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
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> a12f125f4a (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> b93ef594b4 (.)
=======
            
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 73eab74 (.)
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
            {
                // Mock implementation
            }
        };

        // This should process without errors
<<<<<<< HEAD
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> a12f125f4a (.)
=======
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('validates abstract class structure', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        expect($reflection->isAbstract())
            ->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))
            ->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))
            ->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('has proper method signatures', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);
<<<<<<< HEAD

        // Check sendNotifications method
        $sendMethod = $reflection->getMethod('sendNotifications');
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');

=======
<<<<<<< HEAD

        // Check sendNotifications method
        $sendMethod = $reflection->getMethod('sendNotifications');
<<<<<<< HEAD
<<<<<<< HEAD
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
=======
        expect($sendMethod->isPublic())->toBeTrue()
            ->and($sendMethod->getReturnType()?->getName())->toBe('void');
>>>>>>> a12f125f4a (.)
=======
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
>>>>>>> b93ef594b4 (.)

=======
        
        // Check sendNotifications method
        $sendMethod = $reflection->getMethod('sendNotifications');
        expect($sendMethod->isPublic())->toBeTrue()
            ->and($sendMethod->getReturnType()?->getName())->toBe('void');
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Check getRecord method
        $getRecordMethod = $reflection->getMethod('getRecord');
        expect($getRecordMethod->isPublic())->toBeTrue();
    });

    it('handles type checking correctly', function () {
        $recipients = $this->transition->getNotificationRecipients();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        foreach ($recipients as $recipient) {
            if ($recipient !== null) {
                expect($recipient instanceof UserContract || $recipient instanceof Model)->toBeTrue();
            }
        }
    });

    it('has proper documentation', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);
        $method = $reflection->getMethod('sendNotifications');
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($method->isPublic())->toBeTrue();
    });

    it('validates inheritance requirements', function () {
        // Test that concrete implementations must provide required methods
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        expect(method_exists($this->transition, 'getNotificationRecipients'))
            ->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))
            ->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });
});
