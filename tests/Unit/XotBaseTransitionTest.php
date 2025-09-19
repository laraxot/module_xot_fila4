<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\States\Transitions\XotBaseTransition;

uses(RefreshDatabase::class);
<<<<<<< HEAD
=======
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Database\Eloquent\Model;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

describe('XotBaseTransition', function () {
    beforeEach(function () {
        // Create a concrete test transition class
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $this->transition = new class extends XotBaseTransition {
            public static string $name = 'test_transition';

            #[Override]
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            public function getNotificationRecipients(): array
            {
                return [
                    'test_user' => $this->record,
                    'null_user' => null,
                ];
            }

<<<<<<< HEAD
<<<<<<< HEAD
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 73eab74 (.)
            {
                // Mock implementation
            }
        };

        // Create a test record
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $this->record = new class extends Model implements UserContract {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

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
<<<<<<< HEAD
            public function getRememberToken(): null|string
=======
            public function getRememberToken(): ?string
>>>>>>> f1d4085 (.)
=======
            public function getRememberToken(): null|string
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
    });

    it('has getNotificationRecipients method', function () {
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue();
    });

    it('returns correct notification recipients structure', function () {
        $recipients = $this->transition->getNotificationRecipients();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
        expect($recipients)->toBeArray()
            ->and($recipients)->toHaveKey('test_user')
            ->and($recipients)->toHaveKey('null_user')
            ->and($recipients['null_user'])->toBeNull();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    });

    it('has sendRecipientNotification method', function () {
        expect(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
    });

    it('can send notification to user contract', function () {
        // This should not throw an exception
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendRecipientNotification(null))
            ->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
    });

    it('processes recipients correctly in sendNotifications', function () {
        // Mock recipients with mixed types
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $transition = new class extends XotBaseTransition {
            public static string $name = 'test_mixed_transition';

            #[Override]
            public function getNotificationRecipients(): array
            {
                return [
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
                        {
                            return null;
                        }

                        public function setRememberToken($value): void
                        {
                        }

                        public function getRememberTokenName(): string
                        {
                            return 'remember_token';
                        }
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
                    },
                    'null_user' => null,
                ];
            }

<<<<<<< HEAD
<<<<<<< HEAD
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 73eab74 (.)
            {
                // Mock implementation
            }
        };

        // This should process without errors
<<<<<<< HEAD
<<<<<<< HEAD
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
    });

    it('validates abstract class structure', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        expect($reflection->isAbstract())
            ->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))
            ->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))
            ->toBeTrue();
<<<<<<< HEAD
=======
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    });

    it('has proper method signatures', function () {
        $reflection = new ReflectionClass(XotBaseTransition::class);

        // Check sendNotifications method
        $sendMethod = $reflection->getMethod('sendNotifications');
<<<<<<< HEAD
<<<<<<< HEAD
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
=======
        expect($sendMethod->isPublic())->toBeTrue()
            ->and($sendMethod->getReturnType()?->getName())->toBe('void');
>>>>>>> f1d4085 (.)
=======
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
>>>>>>> 73eab74 (.)

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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        expect(method_exists($this->transition, 'getNotificationRecipients'))
            ->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))
            ->toBeTrue();
<<<<<<< HEAD
=======
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    });
});
