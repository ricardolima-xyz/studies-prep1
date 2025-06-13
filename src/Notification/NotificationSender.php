<?php declare(strict_types=1);

namespace App\Notification;

interface NotificationSender {
    public function send(string $message): void;
}