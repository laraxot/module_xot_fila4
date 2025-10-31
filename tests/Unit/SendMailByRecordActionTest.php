<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
use Illuminate\Mail\Mailable;
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;

it('throws if record has no email', function (): void {
    $record = new class extends Model
    {
        // no email attribute
<<<<<<< HEAD
        public function option(string $key): ?string
=======
        public function option(string $key): null
>>>>>>> a6ef6dc7 (.)
        {
            return null;
        }

        /** @return object */
        public function myLogs()
        {
            return new class
            {
<<<<<<< HEAD
=======
                /** @param array<string, mixed> $data */
>>>>>>> a6ef6dc7 (.)
                public function create(array $data): void {}
            };
        }
    };

<<<<<<< HEAD
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
=======
<<<<<<< HEAD
    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
=======
    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace Modules\Xot\Tests\Unit\SendMailByRecordActionTest;


    };

    expect(fn () => app(SendMailByRecordAction::class)->execute($record, \Illuminate\Mail\Mailable::class))
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        ->toThrow(InvalidArgumentException::class);
});
