<?php

declare(strict_types=1);

namespace App\Facade;

class VideoFile
{
    public string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }
}
