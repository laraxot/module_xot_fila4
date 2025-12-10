<?php

declare(strict_types=1);

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
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Datas\RecordNotificationData;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\States\Transitions\XotBaseTransition;
use Modules\Xot\Tests\Unit\Support\TestModelForTransition;
use Modules\Xot\Tests\Unit\Support\TestTransitionForTest;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
uses(RefreshDatabase::class);
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
describe('XotBaseTransition', function (): void {
    beforeEach(function (): void {
        // Create a test record using concrete class
        /* @phpstan-ignore-next-line property.notFound, new.internalClass */
        $this->record = new TestModelForTransition;
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
>>>>>>> 5cf46378 (.)

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
=======
>>>>>>> 551c768c4 (.)
uses(RefreshDatabase::class);

describe('XotBaseTransition', function () {
    beforeEach(function () {
        // Create a concrete test transition class
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        $this->transition = new class extends XotBaseTransition {
=======
>>>>>>> 551c768c4 (.)
        $this->transition = new class extends XotBaseTransition
        {
            public static string $name = 'test_transition';

            #[Override]
<<<<<<< HEAD


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
        /* @phpstan-ignore-next-line property.notFound, new.internalClass */
        $this->transition = new TestTransitionForTest($this->record);
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======

        // Create a concrete test transition class
        /* @phpstan-ignore-next-line property.notFound, new.internalClass */
        $this->transition = new TestTransitionForTest($this->record);
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 551c768c4 (.)
            public function getNotificationRecipients(): array
            {
                return [
                    'test_user' => $this->record,
                    'null_user' => null,
                ];
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            public function sendRecipientNotification(?UserContract $recipient): void
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            #[Override]
<<<<<<< HEAD
=======
            public function sendRecipientNotification(null|UserContract $recipient): void
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
            
            public function sendRecipientNotification(?UserContract $recipient): void
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
            public function sendRecipientNotification(null|UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
<<<<<<< HEAD
            public function sendRecipientNotification(?UserContract $recipient): void
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
>>>>>>> 88ea7103 (.)
=======
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
            #[Override]
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> 551c768c4 (.)
            {
                // Mock implementation
            }
        };

        // Create a test record
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        $this->record = new class extends Model implements UserContract {
        $this->record = new class extends Model implements UserContract
        {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
        $this->record = new class extends Model implements UserContract {
            protected $table = 'test_users';

            protected $fillable = ['name', 'email'];
=======
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
>>>>>>> ab8cc3f3 (.)

<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)

=======
>>>>>>> ce6fc085 (.)
        $this->record = new class extends Model implements UserContract {
=======
        $this->record = new class extends Model implements UserContract
        {
>>>>>>> 551c768c4 (.)
            protected $table = 'test_users';
            protected $fillable = ['name', 'email'];
<<<<<<< HEAD
            
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======

>>>>>>> 551c768c4 (.)
            // Implement UserContract methods as needed
            public function getAuthIdentifierName(): string
            {
                return 'id';
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
            public function getAuthIdentifier(): mixed
            {
                return $this->id;
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
            public function getAuthPassword(): string
            {
                return '';
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            public function getRememberToken(): ?string
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
<<<<<<< HEAD
            public function getRememberToken(): null|string
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
            public function getRememberToken(): null|string
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            public function getRememberToken(): null|string
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
            public function getRememberToken(): null|string
            public function getRememberToken(): ?string
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            public function getRememberToken(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            public function getRememberToken(): null|string
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
            public function getRememberToken(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
            public function getRememberToken(): ?string
>>>>>>> 551c768c4 (.)
            {
                return null;
            }

            public function setRememberToken($value): void
            {
                // Mock implementation
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
            public function getRememberTokenName(): string
            {
                return 'remember_token';
            }
        };

        $this->transition->record = $this->record;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
    });

    it('can be instantiated', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
        expect($this->transition)->toBeInstanceOf(XotBaseTransition::class);
    });

    it('has static name property', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
        expect($this->transition::$name)->toBe('test_transition');
    });

<<<<<<< HEAD
<<<<<<< HEAD
    it('has record property', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
    it('has record property', function () {
    it('has record property', function () {
    it('has record property', function () {
    it('has record property', function () {
    it('has record property', function () {
=======
<<<<<<< HEAD
=======
>>>>>>> 551c768c4 (.)
    it('has record property', function () {
        $reflection = new ReflectionObject($this->transition);
        expect($reflection->hasProperty('record'))->toBeTrue();
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
    it('has record property', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
=======
>>>>>>> 551c768c4 (.)
    });

    it('can get record', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $record = $this->transition->getRecord();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> 5cf46378 (.)
        expect($record)->toBe($this->record);
    });

    it('has sendNotifications method', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->transition, 'sendNotifications'))->toBeTrue();
    });

    it('can send notifications without errors', function (): void {
        // This should not throw an exception
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.notFound */
        /* @phpstan-ignore-next-line property.notFound */
        /* @phpstan-ignore-next-line property.notFound */
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
=======
=======
>>>>>>> 218dfed3 (.)
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 091f883c (.)
=======
>>>>>>> 5cf46378 (.)
=======
=======
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
        /* @phpstan-ignore-next-line property.notFound */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
        expect(fn () => $this->transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        expect($this->transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    });

    it('has getNotificationRecipients method', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue();
    });

    it('returns correct notification recipients structure', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $recipients = $this->transition->getNotificationRecipients();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
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
        expect($recipients)
            ->toBeArray()
            ->and($recipients)
            ->toHaveKey('test_user')
<<<<<<< HEAD
<<<<<<< HEAD
            /* @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($recipients['test_user'])
            ->toBeInstanceOf(RecordNotificationData::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
            /* @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($recipients['test_user'])
            ->toBeInstanceOf(RecordNotificationData::class);
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
            ->and($recipients)
            ->toHaveKey('null_user')
            ->and($recipients['null_user'])
            ->toBeNull();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
        
>>>>>>> origin/develop
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        expect($recipients)->toBeArray()
            ->and($recipients)->toHaveKey('test_user')
            ->and($recipients)->toHaveKey('null_user')
            ->and($recipients['null_user'])->toBeNull();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
    });

    it('has sendRecipientNotification method', function (): void {
        /* @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
    });

    it('can send notification to record data', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $recipientData = RecordNotificationData::from(['record' => $this->record, 'channel' => 'mail']);
        // This should not throw an exception
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
>>>>>>> 218dfed3 (.)
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
=======
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        /* @phpstan-ignore-next-line property.notFound */
        expect(fn () => $this->transition->sendRecipientNotification($recipientData, []))->not->toThrow(Exception::class);
    });

<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    it('processes recipients correctly in sendNotifications', function (): void {
        // Create a test model
        /* @phpstan-ignore-next-line new.internalClass */
        $mockModel = new TestModelForTransition;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
>>>>>>> 5cf46378 (.)

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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
        /* @phpstan-ignore-next-line property.notFound */
        expect(fn () => $this->transition->sendRecipientNotification($recipientData, []))->not->toThrow(Exception::class);
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
>>>>>>> 2f3197ab (.)
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        expect(fn() => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
                    },
                    'null_user' => null,
                ];
            }

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
<<<<<<< HEAD
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
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 5a14301c (.)
=======
=======
            public function sendRecipientNotification(?UserContract $recipient): void
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
>>>>>>> 88ea7103 (.)
=======
            #[Override]
            public function sendRecipientNotification(null|UserContract $recipient): void
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
            {
                // Mock implementation
            }
        };
=======

        // Create transition with concrete model
        $transition = new TestTransitionForTest($mockModel);
>>>>>>> b7afadf9 (.)

        // This should process without errors
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
<<<<<<< HEAD
=======
        expect(fn () => $this->transition->sendRecipientNotification($this->record))
            ->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
        expect(fn() => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
<<<<<<< HEAD
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
    });

=======
>>>>>>> 551c768c4 (.)
        expect(fn () => $this->transition->sendRecipientNotification($this->record))->not->toThrow(Exception::class);
    });

    it('can send notification to null recipient', function () {
        // This should not throw an exception
        expect(fn () => $this->transition->sendRecipientNotification(null))->not->toThrow(Exception::class);
=======
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
>>>>>>> 7468a7d2 (.)
    });

    it('processes recipients correctly in sendNotifications', function () {
        // Mock recipients with mixed types
<<<<<<< HEAD
        $transition = new class extends XotBaseTransition
        {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $transition = new class extends XotBaseTransition {
>>>>>>> 7468a7d2 (.)
            public static string $name = 'test_mixed_transition';

            #[Override]
            public function getNotificationRecipients(): array
            {
                return [
<<<<<<< HEAD
                    'valid_user' => new class extends Model implements UserContract
                    {
=======
                    'valid_user' => new class extends Model implements UserContract {
>>>>>>> 7468a7d2 (.)
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

<<<<<<< HEAD
                        public function getRememberToken(): ?string
=======
                        public function getRememberToken(): null|string
>>>>>>> 7468a7d2 (.)
                        {
                            return null;
                        }

<<<<<<< HEAD
                        public function setRememberToken($value): void {}
=======
                        public function setRememberToken($value): void
                        {
                        }
>>>>>>> 7468a7d2 (.)

                        public function getRememberTokenName(): string
                        {
                            return 'remember_token';
                        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
                    },
                    'null_user' => null,
                ];
            }

<<<<<<< HEAD
            #[Override]
            public function sendRecipientNotification(?UserContract $recipient): void
            public function sendRecipientNotification(?UserContract $recipient): void
=======
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
>>>>>>> 7468a7d2 (.)
            {
                // Mock implementation
            }
        };

        // This should process without errors
<<<<<<< HEAD
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
<<<<<<< HEAD
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
=======
=======
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        expect(fn () => $transition->sendNotifications())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
        expect($transition->sendNotifications(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    });

    it('validates abstract class structure', function (): void {
        $reflection = new ReflectionClass(XotBaseTransition::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
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
        expect($reflection->isAbstract())
            ->toBeTrue()
            /* @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->hasMethod('sendNotifications'))
            ->toBeTrue()
            /* @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->hasMethod('getRecord'))
            ->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        expect($reflection->isAbstract())->toBeTrue()
            ->and($reflection->hasMethod('sendNotifications'))->toBeTrue()
            ->and($reflection->hasMethod('getRecord'))->toBeTrue();
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
    });

    it('has proper method signatures', function (): void {
        $reflection = new ReflectionClass(XotBaseTransition::class);

<<<<<<< HEAD
        /* @phpstan-ignore-next-line method.notFound, argument.templateType */

        /* @phpstan-ignore-next-line method.notFound, argument.templateType */

        /* @phpstan-ignore-next-line method.notFound, argument.templateType */
=======
        // Check sendNotifications method
        /** @phpstan-ignore-next-line method.nonObject */
        $sendMethod = $reflection->getMethod('sendNotifications');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 5cf46378 (.)
=======
=======
<<<<<<< HEAD

        /* @phpstan-ignore-next-line method.notFound, argument.templateType */
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
=======
<<<<<<< HEAD
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
>>>>>>> d2b0a27 (.)

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======

        /* @phpstan-ignore-next-line method.notFound, argument.templateType */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
=======
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
>>>>>>> d2b0a27 (.)
=======
        expect($sendMethod->isPublic())->toBeTrue()->and($sendMethod->getReturnType()?->getName())->toBe('void');
>>>>>>> 300ef70 (.)

=======
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
>>>>>>> ce6fc085 (.)
        
        // Check sendNotifications method
        $sendMethod = $reflection->getMethod('sendNotifications');
        expect($sendMethod->isPublic())->toBeTrue()
            ->and($sendMethod->getReturnType()?->getName())->toBe('void');
        
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        // Check getRecord method
        /** @phpstan-ignore-next-line method.nonObject */
        $getRecordMethod = $reflection->getMethod('getRecord');
        expect($getRecordMethod->isPublic())->toBeTrue();
    });

    it('handles type checking correctly', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $recipients = $this->transition->getNotificationRecipients();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======
        /* @phpstan-ignore-next-line foreach.nonIterable */
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
        expect($method->isPublic())->toBeTrue();
    });

    it('validates inheritance requirements', function (): void {
        // Test that concrete implementations must provide required methods
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        /* @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        expect(method_exists($this->transition, 'getNotificationRecipients'))
            ->toBeTrue()
            /* @phpstan-ignore-next-line property.notFound */
            ->and(method_exists($this->transition, 'sendRecipientNotification'))
            ->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        expect(method_exists($this->transition, 'getNotificationRecipients'))->toBeTrue()
            ->and(method_exists($this->transition, 'sendRecipientNotification'))->toBeTrue();
>>>>>>> f1d4085 (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    });
});
