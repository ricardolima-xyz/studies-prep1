<?php declare(strict_types=1);
namespace App\Adapter;

use App\Notification\NotificationSender;
use App\Legacy\ThirdPartySMS;

class SMSAdapter implements NotificationSender {
    private ThirdPartySMS $smsService;

    public function __construct(ThirdPartySMS $smsService) {
        $this->smsService = $smsService;
    }

    public function send(string $message): void {
        $this->smsService->sendText($message);
    }
}
