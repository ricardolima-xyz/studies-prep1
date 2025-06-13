<?php

declare(strict_types=1);

namespace App\Facade;

class VideoConversionFacade
{
    public function convertVideo(string $filename, string $format): string
    {
        echo "VideoConversionFacade: Conversion started...\n";

        $file = new VideoFile($filename);
        $sourceCodec = CodecFactory::extract($file);

        // Choose destination codec based on requested format
        $destinationCodec = match ($format) {
            'mp4' => new MPEG4Codec(),
            'ogg' => new OggCodec(),
            default => throw new \InvalidArgumentException("Unsupported format: $format"),
        };

        $buffer = BitrateReader::read($file, $sourceCodec);
        $intermediateResult = BitrateReader::convert($buffer, $destinationCodec);

        $mixer = new AudioMixer();
        $finalResult = $mixer->fix($intermediateResult);

        echo "VideoConversionFacade: Conversion finished!\n";

        return $finalResult;
    }
}