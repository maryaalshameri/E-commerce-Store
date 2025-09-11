<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrderNotification extends Notification
{
    use Queueable;

    public $order;

    /**
     * Create a new notification instance.
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('📦 New Order Received')
                    ->greeting('Hello Admin,')
                    ->line('A new order has been placed by user: ' . $this->order->user->name)
                    ->line('Order ID: ' . $this->order->id)
                    ->action('View Order', url('/admin/orders/' . $this->order->id))
                    ->line('Thank you for using our system!');
    }

    /**
     * Get the array representation of the notification (for database).
     */
    public function toDatabase(object $notifiable): array
    {
        return [
            'order_id'   => $this->order->id,
            'user_name'  => $this->order->user->name,
            'total'      => $this->order->total,
            'created_at' => now(),
        ];
    }
}
