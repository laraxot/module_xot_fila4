<?php

declare(strict_types=1);

namespace Modules\Xot\States\Transitions;

<<<<<<< HEAD
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use Filament\Notifications\Notification as FilamentNotification;
=======
<<<<<<< HEAD
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Notifications\Notification as FilamentNotification;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Datas\RecordNotificationData;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Contracts\UserContract;
use Spatie\ModelStates\Transition;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

abstract class XotBaseTransition extends Transition
{
    public function __construct(
        public Model $record,
        public null|string $message = '',
    ) {}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Filament\Notifications\Notification as FilamentNotification;

abstract class XotBaseTransition extends Transition
{
    public function __construct(public Model $record, public ?string $message = '')
    {
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

abstract class XotBaseTransition extends Transition
{
    public function __construct(
        public Model $record,
        public null|string $message = '',
    ) {}
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    public function handle(): Model
    {
        $this->sendNotifications();
        $class = static::class;

        $stateNamespace = Str::of($class)->beforeLast('\Transitions\\')->toString();
        $stateClassName = Str::of($class)->afterLast('To')->toString();
<<<<<<< HEAD
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
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
            $this->sendRecipientNotification($recipient, $data);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $this->sendRecipientNotification($recipient, $data);
=======
            
            $this->sendRecipientNotification($recipient,$data);
            
>>>>>>> a12f125f4a (.)
=======
            $this->sendRecipientNotification($recipient, $data);
>>>>>>> b93ef594b4 (.)
=======
            
            $this->sendRecipientNotification($recipient,$data);
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
    }

    /**
     * @return  array<string, RecordNotificationData>
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
     * @return array<int, mixed>
     */
    public function getNotificationAttachments(): array
    {
        return [];
    }

    public function getNotificationSlug(UserContract $recipient): string
    {
        $type = $recipient->type->value;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $slug =
            class_basename($this->record) .
            '-' .
            $type .
            '-' .
            Str::of(class_basename(static::class))->kebab()->toString();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $slug = class_basename($this->record).'-'.$type.'-'.Str::of(class_basename(static::class))->kebab()->toString();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $slug = class_basename($this->record).'-'.$type.'-'.Str::of(class_basename(static::class))->kebab()->toString();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $slug = Str::slug($slug);

        return $slug;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function sendRecipientNotification(RecordNotificationData $recipient, array $data): void
    {
        $slug = $this->getNotificationSlug($recipient->record);

        $notify = new RecordNotification($this->record, $slug);
<<<<<<< HEAD
=======
=======
    public function sendRecipientNotification(RecordNotificationData $recipient,array $data): void
=======
    public function sendRecipientNotification(RecordNotificationData $recipient, array $data): void
>>>>>>> b93ef594b4 (.)
    {
        $slug = $this->getNotificationSlug($recipient->record);

<<<<<<< HEAD
=======
    public function sendRecipientNotification(RecordNotificationData $recipient,array $data): void
    {
       

        $slug = $this->getNotificationSlug($recipient->record);

>>>>>>> origin/develop
        $notify = new RecordNotification(
            $this->record,
            $slug
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $notify = new RecordNotification($this->record, $slug);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        //$data = $this->getNotificationData();
        $notify = $notify->mergeData($data);
        $notify = $notify->addAttachments($this->getNotificationAttachments());
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
<<<<<<< HEAD
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
        
        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())
                ->notify($notify);
        } catch (\TypeError|\Webmozart\Assert\InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            FilamentNotification::make()
                ->title('Error')
                ->danger()
                ->body($message)
                ->send();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
