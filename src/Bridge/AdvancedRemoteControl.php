<?php

namespace App\Bridge;

class AdvancedRemoteControl extends RemoteControl
{
    public function mute(): void
    {
        $this->device->setVolume(0);
    }
}
