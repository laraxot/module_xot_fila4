<?php

declare(strict_types=1);

namespace Modules\Xot\States\Transitions;

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
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
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
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Datas\RecordNotificationData;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Contracts\UserContract;
use Spatie\ModelStates\Transition;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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

abstract class XotBaseTransition extends Transition
{
    public function __construct(
        public Model $record,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $message = '',
=======
        public null|string $message = '',
>>>>>>> 5a14301c (.)
=======
        public null|string $message = '',
>>>>>>> 3fbbf1f5 (.)
=======
        public null|string $message = '',
>>>>>>> 5a14301c (.)
    ) {}

    public function handle(): Model
    {
        $this->sendNotifications();
        $class = static::class;

        $stateNamespace = Str::of($class)->beforeLast('\Transitions\\')->toString();
        $stateClassName = Str::of($class)->afterLast('To')->toString();
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
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
=======
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
>>>>>>> f1d4085 (.)
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
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, RecordNotificationData>
=======
     * @return  array<string, RecordNotificationData>
>>>>>>> 5a14301c (.)
=======
     * @return  array<string, RecordNotificationData>
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * Get notification attachments.
     *
     * @return array<int, array<string, string>>
=======
     * @return array<int, mixed>
>>>>>>> 5a14301c (.)
=======
     * @return array<int, mixed>
>>>>>>> 5a14301c (.)
     */
    public function getNotificationAttachments(): array
    {
        return [];
    }

    public function getNotificationSlug(UserContract $recipient): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $typeEnum = $recipient->type;
        $type = $typeEnum instanceof BackedEnum ? (string) $typeEnum->value : 'unknown';

        $slug =
            class_basename($this->record).
            '-'.
            $type.
            '-'.
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
        $type = $recipient->type->value;
        $slug =
            class_basename($this->record) .
            '-' .
            $type .
            '-' .
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            Str::of(class_basename(static::class))->kebab()->toString();
        $slug = Str::slug($slug);

        return $slug;
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
    public function sendRecipientNotification(RecordNotificationData $recipient, array $data): void
    {
        $slug = $this->getNotificationSlug($recipient->record);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! class_exists(RecordNotification::class)) {
            return;
        }

        $notify = new RecordNotification($this->record, $slug);

        $mergeData = $data;

        $notify->mergeData($mergeData);

        $attachments = $this->getNotificationAttachments();

        $notify->addAttachments($attachments);
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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

        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
=======
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        
        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())
                ->notify($notify);
<<<<<<< HEAD
        } catch (\TypeError|\Webmozart\Assert\InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
