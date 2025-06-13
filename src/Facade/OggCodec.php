<?php

declare(strict_types=1);

namespace App\Facade;

use App\Facade\Codec;

class OggCodec implements Codec
{
    public function getType(): string
    {
        return 'ogg';
    }
}
