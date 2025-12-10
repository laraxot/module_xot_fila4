<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailable;
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;

it('throws if record has no email', function (): void {
    $record = new class extends Model
    {
        // no email attribute
        public function option(string $key): ?string
<<<<<<< HEAD
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
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
>>>>>>> 5a14301c (.)
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
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;

it('throws if record has no email', function (): void {
    $record = new class extends Model {
        // no email attribute
        {
            return null;
        }

        public function myLogs()
        {
            return new class {
                public function create(array $data): void
                {
                }
            };
        }
    };

<<<<<<< HEAD
<<<<<<< HEAD

it('throws if record has no email', function (): void {
    $record = new class extends Model {
        // no email attribute
        public function option(string $key): null|string
        public function option(string $key): null
        public function option(string $key): null
        {
            return null;
        }

        /** @return object */
        /** @return object */
        public function myLogs()
        {
        public function myLogs()
        {
            return new class {
                public function create(array $data): void
                {
                }
            };
        }
    };

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
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 091f883c (.)
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
>>>>>>> ce6fc085 (.)
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, \Illuminate\Mail\Mailable::class))
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
        public function option(string $key): ?string { return null; }
        public function myLogs() { return new class {
            public function create(array $data): void {}
        };}
    };

    expect(fn () => app(SendMailByRecordAction::class)->execute($record, \Illuminate\Mail\Mailable::class))
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
>>>>>>> ce6fc085 (.)
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
<<<<<<< HEAD
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
namespace Modules\Xot\Tests\Unit\SendMailByRecordActionTest;


    };

    expect(fn () => app(SendMailByRecordAction::class)->execute($record, \Illuminate\Mail\Mailable::class))
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
<<<<<<< HEAD
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
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
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 9db27d12 (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 5a14301c (.)
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
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
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
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        ->toThrow(InvalidArgumentException::class);
});
