<?php

declare(strict_types=1);

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
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;

it('throws if record has no email', function (): void {
    $record = new class extends Model {
        // no email attribute
        public function option(string $key): null|string
>>>>>>> 5a14301c (.)
        {
            return null;
        }

        public function myLogs()
        {
<<<<<<< HEAD
            return new class
            {
                public function create(array $data): void {}
=======
            return new class {
                public function create(array $data): void
                {
                }
>>>>>>> 5a14301c (.)
            };
        }
    };

<<<<<<< HEAD
<<<<<<< HEAD
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 5a14301c (.)
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
>>>>>>> 3fbbf1f5 (.)
        ->toThrow(InvalidArgumentException::class);
});
