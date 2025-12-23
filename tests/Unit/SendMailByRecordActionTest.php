<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;
=======
use Modules\Xot\Actions\Mail\SendMailByRecordAction;
use Illuminate\Database\Eloquent\Model;
>>>>>>> origin/develop

it('throws if record has no email', function (): void {
    $record = new class extends Model {
        // no email attribute
<<<<<<< HEAD
        public function option(string $key): null|string
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

    expect(fn() => app(SendMailByRecordAction::class)->execute($record, Mailable::class))
=======
namespace Modules\Xot\Tests\Unit\SendMailByRecordActionTest;
=======
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Mail\SendMailByRecordAction;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

it('throws if record has no email', function (): void {
    $record = new class extends Model {
        // no email attribute
        public function option(string $key): null|string
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
        ->toThrow(InvalidArgumentException::class);
});
