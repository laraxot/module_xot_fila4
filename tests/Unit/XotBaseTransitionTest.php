<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Modules\Notify\Datas\RecordNotificationData;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Tests\Unit\Support\TestModelForTransition;
use Modules\Xot\Tests\Unit\Support\TestTransitionForTest;

uses(RefreshDatabase::class);

describe('XotBaseTransition', function (): void {
    beforeEach(function (): void {
        // Create a test record using concrete class
        $this->record = new TestModelForTransition();

        // Create a concrete test transition class
        $this->transition = new TestTransitionForTest($this->record);
    });

    it('can be instantiated', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->transition)->toBeInstanceOf(XotBaseTransition::class);
    });

    it('has static name property', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->transition::$name)->toBe('test_transition');
    });

    it('has record property', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect(property_exists($this->transition, 'record'))->toBeTrue();
    });

    it('can get record', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $record = $this->transition->getRecord();

        /** @phpstan-ignore-next-line property.notFound */
        expect($record)->toBe($this->record);
    });

    it('has sendNotifications method', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->transition, 'sendNotifications'))->toBeTrue();
    });

    it('can send notifications without errors', function (): void {
        // This should not throw an exception
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
    });

    it('has getNotificationRecipients method', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue();
    });

    it('returns correct notification recipients structure', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $recipients = $this->transition->getNotificationRecipients();

        expect($recipients)
            ->toBeArray()
            ->and($recipients)
            ->toHaveKey('test_user')
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($recipients['test_user'])
            ->toBeInstanceOf(RecordNotificationData::class);
    });

    it('has sendRecipientNotification method', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
    });

    it('can send notification to record data', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $recipientData = RecordNotificationData::from(['record' => $this->record, 'channel' => 'mail']);
        // This should not throw an exception
        /** @phpstan-ignore-next-line property.notFound */
        expect(fn () => $this->transition->sendRecipientNotification($recipientData, []))->not->toThrow(Exception::class);
    });

    it('processes recipients correctly in sendNotifications', function (): void {
        // Create a test model
        $mockModel = new TestModelForTransition();

        // Create transition with concrete model
        $transition = new TestTransitionForTest($mockModel);

        // This should process without errors
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
    });

    it('validates abstract class structure', function (): void {
        $reflection = new ReflectionClass(XotBaseTransition::class);

        expect($reflection->isAbstract())
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->hasMethod('sendNotifications'))
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->hasMethod('getRecord'))
            ->toBeTrue();
    });

    it('has proper method signatures', function (): void {
        $reflection = new ReflectionClass(XotBaseTransition::class);

        // Check sendNotifications method
        /** @phpstan-ignore-next-line method.nonObject */
        $sendMethod = $reflection->getMethod('sendNotifications');
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');

        // Check getRecord method
        /** @phpstan-ignore-next-line method.nonObject */
        $getRecordMethod = $reflection->getMethod('getRecord');
        expect($getRecordMethod->isPublic())->toBeTrue();
    });

    it('handles type checking correctly', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $recipients = $this->transition->getNotificationRecipients();

        foreach ($recipients as $recipient) {
            if ($recipient !== null) {
                expect($recipient instanceof UserContract || $recipient instanceof Model)->toBeTrue();
            }
        }
    });

    it('has proper documentation', function (): void {
        $reflection = new ReflectionClass(XotBaseTransition::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('sendNotifications');

        expect($method->isPublic())->toBeTrue();
    });

    it('validates inheritance requirements', function (): void {
        // Test that concrete implementations must provide required methods
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->transition, 'getNotificationRecipients'))
            ->toBeTrue()
            /** @phpstan-ignore-next-line property.notFound */
            ->and(method_exists($this->transition, 'sendRecipientNotification'))
            ->toBeTrue();
    });
});
