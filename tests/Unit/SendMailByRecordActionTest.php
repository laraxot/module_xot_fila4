<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;

it('throws if record has no email', function (): void {
    $record = new class extends Model
    {
        // no email attribute
        public function option(string $key): ?string
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;

it('throws if record has no email', function (): void {
    $record = new class extends Model {
        // no email attribute
        public function option(string $key): null|string
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        {
            return null;
        }

        public function myLogs()
        {
<<<<<<< HEAD
<<<<<<< HEAD
            return new class
            {
                public function create(array $data): void {}
=======
=======
>>>>>>> 5a14301c (.)
            return new class {
                public function create(array $data): void
                {
                }
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            };
        }
    };

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 5a14301c (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 3fbbf1f5 (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
=======
<<<<<<< HEAD
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, \Illuminate\Mail\Mailable::class))
>>>>>>> a12f125f4a (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> b93ef594b4 (.)
=======
        public function option(string $key): ?string { return null; }
        public function myLogs() { return new class {
            public function create(array $data): void {}
        };}
    };

    expect(fn () => app(SendMailByRecordAction::class)->execute($record, \Illuminate\Mail\Mailable::class))
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> ca9324a4 (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 5a14301c (.)
        ->toThrow(InvalidArgumentException::class);
});
