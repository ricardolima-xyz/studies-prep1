<?php

declare(strict_types=1);

namespace App\Legacy;

class SlackSDK {
    public function postMessage(string $channel, string $message): void {
        echo "[Slack to {$channel}] {$message}\n";
    }
}
