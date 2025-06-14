<?php declare(strict_types=1);
namespace App\Adapter\Notification;

class EmailSender implements NotificationSender {
    public function send(string $message): void {
        echo "Sending email: $message\n";
    }
}