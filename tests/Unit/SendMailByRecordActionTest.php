<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;

it('throws if record has no email', function (): void {
    $record = new class extends Model
    {
        // no email attribute
<<<<<<< HEAD
        /** @return string|null */
        public function option(string $key)
=======
        public function option(string $key): null
>>>>>>> c07dd86 (.)
        {
            return null;
        }

        /** @return object */
        public function myLogs()
        {
            return new class
            {
                /** @param array<string, mixed> $data */
                public function create(array $data): void {}
            };
        }
    };

    expect(fn () => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
        ->toThrow(InvalidArgumentException::class);
});
