<?php

declare(strict_types=1);

namespace App\Facade;

use App\Facade\Codec;
use App\Facade\VideoFile;

class BitrateReader
{
    public static function read(VideoFile $file, Codec $codec): string
    {
        echo "Reading {$codec->getType()} bitrate from {$file->filename}\n";
        return "video-data-stream";
    }

    public static function convert(string $buffer, Codec $codec): string
    {
        echo "Converting buffer to {$codec->getType()} format\n";
        return "converted-{$codec->getType()}-stream";
    }
}
