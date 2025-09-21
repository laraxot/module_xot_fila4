<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

<<<<<<< HEAD
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\Relation;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Modules\Xot\Actions\Export\PdfByModelAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use Webmozart\Assert\Assert;
use Illuminate\Mail\Mailable;
use Modules\Notify\Datas\SmtpData;
use Modules\Notify\Datas\EmailData;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Export\PdfByModelAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

class SendMailByRecordAction
{
    use QueueableAction;

    /**
     * Invia una mail utilizzando un record come dati.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {

>>>>>>> a12f125f4a (.)
=======
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        Assert::classExists($mailClass);
        // Expected an implementation of "Illuminate\Mail\Mailable". Got: "Modules\Performance\Mail\SchedaMail"
        // Assert::implementsInterface($mailClass, Mailable::class);

        // Utilizziamo il container per istanziare la classe Mailable
        // in modo che possa ricevere le dipendenze necessarie
<<<<<<< HEAD
        // @var Mailable $mail
        // $mail = app($mailClass, ['record' => $record]);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

        // Verifica che il model abbia le proprietà/metodi necessari
        if (($record->email ?? null) === null || empty($record->email)) {
            throw new InvalidArgumentException('Model must have email property');
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        if (!method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (!method_exists($record, 'myLogs')) {
<<<<<<< HEAD
=======
=======
        if (! method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (! method_exists($record, 'myLogs')) {
>>>>>>> a12f125f4a (.)
=======
        if (!method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (!method_exists($record, 'myLogs')) {
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            throw new InvalidArgumentException('Model must implement myLogs method');
        }

        $data = [
<<<<<<< HEAD
=======
=======
        // @var Mailable $mail 
        // $mail = app($mailClass, ['record' => $record]);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        
        // Verifica che il model abbia le proprietà/metodi necessari
        if (($record->email ?? null) === null || empty($record->email)) {
            throw new \InvalidArgumentException('Model must have email property');
        }
        
        if (!method_exists($record, 'option')) {
            throw new \InvalidArgumentException('Model must implement option method');
        }
        
        if (!method_exists($record, 'myLogs')) {
            throw new \InvalidArgumentException('Model must implement myLogs method');
        }
        
         $data = [
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            'to' => $record->email,
            'subject' => $record->option('mail_oggetto'),
            'body_html' => $record->option('mail_testo'),
            'attachments' => [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                app(PdfByModelAction::class)->execute(
                    model: $record,
                    out: 'path',
                ),
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                app(PdfByModelAction::class)->execute(model: $record, out: 'path'),
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                app(PdfByModelAction::class)->execute(model: $record, out: 'path')
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            ],
        ];
        $emailData = EmailData::from($data);
        SmtpData::make()->send($emailData);
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $record
            ->myLogs()
            ->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
<<<<<<< HEAD
=======
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        $record->myLogs()->create([
            'act' => 'sendMail',
            'handle' => authId(),
        ]);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
