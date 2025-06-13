<?php
declare(strict_types=1);
namespace App\Adapter;

use App\Legacy\SlackSDK;
use App\Notification\NotificationSender;


class SlackAdapter implements NotificationSender {
    private SlackSDK $slackService;

    public function __construct(SlackSDK $slackService) {
        $this->slackService = $slackService;
    }

    public function send(string $message): void {
        // Assuming a default channel for simplicity
        $this->slackService->postMessage('#general', $message);
    }
}