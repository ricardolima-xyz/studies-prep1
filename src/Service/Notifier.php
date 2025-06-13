<?php
namespace App\Service;

use App\Notification\NotificationSender;

class Notifier
{
    private NotificationSender $sender;

    public function __construct(NotificationSender $sender)
    {
        $this->sender = $sender;
    }

    public function alert(string $message): void
    {
        $this->sender->send($message);
    }
}
