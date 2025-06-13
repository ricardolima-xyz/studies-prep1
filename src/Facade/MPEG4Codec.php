<?php

declare(strict_types=1);

namespace App\Facade;

use App\Facade\Codec;

class MPEG4Codec implements Codec
{
    public function getType(): string
    {
        return 'mp4';
    }
}
