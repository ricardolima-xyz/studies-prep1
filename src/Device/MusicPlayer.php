<?php

declare(strict_types=1);

namespace App\Device;

class MusicPlayer
{
    public function play(): void
    {
        echo "🎵 Music is PLAYING\n";
    }

    public function stop(): void
    {
        echo "🔇 Music is STOPPED\n";
    }
}