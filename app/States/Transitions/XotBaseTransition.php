<?php

declare(strict_types=1);

namespace Modules\Xot\States\Transitions;

<<<<<<< HEAD
use BackedEnum;
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
use BackedEnum;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
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
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
use Filament\Notifications\Notification as FilamentNotification;
=======
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Notifications\Notification as FilamentNotification;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
>>>>>>> a6ef6dc7 (.)
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Datas\RecordNotificationData;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Contracts\UserContract;
use Spatie\ModelStates\Transition;
<<<<<<< HEAD
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
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
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

abstract class XotBaseTransition extends Transition
{
    public function __construct(
        public Model $record,
        public ?string $message = '',
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Notifications\Notification as FilamentNotification;

abstract class XotBaseTransition extends Transition
{
    public function __construct(public Model $record, public ?string $message = '')
    {
    }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

    public function handle(): Model
    {
        $this->sendNotifications();
        $class = static::class;

        $stateNamespace = Str::of($class)->beforeLast('\Transitions\\')->toString();
        $stateClassName = Str::of($class)->afterLast('To')->toString();
<<<<<<< HEAD
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
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
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 5a14301c (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 3fbbf1f5 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 399f46d3 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
=======
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
>>>>>>> a12f125f4a (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> b93ef594b4 (.)
=======
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> ca9324a4 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
=======
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> ca9324a4 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
=======
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        /* @phpstan-ignore-next-line */
        $this->record->state = new $newStateClass($this->record);
        $this->record->save();

        return $this->record;
    }

    public function sendNotifications(): void
    {
        $data = $this->getNotificationData();
        $recipients = $this->getNotificationRecipients();
        foreach ($recipients as $recipient) {
<<<<<<< HEAD
<<<<<<< HEAD
            $this->sendRecipientNotification($recipient, $data);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $this->sendRecipientNotification($recipient, $data);
=======
            
            $this->sendRecipientNotification($recipient,$data);
            
>>>>>>> f1d4085 (.)
=======
            $this->sendRecipientNotification($recipient, $data);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $this->sendRecipientNotification($recipient, $data);
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        }
    }

    /**
     * @return array<string, RecordNotificationData>
     */
    public function getNotificationRecipients(): array
    {
        return [
            // 'me' => $this->record,
            'me_mail' => RecordNotificationData::from(['record' => $this->record, 'channel' => 'mail']),
            // 'patient' => $this->record->patient,
            // 'doctor' => $this->record->doctor,
            // 'patient_mail' => RecordNotificationData::from(['record' => $record->patient, 'channel' => 'mail']),
            // 'doctor_mail' => RecordNotificationData::from(['record' => $record->doctor, 'channel' => 'mail']),
        ];
    }

    /**
     * Get notification attachments.
     *
     * @return array<int, array<string, string>>
     */
    public function getNotificationAttachments(): array
    {
        return [];
    }

    public function getNotificationSlug(UserContract $recipient): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        $typeEnum = $recipient->type;
        $type = $typeEnum instanceof BackedEnum ? (string) $typeEnum->value : 'unknown';

=======
        $type = $recipient->type->value;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        $slug =
            class_basename($this->record).
            '-'.
            $type.
            '-'.
            Str::of(class_basename(static::class))->kebab()->toString();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $slug = class_basename($this->record).'-'.$type.'-'.Str::of(class_basename(static::class))->kebab()->toString();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        $slug = Str::slug($slug);

        return $slug;
    }

<<<<<<< HEAD
    /**
     * @param  array<string, mixed>  $data
     */
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
    /**
     * @param  array<string, mixed>  $data
     */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    public function sendRecipientNotification(RecordNotificationData $recipient, array $data): void
    {
        $slug = $this->getNotificationSlug($recipient->record);

        if (! class_exists(RecordNotification::class)) {
            return;
        }

        // RecordNotification resolves MailTemplate internally from slug (lazy resolution)
        // No need to pre-load MailTemplate - pass slug directly
        $notify = new RecordNotification($this->record, $slug);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)

>>>>>>> 48515e368 (.)
        $mergeData = $data;

        $notify->mergeData($mergeData);

        $attachments = $this->getNotificationAttachments();

        $notify->addAttachments($attachments);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
        $notify = new RecordNotification($this->record, $slug);

        //$data = $this->getNotificationData();
        $notify = $notify->mergeData($data);
        $notify = $notify->addAttachments($this->getNotificationAttachments());
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
=======
    public function sendRecipientNotification(RecordNotificationData $recipient,array $data): void
    {
       

        $slug = $this->getNotificationSlug($recipient->record);

        $notify = new RecordNotification(
            $this->record,
            $slug
        );
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

<<<<<<< HEAD
        //$data = $this->getNotificationData();
=======
        // $data = $this->getNotificationData();
>>>>>>> b7afadf9 (.)
        $notify = $notify->mergeData($data);
        $notify = $notify->addAttachments($this->getNotificationAttachments());
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
<<<<<<< HEAD
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
=======
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
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
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
<<<<<<< HEAD
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
>>>>>>> a12f125f4a (.)
=======
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
=======
<<<<<<< HEAD
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
=======
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        
        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())
                ->notify($notify);
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
        } catch (\TypeError|\Webmozart\Assert\InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
>>>>>>> 5a14301c (.)
=======
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
>>>>>>> f1d4085 (.)
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
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
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
=======
>>>>>>> b7afadf9 (.)
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            FilamentNotification::make()
                ->title('Error')
                ->danger()
                ->body($message)
                ->send();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        }
    }

    /**
     * @return array<string, mixed>
     */
    public function getNotificationData(): array
    {
        return [
            'message' => $this->message,
            // 'appointment_date' => $this->appointment->starts_at?->format('d/m/Y H:i') ?? 'N/A',
            // 'patient_name' => $this->appointment->patient->name ?? 'N/A',
            // 'doctor_name' => $this->appointment->doctor->name ?? 'N/A',
        ];
    }
}
