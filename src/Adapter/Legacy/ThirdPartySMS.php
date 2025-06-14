<?php
declare(strict_types=1);
namespace App\Adapter\Legacy;

class ThirdPartySMS {
    public function sendText(string $text): void {
        echo "Sending SMS: $text\n";
    }
}