<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\Relation;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
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
=======
>>>>>>> 73eab74 (.)
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {
<<<<<<< HEAD
=======
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        Assert::classExists($mailClass);
        // Expected an implementation of "Illuminate\Mail\Mailable". Got: "Modules\Performance\Mail\SchedaMail"
        // Assert::implementsInterface($mailClass, Mailable::class);

        // Utilizziamo il container per istanziare la classe Mailable
        // in modo che possa ricevere le dipendenze necessarie
        // @var Mailable $mail
        // $mail = app($mailClass, ['record' => $record]);
<<<<<<< HEAD
<<<<<<< HEAD
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> f1d4085 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 73eab74 (.)

        // Verifica che il model abbia le proprietà/metodi necessari
        if (($record->email ?? null) === null || empty($record->email)) {
            throw new InvalidArgumentException('Model must have email property');
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (!method_exists($record, 'myLogs')) {
<<<<<<< HEAD
=======
        if (! method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (! method_exists($record, 'myLogs')) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            throw new InvalidArgumentException('Model must implement myLogs method');
        }

        $data = [
            'to' => $record->email,
            'subject' => $record->option('mail_oggetto'),
            'body_html' => $record->option('mail_testo'),
            'attachments' => [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                app(PdfByModelAction::class)->execute(
                    model: $record,
                    out: 'path',
                ),
<<<<<<< HEAD
=======
                app(PdfByModelAction::class)->execute(model: $record, out: 'path'),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            ],
        ];
        $emailData = EmailData::from($data);
        SmtpData::make()->send($emailData);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $record
            ->myLogs()
            ->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
<<<<<<< HEAD
=======
        // Type assertion: myLogs() deve restituire una relazione che supporta create()
        $logsRelation = $record->myLogs();
        Assert::object($logsRelation, 'myLogs() must return an object');

        if (! method_exists($logsRelation, 'create')) {
            throw new InvalidArgumentException('myLogs() must return a relation that supports create() method');
        }

        /** @var Relation $logsRelation */
        $logsRelation->create([
            'act' => 'sendMail',
            'handle' => authId(),
        ]);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    }
}
