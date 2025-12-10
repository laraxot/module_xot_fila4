<?php

declare(strict_types=1);

namespace Modules\Xot\States\Transitions;

use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Datas\RecordNotificationData;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Contracts\UserContract;
use Spatie\ModelStates\Transition;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;

abstract class XotBaseTransition extends Transition
{
    public function __construct(
        public Model $record,
        public null|string $message = '',
        public null|string $message = '',
        public null|string $message = '',
        public null|string $message = '',
        public null|string $message = '',
        public null|string $message = '',
    ) {}
use Filament\Notifications\Notification as FilamentNotification;

abstract class XotBaseTransition extends Transition
{
    public function __construct(public Model $record, public ?string $message = '')
    {
    }

abstract class XotBaseTransition extends Transition
{
    public function __construct(
        public Model $record,
        public null|string $message = '',
    ) {}

    public function handle(): Model
    {
        $this->sendNotifications();
        $class = static::class;

        $stateNamespace = Str::of($class)->beforeLast('\Transitions\\')->toString();
        $stateClassName = Str::of($class)->afterLast('To')->toString();
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;

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
            $this->sendRecipientNotification($recipient, $data);
            
            $this->sendRecipientNotification($recipient,$data);
            
        }
    }

    /**
     * @return  array<string, RecordNotificationData>
     * @return  array<string, RecordNotificationData>
     * @return  array<string, RecordNotificationData>
     * @return  array<string, RecordNotificationData>
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
     * @return array<int, mixed>
     * @return array<int, mixed>
     * @return array<int, mixed>
     * @return array<int, mixed>
     */
    public function getNotificationAttachments(): array
    {
        return [];
    }

    public function getNotificationSlug(UserContract $recipient): string
    {
        $slug =
            class_basename($this->record).
            '-'.
            $type.
            '-'.
        $type = $recipient->type->value;
        $slug =
            class_basename($this->record) .
            '-' .
            $type .
            '-' .
            Str::of(class_basename(static::class))->kebab()->toString();
        $slug = class_basename($this->record).'-'.$type.'-'.Str::of(class_basename(static::class))->kebab()->toString();
        $slug = Str::slug($slug);

        return $slug;
    }

    public function sendRecipientNotification(RecordNotificationData $recipient, array $data): void
    {
        $slug = $this->getNotificationSlug($recipient->record);

        if (! class_exists(RecordNotification::class)) {
            return;
        }

        $notify = new RecordNotification($this->record, $slug);

        $mergeData = $data;

        $notify->mergeData($mergeData);

        $attachments = $this->getNotificationAttachments();

        $notify->addAttachments($attachments);
        $notify = new RecordNotification($this->record, $slug);
    {
        $slug = $this->getNotificationSlug($recipient->record);

        $notify = new RecordNotification(
            $this->record,
            $slug
        );
        $notify = new RecordNotification($this->record, $slug);

        //$data = $this->getNotificationData();
        $notify = $notify->mergeData($data);
        $notify = $notify->addAttachments($this->getNotificationAttachments());


        //$data = $this->getNotificationData();

        // $data = $this->getNotificationData();
        $notify = $notify->mergeData($data);
        $notify = $notify->addAttachments($this->getNotificationAttachments());

        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        

        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
        
        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())
                ->notify($notify);
        } catch (\TypeError|\Webmozart\Assert\InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            FilamentNotification::make()
                ->title('Error')
                ->danger()
                ->body($message)
                ->send();
            
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
