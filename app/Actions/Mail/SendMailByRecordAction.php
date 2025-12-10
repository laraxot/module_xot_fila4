<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use InvalidArgumentException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
<<<<<<< HEAD
=======
use InvalidArgumentException;
=======
>>>>>>> 3fbbf1f5 (.)
=======
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
=======
use InvalidArgumentException;
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
=======
use InvalidArgumentException;
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\Relation;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use InvalidArgumentException;
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use InvalidArgumentException;
=======
>>>>>>> 414a4ffcb (.)
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
=======
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
     */
    public function execute(Model $record, string $mailClass): void
    {
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
=======
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
>>>>>>> 551c768c4 (.)
     */
    public function execute(Model $record, string $mailClass): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {
     * @param Model  $record    Il record da utilizzare come dati per la mail
     * @param string $mailClass La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {
        
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
     * @param  Model  $record  Il record da utilizzare come dati per la mail
     * @param  string  $mailClass  La classe Mailable da utilizzare
     */
    public function execute(Model $record, string $mailClass): void
    {

<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
     */
    public function execute(Model $record, string $mailClass): void
    {
>>>>>>> 414a4ffcb (.)
        Assert::classExists($mailClass);
        // Expected an implementation of "Illuminate\Mail\Mailable". Got: "Modules\Performance\Mail\SchedaMail"
        // Assert::implementsInterface($mailClass, Mailable::class);

        // Utilizziamo il container per istanziare la classe Mailable
        // in modo che possa ricevere le dipendenze necessarie
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        // @var Mailable $mail
        // $mail = app($mailClass, ['record' => $record]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
<<<<<<< HEAD
<<<<<<< HEAD
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
        // @var Mailable $mail
        // $mail = app($mailClass, ['record' => $record]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 7131bd09 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> ed734516 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> 2f3197ab (.)
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
<<<<<<< HEAD
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 17684f52 (.)
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
<<<<<<< HEAD
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        //Mail::send($mail);
        //dddx(Mail::to($record)->send(new $mailClass($record)));
        //$res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 551c768c4 (.)
=======
        // @var Mailable $mail
        // $mail = app($mailClass, ['record' => $record]);
        // Mail::send($mail);
        // dddx(Mail::to($record)->send(new $mailClass($record)));
        // $res=Mail::to('marco.sottana@gmail.com')->send($mail);
>>>>>>> 414a4ffcb (.)

        // Verifica che il model abbia le proprietà/metodi necessari
        if (($record->email ?? null) === null || empty($record->email)) {
            throw new InvalidArgumentException('Model must have email property');
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (!method_exists($record, 'myLogs')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
=======
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        if (! method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (! method_exists($record, 'myLogs')) {
<<<<<<< HEAD
=======
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
=======
>>>>>>> 551c768c4 (.)
        if (! method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (! method_exists($record, 'myLogs')) {
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($record, 'option')) {
            throw new InvalidArgumentException('Model must implement option method');
        }

        if (!method_exists($record, 'myLogs')) {
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                app(PdfByModelAction::class)->execute(
                    model: $record,
                    out: 'path',
                ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                app(PdfByModelAction::class)->execute(model: $record, out: 'path')
=======
=======
                app(PdfByModelAction::class)->execute(model: $record, out: 'path'),
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
                app(PdfByModelAction::class)->execute(model: $record, out: 'path'),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
            ],
        );
        SmtpData::make()->send($emailData);

        // myLogs è sempre disponibile su BaseModel
        /** @phpstan-ignore-next-line - Dynamic relationship method */
        $record->myLogs()->create([
            'act' => 'sendMail',
            'handle' => authId(),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
        ];
        $emailData = EmailData::from($data);
        SmtpData::make()->send($emailData);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======

<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        $record
            ->myLogs()
            ->create([
=======
<<<<<<< HEAD
        $myLogs = $record->myLogs();
        if (is_object($myLogs) && method_exists($myLogs, 'create')) {
            $myLogs->create([
>>>>>>> ab8cc3f3 (.)
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
        $record
            ->myLogs()
            ->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
        // Type assertion: myLogs() deve restituire una relazione che supporta create()
        $logsRelation = $record->myLogs();
        Assert::object($logsRelation, 'myLogs() must return an object');

        if (! method_exists($logsRelation, 'create')) {
            throw new InvalidArgumentException('myLogs() must return a relation that supports create() method');
        }
        $myLogs = $record->myLogs();
        if (is_object($myLogs) && method_exists($myLogs, 'create')) {
            $myLogs->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
        }
=======

<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        $record
            ->myLogs()
            ->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
        // Type assertion: myLogs() deve restituire una relazione che supporta create()
        $logsRelation = $record->myLogs();
        Assert::object($logsRelation, 'myLogs() must return an object');

        if (! method_exists($logsRelation, 'create')) {
            throw new InvalidArgumentException('myLogs() must return a relation that supports create() method');
        }
<<<<<<< HEAD
=======
=======
        $myLogs = $record->myLogs();
        if (is_object($myLogs) && method_exists($myLogs, 'create')) {
            $myLogs->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
        }
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $record
            ->myLogs()
            ->create([
                'act' => 'sendMail',
                'handle' => authId(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        // Type assertion: myLogs() deve restituire una relazione che supporta create()
        $logsRelation = $record->myLogs();
        Assert::object($logsRelation, 'myLogs() must return an object');

        if (! method_exists($logsRelation, 'create')) {
            throw new InvalidArgumentException('myLogs() must return a relation that supports create() method');
        }
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)

        /** @var Relation $logsRelation */
        $logsRelation->create([
            'act' => 'sendMail',
            'handle' => authId(),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 2f3197ab (.)
        
        $record->myLogs()->create([
            'act' => 'sendMail',
            'handle' => authId(),
        ]);
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    }
}
