<?php

declare(strict_types=1);

namespace Modules\Xot\States\Transitions;

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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 2f3197ab (.)
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
<<<<<<< HEAD
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use TypeError;
use Webmozart\Assert\InvalidArgumentException;
use Filament\Notifications\Notification as FilamentNotification;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use Filament\Notifications\Notification as FilamentNotification;
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
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
>>>>>>> ce6fc085 (.)

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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
=======
=======
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 218dfed3 (.)
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
=======
        $newStateClass = $stateNamespace.'\\'.$stateClassName;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $newStateClass = $stateNamespace . '\\' . $stateClassName;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
            $this->sendRecipientNotification($recipient,$data);
            
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $this->sendRecipientNotification($recipient, $data);
>>>>>>> ce6fc085 (.)
=======
            
            $this->sendRecipientNotification($recipient,$data);
            
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            $this->sendRecipientNotification($recipient, $data);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
            $this->sendRecipientNotification($recipient, $data);
>>>>>>> b93ef594b4 (.)
=======
            
            $this->sendRecipientNotification($recipient,$data);
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $slug = class_basename($this->record).'-'.$type.'-'.Str::of(class_basename(static::class))->kebab()->toString();
=======
=======
        $slug = class_basename($this->record).'-'.$type.'-'.Str::of(class_basename(static::class))->kebab()->toString();
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
        $slug = class_basename($this->record).'-'.$type.'-'.Str::of(class_basename(static::class))->kebab()->toString();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
        $slug = Str::slug($slug);

        return $slug;
    }

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
>>>>>>> ce6fc085 (.)
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


        //$data = $this->getNotificationData();

        // $data = $this->getNotificationData();
        $notify = $notify->mergeData($data);
        $notify = $notify->addAttachments($this->getNotificationAttachments());
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
>>>>>>> ce6fc085 (.)

        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        

        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())->notify($notify);
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
<<<<<<< HEAD
<<<<<<< HEAD
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
            $message = 'channel :['.$recipient->getChannel().'] error: ['.$e->getMessage().']';
=======
<<<<<<< HEAD
=======
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
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
>>>>>>> 21348520 (.)
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
>>>>>>> 218dfed3 (.)
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        
        try {
            Notification::route($recipient->getChannel(), $recipient->getRoute())
                ->notify($notify);
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        } catch (\TypeError|\Webmozart\Assert\InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
=======
=======
>>>>>>> 17684f52 (.)
        } catch (\TypeError|\Webmozart\Assert\InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
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
>>>>>>> ce6fc085 (.)
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
<<<<<<< HEAD
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
>>>>>>> 218dfed3 (.)
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
            $message = 'channel :[' . $recipient->getChannel() . '] error: [' . $e->getMessage() . ']';
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
<<<<<<< HEAD
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
        } catch (TypeError|InvalidArgumentException $e) {
            $message = 'channel :['.$recipient->getChannel() .'] error: ['.$e->getMessage().']';
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
>>>>>>> ce6fc085 (.)
            FilamentNotification::make()
                ->title('Error')
                ->danger()
                ->body($message)
                ->send();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
            
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
>>>>>>> ce6fc085 (.)
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
