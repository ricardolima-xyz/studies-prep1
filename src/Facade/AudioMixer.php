<?php

declare(strict_types=1);

namespace App\Facade;

class AudioMixer
{
    public function fix(string $result): string
    {
        echo "Fixing audio...\n";
        return "final-audio-video-file";
    }
}
