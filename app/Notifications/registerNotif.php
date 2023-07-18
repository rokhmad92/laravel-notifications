<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class registerNotif extends Notification
{
    use Queueable;
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
        // return ['mail'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'name' => $this->user['name'],
            'email' => $this->user['email'],
        ];
    }

    // /**
    //  * Get the mail representation of the notification.
    //  */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    // /**
    //  * Get the array representation of the notification.
    //  *
    //  * @return array<string, mixed>
    //  */
}
