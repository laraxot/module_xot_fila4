<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\Relation;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use InvalidArgumentException;
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
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
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
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
>>>>>>> a6ef6dc7 (.)
     */
    public function execute(Model $record, string $mailClass): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        Assert::classExists($mailClass);
        // Expected an implementation of "Illuminate\Mail\Mailable". Got: "Modules\Performance\Mail\SchedaMail"
        // Assert::implementsInterface($mailClass, Mailable::class);

        // Utilizziamo il container per istanziare la classe Mailable
        // in modo che possa ricevere le dipendenze necessarie
        // @var Mailable $mail
        // $mail = app($mailClass, ['record' => $record]);
<<<<<<< HEAD
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
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
>>>>>>> d2b0a27 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

        // Verifica che il model abbia le proprietà/metodi necessari
        if (($record->email ?? null) === null || empty($record->email)) {
            throw new InvalidArgumentException('Model must have email property');
        }

<<<<<<< HEAD
        if (! method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (! method_exists($record, 'myLogs')) {
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
        if (!method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (!method_exists($record, 'myLogs')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        if (! method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (! method_exists($record, 'myLogs')) {
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                app(PdfByModelAction::class)->execute(
                    model: $record,
                    out: 'path',
                ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                app(PdfByModelAction::class)->execute(model: $record, out: 'path'),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            ],
        ];
        $emailData = EmailData::from($data);
        SmtpData::make()->send($emailData);

<<<<<<< HEAD
<<<<<<< HEAD
        $myLogs = $record->myLogs();
        if (is_object($myLogs) && method_exists($myLogs, 'create')) {
            $myLogs->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
        }
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        $record
            ->myLogs()
            ->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
<<<<<<< HEAD
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
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    }
}
