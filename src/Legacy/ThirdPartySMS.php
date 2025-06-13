<?php
declare(strict_types=1);
namespace App\Legacy;

class ThirdPartySMS {
    public function sendText(string $text): void {
        echo "Sending SMS: $text\n";
    }
}