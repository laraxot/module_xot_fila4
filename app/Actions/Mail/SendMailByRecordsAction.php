<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

use Illuminate\Database\Eloquent\Collection;
use Spatie\QueueableAction\QueueableAction;

class SendMailByRecordsAction
{
    use QueueableAction;

    /**
     * Undocumented function.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return bool
     */
    public function execute(Collection $records, string $mail_class)
=======
     */
    public function execute(Collection $records, string $mail_class): bool
>>>>>>> 551c768c4 (.)
=======
     */
    public function execute(Collection $records, string $mail_class): bool
>>>>>>> 414a4ffcb (.)
    {
        foreach ($records as $record) {
            app(SendMailByRecordAction::class)->execute($record, $mail_class);
        }

        return true;
    }
}
