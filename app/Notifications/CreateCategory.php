<?php

namespace App\Notifications;

use App\Models\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreateCategory extends Notification
{
    use Queueable;
    private $category_id;
    private $admin_create ;
    private $category_name ;
    public function __construct($category_id , $admin_create , $category_name)
    {
        $this->category_id = $category_id;
        $this->admin_create = $admin_create;
        $this->category_name = $category_name;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'category_id' => $this->category_id,
            'category_name' => $this->category_name,
            'admin_create' => $this->admin_create,
        ];
    }
}
