<?php

declare(strict_types=1);

namespace App\Facade;

use App\Facade\Codec;
use App\Facade\MPEG4Codec;
use App\Facade\VideoFile;

class CodecFactory
{
    public static function extract(VideoFile $file): Codec
    {
        echo "Extracting codec from {$file->filename}\n";
        return new MPEG4Codec(); // pretend we detect MP4
    }
}
