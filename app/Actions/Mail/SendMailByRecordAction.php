<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
<<<<<<< HEAD
=======
use InvalidArgumentException;
=======
>>>>>>> 3fbbf1f5 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
>>>>>>> 5a14301c (.)
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Modules\Xot\Actions\Export\PdfByModelAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class SendMailByRecordAction
{
    use QueueableAction;

    /**
     * Invia una mail utilizzando un record come dati.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
=======
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
>>>>>>> 5a14301c (.)
=======
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
>>>>>>> 3fbbf1f5 (.)
     */
    public function execute(Model $record, string $mailClass): void
    {
        Assert::classExists($mailClass);
        // Expected an implementation of "Illuminate\Mail\Mailable". Got: "Modules\Performance\Mail\SchedaMail"
        // Assert::implementsInterface($mailClass, Mailable::class);

        // Utilizziamo il container per istanziare la classe Mailable
        // in modo che possa ricevere le dipendenze necessarie
        // @var Mailable $mail
        // $mail = app($mailClass, ['record' => $record]);
<<<<<<< HEAD
<<<<<<< HEAD
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 5a14301c (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 3fbbf1f5 (.)

        // Verifica che il model abbia le proprietà/metodi necessari
        if (($record->email ?? null) === null || empty($record->email)) {
            throw new InvalidArgumentException('Model must have email property');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (! method_exists($record, 'myLogs')) {
            throw new InvalidArgumentException('Model must implement myLogs method');
        }

        $to = $record->email;
        $subject = $record->option('mail_oggetto');
        $bodyHtml = $record->option('mail_testo');

        if (! is_string($to)) {
            throw new InvalidArgumentException('Email must be a string');
        }
        if (! is_string($subject)) {
            $subject = '';
        }
        if (! is_string($bodyHtml)) {
            $bodyHtml = '';
        }

        $emailData = new EmailData(
            to: $to,
            subject: $subject,
            body_html: $bodyHtml,
            attachments: [
=======
=======
>>>>>>> 3fbbf1f5 (.)
        if (!method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (!method_exists($record, 'myLogs')) {
            throw new InvalidArgumentException('Model must implement myLogs method');
        }

        $data = [
            'to' => $record->email,
            'subject' => $record->option('mail_oggetto'),
            'body_html' => $record->option('mail_testo'),
            'attachments' => [
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
                app(PdfByModelAction::class)->execute(
                    model: $record,
                    out: 'path',
                ),
            ],
<<<<<<< HEAD
        );
        SmtpData::make()->send($emailData);

        // myLogs è sempre disponibile su BaseModel
        /** @phpstan-ignore-next-line - Dynamic relationship method */
        $record->myLogs()->create([
            'act' => 'sendMail',
            'handle' => authId(),
        ]);
=======
        ];
        $emailData = EmailData::from($data);
        SmtpData::make()->send($emailData);

        $record
            ->myLogs()
            ->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
    }
}
