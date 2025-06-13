<?php

declare(strict_types=1);

namespace App\Command;

use App\Device\MusicPlayer;
use App\Command\Command;

class PlayMusicCommand implements Command
{
    private MusicPlayer $musicPlayer;

    public function __construct(MusicPlayer $musicPlayer)
    {
        $this->musicPlayer = $musicPlayer;
    }

    public function execute(): void
    {
        $this->musicPlayer->play();
    }
}