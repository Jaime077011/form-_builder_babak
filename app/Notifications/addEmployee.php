<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard\Employer;

class addEmployee extends Notification
{
    use Queueable;
    public $employer;

    /**
     * Create a new notification instance.
     */
    public function __construct(Employer $employer)
    {
        $this->employer = $employer ;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
   
    /**
     * Get the array representation of the notification.
     *
     *
     */
    public function toDatabase(object $notifiable): array
    {
        return [
          'id'=>auth()->user()->id ,
          'CreatorName'=>auth()->user()->name,
          'usernameNewEmployee'=>$this->employer->en_name,
          'newemployee_id'=>$this->employer->id,
          'action'=>"new employee added"
        ];
    }

    public function toArray(object $notifiable): array
    {
        return [
         
        ];
    }
}
